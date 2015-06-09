<?php namespace angleslash\Http\Requests;

use angleslash\Http\Requests\Request;

class SubFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|min:3|max:20|alpha_dash|unique:subs'
		];
	}

}
