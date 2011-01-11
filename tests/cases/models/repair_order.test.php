<?php
/* RepairOrder Test cases generated on: 2011-01-11 14:01:20 : 1294729640*/
App::import('Model', 'RepairOrder');

class RepairOrderTestCase extends CakeTestCase {
	var $fixtures = array('app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.invoice', 'app.part_transaction', 'app.part', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.labours_type');

	function startTest() {
		$this->RepairOrder =& ClassRegistry::init('RepairOrder');
	}

	function endTest() {
		unset($this->RepairOrder);
		ClassRegistry::flush();
	}

}
?>