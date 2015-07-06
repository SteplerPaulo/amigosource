<?php
/* AutoMessage Test cases generated on: 2015-06-04 01:17:45 : 1433380665*/
App::import('Model', 'AutoMessage');

class AutoMessageTestCase extends CakeTestCase {
	var $fixtures = array('app.auto_message');

	function startTest() {
		$this->AutoMessage =& ClassRegistry::init('AutoMessage');
	}

	function endTest() {
		unset($this->AutoMessage);
		ClassRegistry::flush();
	}

}
