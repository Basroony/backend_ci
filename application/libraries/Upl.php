<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
require_once APPPATH."/third_party/PHPExcel/IOFactory.php";

class Upl {
	
	public function Upload_EXC($inputFileName)
	{
		$inputFileType=PHPExcel_IOFactory::identify($inputFileName);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($inputFileName);
		return $objPHPExcel;
	}

}