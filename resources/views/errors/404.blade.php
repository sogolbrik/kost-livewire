@extends('errors.main-error')
@section('error')
    <div class="container">

        <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <h1>404</h1>
            <h2>The page you are looking for doesn't exist.</h2>
            <a class="btn" href="{{ route('front.index') }}">Back to home</a>
            <img src="{{ asset('back-assets/assets/img/not-found.svg') }}" class="img-fluid py-5" alt="Page Not Found">
            <div class="credits">
                Developed by <a href="https://github.com/sogolbrik" target="_blank">Sogol</a>
            </div>
        </section>

    </div>
@endsection
