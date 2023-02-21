<x-layout>
  <section class="vh-100 bg-image-vertical">
  <center>
    <a href="{{ route('home') }}"><img src="/img/loghetto.png" class="loghetto mt-5" alt="logo"></a>
  </center>
  <div class="container h-75">
    <div class="row d-flex justify-content-center align-items-center h-75 ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">{{ __('ui.login') }}</h3>
            <form method="POST" action="{{route('login')}}">
              @csrf
              <div class="form-outline mb-4">
                <input name="email" type="email" id="typeEmailX-2" placeholder="Email" class="form-control form-control-lg" />
              </div>
              <div class="form-outline mb-4">
                <input name="password" type="password" id="typePasswordX-2" placeholder="Password" class="form-control form-control-lg" />
              </div>
              <button class="button-33" type="submit">{{ __('ui.login') }}</button>
              <hr class="my-4">
              <div>
                <a href="{{ route('home') }}" class="button-35" type="submit" >{{ __('ui.btnHome') }}</a>
              </div>
              <div class="mt-3">
                <a href="{{ route('register') }}" class="text-decoration-none">{{ __('ui.accountRegister') }}</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</x-layout>
