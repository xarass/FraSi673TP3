<?php
App::uses('Shipment', 'Model');

/**
 * Shipment Test Case
 */
class ShipmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shipment',
		'app.harbor',
		'app.subcategory',
		'app.category',
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
		$this->Shipment = ClassRegistry::init('Shipment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Shipment);

		parent::tearDown();
	}

/**
 * testIsOwnedBy method
 *
 * @return void
 */
	public function testIsOwnedByFalse() {
            $testIsOwnedBy = $this->Shipment->isOwnedBy(1,8);
            $this->assertFalse($testIsOwnedBy);
	}
        
        public function testIsOwnedByTrue() {
            $testIsOwnedBy = $this->Shipment->isOwnedBy(2,6);
            $this->assertTrue($testIsOwnedBy);
	}
        
        public function testNameNotBlank(){
            $expected = array(
                'harbor_id' => 6,
                'start_date' => '2015-09-09',
                'name' => '',
                'start_location' => 'Montreal',
            );
            
            $result = $this->Shipment->save($expected);
            
            $this->assertFalse($result);            
        }
        
        public function testStartLocationNotBlank(){
            $expected = array(
                'harbor_id' => 6,
                'start_date' => '2015-09-09',
                'name' => 'Test',
                'start_location' => '',
            );
            
            $result = $this->Shipment->save($expected);
            
            $this->assertFalse($result);            
        }
        
        public function testHarborIdNumeric(){
            $expected = array(
                'harbor_id' => 'test',
                'start_date' => '2015-09-09',
                'name' => 'Test',
                'start_location' => 'Test',
            );
            
            $result = $this->Shipment->save($expected);
            
            $this->assertFalse($result);            
        }
        
        

}
