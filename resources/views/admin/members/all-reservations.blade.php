@extends('layouts/admin')

@section('content')
    
<div class="container-fluid  dashboard-content">
    
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">All Reservations</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
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
            {{-- <div class="row">
                <!-- ============================================================== -->
                <!-- basic form -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Basic Form</h5>
                        <div class="card-body">
                            <form action="#" id="basicform" data-parsley-validate="">
                                <div class="form-group">
                                    <label for="inputItem">Item Name</label>
                                    <input id="inputItem" type="text" name="item" data-parsley-trigger="change" required="" placeholder="Enter Item Name" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputPrice">Item Price</label>
                                    <input id="inputPrice" type="text" name="price" data-parsley-trigger="change" required="" placeholder="Enter Item Name" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputItemImageUrl">Item Image Url</label>
                                    <input id="inputItemImageUrl" type="text" name="image_url" data-parsley-trigger="change" required="" placeholder="http://www.billys.com/burgers.jpg" autocomplete="off" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                         
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <!-- ============================================================== -->
                <!-- basic table -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">All  Reservations</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope='col'>id</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Guests Total</th>
                                        <th scope="col">Date Created</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope='row'>1</td>
                                        <td>Jonny Rodriguez</td>
                                        <td>example@gmail.com</td>
                                        <td>407-299-7687</td>
                                        <td>5</td>
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