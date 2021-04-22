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
                                    <div class="panel-heading"><h3 class="panel-title">Add Customer</h3></div>
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
                                        <form role="form" method="POST" action="{{url('update-customer'.$edit->CustomerId)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Customer Name</label>
                                                <input type="text" class="form-control" name="CustomerName" value="{{$edit->CustomerName}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Customer Contact No 1</label>
                                                <input type="text" class="form-control" name="CustomerContactNoF" value="{{$edit->CustomerContactNoF}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Customer Contact No 2</label>
                                                <input type="text" class="form-control" name="CustomerContactNoS" value="{{$edit->CustomerContactNoS}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Customer Address 1</label>
                                                <input type="text" class="form-control" name="CustomerAddressF" value="{{$edit->CustomerAddressF}}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Customer Address 2</label>
                                                <input type="text" class="form-control" name="CustomerAddressS" value="{{$edit->CustomerAddressS}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Lat No</label>
                                                <input type="text" class="form-control" name="LatNo" value="{{$edit->LatNo}}">
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
