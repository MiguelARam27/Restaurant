@extends('layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">All Reservations</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Reservations</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->

    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table -->
        <!-- ============================================================== -->
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">All Reservations</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Guests Total</th>
                                <th scope="col">Time</th>
                                <th scope="col">Date Created</th>
                                @if (Auth::user()->isAdmin())
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                            <tr>
                                <td>{{$reservation->firstName}} {{$reservation->lastName}}</td>
                                <td>{{$reservation->email}}</td>
                                <td>{{$reservation->phone_number}}</td>
                                <td>{{$reservation->guests_total}}</td>
                                <td>{{$reservation->time}}</td>
                                <td>{{date('m/d/Y', strtotime($reservation->updated_at))}}</td>
                                @if (Auth::user()->isAdmin())
                                <td>
                                    <a href="/admin/reservations/{{$reservation->id}}/edit"><i
                                            class="far fa-edit"></i></a>
                                </td>
                                <td>
                                    <a onclick="if(!confirm('are you sure you want to delete this category')){return false;}"
                                        href="/admin/reservations/{{$reservation->id}}/delete">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                                @endif
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $reservations->links() }}
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic table -->

        <!-- ============================================================== -->
    </div>

    @endsection