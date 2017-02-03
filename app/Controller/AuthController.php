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
}
