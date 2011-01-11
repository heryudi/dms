<?php
/* Invoice Test cases generated on: 2011-01-11 14:01:57 : 1294729317*/
App::import('Model', 'Invoice');

class InvoiceTestCase extends CakeTestCase {
	var $fixtures = array('app.invoice', 'app.part_transaction', 'app.repair');

	function startTest() {
		$this->Invoice =& ClassRegistry::init('Invoice');
	}

	function endTest() {
		unset($this->Invoice);
		ClassRegistry::flush();
	}

}
?>