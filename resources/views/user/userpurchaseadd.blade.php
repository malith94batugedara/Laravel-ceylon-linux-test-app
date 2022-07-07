@extends('layouts.app')


@section('content')

<h1 class="text-center">ADD INDIVIDUAL PURCHASE ORDER</h1><br>


<div class="container ">
    
             <form method="post" action="" enctype="multipart/form-data">
                        @csrf
            <div class="row">
                <div class="form-group col-3">
                    <label>Zone</label>
                    <select>
                       <option>select</option>
                       <option>1</option>
                       <option>2</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label>Region</label>
                    <select>
                       <option>select</option>
                       <option>1</option>
                       <option>2</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label>Territory</label>
                    <select>
                       <option>select</option>
                       <option>1</option>
                       <option>2</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label>Distributor</label>
                    <select>
                       <option>select</option>
                       <option>1</option>
                       <option>2</option>
                    </select>
                </div>
               
            </div><br>
            <div class="row"> 

            <div class="form-group col-4">
                   <label>Date</label>
                   <input type="text" class="form-control" name="date" placeholder="Automatically" />
            </div>

            <div class="form-group col-4">
                   <label>PO No</label>
                   <input type="text" class="form-control" name="date" placeholder="Automatically" />
            </div>

            <div class="form-group col-4">
                   <label>Remark</label>
                   <input type="text" class="form-control" name="date" placeholder="Type" />
            </div>



            </div>
             </form>
<br><br>
             <table class="table table-dark">

                  <thead>
                    <th>SKU CODE</th>
                    <th>SKU NAME</th>
                    <th>UNIT PRICE</th>
                    <th>AVB QTY</th>
                    <th>ENTER QTY<br><p>(CASL)</p></th>
                    <th>UNITS</th>
                    <th>TOTAL PRICE</th>

                  </thead>

                  <tbody>
                    <tr>
                        <td>FWC 001</td>
                        <td>ABC 100ML</td>
                        <td>100.00</td>
                        <td>50</td>
                        <td>Type</td>
                        <td><p>calculated based on added cases</p></td>
                        <td><p>calculated based on added cases</p></td>
                    </tr>
                    <tr>
                        <td>FWC 001</td>
                        <td>ABC 100ML</td>
                        <td>100.00</td>
                        <td>50</td>
                        <td>Type</td>
                        <td><p>calculated based on added cases</p></td>
                        <td><p>calculated based on added cases</p></td>
                    </tr>
                    <tr>
                        <td>FWC 001</td>
                        <td>ABC 100ML</td>
                        <td>100.00</td>
                        <td>50</td>
                        <td>Type</td>
                        <td><p>calculated based on added cases</p></td>
                        <td><p>calculated based on added cases</p></td>
                    </tr>
                    <tr>
                        <td>FWC 001</td>
                        <td>ABC 100ML</td>
                        <td>100.00</td>
                        <td>50</td>
                        <td>Type</td>
                        <td><p>calculated based on added cases</p></td>
                        <td><p>calculated based on added cases</p></td>
                    </tr>
                    <tr>
                        <td>FWC 001</td>
                        <td>ABC 100ML</td>
                        <td>100.00</td>
                        <td>50</td>
                        <td>Type</td>
                        <td><p>calculated based on added cases</p></td>
                        <td><p>calculated based on added cases</p></td>
                    </tr>

                  </tbody>

             </table>
             <div class="text-center">
             <input type="submit" class="btn btn-success" value="ADD PO">
             </div>
</div>




@endsection