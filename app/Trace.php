<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Trace extends Model {

	protected $hidden = ['id','user_id','trace_group_id'];

}
