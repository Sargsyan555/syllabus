@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="page-content">
        <h1 class="header-title h3 mb-4">
            <span class="text-highlight">E-Commerce</span> <span class="fw-300">Dashboard</span>
        </h1>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="text-muted mb-1 text-truncate">Total Earnings
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="icon-sm bg-primary rounded float-end">
                                    <i class="fal fa-usd-circle"></i>
                                </div>
                            </div>
                        </div>
                        <h2 class="my-1 fw-300">$24,431</h2>
                        <div class="mt-3">
                            <h6>Target <span class="float-end">59%</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100" style="width: 59%">
                                    <span class="sr-only">59% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="text-muted mb-1 text-truncate">Sales Today</p>
                            </div>
                            <div class="col-6">
                                <div class="icon-sm bg-success rounded float-end">
                                    <i class="fal fa-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <h2 class="my-1 fw-300">1,576</h2>
                        <div class="mt-3">
                            <h6>Target <span class="float-end">68%</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%">
                                    <span class="sr-only">68% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="text-muted mb-1 text-truncate">Pending Orders</p>
                            </div>
                            <div class="col-6">
                                <div class="icon-sm bg-info rounded float-end">
                                    <i class="fal fa-user-clock"></i>
                                </div>
                            </div>
                        </div>
                        <h2 class="my-1 fw-300"><span>234</span></h2>
                        <div class="mt-3">
                            <h6>Target <span class="float-end">74%</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                    <span class="sr-only">74% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="text-muted mb-1 text-truncate">Payouts</p>
                            </div>
                            <div class="col-6">
                                <div class="icon-sm bg-warning rounded float-end">
                                    <i class="fal fa-receipt"></i>
                                </div>
                            </div>
                        </div>
                        <h2 class="my-1 fw-300">$4,321</h2>
                        <div class="mt-3">
                            <h6>Target <span class="float-end">76%</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%">
                                    <span class="sr-only">76% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- end page-content -->

@endsection
