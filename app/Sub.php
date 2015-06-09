<?php namespace angleslash;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model {

	protected $table = 'subs';
	protected $fillable = ['name', 'owner_id'];

	public function posts()
	{
		return $this->hasMany('angleslash\Post');
	}

	public function owner()
	{
		return $this->belongsTo('angleslash\User');
	}
}
