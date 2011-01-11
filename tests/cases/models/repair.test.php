<?php
/* Repair Test cases generated on: 2011-01-11 14:01:05 : 1294729325*/
App::import('Model', 'Repair');

class RepairTestCase extends CakeTestCase {
	var $fixtures = array('app.repair', 'app.complaint', 'app.repair_order', 'app.vehicle', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.invoice', 'app.labour', 'app.type', 'app.labours_type');

	function startTest() {
		$this->Repair =& ClassRegistry::init('Repair');
	}

	function endTest() {
		unset($this->Repair);
		ClassRegistry::flush();
	}

}
?>