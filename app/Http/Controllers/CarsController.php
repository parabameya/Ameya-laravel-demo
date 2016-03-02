<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CarsController extends Controller
{

	public function index() {
		$name = "Ameya";
		return view('cars.index', compact('name'));
	}

    public function postCars() {
    	return "1";
    }
}
