@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1 class="text-center my-5 text-primary">About Us</h1>

        
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4 text-success">Our Mission</h2>
                <p>
                    Our mission is to raise awareness about climate change and its impact on our planet. We aim to inspire individuals and communities to take action toward a sustainable and eco-friendly future.
                </p>
            </div>

            <div class="col-md-6">
                <h2 class="mb-4 text-success">Our Vision</h2>
                <p>
                    We envision a world where every person is aware of their environmental footprint and actively works to reduce it. Our goal is to create a global movement of change toward a cleaner, greener planet.
                </p>
            </div>
        </div>

        <!-- Background Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="mb-4 text-success">Background</h2>
                <p>
                    Climate change is one of the most pressing issues of our time. The increasing emissions of greenhouse gases, deforestation, and pollution have caused rapid changes in global climate patterns. It is essential to take immediate action to mitigate its effects and reduce global warming.
                </p>
                <p>
                    Our organization started as a small group of activists and environmentalists who wanted to make a difference in tackling the global climate crisis. Since then, we have been actively working with local communities, policymakers, and organizations to raise awareness and implement practical solutions.
                </p>
            </div>
        </div>

        <!-- Team Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="mb-4 text-success">Our Team</h2>
                <p>
                    Our team consists of passionate individuals from various backgrounds including environmental science, policy making, community outreach, and more. Together, we are dedicated to creating impactful solutions for a sustainable future.
                </p>
                <div class="row">
                    <!-- Team Member 1 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <!-- <img src="{{ asset('image/team1.jpg') }}" alt="Team Member 1" class="card-img-top rounded-circle" style="height: 200px; object-fit: cover;"> -->
                            <div class="card-body text-center">
                                <h5 class="card-title">Jane Doe</h5>
                                <p class="card-text">Environmental Scientist</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <!-- <img src="{{ asset('image/team2.jpg') }}" alt="Team Member 2" class="card-img-top rounded-circle" style="height: 200px; object-fit: cover;"> -->
                            <div class="card-body text-center">
                                <h5 class="card-title">John Smith</h5>
                                <p class="card-text">Policy Maker</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <!-- <img src="{{ asset('image/team3.jpg') }}" alt="Team Member 3" class="card-img-top rounded-circle" style="height: 200px; object-fit: cover;"> -->
                            <div class="card-body text-center">
                                <h5 class="card-title">Emily Johnson</h5>
                                <p class="card-text">Community Outreach Coordinator</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <!-- <img src="{{ asset('image/team4.jpg') }}" alt="Team Member 4" class="card-img-top rounded-circle" style="height: 200px; object-fit: cover;"> -->
                            <div class="card-body text-center">
                                <h5 class="card-title">Michael Brown</h5>
                                <p class="card-text">Sustainability Consultant</p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 5 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <!-- <img src="{{ asset('image/team5.jpg') }}" alt="Team Member 5" class="card-img-top rounded-circle" style="height: 200px; object-fit: cover;"> -->
                            <div class="card-body text-center">
                                <h5 class="card-title">Sarah Wilson</h5>
                                <p class="card-text">Climate Policy Advocate</p>
                            </div>
                        </div>
                    </div>

                </div>

                
                <div class="text-center mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Join Us in Making a Difference!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
