<?php
/* Invoice Fixture generated on: 2011-01-11 14:01:57 : 1294729317 */
class InvoiceFixture extends CakeTestFixture {
	var $name = 'Invoice';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'printed' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'printed' => 1,
			'created' => '2011-01-11 14:01:57',
			'modified' => '2011-01-11 14:01:57'
		),
	);
}
?>