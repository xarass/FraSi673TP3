<?php
/**
 * Message Fixture
 */
class MessageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'shipment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'shipment_id' => '3',
			'title' => 'test',
			'content' => 'je fais des test',
			'name' => 'Simon',
			'user_id' => '6'
		),
		array(
			'id' => '3',
			'shipment_id' => '2',
			'title' => 'awefwaef',
			'content' => 'test encore',
			'name' => 'simon',
			'user_id' => '6'
		),
		array(
			'id' => '4',
			'shipment_id' => '3',
			'title' => 'Truc',
			'content' => 'o;iawjefo;ij',
			'name' => 'awef',
			'user_id' => '7'
		),
	);

}
