<?php

namespace App\Controllers\Auth;

use CodeIgniter\HTTP\Request;
use App\Controllers\BaseController;
use App\Models\User;

class AuthenticateUser extends BaseController
{
	public function show(): string
	{
		return view('auth');
	}

	public function store()
	{
		$request = $this->request;

		$validator = $this->validate([
			'email' => ['label' => 'Email', 'rules' => 'required|valid_email'],
			'password' => ['label' => 'Password', 'rules' => 'required|min_length[8]|max_length[30]'],
		]);

		if (!$validator)
			return $this->response($this->validator, 422);

		$userQuery = $this->user->where('email', $request->email);
		if ($userQuery->countAllResults()) {
			$user = $userQuery->first();
			if (password_verify($request->password, $user->password)) {
				$this->session->set(['etracker-authenticated' => true]);
				return $this->response(['message' => 'Login Successful.', 'redirect' => route_to('home'), 'status' => 308]);
			}
		}
		return $this->response(['errors' => ['email' => 'User does not exist.']]);
	}

	public function delete()
	{
		$this->session->destroy();
		return redirect()->route('auth');
	}
}