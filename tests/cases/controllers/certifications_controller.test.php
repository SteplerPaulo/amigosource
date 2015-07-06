<?php
/* Certifications Test cases generated on: 2015-05-26 06:38:32 : 1432622312*/
App::import('Controller', 'Certifications');

class TestCertificationsController extends CertificationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CertificationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.certification', 'app.business', 'app.business_type', 'app.factory');

	function startTest() {
		$this->Certifications =& new TestCertificationsController();
		$this->Certifications->constructClasses();
	}

	function endTest() {
		unset($this->Certifications);
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
