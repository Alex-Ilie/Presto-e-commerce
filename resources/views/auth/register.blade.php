@vite(['resources/css/app.css', 'resources/js/app.js'])
<section class="vh-100 bg-image-vertical">
<center>
    <a href="{{ route('home') }}"><img src="./img/loghetto.png" class="loghetto" alt="logo2"></a>
</center>
  <div class="container py-5 h-75">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Registrati</h3>
            <form method="POST" action="{{route('register')}}">
                @csrf

            <div class="form-outline mb-4">
              <input name="name" type="text" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Nome</label>
            </div>

            <div class="form-outline mb-4">
                <input name="email" type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX-2">Email</label>
              </div>

            <div class="form-outline mb-4">
              <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <div class="form-outline mb-4">
                <input name="password_confirmation" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX-2">Conferma Password</label>
              </div>

            <button class="button-33" type="submit">Registrati</button>

            <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
