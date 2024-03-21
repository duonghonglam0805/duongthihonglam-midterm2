<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Furni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    @yield('css')
</head>
<body>
    <header>
        <div class="header">
            @include('clients.blocks.header')
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('clients.blocks.footer')
    </footer>
    {{-- <div class="row">
        <div class="col-md-1">
            @section('sidebar')
                @include('blocks.sidebar')
            @show
        </div>
        <div class="col-md-11 bg-light">
            @yield('header')
            @yield('content')
        </div> --}}
    </div>
    <script src="{{asset('assest/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assest/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assest/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>