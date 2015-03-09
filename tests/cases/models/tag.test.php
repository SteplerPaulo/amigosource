<?php
/* Tag Test cases generated on: 2015-03-07 13:42:10 : 1425732130*/
App::import('Model', 'Tag');

class TagTestCase extends CakeTestCase {
	var $fixtures = array('app.tag');

	function startTest() {
		$this->Tag =& ClassRegistry::init('Tag');
	}

	function endTest() {
		unset($this->Tag);
		ClassRegistry::flush();
	}

}
