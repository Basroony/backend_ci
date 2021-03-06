<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
	public function view($view, $vars = array(), $return = false){
		list($path, $_view) = Modules::find($view, $this->_module, 'views/');
		if($path){
			$this->_ci_view_paths = array($path=>true) + $this->_ci_view_paths;
			$view = $_view;
		}
		return $this->_ci_load(
			array(
				'_ci_view'=>$view,
				'_ci_vars'=>(method_exists($this, '_ci_object_to_array') ? $this->_ci_object_to_array($vars) : $this->_ci_prepare_view_vars($vars)),
				'_ci_return'=>$return
			)
		);
	}
}