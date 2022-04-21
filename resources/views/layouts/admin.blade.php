<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="keywords" content="admin,dashboard">
    <title>@yield('title')</title>

    {{-- style --}}
    @stack('prepand-style')
    @include('includes.adm_style')
    @stack('addon-style')

</head>

<body>
    {{-- navbar --}}
    @include('sweetalert::alert')
    @include('includes.adm_sidebar')


    {{-- script --}}
    @stack('prepand-script')
    @include('includes.adm_script')
    @stack('addon-script')
</body>

</html>
