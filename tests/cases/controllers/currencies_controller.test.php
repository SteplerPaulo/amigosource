<?php
/* Currencies Test cases generated on: 2015-06-04 06:32:35 : 1433399555*/
App::import('Controller', 'Currencies');

class TestCurrenciesController extends CurrenciesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CurrenciesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.currency');

	function startTest() {
		$this->Currencies =& new TestCurrenciesController();
		$this->Currencies->constructClasses();
	}

	function endTest() {
		unset($this->Currencies);
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
