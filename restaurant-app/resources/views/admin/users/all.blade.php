@extends('layouts/admin')

@section('content')


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
                <h2 class="pageheader-title">Users </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                <h5 class="card-header">All Users</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>

                                @if (Auth::user()->isAdmin())
                                <th>Type</th>
                                @endif

                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date Created </th>
                                @if (Auth::user()->isAdmin())
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                @endif

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key=>$user)

                            <tr>
                                @if (Auth::user()->isAdmin())
                                <td>{{$user->roles[0]->title}}</td>
                                @endif
                                <td>{{$user->firstName}} {{$user->lastName}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{date('m/d/y',strtotime($user->created_at))}}</td>
                                @if (Auth::user()->isAdmin())


                                <td><a href="/admin/users/{{$user->id}}/edit"><i class="far fa-edit"></i></a></td>
                                <td>
                                    <a onclick="if(!confirm('are you sure you want to delete this category')){return false;}"
                                        href="/admin/users/{{$user->id}}/delete">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                                @endif

                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                    {{-- //pagnation --}}
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end responsive table -->
    <!-- ============================================================== -->
</div>



@endsection