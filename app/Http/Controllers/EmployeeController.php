<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\Employee;
class EmployeeController extends Controller
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
    public function index()
    {
        return view('add_employee');
    }
    public function store(Request $request){
    	$validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|unique:employees|max:255',
        'phone' => 'required|unique:employees|max:255',
    ]);
        $data=array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['exprience'] = $request->exprience;
        $data['salary'] = $request->salary;
        $data['join_date']=$request->join_date;
        $data['vacation']=$request->vacation;
         $image = $request->file('photo');
    if($image){
        $image_name = rand(1, 999);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name. '.'. $ext;
        $upload_path = 'public/employees/';
        $image_url = $upload_path. $image_full_name;
        $success = $image->move($upload_path, $image_full_name);
        if($success)
        {
            $data['photo'] = $image_url;
            DB::table('employees')->insert($data);
            Session::put('messsa ge', 'product uploaded success');
            return Redirect()->back();
        }
}

        $data['photo'] = '';
        DB::table('employees')->insert($data);
            Session::put('messsage', 'product uploaded success');
            return Redirect()->back();
    }
    public function AllEmployee(){
        $employees = Employee::all();

        return view('all_employee', compact($employees));
    }
    public function ViewEmployee($id){
        $single=DB::table('employees')
                ->where('id', $id)
                ->first();
                return view('view_employee', compact('single'));
    }
    public function DeleteEmployee($id){
        $delete= DB::table('employees')
                ->where('id', $id)
                ->first();
        $photo=$delete->photo;
        unlink($photo);
        $dltuser=DB::table('employees')
                ->where('id', $id)
                ->delete();
         if($dltuser){
            $notification = array(
                'massage' => 'Successfully Employee Deleted',
                'alert-type' => 'Sucess'

            );
            return Redirect()->route('all.employee')->with($notification);
         }               
         else{
            $notification=array(
                'message'=>'error',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
         }

    }
    public function EditEmployee($id){
        $edit = DB::table('employees')
                ->where('id', $id)
                ->first();
            return view('edit_employee', compact('edit'));
    }
    public function UpdateEmployee(Request $request, $id){
        $data= array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['exprience'] = $request->exprience;
        $data['salary'] = $request->salary;
        $data['join_date']=$request->join_date;
        $data['vacation']=$request->vacation;
        $image = $request->file('photo');
        if($image){
        $image_name = rand(1, 999);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name. '.'. $ext;
        $upload_path = 'public/employees/';
        $image_url = $upload_path. $image_full_name;
        $success = $image->move($upload_path, $image_full_name);
        if($success)
        {
            $data['photo'] = $image_url;
            $img=DB::table('employees')->where('id', $id)->first();
            $image_path = $img->photo;
            $done= unlink($image_path);
            $post = DB::table('employees')->where('id', $id)->update($data);
            Session::put('messsa ge', 'product uploaded success');
            return Redirect::to('/edit-employee/');
        }
    }
       
    }
}
