<?php
App::uses('TaskListsController', 'Controller');

/**
 * TaskListsController Test Case
 *
 */
class TaskListsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.task_list',
		'app.project',
		'app.category',
		'app.user',
		'app.message',
		'app.reward',
		'app.task',
		'app.person'
	);

}
