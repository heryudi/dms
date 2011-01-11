<?php
/* Part Test cases generated on: 2011-01-11 14:01:01 : 1294729321*/
App::import('Model', 'Part');

class PartTestCase extends CakeTestCase {
	var $fixtures = array('app.part', 'app.part_transaction', 'app.repair_order', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.invoice', 'app.repair');

	function startTest() {
		$this->Part =& ClassRegistry::init('Part');
	}

	function endTest() {
		unset($this->Part);
		ClassRegistry::flush();
	}

}
?>