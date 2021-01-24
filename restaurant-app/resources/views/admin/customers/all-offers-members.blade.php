@extends('layouts/admin')

@section('content')
    
<div class="container-fluid  dashboard-content">
    
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">All Offer Members</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Offer Members</li>
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
                    <h5 class="card-header">All  Members</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope='col'>id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Date Created</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope='row'>1</td>
                                    <td>Jonny</td>
                                    <td>Rodriguez</td>
                                    <td>example@gmail.com</td>
                                    <td>407-299-7687</td>
                                    <td>9/2/2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
   
            </div>
            <!-- ============================================================== -->
            <!-- end responsive table -->
            <!-- ============================================================== -->
        </div>
         
    </div>

@endsection