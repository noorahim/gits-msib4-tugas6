<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>MiniBos @yield('title')</title>
</head>

<body>
    <!-- As a link -->
    <nav class="navbar navbar-light bg-secondary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MiniBoss </a>
        </div>
    </nav>

    <div class="container">
        <h1>Selamat Datang Di @yield('title')</h1>
        @yield('content')
    </div>
</body>

</html>
