@extends('Layouts.User_guest_main')

@section('Main_Title')
    View My cart
@endsection

@section('content')
<table class = 'Snd_Row-Right'>
    <tr>
        <td>
            <h1 align = 'center'>
                View my Cart
            </h1>
        </td>
    </tr>

    <tr>
        <td>
            <table class = 'Cart' align = 'center'>
                <th>
                    Product Name
                </th>

                <th>
                    Number of Quantity
                </th>

                <th>
                    Price per item
                </th>

                <th>
                    TotalCost
                </th>

                @for($i = 0; $i < sizeof($cart); $i++)
                <tr>
                    <td align = 'center'>
                        <input type="hidden" value = "{{$cart[$i]['Prod_id']}}" name="Prod_id">
                        <p>
                            {{$cart[$i]['Product']}}
                        </p>
                    </td>

                    <td align = 'center'>
                        <p>
                            {{$cart[$i]['Quantity']}}
                        </p>
                    </td>
                    
                    <td align = 'center'>
                        <p>
                            {{$cart[$i]['Price_per_item']}}$
                        </p>
                    </td>
                    
                    <td align = 'center'>
                        <p>
                            {{$cart[$i]['TotalCost']}}$
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <h2>
                Your Total cost is: {{$totalCost}}$
            </h2>
        </td>
    </tr>
    
    <tr align = 'center'>
        <td>
            <button>
                <a href="/User/Cart/NewOrder">Add new Order</a>
            </button>
        </td>
    </tr>

    @if(Session::has('Success'))
    <tr>
        <td align = 'center'>
            <p class="Success">
                {{Session::get('Success')}}
            </p>
        </td>
    </tr>
    @endif
</table>
@endsection