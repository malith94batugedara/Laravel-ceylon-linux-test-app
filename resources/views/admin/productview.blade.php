@extends('layouts.admin')


@section('content')

<h1 class="text-center"> PURCHASE ORDER VIEW</h1><br>


<div class="container ">
    
             <form method="post" action="" enctype="multipart/form-data">
                        @csrf
            <div class="row">
                <div class="form-group col-2">
                    <label>REGION</label>
                    <select>
                       <option>select</option>
                       <option>1</option>
                       <option>2</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label>TERRITORY</label>
                    <select>
                       <option>select</option>
                       <option>1</option>
                       <option>2</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label>PO NO</label>
                    <select>
                       <option>Type & search</option>
                       <option>1</option>
                       <option>2</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label>FROM</label>
                    <input type="date" class="form-control" name="date" placeholder="Automatically" />
                </div>
                <div class="form-group col-3">
                    <label>TO</label>
                    <input type="date" class="form-control" name="date" placeholder="Automatically" />
                </div>
               
            </div><br>
             </form>
<br><br>
             <table class="table table-dark">

                  <thead>
                    <th>REGION</th>
                    <th>TERRITORY</th>
                    <th>DISTRIBUTOR</th>
                    <th>PO NUMBER</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>TOTAL AMOUNT</th>

                  </thead>

                  <tbody>
                    <tr>
                        <td>REGION 1</td>
                        <td>TERRITORY 1</td>
                        <td>DISTRIBUTOR 1</td>
                        <td>TEP0001</td>
                        <td>05/02/2021</td>
                        <td>8.10AM</td>
                        <td>12500.00</td>
                    </tr>
                    <tr>
                        <td>REGION 1</td>
                        <td>TERRITORY 1</td>
                        <td>DISTRIBUTOR 1</td>
                        <td>TEP0001</td>
                        <td>05/02/2021</td>
                        <td>8.10AM</td>
                        <td>12500.00</td>
                    </tr>
                    <tr>
                        <td>REGION 1</td>
                        <td>TERRITORY 1</td>
                        <td>DISTRIBUTOR 1</td>
                        <td>TEP0001</td>
                        <td>05/02/2021</td>
                        <td>8.10AM</td>
                        <td>12500.00</td>
                    </tr>

                  </tbody>

             </table>
             <div>
             <input type="submit" class="btn btn-success" value="ADD PO"><br><br>
             <input type="submit" class="btn btn-secondary" value="VIEW"><br><br>
             <input type="submit" class="btn btn-secondary" value="VIEW"><br><br>
             <input type="submit" class="btn btn-secondary" value="VIEW">


             </div>
</div>




@endsection