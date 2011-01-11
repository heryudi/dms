<?php
/* Labour Test cases generated on: 2011-01-11 14:01:58 : 1294729318*/
App::import('Model', 'Labour');

class LabourTestCase extends CakeTestCase {
	var $fixtures = array('app.labour', 'app.repair', 'app.type', 'app.labours_type');

	function startTest() {
		$this->Labour =& ClassRegistry::init('Labour');
	}

	function endTest() {
		unset($this->Labour);
		ClassRegistry::flush();
	}

}
?>