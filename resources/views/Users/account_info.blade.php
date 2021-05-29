@extends('Layouts.User_guest_main')

@section('Main_Title')
    Account Info.
@endsection

@section('Link')
<link rel = 'stylesheet' href = '/css/Messages.css'/>
@endsection

@section('content')
<table align = 'center' class = 'Snd_Row-Right'>
    <tr>
        <td>
            <h1 align = 'center'>
                Account Info.
            </h1>
        </td>
    </tr>

    <tr>
        <td>
            <table align = 'center' class = 'Customer_info'>
                <tr>
                    <td>
                        <p align = 'center'>
                            Account Name:
                        </p>
                    </td>

                    <td>
                        <p align = 'center'>
                            {{$user->name}}
                        </p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p align = 'center'>
                            Email:
                        </p>
                    </td>

                    <td>
                        <p align = 'center'>
                            {{$user->email_user}}
                        </p>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' align = 'center'>
                        <button style = 'margin-top: 10px; margin-bottom: 10px;'>
                            <a href="/User/account/changeAccount">Change Your account</a>
                        </button>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td>
            <h2 align = 'center'>
                @if(is_null($Orders))
                <p class="fail">
                    You don't have any Orders
                </p>
                @else
                <table align = 'center' class = 'Orders_User'>
                    <th>
                        Order id.
                    </th>

                    <th>
                        Order date
                    </th>

                    <th>
                        Total cost
                    </th>
                    @foreach($Orders as $Order)
                    <form action="{{url('User/account/Order')}}" method="post">
                    @csrf
                    <tr>
                        <td>
                            <input type = "hidden" name = 'Order_id' value = "{{$Order->id}}"/>
                            <p>
                                {{$Order->id}}
                            </p>
                        </td>

                        <td>
                            <p>
                                {{$Order->created_at->format('d/m/Y')}}
                            </p>
                        </td>

                        <td>
                            <p>
                                {{$Order->total_cost}}$
                            </p>
                        </td>

                        <td>
                            <input type="submit" value="View Order">
                        </td>
                    </tr>
                    </form>
                    @endforeach
                </table>
                @endif
            </h2>
        </td>
    </tr>

    @if(Session::has('Success'))
    <tr>
        <td align = 'center'>
            {{Session::get('Success')}}  
        </td>
    </tr>
    @endif
</table>
@endsection