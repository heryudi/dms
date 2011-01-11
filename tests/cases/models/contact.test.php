<?php
/* Contact Test cases generated on: 2011-01-11 14:01:56 : 1294729316*/
App::import('Model', 'Contact');

class ContactTestCase extends CakeTestCase {
	var $fixtures = array('app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.part_transaction', 'app.repair_order');

	function startTest() {
		$this->Contact =& ClassRegistry::init('Contact');
	}

	function endTest() {
		unset($this->Contact);
		ClassRegistry::flush();
	}

}
?>