<?php
/* Classifications Test cases generated on: 2015-05-26 06:38:32 : 1432622312*/
App::import('Controller', 'Classifications');

class TestClassificationsController extends ClassificationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ClassificationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.classification', 'app.product', 'app.category', 'app.picture');

	function startTest() {
		$this->Classifications =& new TestClassificationsController();
		$this->Classifications->constructClasses();
	}

	function endTest() {
		unset($this->Classifications);
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
