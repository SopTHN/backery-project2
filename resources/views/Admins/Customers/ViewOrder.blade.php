@extends('Layouts.Admin_main')

@section('Title_name')
    View Order
@endsection

@section('content')
<h1 align = 'center'>
    Order info.
</h1>
<table class = 'Orders'>
    <th>
        Product name
    </th>

    <th>
        Num of Quantity
    </th>

    <th>
        Price
    </th>

    <th>
        TotalCost
    </th>

    @for($x = 0; $x < sizeof($Order_Items); $x++)
    <tr>
        <td align = 'center'>
            <p>
                {{$Order_Items[$x]['Product']}}
            </p>
        </td>
        
        <td align = 'center'>
            <p>
                {{$Order_Items[$x]['Quantity']}}
            </p>
        </td>
        
        <td align = 'center'>
            <p>
                {{$Order_Items[$x]['Price_per_item']}}
            </p>
        </td>
        
        <td align = 'center'>
            <p>
                {{$Order_Items[$x]['TotalCost']}}$
            </p>
        </td>
    </tr>
    @endfor
</table>

<h2 align = 'center'>
    The Total Cost is: {{$totalCost}}$
</h2>

<button align = 'center'>
    <a href='/admin/User/{{$UserId}}'>Go back</a>
</button>
@endsection