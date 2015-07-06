<?php
/* Classification Test cases generated on: 2015-05-26 06:38:21 : 1432622301*/
App::import('Model', 'Classification');

class ClassificationTestCase extends CakeTestCase {
	var $fixtures = array('app.classification', 'app.product');

	function startTest() {
		$this->Classification =& ClassRegistry::init('Classification');
	}

	function endTest() {
		unset($this->Classification);
		ClassRegistry::flush();
	}

}
