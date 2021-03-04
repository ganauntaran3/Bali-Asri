<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

class UserController extends Controller
{
    public function index(){
        return view('landing.home');
    }

    public function product(){
        return view('landing.product');
    }

    public function service(){
        return view('landing.service');
    }

    public function contact(){
        return view('landing.contact');
    }

    public function about(){
        return view('landing.about');
    }

    public function postContact(){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::create([
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('message'),
        ]);

        return back()->with('success', 'Message Successfully Sended!');

    }
}
