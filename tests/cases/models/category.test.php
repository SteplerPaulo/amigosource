<?php
/* Category Test cases generated on: 2015-06-02 12:02:07 : 1433246527*/
App::import('Model', 'Category');

class CategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.category', 'app.product', 'app.business', 'app.business_type', 'app.tmp_business', 'app.certification', 'app.factory', 'app.picture');

	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function endTest() {
		unset($this->Category);
		ClassRegistry::flush();
	}

}
