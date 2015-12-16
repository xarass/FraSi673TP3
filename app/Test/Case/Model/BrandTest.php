<?php
App::uses('Brand', 'Model');

/**
 * Brand Test Case
 */
class BrandTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.brand'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Brand = ClassRegistry::init('Brand');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Brand);

		parent::tearDown();
	}

/**
 * testGetBrandNames method
 *
 * @return void
 */
	public function testGetBrandNamesUneLettreExistante() {
		$testBrandNames = $this->Brand->getBrandNames("C");
                $this->assertEqual($testBrandNames, array("4" => "Coca-Cola","9" => "Canon"));
	}
        
        public function testGetBrandNamesDeuxLettreExistante() {
		$testBrandNames = $this->Brand->getBrandNames("CA");
                $this->assertEqual($testBrandNames, array("9" => "Canon"));
	}
        
        public function testGetBrandNamesUneLettreInexistante() {
		$testBrandNames = $this->Brand->getBrandNames("A");
                $this->assertEqual($testBrandNames, array());
	}
        
        public function testGetBrandNamesAucuneLettre() {
		$testBrandNames = $this->Brand->getBrandNames("");
                $this->assertFalse($testBrandNames);
	}

}
