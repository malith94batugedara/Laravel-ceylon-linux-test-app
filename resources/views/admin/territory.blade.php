@extends('layouts.admin')


@section('content')
       <h1 class="text-center">ADD TERRITORY</h1>
         <div class="container col-6">
             <form method="post" action="" enctype="multipart/form-data">
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
                    <label>Region</label>
                    <select name="regionname" class="form-control">
                         <option value="">Select</option>
                         <option value="">1</option>
                         <option value="">2</option>
                         <option value="">3</option>
                         <option value="">4</option>
                        
                    </select>
                </div>

               <div class="form-group">
                    <label>Territory Code</label>
                    <input type="text" class="form-control" name="territorycode" placeholder="Automatically"/>
                </div>
               <div class="form-group">
                   <label>Territory Name</label>
                   <input type="text" class="form-control" name="territoryname" placeholder="Type territory name" required/>
               </div><br>
               <div class="text-center">
               <button type="submit" class="btn btn-success">SAVE</button>
               </div>
             </form>
          </div>



@endsection