<div class="card" style="width: 18rem;">
  <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="{{$product->title}}">
  <div class="card-body">
    <h5 class="card-title">{{$product->title}}</h5>
    <p class="card-text">Categoria: <a href="{{route('showCategory', ['category' => $product->category])}}">{{$product->category->name}}</a></p>
    <p class="card-text">€ {{$product->price}}</p>
    <p class="card-text">{{$product->created_at->format('d/m/Y')}}</p>
    <a href="{{route('products.show', $product)}}" class="button-33">Dettagli</a>
  </div>
</div>