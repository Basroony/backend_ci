<?php
set_time_limit(0);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Api_model extends CI_Model {
	function __construct () {
        parent::__construct();
	}
	
	function loginApi($creed, $pass){
		$this->db
			->select("id_web_user, username_web_user, fullname_web_user, phone_web_user, email_web_user, image_web_user")
			->from("web_user")
			->where("password_web_user", md5($pass))
			->group_start()
				->where("username_web_user", $creed)
				->or_where("phone_web_user", $creed)
				->or_where("email_web_user", $creed)
			->group_end();
		return $this->db->get();
	}
	
	function getRowUser($filters = null){
		$this->db->from("web_user");
		if(!empty($filters)){
			foreach($filters as $col=>$val){
				if(is_string($col))
					$this->db->where($col, $val);
				else
					$this->db->where($val);
			}
		}
		return $this->db->get();
	}
	
	function getPosts($id_web_user = 0){
		$this->db
			->select("
				a.id_web_user_follow,
				b.username_web_user,
				b.image_web_user,
				c.id_web_post,
				c.caption_web_post,
				c.image_web_post,
				c.create_at,
				TIMEDIFF(NOW(), c.create_at) AS timestamp_post,
				IFNULL(d.total_like, 0) AS total_like", false)
			->from("web_user_follow a")
			->join("web_user b", "b.id_web_user=a.id_web_user_follow", "INNER")
			->join("web_post c", "c.id_web_user=a.id_web_user_follow", "INNER")
			->join("(
					SELECT a.id_web_post, COUNT(a.id_web_post_like) AS total_like
					FROM web_post_like a
					GROUP BY a.id_web_post
					LIMIT 10000000000000000000
				) d", "d.id_web_post=c.id_web_post", "LEFT")
			->where("a.id_web_user", $id_web_user)
			->order_by("c.create_at", "DESC");
		return $this->db->get();
	}
	
	function getComments($id_web_post = 0){
		$this->db
			->select("
				a.id_web_post_comment, 
				b.username_web_user,
				a.keterangan,
				a.create_at", false)
			->from("web_post_comment a")
			->join("web_user b", "b.id_web_user=a.id_web_user", "INNER")
			->where("a.id_web_post", $id_web_post)
			->order_by("a.create_at", "DESC");
		return $this->db->get();
	}
	
	function addUser($data){
		return $this->db->insert('web_user', $data);
	}

	function addComent($data){
		return $this->db->insert('web_post_comment', $data);
	}
	
	function addLogApi($data){
		return $this->db->insert('web_log_api', $data);
	}
}
