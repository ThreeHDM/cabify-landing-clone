<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="logo">
                <img src="{{ url('img/logo.png') }}" border="0">
            </div>
        </div>

            @yield('content')
        
    </div>
</body>

</html>