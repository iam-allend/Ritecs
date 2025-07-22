<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
</head>
<body>
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
    @include('partials.endbody')
</body>
</html>
