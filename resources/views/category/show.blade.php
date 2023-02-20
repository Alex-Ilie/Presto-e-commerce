<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>{{ __('ui.viewCategory') }} {{$category->name}}</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @if($category->products->isNotEmpty())
                @foreach($category->products as $product)
                    <div class="col-12 d-flex justify-content-center col-md-4 my-3">
                        <x-card-product :product="$product"/>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <h3>{{ __('ui.noProducts') }}</h3>
                </div>
            @endif
        </div>
    </div>
</x-layout>