<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function home() {
    $products = Product::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('welcome', compact('products'));
    }

    public function formRevisor()
    {
        return view('form-revisor');

    }

}
