<?php

namespace App\Model;

use Slinky\Model\Model;

class TodoList extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'todo_list';

	/**
	 * @var int
	 */
	protected $user_id;

	/**
	 * @var \App\Model\User
	 */
	protected $user;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var int
	 */
	protected $count_all;

	/**
	 * @var int
	 */
	protected $count_finished;

	/**
	 * @var int
	 */
	protected $count_in_progress;

	/**
	 * @return int
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * @param int $user_id
	 */
	public function setUserId($user_id)
	{
		$this->user_id = $user_id;
	}

	/**
	 * @return \App\Model\User
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param \App\Model\User $user
	 */
	public function setUser(User $user)
	{
		$this->user = $user;
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
	public function getCountAll()
	{
		return $this->count_all;
	}

	/**
	 * @param int $count_all
	 */
	public function setCountAll($count_all)
	{
		$this->count_all = $count_all;
	}

	/**
	 * @return int
	 */
	public function getCountFinished()
	{
		return $this->count_finished;
	}

	/**
	 * @param int $count_finished
	 */
	public function setCountFinished($count_finished)
	{
		$this->count_finished = $count_finished;
	}

	/**
	 * @return int
	 */
	public function getCountInProgress()
	{
		return $this->count_in_progress;
	}

	/**
	 * @param int $count_in_progress
	 */
	public function setCountInProgress($count_in_progress)
	{
		$this->count_in_progress = $count_in_progress;
	}
}