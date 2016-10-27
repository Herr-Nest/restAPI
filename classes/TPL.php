<?php


class TPL{


	/*@function render
	@parameters String nomDuTemplate, Array
	@return void
	*/
	public static function render($template, $arrayTpl=array()){
		$_TPL=$arrayTpl;
		include(DIR_TEMPLATE.'/'.$template);
		unset($_TPL);

	}

	public static function renderView($template, $arrayTpl=array()){
	  //todo


    }
}