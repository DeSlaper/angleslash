<?php namespace angleslash\Http\Controllers;

use angleslash\Http\Requests;
use angleslash\Http\Controllers\Controller;
use angleslash\Http\Requests\SubFormRequest;

use angleslash\Sub;
use Illuminate\Http\Request;

class SubController extends Controller {

	public function show($name)
	{
		$sub = Sub::where('name', $name)->firstOrFail();

		return view('sub')
			->with('sub', $sub->name)
			->with('posts', $sub->posts()->paginate(15));
	}

	public function displayform()
	{
		return view('forms.subcreate')
			->with('title', 'Create Sub');
	}

	public function storesub(SubFormRequest $request)
	{
		$sub = new Sub;
		$sub->name = $request->get('name');
		$sub->owner_id = \Auth::id();
		$sub->save();

		return \Redirect::to('r/' . $request->get('name'));
	}
}
