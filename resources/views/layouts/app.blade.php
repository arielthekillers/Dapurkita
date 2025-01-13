<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'News Frontpage')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>

</head>
<body>
    @include('components.topbar')
    @include('components.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @yield('main-content')
            </div>
            <div class="col-md-4">
                @include('components.sidebar')
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Algoritma Kaltim. All rights reserved.</p>
    </footer>
</body>
</html>
