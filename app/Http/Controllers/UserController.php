<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Mail;
use App\Models\Product;

class UserController extends Controller
{
    public function index(){
        $product = Product::latest()->get();
        return view('landing.home', [
            'products' => $product
        ]);
    }

    public function detailProduct(Product $product){
        $product = Product::first();
        return view('landing.product-detail', [
            'products' => $product
        ]);
    }

    public function product(){
        $product = Product::latest()->get();
        $category = Category::get();
        $productD = Product::where('type_id', '1')->get();
        $productB = Product::where('type_id', '2')->get();
        return view('landing.product', [
            'productD' => $productD,
            'productB' => $productB,
            'products' => $product,
            'categories' => $category
        ]);
    }

    public function category(Category $category){
        $productC = Product::where('category_id', $category->id)->get();
        $productD = Product::where('type_id', '1')->get();
        $productB = Product::where('type_id', '2')->get();
        $category = Category::get();
        return view('landing.category', [
            'productC' => $productC,
            'categories' => $category,
            'productD' => $productD,
            'productB' => $productB,
        ]);
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

        return back()->with('message', 'Message Successfully Sended!');

    }


}
