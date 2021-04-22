@extends('layouts.app')

@section('content')
<div class="content-page">
<div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        


                        <div class="row">
                        <div class="col-md-2"></div>
                         <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add Supplier</h3></div>
                                   @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="panel-body">
                                        <form role="form" method="POST" action="{{url('insert-supplier')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select Employee</label>
                                                @php
                                                $emp=DB::table('employees')->get();
                                                @endphp
                                                <select name="emp_id" class="form-control">
                                                    <option disabled="" selected="">
                                                        @foreach($emp as $row)
                                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach
                                                    </option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Supplier Contact No 1</label>
                                                <input type="text" class="form-control" name="SupplierContactNof" placeholder="Supplier Contact No 1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Supplier Contact No 2</label>
                                                <input type="text" class="form-control" name="SupplierContactNos" placeholder="Supplier Contact No (optional)">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Supplier Shop Name</label>
                                                <input type="text" class="form-control" name="SupplierShopName" placeholder="Supplier Shop Name">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Supplier Address</label>
                                                <input type="text" class="form-control" name="SupplierAddress" placeholder="Customer Address ">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Lat No</label>
                                                <input type="text" class="form-control" name="LatNo" placeholder="LatNo (optional)">
                                            </div>
                                                                                        
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> 

                             
                        </div> <!-- End row -->


                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->
<script type="text/javascript">
    function readURL(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function (e){
                $('image')
                   .attr('src', e.target.result)
                   .width(80)
                   .height(80)
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
                

@endsection
