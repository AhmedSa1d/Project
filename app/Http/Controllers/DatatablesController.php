<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\User;
class DatatablesController extends Controller
{
	public function getIndex(){

        return view('datatables.index');
    }
    public function anyData(){

	    return Datatables::of(User::query())->make(true);
	}
}
