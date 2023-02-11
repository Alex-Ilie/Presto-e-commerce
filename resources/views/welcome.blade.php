<x-layout>
<x-masthead />
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Prodotti inseriti di recente</h2>
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
                            <a href="{{route('products.show', $product)}}">
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
