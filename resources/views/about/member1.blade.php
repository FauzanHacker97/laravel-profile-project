@extends('master')

@section('title', 'About Member 1')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Profile Sidebar -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <img src="{{ asset('images/najmi.JPEG') }}" class="rounded-circle mb-3" alt="Member 1" width="150" height="150">
                    <h3>AHMAD NAJMI BIN MOHD NORMAN</h3>
                    <p class="text-muted">Backend Developer</p>
                    <p>BCS3453 - Student ID: CA24108</p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>About Me</h3>
                    <p>Hello! I'm Ahmad Najmi, a passionate backend developer specializing in Laravel and database management.</p>

                    <h4 class="mt-4">Technical Skills</h4>
                    <div class="mb-3">
                        <span class="badge bg-primary">PHP</span>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-primary">MySQL</span>
                        <span class="badge bg-primary">API Development</span>
                    </div>

                    <h4>Education</h4>
                    <p>BCN - BACHELORS OF COMPUTER SCIENCE (COMPUTER SYSTEMS & NETWORKING) WITH HONOURS<br>Faculty of Computing</p>

                    <h4>Responsibilities in This Project</h4>
                    <ul>
                        <li>Database design and implementation</li>
                        <li>Backend routing and controllers</li>
                        <li>Contact page development</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
