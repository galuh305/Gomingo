@extends('layout.dashboard')

@section('content')

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assetsadmin/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('assetsadmin/css/styles.min.css') }}" />
</head>

<body>
  <div class="container-fluid py-4">
    <h1 class="mb-4">Modernize Dashboard</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <p>Selamat datang di halaman dashboard admin Modernize Free.</p>
        </div>
    </div>
</div>
  
  <script src="{{ asset('assetsadmin/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assetsadmin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assetsadmin/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assetsadmin/js/app.min.js') }}"></script>
  <script src="{{ asset('assetsadmin/libs/simplebar/dist/simplebar.js') }}"></script>
</body>
@endsection
</html>