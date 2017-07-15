<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', config('app.name'))</title>

    <!-- Fonts -->
    {{-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'> --}}
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @yield('scripts', '')

    <!-- Global Droner Object -->
    <script>
        window.Droner = <?php echo json_encode([ 'AppData' => App\AppData::loadInitialData() ]); ?>;
    </script>
</head>
<body>
    <div id="droner-app" v-cloak>
        <!-- Navigation -->
        @if (Auth::check())
            @include('nav.user')
        @else
            @include('nav.guest')
        @endif
        <!-- Main Content -->
        @yield('content')
    </div>

    <!-- JavaScript -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
