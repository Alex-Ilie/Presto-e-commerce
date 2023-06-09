<x-layout>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="body py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        @foreach($product->images as $image)
                            <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{$image->getUrl(600, 600)}}" class="d-block w-100 rounded" alt="...">
                            </div>
                        @endforeach
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
                <div class="col-12 col-md-6 boxWhite">
                    @if(Auth::user()->is_revisor)
                        <h2 class="mt-4 ms-2">{{$product->title}}</h2>
                        <h5 class="mt-4 ms-2 price">€ {{$product->price}}</h5>
                        <h5 class="mt-4 ms-2"><i class="fa-solid fa-calendar-days"></i> {{$product->created_at->format('d/m/Y')}}</h5>
                        <h5 class="mt-4 ms-2"><i class="fa-solid fa-user"></i> {{$product->user->name}}</h5>
                        <h5 class="mt-4 ms-2">{{ __('ui.productDescription') }}</h5>
                        <div class="textbox cont-1">
                        <h5 class="mt-4 ms-2">{{$product->description}}</h5>
                        </div>
                        <form class="mt-5 ms-3"  method="POST" action="{{route('revisor.rivedi_product', $product)}}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow">{{ __('ui.btnSendinRevision') }}</button>
                        </form>
                    @else
                        <h2 class="mt-4 ms-2">{{$product->title}}</h2>
                        <h5 class="mt-4 ms-2 price">€ {{$product->price}}</h5>
                        <h5 class="mt-4 ms-2"><i class="fa-solid fa-calendar-days"></i> {{$product->created_at->format('d/m/Y')}}</h5>
                        <h5 class="mt-4 ms-2"><i class="fa-solid fa-user"></i> {{$product->user->name}}</h5>
                        <h5 class="mt-4 ms-2">{{ __('ui.productDescription') }}</h5>
                        <div class="cont-1">
                            <h5 class="mt-4 ms-2">{{$product->description}}</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
