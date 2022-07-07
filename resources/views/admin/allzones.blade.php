@extends('layouts.admin')


@section('content')
 <h1 class="text-center">ALL ZONES</h1>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
        @endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Zone Code</th>
      <th scope="col">Long Discription</th>
      <th scope="col">Short Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->description1}}</td>
      <td>{{$post->description2}}</td>
      <td>
        <a href="{{ route('admin.dashboard.zone.edit',$post->id)}}" class="btn btn-success">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</div>
</div>


@endsection