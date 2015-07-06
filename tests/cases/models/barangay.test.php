<?php
/* Barangay Test cases generated on: 2015-06-26 05:10:26 : 1435295426*/
App::import('Model', 'Barangay');

class BarangayTestCase extends CakeTestCase {
	var $fixtures = array('app.barangay', 'app.city', 'app.province', 'app.country');

	function startTest() {
		$this->Barangay =& ClassRegistry::init('Barangay');
	}

	function endTest() {
		unset($this->Barangay);
		ClassRegistry::flush();
	}

}
