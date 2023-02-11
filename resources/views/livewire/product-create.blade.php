
<section class="my-bg-image-vertical">


  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="my-form card shadow-2-strong">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Inserisci prodotto</h3>
            <form wire:submit.prevent="store">

            <div class="form-outline mb-4">
              <input wire:model="title" type="text" class="form-control form-control-lg" />
              @error('title')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              <label class="form-label">Nome prodotto</label>
            </div>

            <div class="mb-3">
                <label class="form-label">Categorie</label>
                <select class="form-select" wire:model="category_id" aria-label="Default select example">
                <option value="">Scegli la categoria</option>

                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-outline mb-4">
                <textarea wire:model="description" class="form-control form-control-lg" id="" cols="30" rows="10"></textarea>
                @error('description')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
                <label class="form-label">Descrizione</label>
              </div>

              <div class="form-outline mb-4">
                <label class="form-label">Immagine di copertina</label>
                <input wire:model="img" class="form-control form-control-lg" type="file" >
                @error('img')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-outline mb-4">
                <input wire:model="price" type="number" class="form-control form-control-lg" />
                @error('price')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
                <label class="form-label">Prezzo</label>
              </div>


            <button class="button-33" role="button" type="submit">Inserisci prodotto</button>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

