<!DOCTYPE html>
<html>

<head>
    @include('backend.auth.layouts.meta')
    @include('backend.auth.layouts.styles')
</head>

<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    @include('backend.auth.layouts.scripts')
</body>

</html>