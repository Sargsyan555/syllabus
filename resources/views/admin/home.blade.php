@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="page-content">
        @if(auth()->user()->hasRole('admin'))
        <h1 class="header-title h3 mb-4">
            <span class="text-highlight">Syllabus</span> <span class="fw-300">Dashboard</span>
        </h1>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="text-muted mb-1 text-truncate">Users
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="icon-sm bg-primary rounded float-end">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <h2 class="my-1 fw-300">
                            <span>
                                {{$users->count()}}
                            </span>
                        </h2>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="text-muted mb-1 text-truncate">Active Users</p>
                            </div>
                            <div class="col-6">
                                <div class="icon-sm bg-success rounded float-end">
                                    <i class="fas fa-user-check"></i>
                                </div>
                            </div>
                        </div>
                        <h2 class="my-1 fw-300">{{$users->count()}}</h2>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div> <!-- end row -->
        @endif
    </div>
    <!-- end page-content -->

@endsection
