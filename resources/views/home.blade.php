@extends("layout.main")

@section('title', 'Home')

@section('content')
    <div class="row col-12">
        <h1>Halaman Utama</h1>
    </div>
    <div class="row col-md-6 col-12 d-flex">
        <a href="/login" class="btn btn-outline-primary w-auto me-2" role="button">Login</a>
        <a href="/register" class="btn btn-primary w-auto" role="button">Register</a>
    </div>
@endsection
