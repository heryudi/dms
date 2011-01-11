<?php
/* Complaint Test cases generated on: 2011-01-11 14:01:54 : 1294729314*/
App::import('Model', 'Complaint');

class ComplaintTestCase extends CakeTestCase {
	var $fixtures = array('app.complaint', 'app.repair_order', 'app.repair');

	function startTest() {
		$this->Complaint =& ClassRegistry::init('Complaint');
	}

	function endTest() {
		unset($this->Complaint);
		ClassRegistry::flush();
	}

}
?>