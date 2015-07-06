<?php
/* AutoMessages Test cases generated on: 2015-06-04 01:18:04 : 1433380684*/
App::import('Controller', 'AutoMessages');

class TestAutoMessagesController extends AutoMessagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AutoMessagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.auto_message');

	function startTest() {
		$this->AutoMessages =& new TestAutoMessagesController();
		$this->AutoMessages->constructClasses();
	}

	function endTest() {
		unset($this->AutoMessages);
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
