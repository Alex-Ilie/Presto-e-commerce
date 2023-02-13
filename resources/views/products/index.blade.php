<x-layout>
    <center>
        <div classs="container p-5 mt-4">
            @if (session('message'))
	        <div class="row no-gutters ">
		     <div class="col-12">
			        <div class="alert alert-success fade show" role="alert">
			 	            <h4 class="alert-heading">{{ session('message') }}</h4>
			  	            <p>This is an alert within a column. The column can be made any size at different viewpoints.</p>
			        </div>
		        </div>
	        </div>
        </div>       
                @endif
    </center>
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