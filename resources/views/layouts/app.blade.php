<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body>
    <header class="row">
        @include('includes.header')
    </header>
    <div id="main" class="container">
        @yield('content')
    </div>
    <footer class="row footer">
        @include('includes.footer')
    </footer>
</body>

</html>
