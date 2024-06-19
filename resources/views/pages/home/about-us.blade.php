@extends('layouts.home')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-5">About Us</h1>

            <div class="row mb-5">
                <div class="col-md-6">
                    <h2>Our Story</h2>
                    <p>
                        Welcome to our Pet Hospital! We have been serving the community with the highest level of veterinary
                        care for over 20 years. Our dedicated team of professionals is committed to providing exceptional
                        medical, surgical, and dental care for your beloved pets.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="path_to_image/about_us.jpg" alt="About Us Image" class="img-fluid rounded">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <h2>Our Facilities</h2>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <img src="path_to_image/facility_1.jpg" alt="Facility 1" class="img-fluid rounded">
                            <h5 class="mt-3">Modern Surgical Suite</h5>
                            <p>
                                Our state-of-the-art surgical suite is equipped with the latest technology to ensure your
                                pet receives the best care possible during surgery.
                            </p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <img src="path_to_image/facility_2.jpg" alt="Facility 2" class="img-fluid rounded">
                            <h5 class="mt-3">Comprehensive Diagnostics</h5>
                            <p>
                                We offer a full range of diagnostic services, including X-rays, ultrasounds, and laboratory
                                testing, to accurately diagnose your pet's condition.
                            </p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <img src="path_to_image/facility_3.jpg" alt="Facility 3" class="img-fluid rounded">
                            <h5 class="mt-3">Comfortable Boarding</h5>
                            <p>
                                Our boarding facilities are designed to provide a comfortable and safe environment for your
                                pet while you're away.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <h2>Price List</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Consultation</td>
                                <td>$50</td>
                            </tr>
                            <tr>
                                <td>Vaccination</td>
                                <td>$30</td>
                            </tr>
                            <tr>
                                <td>Dental Cleaning</td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td>Spay/Neuter Surgery</td>
                                <td>$200</td>
                            </tr>
                            <tr>
                                <td>Boarding (per day)</td>
                                <td>$25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <h2>Contact Us</h2>
                    <p>
                        If you have any questions or would like to schedule an appointment, please don't hesitate to contact
                        us at (123) 456-7890 or email us at info@pethospital.com.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
