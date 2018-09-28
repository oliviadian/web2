<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class web extends Controller{
   function index(){
	   echo 'controller web fx index';
   }
   function tambah(){
	    return view('halaman1');
   }
}
