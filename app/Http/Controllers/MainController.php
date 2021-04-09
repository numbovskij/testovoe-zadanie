<?php

namespace App\Http\Controllers;

use App\Models\Lead;

use Illuminate\Http\Request;

class MainController extends Controller
{

	public function index()
	{
		$users = Lead::all();

		return view('home', compact('users'));
	}


}
