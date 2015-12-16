<?php
/**
 * Shipment Fixture
 */
class ShipmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'harbor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'start_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'start_location' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'subcategory_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '2',
			'harbor_id' => '2',
			'start_date' => '2015-09-09',
			'name' => 'test #2',
			'start_location' => 'Montreal',
			'user_id' => '6',
			'subcategory_id' => '1'
		),
		array(
			'id' => '3',
			'harbor_id' => '1',
			'start_date' => '2015-09-24',
			'name' => 'C',
			'start_location' => 'QWD',
			'user_id' => '6',
			'subcategory_id' => '4'
		),
		array(
			'id' => '4',
			'harbor_id' => '1',
			'start_date' => '2015-09-25',
			'name' => '#4',
			'start_location' => 'rimouski',
			'user_id' => '6',
			'subcategory_id' => '5'
		),
		array(
			'id' => '5',
			'harbor_id' => '2',
			'start_date' => '2015-09-07',
			'name' => 'allo',
			'start_location' => 'ma maison',
			'user_id' => '7',
			'subcategory_id' => '9'
		),
		array(
			'id' => '6',
			'harbor_id' => '1',
			'start_date' => '2015-11-08',
			'name' => 'awefawef',
			'start_location' => 'awef',
			'user_id' => '6',
			'subcategory_id' => '5'
		),
		array(
			'id' => '8',
			'harbor_id' => '1',
			'start_date' => '2015-11-11',
			'name' => 'zsdv',
			'start_location' => 'zsdv',
			'user_id' => '7',
			'subcategory_id' => '1'
		),
	);

}
