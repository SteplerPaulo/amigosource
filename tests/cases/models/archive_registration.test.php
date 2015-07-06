<?php
/* ArchiveRegistration Test cases generated on: 2015-06-05 13:21:31 : 1433510491*/
App::import('Model', 'ArchiveRegistration');

class ArchiveRegistrationTestCase extends CakeTestCase {
	var $fixtures = array('app.archive_registration');

	function startTest() {
		$this->ArchiveRegistration =& ClassRegistry::init('ArchiveRegistration');
	}

	function endTest() {
		unset($this->ArchiveRegistration);
		ClassRegistry::flush();
	}

}
