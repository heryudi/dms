<?php
/* PartTransactions Test cases generated on: 2011-01-11 14:01:52 : 1294729912*/
App::import('Controller', 'PartTransactions');

class TestPartTransactionsController extends PartTransactionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PartTransactionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.part_transaction', 'app.part', 'app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.invoice', 'app.labours_type', 'app.registration', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone');

	function startTest() {
		$this->PartTransactions =& new TestPartTransactionsController();
		$this->PartTransactions->constructClasses();
	}

	function endTest() {
		unset($this->PartTransactions);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>