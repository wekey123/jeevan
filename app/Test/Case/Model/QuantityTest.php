<?php
App::uses('Quantity', 'Model');

/**
 * Quantity Test Case
 *
 */
class QuantityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quantity',
		'app.category',
		'app.order',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Quantity = ClassRegistry::init('Quantity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Quantity);

		parent::tearDown();
	}

}
