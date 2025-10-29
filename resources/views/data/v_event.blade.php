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
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Forms</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Nama Tempat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Titik Lokasi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto Tempat</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
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
