<?php
class Controller {
	public function __construct() {
	}	
	public function openHomepage() {
		$dialog = new Homepage();
	}
	
	public function run(){
		$this->openHomepage();

	}
}
?>
