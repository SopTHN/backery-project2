<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\Product;
use App\Models\Order;
use Illuminate\support\facades\Hash;
use Validator;

class UsersController extends Controller
{
    public function Reg() {
        return view('Users.Register');
    }

    public function Login() {
        return view('Users.Login');
    }

    public function logout() {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }

    public function Menu() {
        $data = ['LoggedUserInfo'=>users::where('id', session('LoggedUser'))->first()];
        $Products = Product::all();
        return view('Main', ['data' => $data], ['Products' => $Products]);
    }

    public function check(Request $request) {
        $validator = Validator::make($request->all(), [
            'Username' => 'Required|min:5',
            'Password' => 'Required|min:10'
        ]);
        
        $user = users::where('name', $request->Username)->first();

        if ($user) {
            $userPass = $user->password;
            if (Hash::check($request->Password, $userPass)){
                $request->session()->put('LoggedUser', $user->id);
                return redirect('/');
            } else {
                return redirect()->back()->with('fail', 'Make sure you Entered Password Correctly');    
            }
        } else {
            return redirect()->back()->with('fail', 'We don\'t recognize this Account');    
        }

    }

    public function insert(Request $request) {
        $validator = Validator::make($request->all(), [
            'Username' => 'Required|min:5',
            'Email' => 'Required|unique:email',
            'Password' => 'Required|min:5'
        ]);
        
        if (!$validator->fails()) {
            $user = new users();

            $user->name = request('Username');
            $user->email_user = request('Email');
            $user->password = request('Password');
            $user->save();
            
            return redirect('/login')->with('Success', 'Your Account Has been created Successfully!');
        }

        return back()->witherrors($validator);
    }

    public function addToCart($product, $Quantity, $totalCost, $Price) {
        $user = Users::where('id', session('LoggedUser'))->get()->first();
        $Product = Product::where('id', request('id'))->get()->first();

        $Quantity = request('Qty');

        if (Empty($user->Cart)){
            $data = array(array(
                'Prod_id' => $Product->id,
                'Product' => $Product->name,
                'Quantity' => $Quantity,
                'Price_per_item' => $Price,
                'TotalCost' => $totalCost));

            $user->update([
                'Cart' => $data
            ]);
            
            return Redirect('/')->with('Success', 'Added to Cart Successfully');
        } else {            
            $data = [
                'Prod_id' => $Product->id,
                'Product' => $Product->name,
                'Quantity' => $Quantity,
                'Price_per_item' => $Price,
                'TotalCost' => $totalCost
            ];
            
            $list = $user->Cart;

            array_push($list, $data);

            $user->update([
                'Cart' => $list
            ]);
            
            return Redirect('/')->with('Success', 'Added to Cart Successfully');
        }

        return Redirect()->back();
    }

    public function indexCart() {
        $user = Users::where('id', session('LoggedUser'))->get()->first();

        if ($user->Cart == null) {
            return Redirect('/')->with('Fail', 'Your cart is empty');
        } else {
            $totalCost = 0;

            for($x = 0; $x < sizeof($user->Cart); $x++) {
                $totalCost += $user->Cart[$x]['TotalCost'];
            }

            return view('Users.Cart', ['cart' => $user->Cart, 'totalCost' => $totalCost]);
        }
    }

    public function indexCustomer($id) {
        $user = Users::where('id', $id)->get()->first();
        $orders = Order::where('User_id', $user->id)->get();

        return view('Admins.Customers.ViewAccount', ['User' => $user, 'Orders' => $orders]);
    }

    public function accountInfo() {
        $user = Users::where('id', session('LoggedUser'))->get()->first();
        $Orders = Order::where('user_id', session('LoggedUser'))->get();

        return view('Users.account_info', ['user' => $user, 'Orders' => $Orders]);
    }

    public function change() {
        $user = Users::where('id', session('LoggedUser'))->get()->first();

        return view('Users.update_account', ['User' => $user]);
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'Username' => 'string|required',
            'Email' => 'string|required',
            'Password' => 'string|required'
        ]);

        if (!$validator->fails()) {
            $user = Users::where('id', session('LoggedUser'))->get()->first();

            $user->update([
                'name' => $request->Username,
                'email_user' => $request->Email,
                'password' => $request->Password
            ]);

            return redirect('/User/account')->with('Success', 'Your account has been Updated Successfully!');
        }
        return redirect()->back()->withErrors($validator);
    }
}
