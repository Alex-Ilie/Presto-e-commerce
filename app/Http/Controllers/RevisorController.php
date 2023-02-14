<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $product_to_check = Product::where('is_accepted', null)->first();

        return view('revisor.index', compact('product_to_check'));
    }


    public function acceptProduct(Product $product)
    {
        $product->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }


    public function rejectProduct(Product $product){
        $product->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');

    }

    public function becomeRevisor()
    {
        Mail::to('makeRevisor@example.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti, hai chiesto di diventare revisore');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('heckhack_gruppo01_presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti, L\'utente é diventato revisore');
    }






}
