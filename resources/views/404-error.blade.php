@extends('layouts.blank')
@section('title')
Oops! the page not found
@endsection
@section('content')

    <div class="container min-vh-100 d-flex justify-content-center
      align-items-center">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-12">
          <!-- content -->
          <div class="text-center">
            <div class="mb-3">
              <!-- img -->
              <img src="{{ Vite::asset('resources/images/error/404-error-img.png') }}" alt="" />
            </div>
            <!-- text -->
            <h1 class="display-4 fw-bold">Oops! the page not found.</h1>
            <p class="mb-4">Or simply leverage the expertise of our consultation
              team.</p>
              <!-- button -->
            <a href="/" class="btn btn-primary">Go Home</a>
          </div>
        </div>
      </div>
    </div>
    @endsection