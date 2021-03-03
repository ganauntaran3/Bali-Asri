<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('landing.contact');
    }

    public function dashboard(){
        return view('admin.contact');
    }

}
