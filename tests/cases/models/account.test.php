<?php
/* Account Test cases generated on: 2011-01-11 14:01:53 : 1294729313*/
App::import('Model', 'Account');

class AccountTestCase extends CakeTestCase {
	var $fixtures = array('app.account', 'app.account_phone', 'app.contact', 'app.registration');

	function startTest() {
		$this->Account =& ClassRegistry::init('Account');
	}

	function endTest() {
		unset($this->Account);
		ClassRegistry::flush();
	}

}
?>