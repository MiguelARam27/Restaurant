@extends('layouts/admin')

@section('content')




<!-- ============================================================== -->
<!-- navbar -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Food Items </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Food Items</li>
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
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            @include('includes.message')
        </div>
    </div>
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table -->
        <!-- ============================================================== -->
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">All Food Items</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Categories</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date Created </th>
                                <th scope="col">Image </th>
                                @if (Auth::user()->isAdmin())
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <th scope="row">{{$item->title}}</th>
                                <td>{{$item->title}}</td>
                                <td>${{$item->price}}</td>
                                <td>{{date('m/d/y',strtotime($item->created_at))}}</td>
                                <td class="w-25"><img src="{{asset($item->image_url) }}" alt="..."
                                        class="img-thumbnail"></td>

                                @if (Auth::user()->isAdmin())
                                <td><a href="/admin/food-items/{{$item->id}}/edit"><i class="far fa-edit"></i></a></td>
                                <td>
                                    <a onclick="if(!confirm('are you sure you want to delete this category')){return false;}"
                                        href="/admin/food-items/{{$item->id}}/delete">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                                @endif

                            </tr>
                            @endforeach

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



@endsection