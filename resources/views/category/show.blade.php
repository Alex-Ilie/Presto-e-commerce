<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2 class="inEvidenza">{{ __('ui.viewCategory') }} @if (session('locale') == 'en'){{$category->en}} @endif @if (session('locale') == 'es'){{$category->es}} @endif @if (session('locale') == 'it'){{$category->name}} @endif</h2>
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
                    <h3 class="inEvidenza">{{ __('ui.noProducts') }}</h3>
                </div>
            @endif
        </div>
    </div>
</x-layout>