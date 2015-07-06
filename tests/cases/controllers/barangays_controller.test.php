<?php
/* Barangays Test cases generated on: 2015-06-26 05:11:47 : 1435295507*/
App::import('Controller', 'Barangays');

class TestBarangaysController extends BarangaysController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BarangaysControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.barangay', 'app.city', 'app.province', 'app.country');

	function startTest() {
		$this->Barangays =& new TestBarangaysController();
		$this->Barangays->constructClasses();
	}

	function endTest() {
		unset($this->Barangays);
		ClassRegistry::flush();
	}

}
