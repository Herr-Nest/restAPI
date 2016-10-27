<?php


class Request{

	/*@function render
	@parameters String nomDuTemplate, Array
	@return void
	*/
	public static function getParam($param,$default=null){
		
		$value=(isset($_GET[$param])?$_GET[$param]:
					(isset($_POST[$param])?$_POST[$param]:$default)
				);
		return $value;
	}
}