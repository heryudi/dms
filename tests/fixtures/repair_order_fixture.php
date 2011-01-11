<?php
/* RepairOrder Fixture generated on: 2011-01-11 14:01:17 : 1294729637 */
class RepairOrderFixture extends CakeTestFixture {
	var $name = 'RepairOrder';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'vehicle_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'barcode' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'odometer' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'repair_order_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'in' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'out' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'cancel_note' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'vehicle_id' => 1,
			'barcode' => 'Lorem ipsum dolor sit amet',
			'odometer' => 1,
			'contact_id' => 1,
			'repair_order_id' => 1,
			'in' => '2011-01-11 14:07:17',
			'out' => '2011-01-11 14:07:17',
			'cancel_note' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-01-11 14:07:17',
			'modified' => '2011-01-11 14:07:17'
		),
	);
}
?>