@extends('layouts.app')
@section('content')
  <section class="d-flex align-items-center vh-100 bg-white">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h5 class="fw-bold mb-2"><span class="text-primary">Mochammad Aldiansyah</span></h5>
                    <h1 class="display-3 fw-bold mb-2">Halo</h1>
                    <p class="text-muted hero-description h-2">Anak-Anak</p>
                    <div class="d-flex gap-3">
                        <a href="#project" class="btn btn-primary rounded-pill px-4 shadow-lg">Halo</a>
                    </div>
                </div>

                    <div class="col-lg-6 text-center mt-5 mt-lg-0">
                        <div class="profile-img-container mx-auto">
                            <img src="{{ asset('assets/img/awan.png') }}" alt="profile"
                                class="rounded-4 img-fluid mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


