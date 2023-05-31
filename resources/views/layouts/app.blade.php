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
        @include('includes.modal')
    </div>
    <footer class="row footer">
        @include('includes.footer')
    </footer>

    <script>
        $(document).ready(function() {
            $('.btn-delete').click(function() {
                $('#myModal').modal('show');
            });
        });
    </script>

</body>

</html>
