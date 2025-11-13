@extends('master')

@section('title', 'About Member 3')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Profile Sidebar -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <img src="{{ asset('images/fauzan.JPEG') }}" class="rounded-circle mb-3" alt="Member 3" width="150" height="150">
                    <h3>AHMAD FAUZAN BIN NGAH</h3>
                    <p class="text-muted">Full Stack Developer</p>
                    <p>BCS3453 - Student ID: CB24167</p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>About Me</h3>
                    <p>Hello! I'm Ahmad Fauzan Bin Ngah, a full stack developer who enjoys working on both frontend and backend technologies.</p>

                    <h4 class="mt-4">Technical Skills</h4>
                    <div class="mb-3">
                        <span class="badge bg-info">Laravel</span>
                        <span class="badge bg-info">HTML</span>
                        <span class="badge bg-info">MySQL</span>
                        <span class="badge bg-info">Git</span>
                    </div>

                    <h4>Education</h4>
                    <p>BCS - BACHELOR OF COMPUTER SCIENCE (SOFTWARE ENGINEERING) WITH HONOURS<br>Faculty of Computing</p>

                    <h4>Responsibilities in This Project</h4>
                    <ul>
                        <li>Individual about pages development</li>
                        <li>Content management</li>
                        <li>Testing and deployment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
