<?php
/* Businesses Test cases generated on: 2015-05-26 06:38:32 : 1432622312*/
App::import('Controller', 'Businesses');

class TestBusinessesController extends BusinessesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BusinessesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.business', 'app.business_type', 'app.certification', 'app.factory');

	function startTest() {
		$this->Businesses =& new TestBusinessesController();
		$this->Businesses->constructClasses();
	}

	function endTest() {
		unset($this->Businesses);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
