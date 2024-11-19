<?php

namespace App\Controllers\Auth;

use CodeIgniter\HTTP\Request;
use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;
use Exception;

class RegisterUser extends BaseController
{

	public function store()
	{
		$request = $this->request;

		$validator = $this->validate([
			'first_name' => ['label' => 'First Name', 'rules' => 'required|min_length[2]|max_length[255]'],
			'last_name' => ['label' => 'Last Name', 'rules' => 'required|min_length[2]|max_length[255]'],
			'email' => ['label' => 'Email', 'rules' => 'required|valid_email|is_unique[users.email]'],
			'password' => ['label' => 'Password', 'rules' => 'required|min_length[8]|max_length[30]'],
		]);

		if (!$validator)
			return $this->response($this->validator, 422);

		$password = password_hash($request->password, PASSWORD_BCRYPT);

		try {
			$this->user->save([
				'first_name' => $request->first_name,
				'last_name' => $request->last_name,
				'email' => $request->email,
				'password' => $password,
			]);
			$this->session->set(['etracker-authenticated' => true]);
			return $this->response(['message' => 'Account registration successful.', 'status' => 308, 'redirect' => route_to('home')]);
		} catch (Exception $exception) {
			// return $this->response(['message' => $exception->getMessage()], 500);
			return $this->response(['message' => 'An error occurred: Unable to store user data.'], 500);
		}
	}
}