<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamelistController extends Controller
{
	public function index()
	{
		$name = \DB::query('select * from name');
		foreach ($name as $key => $n) {
			$var = $n->name;
		}
		return view('welcome',compact('var'));
	}
}
