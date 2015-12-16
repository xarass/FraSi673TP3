<?php
/**
 * ShipmentsProduct Fixture
 */
class ShipmentsProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'shipment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'id' => '1',
			'shipment_id' => '0',
			'product_id' => '0'
		),
		array(
			'id' => '2',
			'shipment_id' => '2',
			'product_id' => '1'
		),
		array(
			'id' => '4',
			'shipment_id' => '3',
			'product_id' => '1'
		),
		array(
			'id' => '5',
			'shipment_id' => '3',
			'product_id' => '2'
		),
		array(
			'id' => '6',
			'shipment_id' => '4',
			'product_id' => '1'
		),
		array(
			'id' => '7',
			'shipment_id' => '4',
			'product_id' => '2'
		),
		array(
			'id' => '8',
			'shipment_id' => '5',
			'product_id' => '2'
		),
		array(
			'id' => '9',
			'shipment_id' => '5',
			'product_id' => '1'
		),
		array(
			'id' => '10',
			'shipment_id' => '6',
			'product_id' => '1'
		),
		array(
			'id' => '11',
			'shipment_id' => '7',
			'product_id' => '1'
		),
	);

}
