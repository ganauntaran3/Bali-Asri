<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function contact(){
        $mail = Mail::get();
        return view('admin.contact', [
            'mails' => $mail,
        ]);
    }

    public function destroyMail(Mail $mail){
        $mail->delete();
        return redirect()->back();
    }

    public function blog(){
        $blog = Blog::get();
        return view('admin.blog', [
            'blogs' => $blog,
        ]);
    }

    public function createBlog(){
        return view('admin.blog-create');
    }

    public function editBlog(Blog $blog){
        return view('admin.blog-edit', [
            'blogs' => $blog
        ]);
    }




    public function user(){
        $user = User::get();
        return view('admin.user', [
            'users' => $user,
        ]);
    }

    public function postUser(){
        request()->validate([
            'username' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',

        ]);

        User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect('admin/user')->with('message', 'Successfully added new data');

    }

    public function updateUser(User $user){
        request()->validate([
            'name' => 'required|unique:bands,name,'. $band->id,
            'thumbnail' => 'nullable|image|mimes:png,jpg',
            'genres' => 'required|array'
        ]);

        return back()->with('success', 'Band successfully updated');

    }


    public function createUser(){
        return view('admin.user-create');
    }

    public function editUser(User $user){
        return view('admin.user-edit', [
            'users' => $user
        ]);
    }



}
