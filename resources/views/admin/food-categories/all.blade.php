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
                <h2 class="pageheader-title">Food Categories </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Food Categories</li>

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
        <div class="container">

            @if(!empty($success))

            <h2> {{ $success }}</h2>
            <button class=" delete" onclick="hideAlert()"></button>

            @endif
            @if(session()->exists('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
        </div>

    </div>
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table -->
        <!-- ============================================================== -->
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">All food categories</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date Created </th>
                                <th>Image</th>
                                @if (Auth::user()->isAdmin())
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>

                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories ?? '' as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->title}}</td>
                                <td>{{date('m/d/y',strtotime($category->created_at))}}</td>
                                <td class="w-25"><img src="{{asset($category->image) }}" alt="..."
                                        class="img-thumbnail"></td>

                                @if (Auth::user()->isAdmin())
                                <td><a href="/admin/food-categories/{{$category->id}}/edit"><i
                                            class="far fa-edit"></i></a></td>
                                <td>
                                    <a onclick="if(!confirm('are you sure you want to delete this category')){return false;}"
                                        href="/admin/food-categories/{{$category->id}}/delete">
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




</div>


<!-- ============================================================== -->
<!-- end responsive table -->
<!-- ============================================================== -->




@endsection