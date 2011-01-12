<?php
/* Part Test cases generated on: 2011-01-12 12:01:02 : 1294810022*/
App::import('Model', 'Part');

class PartTestCase extends CakeTestCase {
	var $fixtures = array('app.part', 'app.part_transaction', 'app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.invoice', 'app.labours_type', 'app.registration', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone');

	function startTest() {
		$this->Part =& ClassRegistry::init('Part');
	}

	function endTest() {
		unset($this->Part);
		ClassRegistry::flush();
	}

}
?>