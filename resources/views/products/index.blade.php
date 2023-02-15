<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Tutti i prodotti</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @if($products->isNotEmpty())
                @foreach($products as $product)
                    <div class="col-12 col-md-4 my-3">
                        <x-card-product :product="$product"/>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <h3>Non ci sono prodotti disponibili</h3>
                </div>
            @endif
        </div>
    </div>
</x-layout>