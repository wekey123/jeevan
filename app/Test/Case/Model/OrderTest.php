<?php
App::uses('Order', 'Model');

/**
 * Order Test Case
 *
 */
class OrderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.order',
		'app.user',
		'app.category',
		'app.product',
		'app.quantity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Order = ClassRegistry::init('Order');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Order);

		parent::tearDown();
	}

}
