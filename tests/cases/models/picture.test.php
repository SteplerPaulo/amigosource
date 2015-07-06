<?php
/* Picture Test cases generated on: 2015-06-02 12:02:14 : 1433246534*/
App::import('Model', 'Picture');

class PictureTestCase extends CakeTestCase {
	var $fixtures = array('app.picture', 'app.product', 'app.category', 'app.business', 'app.business_type', 'app.tmp_business', 'app.certification', 'app.factory');

	function startTest() {
		$this->Picture =& ClassRegistry::init('Picture');
	}

	function endTest() {
		unset($this->Picture);
		ClassRegistry::flush();
	}

}
