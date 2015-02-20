<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home() 
	{

		return view('static.home');

	}

	public function about() 
	{

		$name = 'Keiichi Lindley';

		return view('static.about', compact('name'));

	}

}
