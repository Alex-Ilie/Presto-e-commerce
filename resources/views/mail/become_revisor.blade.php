<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    <div>
        <h1>{{ __('ui.revisorRequest') }}</h1>
        <h2>{{ __('ui.revisorData') }}</h2>
        <p>Nome: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>{{ __('ui.makeRevisor') }}</p>
        <a href="{{ route('make.revisor', compact('user')) }}">{{ __('ui.btnRevisor') }}</a>
    </div>
</body>
</html>
