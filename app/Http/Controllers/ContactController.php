<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
      $pagetitle = "contact";
      return view('contact.index', compact('pagetitle'));
    }
    public function store(Request $request){

      $admin->notify(ContactFormRequest $message, Admin $admin);
		// redirect the user back
		return redirect()->back()->with('message', 'thanks for the message! We will get back to you soon!');

    }
}
