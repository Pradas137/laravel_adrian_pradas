<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrartionController extends Controller
{
     public function create()
    {
        return view('registration.create');
    }
}
