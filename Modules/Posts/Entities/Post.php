<?php

namespace Modules\Posts\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public $table = 'Ps_posts';
    protected $fillable = ['title','slug','body'];
}
