<?php
/* Picture Test cases generated on: 2015-05-20 11:41:08 : 1432122068*/
App::import('Model', 'Picture');

class PictureTestCase extends CakeTestCase {
	var $fixtures = array('app.picture');

	function startTest() {
		$this->Picture =& ClassRegistry::init('Picture');
	}

	function endTest() {
		unset($this->Picture);
		ClassRegistry::flush();
	}

}
