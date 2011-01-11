<?php
/* PartTransaction Fixture generated on: 2011-01-11 14:01:00 : 1294729320 */
class PartTransactionFixture extends CakeTestFixture {
	var $name = 'PartTransaction';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'part_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'repair_order_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'transaction' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'balance' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'notes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'price' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'discount' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,1'),
		'invoice_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'part_id' => 1,
			'repair_order_id' => 1,
			'contact_id' => 1,
			'transaction' => 1,
			'balance' => 1,
			'notes' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'discount' => 1,
			'invoice_id' => 1,
			'created' => '2011-01-11 14:02:00',
			'modified' => '2011-01-11 14:02:00'
		),
	);
}
?>