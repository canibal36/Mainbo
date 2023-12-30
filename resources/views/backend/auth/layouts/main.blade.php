<!DOCTYPE html>
<html>

<head>
    @include('backend.auth.layouts.meta')
    @include('backend.auth.layouts.styles')
</head>

<body>
    @yield('content')
    @include('backend.auth.layouts.scripts')
</body>

</html>