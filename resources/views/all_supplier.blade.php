@extends('layouts.app')

@section('content')
<link href="{{asset('public/admin/assets/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
<div class="content-page">
<div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">All Supplier</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Dcart</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        


                        <div class="row">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Phone</th>
                                                            <th>Shop Name</th>
                                                            <th>Shop Address</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                    	@php 
                                                        $suppliers = DB::table('suppliers')->get();
                                                        @endphp
                                                    	@foreach($suppliers as $row)
                                                        <tr>
                                                            <td>{{$row->SupplierName}}</td>
                                                            <td>{{$row->SupplierContactNof}}</td>
                                                            <td>{{$row->SupplierShopName}}</td>
                                                            <td>{{$row->SupplierAddress}}</td>
                                                           
                                                            <td><a href="{{URL::to('edit-supplier/'.$row->SupplierId)}}" class="btn btn-sm btn-info">Edit</a>
                                                           <a href="{{URL::to('delete-supplier/'.$row->SupplierId)}}" id="delete" class="btn btn-sm btn-danger" >Delete</a>
                                                           <a href="{{URL::to('view-Supplier/'.$row->SupplierId)}}" id="" class="btn btn-sm btn-success" >View</a>
                                                       </td>
                                                        </tr>
                                                       @endforeach
                                                    </tbody>
                                                </table>

                                            </div>  

                             
                        </div> <!-- End row -->


                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->
            </div>
                
            <script src="{{asset('public/admin/assets/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/datatables/dataTables.bootstrap.js')}}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
@endsection
