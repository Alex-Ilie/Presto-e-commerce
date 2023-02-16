<x-navbar/>
<x-navbar2/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="body py-5" >

<div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $product_to_check ? 'Annunci da revisionare:': 'Non ci sono annunci da revisionare.' }}</h2>
            </div>
        </div>
    </div>
    @if($product_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                @if ($product_to_check->images)
                    <div class="carousel-inner">
                        @foreach ($product_to_check->images as $image)
                            
                            <div class="carousel-item active @if($loop->first)active @endif">
                                <img src="{{Storage::url($image->path)}}" class="d-block w-100" alt="...">
                            </div>
                        @endforeach
                    </div>   
                    @else
                    <div class="carousel-inner">
                        <div class="carousel-item">
                        <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                        </div>
                    </div>

                @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6">
        <h2>{{ $product_to_check->title }}</h2>
        <h5>Prezzo: € {{$product_to_check->price}}</h5>
        <h5><i class="fa-solid fa-calendar-days"></i> {{$product_to_check->created_at->format('d/m/Y')}}</h5>
        <h5><i class="fa-solid fa-user"></i> {{$product_to_check->user->name}}</h5>
        <h5>Descrizione del prodotto:</h5>
        <h5>{{$product_to_check->description}}</h5>
       
        
        
    <div class="d-flex mx-auto">
        <div class="mx-2">
        <form  method="POST" action="{{route('revisor.accept_product', ['product' => $product_to_check])}}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form> 
        </div>
        <div class="mx-2" >
        <form  method="POST" action="{{route('revisor.reject_product', ['product' => $product_to_check])}}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>    

        </div> 

    </div>
            </div>
        </div>
    </div>
@endif

</div>
<x-footer/>