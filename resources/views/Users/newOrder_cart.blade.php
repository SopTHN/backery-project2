@extends('Layouts.User_guest_main')

@section('Main_Title')
    Confirm Your Order
@endsection

@section('form')
    <form action='{{url("/User/Cart/ConfirmOrder_cart")}}' method="post">
    @csrf
@endsection

@section('content')
<table class = 'Snd_Row-Right' align = 'center'>
    <tr>
        <td>
            <h1 align = 'center'>
                Confirm Your Order
            </h1>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <table class = 'bill'>
                <th>
                    <p>
                        Product Name
                    </p>
                </th>

                <th>
                    <p>
                        Num of Qty.
                    </p>
                </th>

                <th>
                    <p>
                        Price Per item
                    </p>
                </th>

                <th>
                    <p>
                        total Cost
                    </p>
                </th>

                @foreach($Cart as $item)
                <tr>
                    <td align = 'center'>
                        <p>
                            {{$item['Product']}}
                        </p>
                    </td>
                    
                    <td align = 'center'>
                        <p>
                            {{$item['Quantity']}}
                        </p>
                    </td>
                    
                    <td align = 'center'>
                        <p>
                            {{$item['Price_per_item']}}$
                        </p>
                    </td>

                    <td align = 'center'>
                        <p>
                            {{$totalCost}}$
                        </p>
                    </td>
                </tr>
                @endforeach

                <tr>
                    <td colspan = '4'>
                        <h3 align = 'center'>
                            Total Cost is: {{$totalCost}}$
                        </h3>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <h2 align = 'center'>
                Fillout all fields to Continue
            </h2>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <table class = 'Order_Fields' align = 'center'>
                <tr>
                    <td align = 'right'>
                        <p>
                            Address:
                        </p>
                    </td>

                    <td align = 'center'>
                        <input type="text" name = 'Address' placeholder = 'Put your Address Here'/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p align = 'right'>
                            Payment:
                        </p>
                    </td>

                    <td align = 'center'>
                        <input type="radio" name="PaymentType" id="PaymentType">
                            Credit Card
                        </input>

                        <input type="radio" name="PaymentType" id="PaymentType">
                            Cash
                        </input>
                    </td>
                </tr>

                <tr>
                    <td align = 'center' colspan = '2'>
                        <input type="submit" value="Confirm The Order">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
</table>

@section('endForm')
</form>
@endsection

@endsection