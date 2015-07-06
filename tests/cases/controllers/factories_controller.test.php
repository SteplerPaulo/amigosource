<?php
/* Factories Test cases generated on: 2015-05-26 06:38:32 : 1432622312*/
App::import('Controller', 'Factories');

class TestFactoriesController extends FactoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FactoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.factory', 'app.business', 'app.business_type', 'app.certification');

	function startTest() {
		$this->Factories =& new TestFactoriesController();
		$this->Factories->constructClasses();
	}

	function endTest() {
		unset($this->Factories);
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
