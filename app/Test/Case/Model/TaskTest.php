<?php
App::uses('Task', 'Model');

/**
 * Task Test Case
 *
 */
class TaskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.task',
		'app.task_list',
		'app.project',
		'app.category',
		'app.user',
		'app.message',
		'app.reward',
		'app.person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Task = ClassRegistry::init('Task');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Task);

		parent::tearDown();
	}

}
