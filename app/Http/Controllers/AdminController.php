<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    // Mengatur type

    public function type(){
        $type = Type::get();
        return view('admin.type', [
            'types' => $type
        ]);
    }

    public function createType(){
        return view('admin.type-create');
    }

    public function postType(){
        request()->validate([
            'type' => 'required'
        ]);

        Type::create([
            'type' => request('type')
        ]);

        return redirect('admin/type')->with('message', 'Successfully added new data');

    }

    public function destroyType(Type $type){
        $type->delete();
        return redirect('admin/type')->with('message', 'Successfully deleted data');
    }




    //Mengatur product

    public function product(){
        $product = Product::get();
        return view('admin.product', [
            'products' => $product
        ]);
    }

    public function createProduct(){
        $type = Type::get();
        $category = Category::get();
        return view('admin.product-create', [
            'types' => $type,
            'categories' => $category
        ]);
    }

    public function editProduct(Product $product){
        $type = Type::get();
        $category = Category::get();
        return view('admin.product-edit', [
            'products' => $product,
            'types' => $type,
            'categories' => $category
        ]);
    }

    public function postProduct(){

        request()->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'category' => 'required',
            'type' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $img = request()->file('img');
        $img_name = time(). "." .$img->getClientOriginalName();

        $upDir = 'cover';
        $img->move($upDir, $img_name);

        Product::create([
            'name' => request()->name,
            'desc' => request()->desc,
            'price' => request()->price,
            'category_id' =>  request()->category,
            'type_id' =>  request()->type,
            'img' => $img_name
        ]);

        return redirect('admin/blog')->with('success', 'Successfully Added New Data');
    }

    public function updateProduct(Product $product){

        request()->validate([
            'img' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);


        if(request()->hasfile('img')){

            File::delete('cover/'.$product->img);

            $img = request()->file('thumbnail');
            $img_name = time(). "." .$img->getClientOriginalName();

            $upDir = 'cover';
            $img->move($upDir, $img_name);

            $product->update([
                'name' => request()->name,
                'desc' => request()->desc,
                'price' => request()->price,
                'category_id' =>  request()->category,
                'type_id' =>  request()->type,
                'img' => $img_name
            ]);

        }else{

            $product->update([
                'name' => request()->name,
                'desc' => request()->desc,
                'price' => request()->price,
                'category_id' =>  request()->category,
                'type_id' =>  request()->type,
                'img' => $product->img
            ]);
        }

        return redirect('admin/product')->with('success', 'Data Updated Successfully');
    }



    //Mengatur category

    public function category(){
        $category = Category::get();
        return view('admin.category', [
            'categories' => $category
        ]);
    }

    public function createCategory(){
        return view('admin.category-create');
    }

    public function postCategory(){
        request()->validate([
            'category' => 'required'
        ]);

        Category::create([
            'category' => request('category')
        ]);

        return redirect('admin/category')->with('message', 'Successfully added new data');

    }

    public function destroyCategory(Category $category){
        $category->delete();
        return redirect('admin/category')->with('message', 'Successfully deleted data');
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

    public function updateBlog(Blog $blog){

        request()->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);


        if(request()->hasfile('thumbnail')){

            File::delete('thumbnail/'.$blog->thumbnail);

            $img = request()->file('thumbnail');
            $img_name = time(). "." .$img->getClientOriginalName();

            $upDir = 'thumbnail';
            $img->move($upDir, $img_name);

            $blog->update([
                'title' => request()->title,
                'paragraph' => request()->content,
                'thumbnail' => $img_name
            ]);

        }else{

            $blog->update([
                'title' => request()->title,
                'paragraph' => request()->content,
                'thumbnail' => $blog->thumbnail
            ]);
        }


        return redirect('admin/blog')->with('success', 'Data Updated Successfully');
    }

    public function destroyBlog(Blog $blog){
        $blog->delete();
        return redirect('admin/blog')->with('message', 'Successfully deleted data');
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
