<x-layout>
    <x-masthead />
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center col-md-6">
                <h2 class="myh2">{{ __('ui.highlights') }}</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-around align-items-center h-card-evidenza">
            @foreach($categories as $category)
                <div class="col-12 d-flex justify-content-center mt-0 col-md-2 m-2 mb-2 mt-3">
                    <a href="{{route('showCategory', $category)}}">
                        <div class=" cardEvidenza card text-bg-dark category-card">
                            @if($category->name == 'Elettronica')
                                <img src="{{Storage::url('imgsProdotti\Elettronica\iPhone\iphone.jpg')}}" class=" card-img" alt="{{$category->name}}">
                                <div class=" cardEvidenza card-img-overlay d-flex align-items-center justify-content-center">
                                    <h5 class=" cardEvidenza card-title">{{$category->name}}</h5>
                                </div>
                            @else
                                <img src="https://picsum.photos/200" class="card-img" alt="{{$category->name}}">
                                <div class=" cardEvidenza card-img-overlay d-flex align-items-center justify-content-center">
                                    <h5 class=" cardEvidenza card-title">{{$category->name}}</h5>
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
                <div class="col-12 d-flex justify-content-center col-md-6">
                    <h2 class="myh2">{{__('ui.allProducts')}}</h2>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
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
