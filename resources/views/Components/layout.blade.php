<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <x-navbar />
    <x-navbar2 />


<div class="min-vh-100">
    {{ $slot }}
</div>



    <x-footer />
    @livewireScripts
</body>
</html>
