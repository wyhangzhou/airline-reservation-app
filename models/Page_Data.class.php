<?php
class Page_Data {
	public $title = "";
	public $content = "";
	public $css = "";
	public $scriptElements = "";

	//declare a method to add CSS
	public function addCSS( $href ){
        $this->css .= "<link href='$href' rel='stylesheet' />";
	}

	//declare a method to add JS
	public function addScript( $src ){
        $this->scriptElements .= "<script src='$src'></script>";
	}

}