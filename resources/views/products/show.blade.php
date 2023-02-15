<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>{{$product->title}}</h2>
        </div>
    </div>
    <div class="container my-5">
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
                <div class="col-12 col-md-6">
                    <form  method="POST" action="{{route('revisor.rivedi_product', $product)}}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow">Rimanda in revisione</button>
                    </form>

                <h3>Descrizione:</h3>
                <p>{{$product->description}}</p>
                <p>Prezzo: € {{$product->price}}</p>
                <p>Inserito da: {{$product->user->name}}</p>
                <p>Inserito il: {{$product->created_at->format('d/m/Y')}}</p>
                @else
                <h3>Descrizione:</h3>
                <p>{{$product->description}}</p>
                <p>Prezzo: € {{$product->price}}</p>
                <p>Inserito da: {{$product->user->name}}</p>
                <p>Inserito il: {{$product->created_at->format('d/m/Y')}}</p>
                @endif
            </div>
        </div>
    </div>
</x-layout>
