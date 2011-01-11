<?php
/* PartTransaction Test cases generated on: 2011-01-11 14:01:00 : 1294729320*/
App::import('Model', 'PartTransaction');

class PartTransactionTestCase extends CakeTestCase {
	var $fixtures = array('app.part_transaction', 'app.part', 'app.repair_order', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.invoice', 'app.repair');

	function startTest() {
		$this->PartTransaction =& ClassRegistry::init('PartTransaction');
	}

	function endTest() {
		unset($this->PartTransaction);
		ClassRegistry::flush();
	}

}
?>