<?php

namespace App\Model;

use Slinky\Model\Model;

class User extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * @var array
	 */
	protected $hidden = ['password'];

	/**
	 * @var string
	 */
	protected $email;

	/**
	 * @var string
	 */
	protected $password;

	/**
	 * @var string
	 */
	protected $firstname;

	/**
	 * @var string
	 */
	protected $lastname;

	/**
	 * @var int
	 */
	protected $is_activated;

	/**
	 * @var datetime
	 */
	protected $last_login_at;

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getPassword()
	{
		return $this->email;
	}

	/**
	 * @param string $password
	 */
	public function setPassword($password)
	{
		$this->password = $password;
	}

	/**
	 * @return string
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}

	/**
	 * @param string $firstname
	 */
	public function setFirstname($firstname)
	{
		$this->firstname = $firstname;
	}

	/**
	 * @return string
	 */
	public function getLastname()
	{
		return $this->lastname;
	}

	/**
	 * @param string $lastname
	 */
	public function setLastname($lastname)
	{
		$this->lastname = $lastname;
	}

	/**
	 * @return int
	 */
	public function getIsActivated()
	{
		return $this->is_activated;
	}

	/**
	 * @param int $is_activated
	 */
	public function setIsActivated($is_activated)
	{
		$this->is_activated = $is_activated;
	}

	/**
	 * @return datetime
	 */
	public function getLastLoginAt()
	{
		return $this->last_login_at;
	}

	/**
	 * @param datetime $last_login_at
	 */
	public function setLastLoginAt($last_login_at)
	{
		$this->last_login_at = $last_login_at;
	}

	/**
	 * @return string
	 */
	public function getFullname()
	{
		return $this->getFirstname().' '.$this->getLastname();
	}
}