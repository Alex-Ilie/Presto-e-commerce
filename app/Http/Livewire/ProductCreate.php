<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ProductCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $price;
    public $description;
    public $img;
    public $category_id;
    public $user_id;


    protected $rules =
    [
        'title' => 'required|min:5|max:30',
        'price' => 'required',
        'description' => 'required|min:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(){

        $this->validate();


        if($this->img == null)
        {
            $img = "no-image.jpg";
        }else{
            $img = $this->img->store('public/products');
        }



        $product = Auth::user()->products()->create(
            [
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'user_id' => Auth::user()->id,
            'img' => $img,
            ]);
        $this->reset();
        return redirect()->route('products.index')->with('message', "Prodotto caricato!");




    }



    public function render()
    {
        $categories=Category::all();
        return view('livewire.product-create', compact('categories'));
    }
}
