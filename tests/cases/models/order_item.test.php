<?php
/* OrderItem Test cases generated on: 2015-03-07 13:40:53 : 1425732053*/
App::import('Model', 'OrderItem');

class OrderItemTestCase extends CakeTestCase {
	var $fixtures = array('app.order_item', 'app.order', 'app.product');

	function startTest() {
		$this->OrderItem =& ClassRegistry::init('OrderItem');
	}

	function endTest() {
		unset($this->OrderItem);
		ClassRegistry::flush();
	}

}
