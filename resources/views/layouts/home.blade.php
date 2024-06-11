<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    @include('components.style')
</head>

<body>
    @include('components.home.navbar')

    @yield('content')

    @include('components.script')
</body>

</html>
