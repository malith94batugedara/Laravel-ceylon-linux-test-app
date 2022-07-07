@extends('layouts.admin')


@section('content')
       <h1 class="text-center">ADD SKU</h1>
         <div class="container col-6">
             <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                <div class="form-group">
                    <label>SKU ID</label>
                    <input type="text" name="skuid" class="form-control" placeholder="Automatically">
                </div>
               <div class="form-group">
                    <label>SKU Code</label>
                    <input type="text" class="form-control" name="skcode" placeholder="Enter sku code" required/>
                </div>
               <div class="form-group">
                   <label>SKU Name</label>
                   <input type="text" class="form-control" name="skname" placeholder="Enter sku name" required/>
               </div>
               <div class="form-group">
                   <label>MRP</label>
                   <input type="date" class="form-control" name="mrp" placeholder="Enter mrp" required/>
               </div>
               <div class="form-group">
                   <label>Distributor Price</label>
                   <input type="text" class="form-control" name="dprice" placeholder="Enter price" required/>
               </div>
               
               <div class="form-group">
                   <label>Weight/Volume</label>
                   <input type="text" class="form-control" name="weight" placeholder="" required/>
               </div><br>
            
               <div class="text-center">
               <button type="submit" class="btn btn-success">SAVE</button>
               </div>
             </form>
          </div>



@endsection