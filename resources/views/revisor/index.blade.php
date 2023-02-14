<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $product_to_check ? 'Ecco l\'annuncio da revisionare': 'Non ci sono annunci da revisionare' }}</h1>
            </div>
        </div>
    </div>
    @if($product_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{Storage::url($product_to_check->img)}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{Storage::url($product_to_check->img)}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{Storage::url($product_to_check->img)}}" class="d-block w-100" alt="...">
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
        </div>
    </div>
    <div class="col-12 col-md-6">
        <p>{{ $product_to_check->title }}</p>
        <h3>Descrizione:</h3>
        <p>{{$product_to_check->description}}</p>
        <p>Prezzo: € {{$product_to_check->price}}</p>
        <p>Inserito da: {{$product_to_check->user->name}}</p>
        <p>Inserito il: {{$product_to_check->created_at->format('d/m/Y')}}</p>
    
            <div class="col-12 col-md-6">
                <form  method="POST" action="{{route('revisor.accept_product', ['product' => $product_to_check])}}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form> 
                
                <form  method="POST" action="{{route('revisor.reject_product', ['product' => $product_to_check])}}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>    
            </div>
    </div>
@endif
</x-layout>