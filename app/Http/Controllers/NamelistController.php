<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamelistController extends Controller
{
	public function index()
	{
		
		$data['data'] = \DB::table('name')->get();

		return view('welcome', $data);
		//return view('welcome',$n);
	}
}
