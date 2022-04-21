<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>@yield('title')</title>

    {{-- style --}}
    @stack('prepand-style')
    @include('includes.usr_style')
    @stack('addon-style')

</head>

<body>
    {{-- navbar --}}
    @include('includes.navbar')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')


    {{-- script --}}
    @stack('prepand-script')
    @include('includes.usr_script')
    @stack('addon-script')


</body>

</html>
