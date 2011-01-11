<?php
/* RepairOrders Test cases generated on: 2011-01-11 14:01:53 : 1294729913*/
App::import('Controller', 'RepairOrders');

class TestRepairOrdersController extends RepairOrdersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RepairOrdersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.invoice', 'app.part_transaction', 'app.part', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.labours_type');

	function startTest() {
		$this->RepairOrders =& new TestRepairOrdersController();
		$this->RepairOrders->constructClasses();
	}

	function endTest() {
		unset($this->RepairOrders);
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