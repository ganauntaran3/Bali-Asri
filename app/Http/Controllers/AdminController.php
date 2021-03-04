<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }






    //Mengatur mailer

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



    //Mengatur about us

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

    public function postBlog(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $img = $request->file('thumbnail');
        $img_name = time(). "." .$img->getClientOriginalName();

        $upDir = 'thumbnail';
        $img->move($upDir, $img_name);

        Blog::create([
            'title' => $request->title,
            'paragraph' => $request->content,
            'thumbnail' => $img_name
        ]);

        return redirect('admin/blog')->with('success', 'Successfully Added New Data');
    }

    public function updateBlog(Request $request, $id){

        $blog = Blog::where('id', $id)->first();

        $this->validate($request, [
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if($request->hasfile('thumbnail')){

            File::delete('thumbnail/'.$blog->thumbnail);

            $img = $request->file('thumbnail');
            $img_name = time(). "." .$img->getClientOriginalName();

            $upDir = 'thumbnail';
            $img->move($upDir, $img_name);

            Blog::where('id', $id)->update([
                'title' => $request->title,
                'paragraph' => $request->content,
                'img' => $img_name
            ]);

        }else{

            Blog::where('id', $id)->update([
                'title' => $request->title,
                'paragraph' => $request->content,
                'thumbnail' => $blog->thumbnail
            ]);
        }


        return redirect('/view')->with('success', 'Data Updated Successfully');
    }




    //Mengatur administrator
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
            'username' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|min:8',

        ]);

        $user->update([
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect('admin/user')->with('message', 'Successfully updated data');

    }

    public function destroyUser(User $user){
        $user->delete();
        return redirect('admin/user')->with('message', 'Successfully deleted data');
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
