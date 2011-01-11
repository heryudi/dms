<?php
/* Registration Test cases generated on: 2011-01-11 14:01:02 : 1294729322*/
App::import('Model', 'Registration');

class RegistrationTestCase extends CakeTestCase {
	var $fixtures = array('app.registration', 'app.vehicle', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.repair_order', 'app.invoice', 'app.repair');

	function startTest() {
		$this->Registration =& ClassRegistry::init('Registration');
	}

	function endTest() {
		unset($this->Registration);
		ClassRegistry::flush();
	}

}
?>