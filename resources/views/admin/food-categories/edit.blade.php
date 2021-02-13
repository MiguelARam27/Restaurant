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
                    <form method="POST" action="/admin/food-categories/{{$category->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input id="inputTitle" type="text"
                                class="form-control form-control-lg @error('title') is-invalid @enderror" name="title"
                                value="{{ old('Title', $category->title) }}" required autocomplete="title" autofocus
                                placeholder="Title of the category">

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputdescription">Category Description</label>
                            <input id="inputdescription" type="text"
                                class="form-control form-control-lg @error('description') is-invalid @enderror"
                                name="description" value="{{ old('description', $category->description) }}" required
                                autocomplete="name" autofocus placeholder="description">

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputImageURL">Category Image URL</label>
                            <input id="inputImageURL" type="file"
                                class="form-control form-control-lg @error('image') is-invalid @enderror" name="image"
                                value="{{ old('image', $category->image) }}" required autocomplete="image"
                                placeholder="Url of image">

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