<?php

/* Class Response - Helper */
class response {
	private $format = 'json';
	private $result;
	private $message;
	private $record;
	private $records;
	private $total_records;
	private $options;
	private $callback;
	
	public function __construct($result = "ERROR"){
		$this->set_result($result);
		return $this;
	}
	
	public function set_object(){
		$this->format = 'array';
		return $this;
	}
	
	public function set_result($result = "ERROR"){
		$this->result = $result == "OK" ? "OK" : "ERROR";
		return $this;
	}
	
	public function set_message($message){
		$this->message .= $message;
		return $this;
	}
	
	public function set_record($record){
		$this->record = $record;
		return $this;
	}
	
	public function set_records($records){
		$this->records = $records;
		return $this;
	}
	
	public function set_total_records($total_records){
		$this->total_records = $total_records;
		return $this;
	}
	
	public function set_options($options){
		$this->options = $options;
		return $this;
	}
	
	public function set_callback($callback){
		$this->callback = $callback;
		return $this;
	}
	
	public function return($echo = false){
		$return = new stdClass();
		$return->Result = $this->result;
		if(!empty($this->message))
			$return->Message = $this->message;
		else{
			if($this->result == "ERROR")
				$return->Message = "Undefined Message.";
		}
		if(!empty($this->record))
			$return->Record = $this->record;
		if(!empty($this->records))
			$return->Records = $this->records;
		if(!empty($this->total_records) || $this->total_records == 0)
			$return->TotalRecordCount = $this->total_records;
		if(!empty($this->options))
			$return->Options = $this->options;
		if(!empty($this->callback))
			$return->Callback = $this->callback;
		
		if($this->format == 'array')
			return $return;
		else{
			if($echo){
				echo json_encode($return);
				return;
			}else
				return json_encode($return);
		}
	}
}

/** Create format return **/
if(!function_exists('return_request')){
	function return_request($status, $data = null, $message = null, $total_records = null, $options = null){
		return (new response($status))
			->set_message($message)
			->set_records($data)
			->set_total_records($total_records)
			->set_options($options)
			->return();
	}
}

/** Get Roman Number **/
if(!function_exists('get_roman_number')){
	function get_roman_number($number) {
		$map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
		$returnValue = '';
		while ($number > 0) {
			foreach ($map as $roman => $int) {
				if($number >= $int) {
					$number -= $int;
					$returnValue .= $roman;
					break;
				}
			}
		}
		return $returnValue;
	}
}

/** Format Tanggal **/
if(!function_exists('format_tanggal')){
	function format_tanggal($format = "d F Y", $date = "now", $lang = "id"){
		$en = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","January","February","March","April","May","June","July","August","September","October","November","December","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
 
		$id = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember","Jan","Peb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nop","Des");
		return str_replace($en, ${$lang}, date($format, strtotime($date)));
	}
}

/** Get Nama Bulan **/
if(!function_exists('get_nama_bulan')){
	function get_nama_bulan($bulan) {
		$nama_bulan = array(1=>"Januari", 2=>"Februari", 3=>"Maret", 4=>"April", 5=>"Mei", 6=>"Juni", 7=>"Juli", 8=>"Agustus", 9=>"September", 10=>"Oktober", 11=>"November", 12=>"Desember");
		return in_array($bulan, array_keys($nama_bulan)) ? $nama_bulan[$bulan] : "No Name";
	}
}

/** Get Semua Nama Bulan **/
if(!function_exists('get_all_nama_bulan')){
	function get_all_nama_bulan($json = false) {
		$nama_bulan = array(1=>"Januari", 2=>"Februari", 3=>"Maret", 4=>"April", 5=>"Mei", 6=>"Juni", 7=>"Juli", 8=>"Agustus", 9=>"September", 10=>"Oktober", 11=>"November", 12=>"Desember", "-"=>"Semua");
		return $json ? json_encode($nama_bulan) : $nama_bulan;
	}
}

/** Get Option Tahun **/
if(!function_exists('get_year_option')){
	function get_year_option($json = false) {
		$yearOptions = array();
		foreach(range(date('Y') - 3, date('Y')+1) as $y) {
			$yearOptions[$y] = $y;
		}
		return $json ? json_encode($yearOptions) : $yearOptions;
	}
}

/** Get Status **/
if(!function_exists('get_status')){
	function get_status($json = false) {
		$status = array ();
		$status = array('-'=>'Semua','0'=>'Baru','1'=>'Aktif','2'=>'Non Aktif');
		return $json ? json_encode($status) : $status;
	}
}

