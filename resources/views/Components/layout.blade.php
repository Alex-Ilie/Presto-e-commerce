<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Presto.it' }}</title>
</head>
<body>
    <x-navbar />
    <x-navbar2 />
    @if (session('access.denied'))
        <div class="alert alert-danger mb-0">
            {{ session('access.denied') }}
        </div>
    @endif
    @if (session('message'))
        <div class="row no-gutters ">
            <div class="col-12">
                <div class="alert alert-success fade show" role="alert">
                    <h4 class="alert-heading">{{ session('message') }}</h4>
                </div>
            </div>
        </div>
    @endif
    <div class="min-vh-100">
        {{ $slot }}
    </div>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    @livewireScripts
</body>
</html>
