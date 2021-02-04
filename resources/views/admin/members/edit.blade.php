@extends('layouts/admin')

@section('content')

<div class="container-fluid  dashboard-content">

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">View Food Category</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/food-categories" class="breadcrumb-link">All
                                    Food Categories</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Food Category</li>
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
                <h5 class="card-header">Basic Form</h5>
                <div class="card-body">
                    <form method="POST" action="/admin/members/{{$member->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input id="inputFirstName" type="text"
                                class="form-control form-control-lg @error('firstName') is-invalid @enderror"
                                name="firstName" value="{{ old('firstName', $member->firstName) }}" required
                                autocomplete="firstName" autofocus placeholder="firstName of the category">

                            @error('firstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputFirstName">Last Name</label>
                            <input id="inputFirstName" type="text"
                                class="form-control form-control-lg @error('lastName') is-invalid @enderror"
                                name="lastName" value="{{ old('lastName', $member->lastName) }}" required
                                autocomplete="lastName" autofocus placeholder="lastName of the category">

                            @error('firstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputemail">Email</label>
                            <input id="inputemail" type="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email', $member->email) }}" required autocomplete="email"
                                placeholder="Enter Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPhoneNumber">Phone Number</label>
                            <input id="inputPhoneNumber" type="text"
                                class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                name="phone_number" value="{{ old('phone_number', $member->phone_number) }}" required
                                autocomplete="phone_number" placeholder="Enter phone numberr">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">

                            </div>
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