<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
<<<<<<< HEAD
=======
    public function index()
    {
     return view('home.index');
    }
    public function contact()
    {
      return view('contact.contact');
    }
>>>>>>> 2143ba06f1d493ead94ad48002ac6e5daf5a15b6
}
