@extends('layouts/admin')

@section('content')


<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">{{$title}}</h2>
                    <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris
                        facilisis faucibus at enim quis massa lobortis rutrum.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Home
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader  -->
        <!-- ============================================================== -->
        <div class="ecommerce-widget">

            @if (Auth::user()->isAdmin())
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Estimated Revenue</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">${{$estimated_income_last30}}</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                            </div>
                        </div>
                        {{-- <div id="sparkline-revenue"></div> --}}
                        {{-- <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"> Total Revenue</h5>
                                <div class="card-body">
                                    <div id="morris_totalrevenue"></div>
                                </div>
                                <div class="card-footer">
                                    <p class="display-7 font-weight-bold"><span
                                            class="text-primary d-inline-block">$26,000</span><span
                                            class="text-success float-right">+9.45%</span></p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Total Customers</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">{{$guestTotal}}</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                            </div>
                        </div>
                        {{-- <div id="sparkline-revenue2"></div> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Total Reservations</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">{{$reservationsTotal}}</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                <span>N/A</span>
                            </div>
                        </div>
                        {{-- <div id="sparkline-revenue3"></div> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Avg. Revenue Per User</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">{{$totalEmployees}}</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                <span>-2.00%</span>
                            </div>
                        </div>
                        {{-- <div id="sparkline-revenue4"></div> --}}
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header"> Estimated Total Revenue for the last 30 days</h5>
                        <div class="card-body">
                            <div id="morris_totalrevenue"></div>
                        </div>
                        <div class="card-footer">
                            <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block"> Estimated
                                    Revenue for the last 30 days:
                                    {{$estimated_income_last30}}</span>
                                {{-- <span class="text-success float-right">+9.45%</span> --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif


            <div class="row">


                <div class=" col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Recent Reservations</h5>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr class="border-0">

                                            <th class="border-0">#</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Phone</th>
                                            <th class="border-0">Number of guests</th>
                                            <th class="border-0">Time</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($latestReservations as $reservation)
                                        <tr>
                                            <td>{{$reservation->id}}</td>
                                            <td>{{$reservation->firstName}} {{$reservation->lastName}}</td>
                                            <td>
                                                {{$reservation->email}}
                                            </td>
                                            <td>
                                                {{$reservation->phone_number}}
                                            </td>
                                            @if ($reservation->guests_total>2)
                                            <td><span class="badge-dot badge-success mr-1"></span>Booth </td>
                                            @else
                                            <td><span class="badge-dot badge-brand mr-1"></span>Table </td>
                                            @endif
                                            <td>
                                                {{$reservation->time}}:00
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="9"><a href="/admin/reservations"
                                                    class="btn btn-outline-light float-right">View Details</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end recent orders  -->

            </div>
        </div>
    </div>




    @endsection