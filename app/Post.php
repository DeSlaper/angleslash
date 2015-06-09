<?php namespace angleslash;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $table = 'posts';
	protected $fillable = ['title', 'url', 'sub_id', 'user_id'];

	public function user()
	{
		return $this->belongsTo('angleslash\User');
	}

	public function sub()
	{
		return $this->belongsTo('angleslash\Sub');
	}

	public function votes()
	{
		return $this->hasMany('angleslash\PostVote');
	}
}
