@vite(['resources/css/app.css', 'resources/js/app.js'])
<section class="vh-100 bg-image-vertical">
  <center>
      <a href="{{ route('home') }}"><img src="/img/loghetto.png" class="loghetto mt-5" alt="logo2"></a>
  </center>
  <div class="container py-5 h-75">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">{{ __('ui.becomeRevisor') }}</h3>
            <form method="POST" action="{{route('become.revisor')}}">
                @csrf
              <div class="form-outline mb-4">
                <input value="{{Auth::user()->name}}" name="name" type="text" placeholder="{{ __('ui.userName') }}" class="form-control form-control-lg" />
              </div>
              <div class="form-outline mb-4">
                <input value="{{Auth::user()->email}}" name="email" type="email" placeholder="E-mail" id="typeEmailX-2" class="form-control form-control-lg" />
              </div>
              <button class="nav-link px-2 text-light button-33">{{ __('ui.sendRequest') }}</button>
              <hr class="my-4">
              <a href="{{ route('home') }}" class="button-35" type="submit" >{{ __('ui.btnHome') }}</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
