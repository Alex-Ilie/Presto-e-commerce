<x-layout>
    <div class="container-fluid mycolor">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center">
                <a href="{{ route('home') }}"><img src="\img\loghetto.png" class="loghetto mt-5" alt="logo2"></a>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <livewire:product-create/>
            </div>
        </div>
</x-layout>
