<?php
/* Province Test cases generated on: 2015-06-23 02:16:43 : 1435025803*/
App::import('Model', 'Province');

class ProvinceTestCase extends CakeTestCase {
	var $fixtures = array('app.province', 'app.country', 'app.city');

	function startTest() {
		$this->Province =& ClassRegistry::init('Province');
	}

	function endTest() {
		unset($this->Province);
		ClassRegistry::flush();
	}

}
