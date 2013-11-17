<?php
App::uses('TasksController', 'Controller');

/**
 * TasksController Test Case
 *
 */
class TasksControllerTest extends ControllerTestCase {

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

}
