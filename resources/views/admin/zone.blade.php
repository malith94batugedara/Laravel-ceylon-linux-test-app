@extends('layouts.admin')


@section('content')
       <h1 class="text-center">ADD ZONE</h1>
         <div class="container col-6">
             <form method="post" action="{{ route('admin.dashboard.zone.store')}}" enctype="multipart/form-data">
                        @csrf
                <div class="form-group">
                    <label>Zone Code</label>
                    <input type="text" name="zonecode" class="form-control" placeholder="Automatically">
                </div>
               <div class="form-group">
                    <label>Zone Long Description</label>
                    <input type="text" class="form-control" name="description1" placeholder="Enter post description" required/>
                </div>
               <div class="form-group">
                   <label>Short Description</label>
                   <input type="text" class="form-control" name="description2" placeholder="short description" required/>
               </div><br>
               <div class="text-center">
               <button type="submit" class="btn btn-success">SAVE</button>
               </div>
             </form>
          </div>



@endsection