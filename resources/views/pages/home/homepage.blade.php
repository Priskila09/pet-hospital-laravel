@extends('layouts.home')

@section('content')
    <header class="header">
        <div class="container">
            <p class="text-black mb-0">We Take Care Of</p>
            <h1 class="header-title text-black">YOUR LITTLE PETS</h1>
            <a href="contact.html" class="btn btn-utama px-4 py-3">Contact Us</a>
        </div>
    </header>

    <section class="offer">
        <div class="container">
            <p class="mb-2 text-center text-uppercase fw-semibold fs-5 subtitle">Our Services</p>
            <h1 class="mb-3 text-center fw-semibold">What We Offer</h1>
            <p class="mb-5 text-center text-secondary">
                Our highly skilled professional associates love pets as much as you do, and we offer a wide range of pet
                services.
            </p>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <img src="assets/images/offer-1.jpeg" alt="" class="rounded-circle">
                            <h3 class="text-center mt-2">Professional Grooming</h3>
                            <p class="text-center text-secondary mt-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="{{ route('about') }}" class="btn btn-utama">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <img src="assets/images/offer-2.jpeg" alt="" class="rounded-circle">
                            <h3 class="text-center mt-2">Professional Grooming</h3>
                            <p class="text-center text-secondary mt-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="{{ route('about') }}" class="btn btn-utama">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0">
                        <div class="card-body">
                            <img src="assets/images/offer-3.jpeg" alt="" class="rounded-circle">
                            <h3 class="text-center mt-2">Professional Grooming</h3>
                            <p class="text-center text-secondary mt-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="{{ route('about') }}" class="btn btn-utama">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
