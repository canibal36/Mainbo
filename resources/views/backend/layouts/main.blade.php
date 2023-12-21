<!DOCTYPE html>
<html lang="es-BO" dir="ltr" class="light">

<head>
    @include('backend.layouts.meta')
    @include('backend.layouts.styles')
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        @include('backend.layouts.header')
        @include('backend.layouts.menu')
        @yield('content')
        @include('backend.layouts.footer')
        @include('backend.layouts.scripts')

    </main>
</body>

</html>