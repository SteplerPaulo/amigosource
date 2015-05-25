<?php
/* Pictures Test cases generated on: 2015-05-20 11:41:28 : 1432122088*/
App::import('Controller', 'Pictures');

class TestPicturesController extends PicturesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PicturesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.picture');

	function startTest() {
		$this->Pictures =& new TestPicturesController();
		$this->Pictures->constructClasses();
	}

	function endTest() {
		unset($this->Pictures);
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
