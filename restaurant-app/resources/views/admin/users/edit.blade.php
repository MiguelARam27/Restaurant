@extends('layouts/admin')

@section('content')
    
<div class="container-fluid  dashboard-content">
    
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit User</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/users" class="breadcrumb-link">All Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
                <!-- basic form -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Edit User</h5>
                        <div class="card-body">
                            <form action="#" id="basicform" data-parsley-validate="">
                                <div class="form-group">
                                    <label for="inputFirstName">First Name</label>
                                    <input id="inputFirstName" type="text" name="firstName" data-parsley-trigger="change" required="" placeholder="Enter First Name" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputLastName">Last Name</label>
                                    <input id="inputLastName" type="text" name="lastName" data-parsley-trigger="change" required="" placeholder="Enter Last Name" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail"> Email</label>
                                    <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter Email" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input id="inputPassword" type="password" name="password" data-parsley-trigger="change" required="" placeholder="Enter Password" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="input-role">Role</label>
                                    <select class="form-control" id="input-select">
                                        <option value="admin">Admin</option>
                                        <option value="employee">employee</option>
                                    </select>
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
            </div>
         
    </div>

@endsection