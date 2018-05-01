<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class WorkController extends Controller
{
  public function index(){
    $projects = Project::oldest()->get();
    $pagetitle = "blog";
    return view('work.index', compact('projects','pagetitle'));
  }
}
