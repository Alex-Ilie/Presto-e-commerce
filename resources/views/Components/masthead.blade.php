<header class="masthead">
  <div class="container-fluid h-100 w-100">
    <div class="row h-100 align-items-center justify-content-right">
      <div class="col-12 col-md-6">
      </div>
      <div class="col-12 col-md-6 text-center">
        <h1 class="my-text display-2 fw-bold">Presto.it</h1>
        <p class="my-text2 fs-2 fw-bold">I migliori prodotti a portata di click</p>
        <div class="">
          @if (Auth::user() ==null )
          <a href="{{route('login')}}"> <button class="button-34 me-5">Vendi</button></a>
          @else 
          <a href="{{route('products.create')}}" class="text-decoration-none">
            <button class="button-34 me-5">Vendi</button>
          </a>
          @endif
          <a href="{{route('products.index')}}" class="text-decoration-none">
            <button class="button-34">Compra</button>
          </a>
            
    </div>
      </div>
    </div>
  </div>
  
  
</header>