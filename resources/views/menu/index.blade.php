@extends('layouts.app')

@section('title')
Food Menu
@endsection
@section('content')
<div class="menu-page">
  @include('includes.food-categories-slider')
</div>

@endsection