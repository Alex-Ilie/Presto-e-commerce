<x-layout>
    <x-masthead />
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex  col-md-6">
                <h2 class="myh2 inEvidenza">{{ __('ui.highlights') }}</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex p-0">
                <div class="col-6">
                    <div>
                        <a class="text-decoration-none" href="/category/show/3">
                            <div class=" cardEvidenza card text-bg-dark category-card">
                                <h3 class="myh5 display-5">{{ __('ui.furniture') }}</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 ">
                    <div>
                        <a class="text-decoration-none" href="/category/show/7">
                            <div class=" cardEvidenza2 card text-bg-dark category-card">
                                <h3 class="myh5 display-5">{{ __('ui.gardening') }}</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0">
                    <div class="row">
                        <div>
                            <a class="text-decoration-none" href="/category/show/8">
                                <div class=" cardOrizzontale card text-bg-dark category-card">
                                    <h3 class="myh3 display-5">{{ __('ui.hobby') }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <a class="text-decoration-none" href="/category/show/2">
                                <div class=" cardOrizzontale2 card text-bg-dark category-card">
                                    <h3 class="myh3 display-5">{{ __('ui.clothing') }}</h3>
                                </div>
                            </a> 
                        </div>
                    </div>
            </div>
         </div>
    </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 d-flex col-md-6">
                    <h2 class="myh2 inEvidenza">{{__('ui.allProducts')}}</h2>
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
