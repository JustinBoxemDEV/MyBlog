<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
	protected $fillable = [
		'title', 'content', 'authorID',
	];

	public function User() {
		return $this->belongsTo(User::class, 'authorID');
	}
}
