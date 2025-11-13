@extends('master')

@section('title', 'About Member 2')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Profile Sidebar -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                   <img src="{{ asset('images/amni.JPEG') }}" class="rounded-circle mb-3" alt="Member 2" width="150" height="150">
                    <h3>NUR AMNI NASHIRAH BINTI ABD RAHIM</h3>
                    <p class="text-muted">Frontend Developer</p>
                    <p>BCS3453 - Student ID: CB24177</p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>About Me</h3>
                    <p>Hello! I'm Nur Amni Nashirah Binti Abd Rahim, a creative frontend developer passionate about building beautiful user interfaces.</p>

                    <h4 class="mt-4">Technical Skills</h4>
                    <div class="mb-3">
                        <span class="badge bg-success">HTML/CSS</span>
                        <span class="badge bg-success">JavaScript</span>
                        <span class="badge bg-success">Bootstrap</span>
                        <span class="badge bg-success">React</span>
                    </div>

                    <h4>Education</h4>
                    <p>BCS - BACHELOR OF COMPUTER SCIENCE (SOFTWARE ENGINEERING) WITH HONOURS<br>Faculty of Computing</p>

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
