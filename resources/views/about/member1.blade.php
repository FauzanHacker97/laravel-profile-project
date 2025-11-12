@extends('master')

@section('title', 'About Member 1')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Profile Sidebar -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Member 1">
                    <h3>Member 1 Name</h3>
                    <p class="text-muted">Frontend Developer</p>
                    <p>BCS3453 - Student ID: 123456789</p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>About Me</h3>
                    <p>Hello! I'm [Member 1 Name], a creative frontend developer passionate about building beautiful user interfaces.</p>
                    
                    <h4 class="mt-4">Technical Skills</h4>
                    <div class="mb-3">
                        <span class="badge bg-success">HTML/CSS</span>
                        <span class="badge bg-success">JavaScript</span>
                        <span class="badge bg-success">Bootstrap</span>
                        <span class="badge bg-success">React</span>
                    </div>

                    <h4>Education</h4>
                    <p>Bachelor of Computer Science<br>Faculty of Computing</p>

                    <h4>Responsibilities in This Project</h4>
                    <ul>
                        <li>Project setup and routing</li>
                        <li>Master layout design</li>
                        <li>Home page development</li>
                        <li>Team coordination</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection