<section class="my-bg-image-vertical">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="my-form card shadow-2-strong">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">Inserisci il tuo annuncio:</h3>
            <form wire:submit.prevent="store">
              <div class="form-outline mb-4">
                <input wire:model="title" type="text" placeholder="Nome del prodotto" class="form-control form-control-lg" />
                @error('title')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <select class="form-select" wire:model="category_id" aria-label="Default select example">
                  <option value="">Scegli la categoria</option>
                      @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                </select>
              </div>
              <div class="form-outline mb-4">
                <textarea wire:model="description" placeholder="Descrizione del prodotto" class="form-control form-control-lg" id="" cols="30" rows="10"></textarea>
                @error('description')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-outline mb-4">
                <input wire:model="temporary_images" multiple class="form-control form-control-lg shadow @error('temporary_images.*') is invalid @enderror" name="images" type="file" >
                @error('temporary_images')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              @if (!empty($images))

                <div class="row">
                 <div class="col-12">
                    <p>Photo preview:</p>
                    <div class="row border border-4 border-info rounded shadow py-4 mb-3">
                    @foreach ($images as $key => $image)
                      <div class="col my-3">
                        <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                      </div>
                   @endforeach
                    </div>
                  </div>
                </div>
              @endif
              

              <div class="form-outline mb-4">
                <input wire:model="price" type="number" placeholder="Prezzo" class="form-control form-control-lg" />
                @error('price')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <button class="button-33" role="button" type="submit">Inserisci prodotto</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

