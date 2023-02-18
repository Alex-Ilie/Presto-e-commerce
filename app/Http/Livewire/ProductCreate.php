<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $price;
    public $description;
    public $img;
    public $images = [];
    public $temporary_images;
    public $category_id;
    public $user_id;
    public $products;


    protected $rules =
    [
        'title' => 'required|min:5|max:30',
        'price' => 'required',
        'description' => 'required|min:20',
        'images.*'=> 'image|max:1024',
        'temporary_images.*'=> 'image|max:1024',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images-*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1mb',
        'images.image' => 'L\'immagine dev\'essere massimo di 1mb',
    ];

    public function updatedTemporaryImages()
    {
        if($this->validate([
            'temporary_images.*'=> 'image|max:1024',
        ])){
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }




    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(){

        $this->validate();

        $product = Auth::user()->products()->create(
            [
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'user_id' => Auth::user()->id,
            'images' => $this->images,
            ]);

            if(count($this->images)){
                foreach ($this->images as $image){
                    /* $product->images()->create(['path' => $image->store('images', 'public')]); */
                    $newFileName = "products/{$this->product->id}";
                    $newImage = $this->product->images()->create(['path' => $image->store($newFileName, 'public')]);
                    dispatch(new ResizeImage($newImage->path, 300 , 300));
                }
                File::deleteDirectory(storage_path('/app/livewire-tmp'));
            }

        $this->reset();
        return redirect()->route('products.index')->with('message', "Prodotto caricato!");

        // $this->product = Auth::user()->products()->create($this->validate());
        //  if(count($this->images)){
        //      foreach ($this->images as $image){
        //          $this->product->images()->create(['path' => $image->store('images', 'public')]);
        //      }
        //  }
        // session()->flash('message', 'Articolo inserito con successo, sarà pubblicato dopo la revisione');
        $this->cleanForm();


        // if($this->img == null)
        // {
        //     $img = "no-image.jpg";
        // }else{
        //     $img = $this->img->store('public/products');
        // }
    }
    
    public function cleanForm()
        {
        $this->title = '';
        $this->price = '';
        $this->description = '';
        $this->img = '';
        $this->images = [];
        $this->temporary_images =[];
        $this->category_id = '';
        $this->form_id = rand();
        $this->user_id = '';
        }



    public function render()
    {
        $categories=Category::all();
        return view('livewire.product-create', compact('categories'));
    }
}
