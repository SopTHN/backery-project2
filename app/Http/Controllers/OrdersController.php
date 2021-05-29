<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Users;
use validator;

class OrdersController extends Controller
{
    public function newOrder(Request $request) {
        $id = request('id');
        $product = Product::where('id', $id)->get()->first();
        $Quantity = request('Qty');

        $Price = $product->Price;
        $totalCost = $Quantity * $Price;

        if ($request->has('form1')){
            $userController = new UsersController();
            return $userController->addToCart($product, $Quantity, $totalCost, $Price);
        } else {
            

        $data = ['Product' => $product, 'Qty' => $Quantity, 'totalCost' => $totalCost];

        return view('Users.newOrder', $data);
        }
    }

    public function newOrder_cart() {
        $user = users::where('id', session('LoggedUser'))->get()->first();

        $cart_Items = $user->Cart;

        $totalCost = 0;

        for ($x = 0; $x < sizeof($cart_Items); $x++) {
            $totalCost += $cart_Items[$x]['TotalCost'];
        }

        $data = ['Cart' => $cart_Items, 'totalCost' => $totalCost];

        return view('Users.newOrder_cart', $data);
    }

    public function StoreCart(Request $request) {
        $validator = $request->validate([
            'Address' => 'required',
            'PaymentType' => 'required'
        ]);
        
        $totalCost_Cart = 0;

        if ($validator){
            $order = new Order();
            $user = users::where('id', session('LoggedUser'))->get()->first();

            $data = null;

            for ($x = 0; $x < sizeof($user->Cart); $x++){
                $id = $user->Cart[$x]['Prod_id'];    
                $product = Product::where('id', $id)->get()->first();

                $Quantity = $user->Cart[$x]['Quantity'];
                $Price = $product->Price;

                $totalCost = $Price * $Quantity;

                $totalCost_Cart += $totalCost;

                if ($x == 0) {
                    $data = [['Prod_id' => $id, 
                    'Product' => $product->name,
                    'Quantity' => $Quantity,
                    'Price_per_item' => $Price,
                    'TotalCost' => $totalCost
                    ]];
                } else {
                    $arr = [['Prod_id' => $id, 
                        'Product' => $product->name,
                        'Quantity' => $Quantity,
                        'Price_per_item' => $Price,
                        'TotalCost' => $totalCost
                    ]];
                    
                    array_push($data, $arr);
                }


                $modded_Qty = $product->Qty - $Quantity;

                $product->update([
                    'Qty' => $modded_Qty
                ]);
            }

            $user->update([
                'Cart' => null
            ]);

            $order->user_id = session('LoggedUser');
            $order->address = $request->Address;
            $order->Items = $data;
            $order->checkout_type = $request->PaymentType;
            $order->total_cost = $totalCost_Cart;

            $order->save();

            return redirect('/')->with('Success', 'Thank you For Buying One of our Product');
        }

        return redirect()->back()->witherrors($validator);
    }

    public function Store(Request $request) {
        $validator = $request->validate([
            'Address' => 'required',
            'PaymentType' => 'required'
        ]);

        if ($validator){
            $order = new Order();
            $product = Product::where('id', $request->id)->get()->first();

            $Quantity = request('Qty');
            $Price = $product->Price;

            $totalCost = $Price * $Quantity;

            $data = [['Prod_id' => request('id'), 
                    'Product' => $product->name,
                    'Quantity' => $Quantity,
                    'Price_per_item' => $Price,
                    'TotalCost' => $totalCost
            ]];

            $modded_Qty = $product->Qty - $Quantity;

            $product->update([
                'Qty' => $modded_Qty
            ]);

            $order->user_id = session('LoggedUser');
            $order->address = $request->Address;
            $order->Items = $data;
            $order->checkout_type = $request->PaymentType;
            $order->total_cost = $totalCost;

            $order->save();

            return redirect('/')->with('Success', 'Thank you For Buying One of our Product');
        }

        return redirect()->back()->witherrors($validator);
    }

    public function indexOrder($id, $order_id) {
        $order = Order::Where('user_id', $id)
                    ->Where('id', $order_id)->get()->first();

        $totalCost = 0;

        for ($x = 0; $x < sizeof($order->Items); $x++) {
            $totalCost += $order->Items[$x]['TotalCost'];
        }
        return view('Admins.Customers.ViewOrder', ['Order_Items' => $order->Items, 'totalCost' => $totalCost, 'UserId' => $id]);
    }

    public function OrderInfo(Request $request) {
        $order = Order::where('id', $request->Order_id)
                    ->where('user_id', session('LoggedUser'))->get()->first();

        return view('Users.viewOrder', ['Order' => $order]);
    }
}
    