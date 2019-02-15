<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;

class CustomerController extends Controller
{
    //buat fungsi baru untuk index
    function index() {

        $customer = Customer::get(['customer_id','name','address']);

        return view('customer.index', compact('customer'));
    }

    function create() {
        return view('customer.create');
    }


        public function show($id){
          $customer = Customer::where('customer_id', $id)->get();
          return view ('customer.show',compact('customer'));
        }

        public function edit($id){
          $customer = Customer::where('customer_id', $id)->get();
          return view ('customer.edit', compact('customer'));
        }

    public function store (Request $request)
    {
      //buat validator yang di view
      $validator = Validator::make($request->all(), [
        'txt_id' => 'required|string|max:10',
        'txt_name' => 'required|string|max:20',
        'txt_address' => 'required|string|max:50',
        'txt_goder' => 'required',
      ])->validate();

      //mengambil dari View

        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress= $request->input('txt_address');

        echo $txtId." <br />".
        $txtName." <br />".
        $txtAddress;

        Customer::create([
            'customer_id' => $txtId,
            'name' => $txtName,
            'address' => $txtAddress
        ]);

        return
        redirect('/Customer');
    }
    public function update (Request $request, $id) {
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress= $request->input('txt_address');

        Employee::where('customer_id', $id)->update([
            'customer_name' => $txtName,
            'customer_address' => $txtAddress
        ]);

        return
        redirect('/Customer');
      }

      public function destroy($id){
        $customer = Customer::where('customer_id',$id)->first();
        $customer->delete();

        return
        redirect ('/Customer');
      }

}
