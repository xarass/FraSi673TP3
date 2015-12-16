<?php
App::uses('SubcategoriesController', 'Controller');

/**
 * SubcategoriesController Test Case
 */
class SubcategoriesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subcategory',
		'app.category',
		'app.shipment',
		'app.harbor',
		'app.message',
		'app.product',
		'app.shipments_product'
	);

/**
 * testGetByCategory method
 *
 * @return void
 */
	public function testGetByCategory() {
		$this->markTestIncomplete('testGetByCategory not implemented.');
	}

}
