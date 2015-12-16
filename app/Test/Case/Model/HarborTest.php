<?php

App::uses('Harbor', 'Model');

/**
 * Harbor Test Case
 */
class HarborTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.harbor',
        'app.shipment',
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
        $this->Harbor = ClassRegistry::init('Harbor');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Harbor);

        parent::tearDown();
    }

    /**
     * testIsOwnedBy method
     *
     * @return void
     */
    public function testIsOwnedByFalse() {
        $testIsOwnedBy = $this->Harbor->isOwnedBy(1, 8);
        $this->assertFalse($testIsOwnedBy);
    }

    public function testIsOwnedByTrue() {
        $testIsOwnedBy = $this->Harbor->isOwnedBy(2, 6);
        $this->assertTrue($testIsOwnedBy);
    }

    /**
     * testProcessImageUpload method
     *
     * @return void
     */
    public function testProcessImageUpload() {
        $this->markTestIncomplete('testProcessImageUpload not implemented.');
    }

    public function testEmptyForm() {
        // Build the data to save
        $data = array(
            'Harbor' => array(
                'name' => '',
                'location' => '',
                'filename' => '',
            )
        );

        // Attempt to save
        $result = $this->Harbor->save($data);

        // Test save failed
        $this->assertFalse($result);
    }
    
    public function testFormWithEmptyFile() {
	// Build the data to save along with an empty file
	$data = array('Harbor' => array(
		'name' => 'Simon Francoeur',
		'location' => 'laval',
		'user_id' => 3,
		'filename' => array(
			'name' => '',
			'type' => '',
			'tmp_name' => '',
			'error' => 4,
			'size' => 0,
		)
	));

	// Attempt to save
	$result = $this->Harbor->save($data);

	// Test successful insert
	$this->assertArrayHasKey('Harbor', $result);

	// Get the count in the DB
	$result = $this->Harbor->find('count', array(
		'conditions' => array(
			'Harbor.location' => 'laval',
			'Harbor.name' => 'Simon Francoeur',
		),
	));

	// Test DB entry
	$this->assertEqual($result, 1);
}

    public function testProcessImageUploadCorrect() {

        // Create a stub for the Contact Model class
        $stub = $this->getMockForModel('Harbor', array('is_uploaded_file', 'move_uploaded_file'));

        // Always return TRUE for the 'is_uploaded_file' function
        $stub->expects($this->any())
                ->method('is_uploaded_file')
                ->will($this->returnValue(TRUE));
        // Copy the file instead of 'move_uploaded_file' to allow testing
        $stub->expects($this->any())
                ->method('move_uploaded_file')
                ->will($this->returnCallback('copy'));

        $data = array(
            'Harbor' => array(
                'name' => 'Simon',
                'location' => 'laval',
                'user_id' => "6",
                'filename' => array(
                    'name' => 'TestFile.jpg',
                    'type' => 'image/jpeg',
                    'tmp_name' => ROOT . DS . APP_DIR . DS . 'Test' . DS . 'Case' . DS . 'Model' . DS . 'TestFile.jpg',
                    'error' => 0,
                    'size' => '845941'
                ),
            )
        );

        
        // Attempt to save
	$result = $stub->save($data);

        
        
	// Test successful insert
	$this->assertArrayHasKey('Harbor', $result);

	// Get the count in the DB
	$result = $this->Harbor->find('count', array(
		'conditions' => array(
			'Harbor.location' => 'laval',
			'Harbor.name' => 'Simon',
			'Harbor.filename' => 'uploads/TestFile.jpg'
		),
	));

	// Test DB entry
	$this->assertEqual($result, 1);

	// Test uploaded file exists
	$this->assertFileExists(WWW_ROOT.'img'.DS.'uploads'.DS.'TestFile.jpg');
    }
    
    public function testProcessImageUploadIncorrect() {

        // Create a stub for the Contact Model class
        $stub = $this->getMockForModel('Harbor', array('is_uploaded_file', 'move_uploaded_file'));

        // Always return TRUE for the 'is_uploaded_file' function
        $stub->expects($this->any())
                ->method('is_uploaded_file')
                ->will($this->returnValue(FALSE));
        // Copy the file instead of 'move_uploaded_file' to allow testing
        $stub->expects($this->any())
                ->method('move_uploaded_file')
                ->will($this->returnCallback('copy'));

        $data = array(
            'Harbor' => array(
                'name' => 'Simon',
                'location' => 'laval',
                'user_id' => "6",
                'filename' => array(
                    'name' => 'TestFile.txt',
                    'type' => 'text/plain',
                    'tmp_name' => ROOT . DS . APP_DIR . DS . 'Test' . DS . 'Case' . DS . 'Model' . DS . 'TestFile.jpg',
                    'error' => 0,
                    'size' => '19'
                ),
            )
        );
        // Attempt to save
	$result = $stub->save($data);

	// Test DB entry
	$this->assertFalse($result);

	// Test uploaded file exists
	$this->assertFileNotExists(WWW_ROOT.'img'.DS.'uploads'.DS.'TestFile.txt');
    }

}
