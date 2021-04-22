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
                                    <div class="panel-heading"><h3 class="panel-title">Employee Details</h3></div>
                                    <div class="panel-body">
                                          <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <p>{{$single->name}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <p>{{$single->email}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone</label>
                                                <p>{{$single->phone}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <p>{{$single->address}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Exprience</label>
                                                <p>{{$single->exprience}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Salary</label>
                                                <p>{{$single->salary}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Join Date</label>
                                                <p>{{$single->join_date}}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Vacation</label>
                                                <p>{{$single->vacation}}</p>
                                            </div>
                                             <div class="form-group">
                                                
                                                <label for="exampleInputPassword1"></label>
                                                <img src="{{URL::to($single->photo)}}" style="height: 80px; width: 80px;">
                                            </div>
                                            
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
