<?php
/* RegistrationComment Test cases generated on: 2015-06-05 08:32:03 : 1433493123*/
App::import('Model', 'RegistrationComment');

class RegistrationCommentTestCase extends CakeTestCase {
	var $fixtures = array('app.registration_comment', 'app.business', 'app.business_type', 'app.user', 'app.certification', 'app.factory', 'app.product', 'app.category', 'app.picture');

	function startTest() {
		$this->RegistrationComment =& ClassRegistry::init('RegistrationComment');
	}

	function endTest() {
		unset($this->RegistrationComment);
		ClassRegistry::flush();
	}

}
