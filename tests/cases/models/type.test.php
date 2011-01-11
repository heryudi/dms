<?php
/* Type Test cases generated on: 2011-01-11 14:01:06 : 1294729326*/
App::import('Model', 'Type');

class TypeTestCase extends CakeTestCase {
	var $fixtures = array('app.type', 'app.vehicle', 'app.labour', 'app.repair', 'app.complaint', 'app.repair_order', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.invoice', 'app.labours_type');

	function startTest() {
		$this->Type =& ClassRegistry::init('Type');
	}

	function endTest() {
		unset($this->Type);
		ClassRegistry::flush();
	}

}
?>