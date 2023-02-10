<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">

        <a href="{{ route('home') }}"><img src="./img/loghetto.png" class="loghetto" alt="logo2"></a>
        <h2>Inserisci prodotto</h2>

        </div>
    </div>
</div>

        <div class="row mt-3">

                <livewire:product-create/>

        </div>
    </div>

</x-layout>
