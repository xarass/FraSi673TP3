<?php
App::uses('Subcategory', 'Model');

/**
 * Subcategory Test Case
 */
class SubcategoryTest extends CakeTestCase {

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
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subcategory = ClassRegistry::init('Subcategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subcategory);

		parent::tearDown();
	}
        
        public function testGetSubcategoriesByCategory() {
        $result = $this->Subcategory->getSubcategoriesByCategory(2);
//            debug($result); die();
        $expected = array(
            (int) 4 => 'canned',
            (int) 5 => 'fresh',
            (int) 6 => 'candy'
        );
        $this->assertEquals($expected, $result);
//		$this->markTestIncomplete('testGetSubcategoriesByCategory not implemented.');
    }

}
