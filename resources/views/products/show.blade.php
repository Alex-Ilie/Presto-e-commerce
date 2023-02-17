<x-layout>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="body py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="{{Storage::url($product->img)}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="{{Storage::url($product->img)}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="{{Storage::url($product->img)}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
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
                    @if(Auth::user()->is_revisor)
                        <h2>{{$product->title}}</h2>
                        <h5>€ {{$product->price}}</h5>
                        <h5><i class="fa-solid fa-calendar-days"></i> {{$product->created_at->format('d/m/Y')}}</h5>
                        <h5><i class="fa-solid fa-user"></i> {{$product->user->name}}</h5>
                        <h5>Descrizione:</h5>
                        <div class="textbox">
                        <h5>{{$product->description}}</h5>
                        </div>
                        <form  method="POST" action="{{route('revisor.rivedi_product', $product)}}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow">Rimanda in revisione</button>
                        </form>
                    @else
                        <h2>{{$product->title}}</h2>
                        <h5>€ {{$product->price}}</h5>
                        <h5><i class="fa-solid fa-calendar-days"></i> {{$product->created_at->format('d/m/Y')}}</h5>
                        <h5><i class="fa-solid fa-user"></i> {{$product->user->name}}</h5>
                        <h5>Descrizione del prodotto:</h5>
                        <h5>{{$product->description}}</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
