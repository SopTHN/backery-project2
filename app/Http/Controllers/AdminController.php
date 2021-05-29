<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\users;
use App\Models\Admin;
use DB;
use Illuminate\Support\Facades\Hash;
use Validator;

class AdminController extends Controller
{
    public function login(Admin $admin) {
        if (!$admin->count()){
            $admin = new Admin();

            $admin->Username = 'asdqwe';
            $admin->email = 'Email@email.com';
            $admin->password = 'MAR2008ia';

            $admin->save();
        }
        return view('Admins.Login');
    }


    public function logout() {
        if (session()->has('Loggedadmin')){
            session()->pull('Loggedadmin');
            return redirect('/admin/login');
        }
    }

    public function check(Request $request) {
        $validator = Validator::make($request->all(), [
            'Username' => 'Required|min:5',
            'Password' => 'Required|min:10'
        ]);
        
        $admin = Admin::where('Username', $request->Username)->first();

        if ($admin) {
            $adminPass = $admin->Password;
            if (Hash::check($request->Password, $adminPass)){
                $request->session()->put('Loggedadmin', $admin->id);
                return redirect('/admin');
            } else {
                return redirect()->back()->with('fail', 'Make sure you Entered Password Correctly');    
            }
        } else {
            return redirect()->back()->with('fail', 'We don\'t recognize this Account');    
        }
    }

    public function mainMenu() {
        $data = ['LoggedAdminInfo'=>Admin::where('id', session('Loggedadmin'))->get()->first()];
        return view('Admins.Main', $data);
    }

    public function View(){
        return view('Admins.Products.Main');
    }

    /* 
        Add() function for View
        insert() function for DB
    */
    public function Add(){
        return view('Admins.Products.Add');
    }

    public function insert(Request $request) {
        $product = new Product();

        $validator = Validator::make($request->all(), [
            'Prod_name' => 'string|required|max:25',
            'Qty' => 'integer|required|min:10',
            'Price' => 'integer|required|min:2'
        ]);

        if (!$validator->fails()){
            $product->name = request('Prod_name');
            $product->Qty = request('Qty');
            $product->Price = request('Price');
    
            $product->save();
            
            return Redirect('/admin/Products')->with('Add_Success', 'Item Has been Added successfully');
        }
        
        return Redirect()->back()->witherrors($validator);
    }

    public function ProductView() {
        return view('Admins.Products.Main');
    }

    public function indexProd() {
        $Prods = Product::all();
        return view('Admins.Products.List', compact('Prods'));
    }

    /* 
        Edit() function for Show The Edit view
        Update() function for DB
    */
    public function Edit($id) {
        $product = Product::where('id', $id)->first();
        return view('Admins.Products.Edit', ['Product' => $product]);
    }

    public function Update_Prod(Request $request) {
        $validator = Validator::make($request->all(), [
            'Prod_name' => 'string|required|max:25',
            'Qty' => 'integer|required|min:10',
            'Price' => 'integer|required|min:2'
        ]);

        if (!$validator->fails()){
            Product::where('id', $request->id)->update([
                'name' => request('Prod_name'),
                'Qty' => request('Qty'),
                'Price' => request('Price')
            ]);

            return Redirect('/admin/Products')->with('Update_Success', 'Item Has been Updated successfully!');
        }
        
        return Redirect()->back()->witherrors($validator);
    }

    /* 
        Delete() function for View
    */
    public function Remove(Request $request, $id) {
        $product = Product::find($id);
        $product->delete();

        return Redirect('/admin/Products')->with('Delete_Success', 'Item Has been deleted Successfully!');
    }

    public function indexCustomers() {
        $Users = users::all();
        return view('Admins.Customers.Main', compact('Users'));
    }
}
