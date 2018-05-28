<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
  public function index(){
      $pagetitle = "hobbies";
      return view('hobbies.index', compact('pagetitle'));
  }
}
