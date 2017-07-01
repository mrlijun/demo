<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','demo')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layout._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @include('shared.messages')
            @yield('content')
            @include('layout._footer')
        </div>
    </div>
</body>
</html>