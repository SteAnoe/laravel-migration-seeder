<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
class TrainsController extends Controller
{
    public function getTrain(){
        $allTrains = Train::All();
	    return view('welcome', compact('allTrains'));
    }
}
