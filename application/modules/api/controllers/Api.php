<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Api extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Api_model');
    }
	
	function _remap($method = null, $args = array()){
		if(method_exists($this, $method)){
			if(!empty($args)) $this->$method($args);
			else $this->$method();
		}else{
			if(!empty($method)){
				if(!empty($args)) $this->index(array_merge(array($method), $args));
				else $this->index(array($method));
			}else
				$this->index();
		}
    }
	
	public function index($args = null){
		$response 	= array("status" => "error");
		$username 	= isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : "";
		$password 	= isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : "";
		$start_call = date('Y-m-d H:i:s');
		$ip_forward = "";
		if(array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
			if(count(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])) == 1)
				$ip_forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
			if(count(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])) > 1)
				$ip_forward = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
		}
		$ip = $_SERVER['REMOTE_ADDR'];
		header('Content-type: application/json; charset=utf-8');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: *');
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Allow-Headers: authorization, Content-Type, X-Custom-Header');
		$data_login = $this->Api_model->loginApi($username, $password);
		if($data_login->num_rows() == 0){
			$response["message"] = "username or password invalid.";
			echo json_encode($response);
			return;
		}
		$id_web_user = $data_login->row()->id_web_user; 
		$trans_name = '';
		switch($args[0]){
			case 'login':
				$trans_name = 'login';
				$response = array('success' => 'ok', 'data' => $data_login->row());
				break;
			case 'post':
				$trans_name = 'post';
				$response = array('success' => 'ok', 'message' => 'Post Berhasil');
				break;
			default:
				$response["message"] = "api method is not valid.";
		}
		
		$func_name = ($args[0] ?? "");
		$result = $this->log_api($start_call, $func_name, $trans_name, $ip, $ip_forward, $_POST, $response);
		if(!empty($result))
			$response["errors"][] = $result;
		echo json_encode($response);
		return;
	}
	
	public function register(){
		$body 				= json_decode(file_get_contents('php://input'), true);
		$username_web_user 	= addslashes(trim($body["username"]));
		$fullname_web_user 	= addslashes(trim($body["fullname"]));
		$phone_web_user 	= addslashes(trim($body["creeds"]));
		$email_web_user 	= addslashes(trim($body["creeds"]));
		$password_web_user 	= addslashes(trim($body["password"]));
		$response 			= array("status" => "error");
		$start_call 		= date('Y-m-d H:i:s');
		$ip_forward 		= "";
		if(array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
			if(count(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])) == 1)
				$ip_forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
			if(count(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])) > 1)
				$ip_forward = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
		}
		$ip = $_SERVER['REMOTE_ADDR'];
		header('Content-type: application/json; charset=utf-8');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: *');
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Allow-Headers: authorization, Content-Type, X-Custom-Header');
		
		if($this->Api_model->getRowUser(compact('username_web_user'))->num_rows() > 0){
			$response["message"] = "Maaf username sudah ada";
			echo json_encode($response);
			return;
		}
		if($this->Api_model->getRowUser(compact('phone_web_user'))->num_rows() > 0){
			$response["message"] = "Maaf phone number sudah ada";
			echo json_encode($response);
			return;
		}
		if($this->Api_model->getRowUser(compact('email_web_user'))->num_rows() > 0){
			$response["message"] = "Maaf email sudah ada";
			echo json_encode($response);
			return;
		}
		if(strlen($password_web_user) < 8){
			$response["message"] = "Maaf Password minimal 8 karakter";
			echo json_encode($response);
			return;
		}
		$password_web_user = md5($password_web_user);
		$data = compact('username_web_user','fullname_web_user','phone_web_user','email_web_user','password_web_user');
		if(!$this->Api_model->addUser($data)){
			$response["message"] = "Error insert user";
			echo json_encode($response);
			return;
		}
		$response['status'] = 'ok';
		$result = $this->log_api($start_call, 'register', 'register', $ip, $ip_forward, $body, $response);
		if(!empty($result))
			$response["errors"][] = $result;
		echo json_encode($response);
		return;
	}
	
	public function post(){
		$body 			= json_decode(file_get_contents('php://input'), true);
		$id_web_user	= (int) addslashes($body['id_web_user']);
		$response 		= array("status" => "error");
		header('Content-type: application/json; charset=utf-8');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: *');
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Allow-Headers: authorization, Content-Type, X-Custom-Header');
		$data_post = $this->Api_model->getPosts($id_web_user);
		if($data_post->num_rows() > 0){
			$result = array();
			foreach($data_post->result_array() as &$data){
				$comments = $this->Api_model->getComments($data["id_web_post"]);
				$data["comments"] = ($comments->num_rows() > 0 ? $comments->result() : []);
				$result[] = $data;
			}
			$response["status"] = 'ok';
			$response["data"] = $result;
		}
		else
			$response["data"] = array();
		echo json_encode($response);
		return;
	}
	
	public function add_comment(){
		$body 			= json_decode(file_get_contents('php://input'), true);
		$id_web_post	= (int) addslashes($body['id_web_post']);
		$id_web_user	= (int) addslashes($body['id_web_user']);
		$keterangan		= addslashes(trim($body['comment']));
		$response 		= array("status" => "error");
		header('Content-type: application/json; charset=utf-8');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: *');
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Allow-Headers: authorization, Content-Type, X-Custom-Header');
		if($id_web_post > 0 && $id_web_user > 0 && $keterangan != ""){
			$data = compact('id_web_post', 'id_web_user', 'keterangan');
			if(!$this->Api_model->addComent($data)){
				$response["message"] = "Error insert comment";
				echo json_encode($response);
				return;
			}
		}
		$response["status"] = 'ok';
		echo json_encode($response);
		return;
	}
	
	public function log_api($start_call, $func_name, $trans_name, $ip, $ip_forward, $post, $response){
		$data_api = array(
			"start_call" 	=> $start_call,
			"end_call"		=> date("Y-m-d H:i:s"),
			"function_name"	=> $func_name,
			"trans_name"	=> $trans_name,
			"ip"			=> $ip,
			"ip_forward"	=> $ip_forward,
			"param_data"	=> substr(json_encode($post), 0, 65535),
			"result_data"	=> json_encode($response)
		);
		if(!$this->Api_model->addLogApi($data_api))
			return "Kesalahan insert log api";
		return "";
	}
}
