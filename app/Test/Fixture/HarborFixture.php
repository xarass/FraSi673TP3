<?php
/**
 * Harbor Fixture
 */
class HarborFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'location' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'filename' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'Test',
			'location' => 'Montreal',
			'user_id' => '6',
			'filename' => null
		),
		array(
			'id' => '2',
			'name' => 'Harbor #2',
			'location' => 'laval',
			'user_id' => '6',
			'filename' => null
		),
		array(
			'id' => '3',
			'name' => 'test3',
			'location' => 'Quebec',
			'user_id' => '6',
			'filename' => null
		),
		array(
			'id' => '4',
			'name' => 'test3',
			'location' => 'Quebec',
			'user_id' => '7',
			'filename' => 'uploads/fondDecran.jpg'
		),
		array(
			'id' => '5',
			'name' => 'resg',
			'location' => 'serg',
			'user_id' => null,
			'filename' => 'uploads/image1.jpg'
		),
		array(
			'id' => '6',
			'name' => 'awD',
			'location' => 'AD',
			'user_id' => null,
			'filename' => 'uploads/STEVE!!!.png'
		),
	);

}
