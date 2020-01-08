<!doctype html>
<html>
<head>
</head>
<body>
<div class="container">
    <header class="row">
        @include('layouts.navbar')
    </header>
    <div id="main" class="row">
        @yield('content')
    </div>
    <footer class="row">
        @include('layouts.footer')
    </footer>
</div>
</body>
