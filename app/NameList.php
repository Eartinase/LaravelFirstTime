<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NameList extends Model
{
	protected $table = 'name';


	public function index()
	{
		foreach ($name as $n) {
			echo $n->Name;
		}
	}

}
