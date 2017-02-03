<?php

namespace App\Model;

use Slinky\Model\Model;

class TodoTask extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'todo_task';

	/**
	 * @var int
	 */
	protected $todo_list_id;

	/**
	 * @var \App\Model\TodoList
	 */
	protected $todo_list;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var int
	 */
	protected $priority;

	/**
	 * @var int
	 */
	protected $deadline_at;

	/**
	 * @var int
	 */
	protected $is_finished;

	/**
	 * @return int
	 */
	public function getTodoListId()
	{
		return $this->todo_list_id;
	}

	/**
	 * @param int $todo_list_id
	 */
	public function setTodoListId($todo_list_id)
	{
		$this->todo_list_id = $todo_list_id;
	}

	/**
	 * @return \App\Model\TodoList
	 */
	public function getTodoList()
	{
		return $this->todo_list;
	}

	/**
	 * @param \App\Model\User $todo_list
	 */
	public function setTodoList(TodoList $todo_list)
	{
		$this->todo_list = $todo_list;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getPriority()
	{
		return $this->priority;
	}

	/**
	 * @param int $priority
	 */
	public function setPriority($priority)
	{
		$this->priority = $priority;
	}

	/**
	 * @return int
	 */
	public function getDeadlineAt()
	{
		return $this->deadline_at;
	}

	/**
	 * @param int $deadline_at
	 */
	public function setDeadlineAt($deadline_at)
	{
		$this->deadline_at = $deadline_at;
	}

	/**
	 * @return int
	 */
	public function getIsFinished()
	{
		return $this->is_finished;
	}

	/**
	 * @param int $is_finished
	 */
	public function setIsFinished($is_finished)
	{
		$this->is_finished = $is_finished;
	}
}