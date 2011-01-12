<?php
/* Part Fixture generated on: 2011-01-12 12:01:01 : 1294810021 */
class PartFixture extends CakeTestFixture {
	var $name = 'Part';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'part_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'accessories' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'material' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'non_gm' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'std_pack' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 3),
		'dealer_price' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 9),
		'retail_price' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 9),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 'Lorem ipsum dolor ',
			'name' => 'Lorem ipsum dolor sit amet',
			'model' => 'Lorem ipsum d',
			'part_id' => 'Lorem ipsum dolor ',
			'accessories' => 1,
			'material' => 1,
			'non_gm' => 1,
			'std_pack' => 1,
			'dealer_price' => 1,
			'retail_price' => 1,
			'created' => '2011-01-12 12:27:01',
			'modified' => '2011-01-12 12:27:01'
		),
	);
}
?>