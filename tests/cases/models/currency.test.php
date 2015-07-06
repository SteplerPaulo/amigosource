<?php
/* Currency Test cases generated on: 2015-06-04 06:32:17 : 1433399537*/
App::import('Model', 'Currency');

class CurrencyTestCase extends CakeTestCase {
	var $fixtures = array('app.currency');

	function startTest() {
		$this->Currency =& ClassRegistry::init('Currency');
	}

	function endTest() {
		unset($this->Currency);
		ClassRegistry::flush();
	}

}