/** Get Status Trans **/
if(!function_exists('get_status_trans')){
	function get_status_trans($json = false) {
		$status = array ();
		$status = array('-'=>'Semua','0'=>'Baru','1'=>'Approve','2'=>'Batal');
		return $json ? json_encode($status) : $status;
	}
}

/** Get Serial Random String **/
if(!function_exists('get_random_string')){
	function get_random_string($length = 10, $chars = null) {
		$characters = isset($chars) ? $chars : "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$charactersLength = strlen($characters);
		$randomString = "";
		for($i = 0; $i < $length; $i++)
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		return $randomString;
	}
}

/** Cek if date is valid format **/
if(!function_exists('is_valid_date')){
	function is_valid_date($date) {
		try {
			$date = new DateTime(trim($date));
		}
		catch( Exception $e ) {
			log_message("warning", $this->getMessage());
			return false;
		}
		$month = $date->format('m');
		$day = $date->format('d');
		$year = $date->format('Y');
		return checkdate($month, $day, $year);
	}
}

if(!function_exists('Get_Opr_search')){
	function Get_Opr_search($crit = null,$value = null,$opr = null) {
		$crit=addslashes($crit);
		$value=addslashes($value);
		if(empty($crit) || empty($value)){
			return "1 = 1";
		}else{
			switch($opr){
				case 'eq': $src="$crit = '$value'"; break;
				case 'ne': $src="$crit <> '$value'"; break;
				case 'bg': $src="$crit LIKE '$value%'"; break;
				case 'nb': $src="$crit NOT LIKE '$value%'"; break;
				case 'en': $src="$crit LIKE '%$value'"; break;
				case 'cn': $src="$crit LIKE '%$value%'"; break;
				case 'nc': $src="$crit NOT LIKE '%$value%'"; break;
				case 'nu': $src="ISNULL($crit)"; break;
				case 'nn': $src="ISNULL($crit) = FALSE"; break;
				case 'nd': $src="$crit NOT LIKE '%$value'"; break;
				case 'in':
					$arr_value=explode(';',$value);
					if(count($arr_value)){
						$value_in="";
						foreach($arr_value as $value){
							$value_in.="'$value',";
						}
						$value_in=substr($value_in,0,strlen($value_in)-1);
						$src="$crit IN ($value_in)"; 
					}
					else{
						$src="1 = 1"; 
					}
				break;
				case 'ni': 
					$arr_value=explode(';',$value);
					if(count($arr_value)){
						$value_in="";
						foreach($arr_value as $value){
							$value_in.="'$value',";
						}
						$value_in=substr($value_in,0,strlen($value_in)-1);
						$src="$crit NOT IN ($value_in)"; 
					}
					else{
						$src="1 = 1"; 
					}
				break;
				case 'ls': $src="$crit < '$value'"; break;
				case 'le': $src="$crit <= '$value'"; break;
				case 'gt': $src="$crit > '$value'"; break;
				case 'ge': $src="$crit >= '$value'"; break;
				case 'bt': 
					$arr_value=explode(';',$value);
					$src="$crit BETWEEN '".$arr_value[0]."' AND '".$arr_value[1]."'"; 
				break;
				default :
					$src="1 = 1";
			}
			return $src;
		}
	}
}

/** get terbilang nominal **/
if(!function_exists('terbilang')){
	function terbilang($x) {
		$x=(int) floor($x);
		$abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		if($x === 0)
			return "";
		elseif ($x < 0)
			return "minus ".terbilang(abs($x));
		elseif ($x < 12 && $x > 0)
			return " " . $abil[$x];
		elseif ($x < 20)
			return $x;//terbilang($x - 10) . " belas";
		elseif ($x < 100)
			return terbilang($x / 10) . " puluh" . terbilang($x % 10);
		elseif ($x < 200)
			return " seratus" . terbilang($x - 100);
		elseif ($x < 1000)
			return terbilang($x / 100) . " ratus" . terbilang($x % 100);
		elseif ($x < 2000)
			return " seribu" . terbilang($x - 1000);
		elseif ($x < 1000000)
			return terbilang($x / 1000) . " ribu" . terbilang($x % 1000);
		elseif ($x < 1000000000)
			return terbilang($x / 1000000) . " juta" . terbilang($x % 1000000);
		elseif ($x < 1000000000000)
			return terbilang($x / 1000000000) . " miliyar" . terbilang($x % 1000000000);
	}
}