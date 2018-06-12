<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class WorkController extends Controller
{
  public function indexx(Request $request){
    $projects = Project::oldest()->get();
    $pagetitle = "work";
    $tag = $request->query('tag');
    $agency = $request->query('agency');
    $year = $request->query('year');
    return view('work.index', compact('projects', 'year', 'tag', 'agency', 'pagetitle'));
  }
}
