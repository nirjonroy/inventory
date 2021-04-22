<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\Supplier;
class SupplierController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
    	return view('add_supplier');
    }
    public function store(Request $request){
    	$validatedData = $request->validate([
        'SupplierName' => 'required',
        
    ]);
    	$data = array();
    	$data['SupplierName'] = $request->SupplierName;
    	$data['SupplierAddress']=$request->SupplierAddress;
    	$data['SupplierShopName'] = $request->SupplierShopName;
    	$data['SupplierContactNof']=$request->SupplierContactNof;
    	$data['SupplierContactNos']=$request->SupplierContactNos;
    	$data['LatNo']=$request->LatNo;
    	DB::table('suppliers')->insert($data);
    	Session::put('massage', 'add successfully');
    	 return Redirect()->back();
    }
     public function AllSupplier(Request $request){
    	 $suppliers = Supplier::all();
         return view('all_Supplier', compact($suppliers));
    }

    public function ViewSupplier($SupplierId){
        $SupplierInfo=DB::table('Suppliers')
                ->where('SupplierId', $SupplierId)
                ->first();
                return view('view_supplier', compact('SupplierInfo'));
    }
    public function DeleteCustomer($SupplierId){
    	$delete = DB::table('suppliers')
    			->where('SupplierId', $SupplierId)
    			->delete();
    }
    public function EditSupplier($SupplierId){
        $edit = DB::table('suppliers')
                ->where('SupplierId', $SupplierId)
                ->first();
            return view('edit_supplier', compact('edit'));
    }
    
}
