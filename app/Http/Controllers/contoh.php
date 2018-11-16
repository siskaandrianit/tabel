<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contoh extends Controller
{
    //
	public function index(){
		//code
	return view('index');
	}
	function create(){
			echo 'Ini controller contoh fx create';
	}
	function tambah(){
		echo 'tambah';
	}
	
}
