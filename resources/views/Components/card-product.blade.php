<div class="card mycard" style="width: 18rem;">
  <img src="{{Storage::url($product->img)}}" class=" myimg card-img-top " alt="{{$product->title}}">
  <div class="card-body">
    <h5 class="card-title text-dark ">{{$product->title}}</h5>
    <b><p class="card-text">Categoria: </b><a href="{{route('showCategory', ['category' => $product->category])}}" class="text-decoration-none textprova">{{$product->category->name}}</a></p>
    <p class="card-text"><i class="fa-solid fa-euro-sign"></i> {{$product->price}}</p>
    <p class="card-text"><i class="fa-solid fa-calendar-days"></i> {{$product->created_at->format('d/m/Y')}}</p>
    <center>
      <a href="{{route('products.show', $product)}}" class="button-33">Dettagli</a>
    </center>
  </div>
</div>
