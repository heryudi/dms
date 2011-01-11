<?php
/* Vehicle Test cases generated on: 2011-01-11 14:01:07 : 1294729327*/
App::import('Model', 'Vehicle');

class VehicleTestCase extends CakeTestCase {
	var $fixtures = array('app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.repair_order', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.invoice', 'app.labours_type');

	function startTest() {
		$this->Vehicle =& ClassRegistry::init('Vehicle');
	}

	function endTest() {
		unset($this->Vehicle);
		ClassRegistry::flush();
	}

}
?>