<?php namespace angleslash\Http\Controllers;

use angleslash\Http\Requests;
use angleslash\Http\Controllers\Controller;

use angleslash\User;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function show($name)
	{
		$user = User::where('name', $name)->firstOrFail();

		return view('profile')
			->with('title', $user->name)
			->with('user', $user);
	}

}
