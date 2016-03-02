<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CarsController extends Controller
{

	public function __construct()
	{
	    $this->middleware('auth');
	}

	public function index() {
		return view('cars.index');	
		
	}

    public function postCars() {
    	return "1";
    }
}
