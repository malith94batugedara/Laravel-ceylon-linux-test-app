@extends('layouts.admin')


@section('content')
       <h1 class="text-center">ADD USERS</h1>
         <div class="container col-6">
             <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                </div>
               <div class="form-group">
                    <label>NIC</label>
                    <input type="text" class="form-control" name="nic" placeholder="Enter NIC" required/>
                </div>
               <div class="form-group">
                   <label>Address</label>
                   <input type="text" class="form-control" name="address" placeholder="Enter address" required/>
               </div>
               <div class="form-group">
                   <label>Mobile</label>
                   <input type="text" class="form-control" name="mobile" placeholder="Enter mobile" required/>
               </div>
               <div class="form-group">
                   <label>E-Mail</label>
                   <input type="text" class="form-control" name="email" placeholder="Enter email"/>
               </div>
               <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                         <option value="">Select</option>
                         <option value="">Male</option>
                         <option value="">Female</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Territory</label>
                    <select name="territory" class="form-control">
                         <option value="">Select</option>
                         <option value="">1</option>
                         <option value="">2</option>
                         <option value="">3</option>
                         <option value="">4</option>
                        
                    </select>
                </div>
                <div class="form-group">
                   <label>User Name</label>
                   <input type="text" class="form-control" name="username" placeholder="Enter username" required/>
               </div>
               <div class="form-group">
                   <label>Password</label>
                   <input type="password" class="form-control" name="password" placeholder="Enter password" required/>
               </div><br/>
               <div class="text-center">
               <button type="submit" class="btn btn-success">SAVE</button>
               </div>
             </form>
          </div>



@endsection