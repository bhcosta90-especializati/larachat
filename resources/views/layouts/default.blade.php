<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset(mix('css/chat.min.css')) }}" rel="stylesheet">
    <title>@yield('title')</title>
    <meta name='csrf-token' value={{ csrf_token() }}/>
</head>
<body>
    <div id='app'>
        @yield('content')
    </div>

    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
</body>
</html>