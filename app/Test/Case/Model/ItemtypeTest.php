<?php
App::uses('Itemtype', 'Model');

/**
 * Itemtype Test Case
 *
 */
class ItemtypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.itemtype', 'app.item', 'app.customer');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Itemtype = ClassRegistry::init('Itemtype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Itemtype);

		parent::tearDown();
	}

}
