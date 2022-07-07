@extends('layouts.admin')


@section('content')
       <h1 class="text-center">ADD REGION</h1>
         <div class="container col-6">
             <form method="post" action="{{ route('admin.dashboard.region.store')}}" enctype="multipart/form-data">
                        @csrf
                <div class="form-group">
                    <label>Zone</label>
                    <select name="description1" class="form-control">
                         <option value="">Select</option>
                         <option value="">1</option>
                         <option value="">2</option>
                         <option value="">3</option>
                    </select>
                </div>
               <div class="form-group">
                    <label>Region Code</label>
                    <input type="text" class="form-control" name="regioncode" placeholder="Automatically"/>
                </div>
               <div class="form-group">
                   <label>Region Name</label>
                   <input type="text" class="form-control" name="regionname" placeholder="Type region name" required/>
               </div><br>
               <div class="text-center">
               <button type="submit" class="btn btn-success">SAVE</button>
               </div>
             </form>
          </div>



@endsection