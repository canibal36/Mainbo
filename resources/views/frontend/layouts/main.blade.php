<!DOCTYPE html>
<html lang="es-BO" dir="ltr" class="light">

<head>
    @include('frontend.layouts.meta')
    @include('frontend.layouts.styles')
</head>

<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.scripts')
</body>

</html>