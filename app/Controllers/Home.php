<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index.html');
	}

	public function cv()
	{
		return view('cv/index.html');
	}
}
