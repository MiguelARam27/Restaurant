@extends('layouts/admin')

@section('content')

<div class="container-fluid  dashboard-content">

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Edit Food Item</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/food-items/edit" class="breadcrumb-link">All
                                    Food Items</a></li>
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
                    <form method="POST" action="/admin/food-items/{{$item->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputtitle">Item Name</label>
                            <input id="inputtitle" type="text"
                                class="form-control form-control-lg @error('title') is-invalid @enderror" name="title"
                                value="{{ old('title', $item->title) }}" required autocomplete="title" autofocus
                                placeholder="Enter Name of Item">

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputprice">Price</label>
                            <input id="inputprice" type="text"
                                class="form-control form-control-lg @error('price') is-invalid @enderror" name="price"
                                value="{{ old('price',$item->price )}}" required autocomplete="price" autofocus
                                placeholder="Price Value">

                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputcategory">Category</label>
                            <select name="category_id" class="form-control" id="inputrole">
                                @foreach ($categories as $category)
                                @if ($item->category_id == $category->id)
                                <option value="{{$category->id}}" selected>{{$category->title}}</option>
                                @endif
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputimageurl">Image Url</label>
                            <input id="inputimageurl" type="file"
                                class="form-control form-control-lg @error('image_url') is-invalid @enderror"
                                name="image_url" value="{{ old('image_url') }}" required autocomplete="title" autofocus
                                placeholder="Add the url to the Item image">

                            @error('image_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputdescription">Description</label>
                            <textarea id="inputdescription" type="text"
                                class="form-control form-control-lg @error('description') is-invalid @enderror"
                                name="description" required autofocus
                                placeholder="Write a Description">{{ old('description',$item->description) }}</textarea>

                            @error('description')
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