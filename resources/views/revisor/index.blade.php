<x-layout>
<div class="body py-5" >
    <div class="container mb-2">
        <div class="row">
            <div class="col-12">
                @if($product_to_check == null)
                    <h2>Non ci sono annunci da revisionare.</h2>
                @else
                    <h2>Annunci da revisionare</h2>
                @endif
            </div>
        </div>
    </div>
    @if($product_to_check)
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        @if ($product_to_check->images)
                            <div class="carousel-inner">
                                @foreach ($product_to_check->images as $image)
                                    <div class="carousel-item @if($loop->first)active @endif">
                                        <img src="{{$image->getUrl(600, 600)}}" class="d-block w-100" alt="...">
                                        <div class="col-12 d-flex ">
                                            <div class="col-md-6">
                                                <!-- <div class="card-body"> -->
                                                    <h5 class="tc-accent mt-3">Revisione immagini</h5>
                                                    <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                                    <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                                    <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                                    <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                                    <p>Contenuto ammiccante: <span class="{{ $image->racy }}"></span></p>
                                                <!-- </div> -->
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="tc-accent mt-3">Tags</h5>
                                                    <!-- <ul class=" list-unstyled"> -->
                                                    @if ($image->labels)
                                                    @foreach ($image->labels as $label)
                                                    <span class="">{{ $label }},</span>
                                                    @endforeach
                                                    @endif
                                                    <!-- </ul> -->
                                            </div>
                                        </div>
     
                                    </div>

                                @endforeach
                            </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        @endif
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
                <div class="col-12 col-md-6 boxWhite">
                    <h2 class="text-center mt-2">{{ $product_to_check->title }}</h2>
                    <h5 class="mt-4 price">{{ __('ui.productPrice') }} € {{$product_to_check->price}}</h5>
                    <h5 class="mt-4 ms-2"><i class="fa-solid fa-calendar-days"></i> {{$product_to_check->created_at->format('d/m/Y')}}</h5>
                    <h5 class="mt-4 ms-2"><i class="fa-solid fa-user"></i> {{$product_to_check->user->name}}</h5>
                    <h5 class="mt-4 ms-2">{{$product_to_check->category->name}}</h5>
                    <hr>
                    <div class="container cont-1">
                        <h5 class="mt-4">{{ __('ui.productDescription') }}</h5>
                        <h5 class="mt-4">{{$product_to_check->description}}</h5>
                    </div>
                    <div class="d-flex mx-auto">
                        <div class="mx-2">
                            <form  method="POST" action="{{route('revisor.accept_product', ['product' => $product_to_check])}}">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success shadow mt-5">{{ __('ui.btnAccept') }}</button>
                            </form>
                        </div>
                        <div class="mx-2" >
                            <form  method="POST" action="{{route('revisor.reject_product', ['product' => $product_to_check])}}">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger shadow mt-5">{{ __('ui.btnDecline') }}</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
    </div>
</x-layout>
