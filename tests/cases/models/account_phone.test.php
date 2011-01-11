<?php
/* AccountPhone Test cases generated on: 2011-01-11 14:01:52 : 1294729312*/
App::import('Model', 'AccountPhone');

class AccountPhoneTestCase extends CakeTestCase {
	var $fixtures = array('app.account_phone', 'app.account');

	function startTest() {
		$this->AccountPhone =& ClassRegistry::init('AccountPhone');
	}

	function endTest() {
		unset($this->AccountPhone);
		ClassRegistry::flush();
	}

}
?>