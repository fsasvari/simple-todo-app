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
	protected $username;
	
	/**
	 * @var string
	 */
	protected $email;
	
	/**
	 * @var string
	 */
	protected $password;
	
	/**
	 * @var int
	 */
	protected $is_activated;
	
	/**
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
	
	/**
	 * @param string $username
	 */
	public function setUsername($username)
	{
		$this->username = $username;
	}
	
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
}