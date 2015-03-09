<?php
/* Order Test cases generated on: 2015-03-07 13:41:13 : 1425732073*/
App::import('Model', 'Order');

class OrderTestCase extends CakeTestCase {
	var $fixtures = array('app.order', 'app.order_item', 'app.product');

	function startTest() {
		$this->Order =& ClassRegistry::init('Order');
	}

	function endTest() {
		unset($this->Order);
		ClassRegistry::flush();
	}

}
