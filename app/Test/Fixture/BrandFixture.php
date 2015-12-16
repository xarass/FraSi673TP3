<?php
/**
 * Brand Fixture
 */
class BrandFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Microsoft',
			'created' => '2015-11-09 18:00:57',
			'modified' => '2015-11-09 18:00:57'
		),
		array(
			'id' => '2',
			'name' => 'Google',
			'created' => '2015-11-09 18:00:57',
			'modified' => '2015-11-09 18:00:57'
		),
		array(
			'id' => '3',
			'name' => 'Yahoo',
			'created' => '2015-11-09 18:00:57',
			'modified' => '2015-11-09 18:00:57'
		),
		array(
			'id' => '4',
			'name' => 'Coca-Cola',
			'created' => '2015-11-09 18:00:57',
			'modified' => '2015-11-09 18:00:57'
		),
		array(
			'id' => '5',
			'name' => 'Hershey',
			'created' => '2015-11-09 18:00:57',
			'modified' => '2015-11-09 18:00:57'
		),
		array(
			'id' => '6',
			'name' => 'M&M',
			'created' => '2015-11-09 18:00:57',
			'modified' => '2015-11-09 18:00:57'
		),
		array(
			'id' => '7',
			'name' => 'Samsung',
			'created' => '2015-11-09 18:00:57',
			'modified' => '2015-11-09 18:00:57'
		),
		array(
			'id' => '8',
			'name' => 'Sony',
			'created' => '2015-11-09 18:00:57',
			'modified' => '2015-11-09 18:00:57'
		),
		array(
			'id' => '9',
			'name' => 'Canon',
			'created' => '2015-11-09 18:00:57',
			'modified' => '2015-11-09 18:00:57'
		),
	);

}
