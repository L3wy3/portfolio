<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
  public function index(){
      return view('hobbies.index');
  }
}
