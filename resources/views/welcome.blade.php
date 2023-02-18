<x-layout>
    <x-masthead />
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="myh2">{{ __('ui.highlights') }}</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach($categories as $category)
                <div class="col-12 col-md-2 m-2">
                    <a href="{{route('showCategory', $category)}}">
                        <div class="card text-bg-dark category-card">
                            @if($category->name == 'Elettronica')
                                <img src="{{Storage::url($category->image)}}" class="card-img" alt="{{$category->name}}">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <h5 class="card-title">{{$category->name}}</h5>
                                </div>
                            @else
                                <img src="https://picsum.photos/200" class="card-img" alt="{{$category->name}}">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <h5 class="card-title">{{$category->name}}</h5>
                                </div>
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="myh2">{{__('ui.allProducts')}}</h2>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach($products as $product)
                                <div class="swiper-slide">
                                    <a href="{{route('products.show', $product)}}" class="text-decoration-none text-dark">
                                        <x-card-product :product="$product"/>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                            <br>
                            <br>
                            <br>
                        <div class="swiper-pagination mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
