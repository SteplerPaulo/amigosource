<?php
/* BusinessTypes Test cases generated on: 2015-05-26 06:38:32 : 1432622312*/
App::import('Controller', 'BusinessTypes');

class TestBusinessTypesController extends BusinessTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BusinessTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.business_type', 'app.business', 'app.certification', 'app.factory');

	function startTest() {
		$this->BusinessTypes =& new TestBusinessTypesController();
		$this->BusinessTypes->constructClasses();
	}

	function endTest() {
		unset($this->BusinessTypes);
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
