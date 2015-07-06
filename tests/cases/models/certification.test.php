<?php
/* Certification Test cases generated on: 2015-06-02 12:02:08 : 1433246528*/
App::import('Model', 'Certification');

class CertificationTestCase extends CakeTestCase {
	var $fixtures = array('app.certification', 'app.business', 'app.business_type', 'app.tmp_business', 'app.factory', 'app.product', 'app.category', 'app.picture');

	function startTest() {
		$this->Certification =& ClassRegistry::init('Certification');
	}

	function endTest() {
		unset($this->Certification);
		ClassRegistry::flush();
	}

}
