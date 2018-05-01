<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
      $pagetitle = "contact";
      return view('contact.index', compact('pagetitle'));
    }
    public function store(){
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|confirmed'
      ]);
      // \Mail::to($user)->send(new Welcome($user));
    }
}
