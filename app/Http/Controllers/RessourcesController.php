<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RessourcesController extends Controller
{
  public function show(){
      return view('ressources.show');
  }
}
