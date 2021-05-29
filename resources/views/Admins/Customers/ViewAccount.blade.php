@extends('Layouts.Admin_main')

@section('Title_name')
@endsection

@section('content')
<h1 align = 'center'>
    Account Info.
</h1>
<table class="Customer_info">
    <tr align = 'center'>
        <td>
            <p>
                Account id:
            </p>
        </td>

        <td>
            <p>
                {{$User->id}}
            </p>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <p>
                Account name:
            </p>
        </td>

        <td>
            <p>
                {{$User->name}}
            </p>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <p>
                Email:
            </p>
        </td>

        <td>
            <p>
                {{$User->email_user}}
            </p>
        </td>
    </tr>
</table>

<h1 align = 'center'>
    Order Info.
</h1>

<table class="Orders">
        <th>
            Order Id.
        </th>

        <th>
            Order Cost
        </th>

        @foreach($Orders as $order)
        <tr align = 'center'>
        <td>
            <p>
                {{$order->id}}
            </p>
        </td>

        <td>
            <p>
                {{$order->total_cost}}$
            </p>
        </td>

        <td>
           <button>
               <a href="/admin/User/{{$User->id}}/Order/{{$order->id}}">View Order</a>
           </button> 
        </td>
        </tr>
        @endforeach
</table>
@endsection