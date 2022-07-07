@extends('layouts.admin')

@section('content')

<div class="container">

   <a href="{{ route('admin.dashboard.zone')}}" class="btn btn-primary">ADD ZONE</a>&nbsp &nbsp

   <a href="{{ route('admin.dashboard.region')}}" class="btn btn-primary">ADD REGION</a>&nbsp &nbsp

   <a href="{{ route('admin.dashboard.territory')}}" class="btn btn-primary">ADD TERRITORY</a>&nbsp &nbsp

   <a href="{{ route('admin.dashboard.user')}}" class="btn btn-primary">ADD USERS</a>&nbsp &nbsp

   <a href="{{ route('admin.dashboard.product')}}" class="btn btn-primary">ADD PRODUCTS</a>&nbsp &nbsp

   <a href="{{ route('admin.dashboard.product.view')}}" class="btn btn-primary">PURCHASE ORDER VIEW</a>



</div>

@endsection




