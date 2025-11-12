@extends('master')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Our Amazing Team</h1>
                <p class="lead mb-4">Meet the talented developers behind this project</p>
                
                <!-- Team Members Overview -->
                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="Member 1">
                                <h5>Member 1 Name</h5>
                                <p>Role: Frontend Developer</p>
                                <a href="{{ route('about.member1') }}" class="btn btn-primary">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="Member 2">
                                <h5>Member 2 Name</h5>
                                <p>Role: Backend Developer</p>
                                <a href="{{ route('about.member2') }}" class="btn btn-primary">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="Member 3">
                                <h5>Member 3 Name</h5>
                                <p>Role: Full Stack Developer</p>
                                <a href="{{ route('about.member3') }}" class="btn btn-primary">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection