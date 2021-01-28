@extends('layouts/admin')

@section('content')

<div class="container-fluid  dashboard-content">

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-site_title">General Settings for Website</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">General Settings</li>
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
                    <form method="POST" action="/admin/settings/general">
                        @csrf
                        <div class="form-group">
                            <label for="inputsite_title">Title of the web site</label>
                            <input id="inputsite_title" type="text"
                                class="form-control form-control-lg @error('site_site_title') is-invalid @enderror"
                                name="site_title" value="{{ old('site_title',$settings->site_title) }}" required
                                autocomplete="site_title" autofocus placeholder="Title of your website">

                            @error('site_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputsite_addresss_1">Address 1</label>
                            <input id="inputsite_addresss_1" type="text"
                                class="form-control form-control-lg @error('site_site_addresss_1') is-invalid @enderror"
                                name="addresss_1" value="{{ old('site_addresss_1',$settings->address_1) }}" required
                                autocomplete="site_addresss_1" autofocus placeholder="Address of your website">

                            @error('addresss_1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputadress_2">Adress 2</label>
                            <input id="inputadress_2" type="text"
                                class="form-control form-control-lg @error('site_adress_2') is-invalid @enderror"
                                name="adress_2" value="{{ old('adress_2',$settings->adress_2) }}"
                                autocomplete="adress_2" autofocus placeholder="2nd adresss if necessary">

                            @error('adress_2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputState">State</label>
                            <input id="inputState" type="text"
                                class="form-control form-control-lg @error('state') is-invalid @enderror" name="state"
                                value="{{ old('state',$settings->state) }}" required autocomplete="state" autofocus
                                placeholder="Title of your website">

                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputcity">City</label>
                            <input id="inputcity" type="text"
                                class="form-control form-control-lg @error('city') is-invalid @enderror" name="city"
                                value="{{ old('city',$settings->city) }}" required autocomplete="city" autofocus
                                placeholder="Enter your City">

                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputZip">ZipCode</label>
                            <input id="inputZip" type="text"
                                class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                name="zip_code" value="{{ old('zip_code',$settings->zip_code) }}" required
                                autocomplete="zip_code" autofocus placeholder="Enter your zip_code">

                            @error('zip_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPhone">Phone Number</label>
                            <input id="inputPhone" type="text"
                                class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                name="phone_number" value="{{ old('phone_number',$settings->phone_number) }}" required
                                autocomplete="phone_number" autofocus placeholder="Enter your phone_number">

                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="inputimageurl">Image Url</label>
                            <input id="inputimageurl" type="text"
                                class="form-control form-control-lg @error('logo_image_url') is-invalid @enderror"
                                name="logo_image_url" value="{{ old('logo_image_url',$settings->logo_image_url) }}"
                                autocomplete="site_title" autofocus placeholder="Add the url to the Item image">

                            @error('logo_image_url')
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