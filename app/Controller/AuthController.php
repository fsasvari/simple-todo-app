<?php

namespace App\Controller;

use Slinky\Validation\Validator;

class AuthController extends Controller
{
	public function login()
	{
		$this->response->view('login');
	}

	public function loginPost(Validator $validator)
	{
		$data = [
			'email' => $this->request->post('email'),
			'password' => $this->request->post('password'),
		];

		$rules = array (
			'email' => 'required|email|exists:user',
			'password' => 'required|rangelength:6,30'
		);

		$messages = $this->lang->get('alert.login.validator');

		$validator = $validator->make($data, $rules, $messages);

		if (!$validator->isValid()) {

		}

		$user = $this->auth->loadByCredentials($data['email']);


	}

	public function register()
	{
		$this->response->view('register');
	}

	/**
	 *
	 * @param \Slinky\Validation\Validator $validator
	 * @return void
	 */
	public function registerPost(Validator $validator)
	{
		$data = [
			'email' => $this->request->post('email'),
			'password' => $this->request->post('password'),
			'password_repeat' => $this->request->post('password_repeat'),
			'firstname' => $this->request->post('firstname'),
			'lastname' => $this->request->post('lastname'),
		];

		$rules = array (
			'email' => 'required|email|unique:user',
			'password' => 'required|rangelength:6,30',
			'password_repeat' => 'required|equalto:password',
			'first_name' => 'required',
			'last_name' => 'required',
		);

		$messages = $this->language->get('alert.user.validator');

		$validator = $validator->make($data, $rules, $messages);

		if ($validator->fails()) {

		}
	}
}
