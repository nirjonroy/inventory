<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\Customer;

class CustomerController extends Controller
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
    	return view('add_customer');
    }
    public function store(Request $request){
    	$validatedData = $request->validate([
        'CustomerName' => 'required',
        
    ]);
    	$data = array();
    	$data['CustomerName'] = $request->CustomerName;
    	$data['CustomerContactNoF']=$request->CustomerContactNoF;
    	$data['CustomerContactNoS'] = $request->CustomerContactNoS;
    	$data['CustomerAddressF']=$request->CustomerAddressF;
    	$data['CustomerAddressS']=$request->CustomerAddressF;
    	$data['LatNo']=$request->LatNo;
    	DB::table('customers')->insert($data);
    	Session::put('massage', 'add successfully');
    	 return Redirect()->back();
    }
    public function AllCustomer(Request $request){
    	 $customers = Customer::all();
         return view('all_customer', compact($customers));
    }
     public function ViewCustomer($CustomerId){
        $single=DB::table('customers')
                ->where('CustomerId', $CustomerId)
                ->first();
                return view('view_customer', compact('single'));
    }
    public function DeleteCustomer($CustomerId){
    	$delete = DB::table('customers')
    			->where('CustomerId', $CustomerId)
    			->delete();
    }
    public function EditCustomer($CustomerId){
        $edit = DB::table('customers')
                ->where('CustomerId', $CustomerId)
                ->first();
            return view('edit_customer', compact('edit'));
    }
    public function UpdateEmployee(Request $request, $CustomerId){
    	$data = array();
    	$data['CustomerName'] = $request->CustomerName;
    	$data['CustomerContactNoF']=$request->CustomerContactNoF;
    	$data['CustomerContactNoS'] = $request->CustomerContactNoS;
    	$data['CustomerAddressF']=$request->CustomerAddressF;
    	$data['CustomerAddressS']=$request->CustomerAddressF;
    	$data['LatNo']=$request->LatNo;
    	DB::table('customers')
    	->where('CustomerId', $CustomerId)
    	->update($data);
    	Session::put('massage', 'update successfully');
    	 return Redirect()->back();
    }

}
