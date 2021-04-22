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
                                    <div class="panel-heading"><h3 class="panel-title">Update Employee</h3></div>
                                    <div class="panel-body">
                                        <form role="form" method="POST" action="{{url('/update-employee'.$edit->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$edit->name}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <input type="email" class="form-control" name="email" value="{{$edit->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone</label>
                                                <input type="text" class="form-control" name="phone" value="{{$edit->phone}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="text" class="form-control" name="address" value="{{$edit->address}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Exprience</label>
                                                <input type="text" class="form-control" name="exprience" value="{{$edit->exprience}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Salary</label>
                                                <input type="text" class="form-control" name="salary" value="{{$edit->salary}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Join Date</label>
                                                <input type="text" class="form-control" name="join_date" value="{{$edit->join_date}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Vacation</label>
                                                <input type="text" class="form-control" name="vacation" value="{{$edit->vacation}}">
                                            </div>
                                             <div class="form-group">
                                                <img id="image" src="#">
                                                <label for="exampleInputPassword1">New Photo</label>
                                                <input type="file"  name="photo" accept="image/*" class="upload" required onchange="readURL(this);">
                                            </div>
                                            <div class="form-group">
                                                <img src="{{URL::to($edit->photo)}}" name="old_photo" style="height: 80px; width:80px;">
                                            </div>
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
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
