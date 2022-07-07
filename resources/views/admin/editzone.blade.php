@extends('layouts.admin')


@section('content')
       <h1 class="text-center">EDIT ZONE</h1>
         <div class="container col-6">
             <form method="post" action="{{route('admin.dashboard.zone.update',$post->id)}}">
                        @csrf
                <div class="form-group">
                    <label>Zone Code</label>
                    <input type="text" name="zonecode" class="form-control" placeholder="Automatically" value="{{$post->id}}">
                </div>
               <div class="form-group">
                    <label>Zone Long Description</label>
                    <input type="text" class="form-control" name="description1" placeholder="Enter post description" value="{{$post->description1}}"/>
                </div>
               <div class="form-group">
                   <label>Short Description</label>
                   <input type="text" class="form-control" name="description2" placeholder="short description" value="{{$post->description2}}"/>
               </div><br>
               <div class="text-center">
               <button type="submit" class="btn btn-success">Update</button>
               </div>
             </form>
          </div>



@endsection