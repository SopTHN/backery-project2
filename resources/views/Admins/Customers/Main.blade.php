@extends('Layouts/Admin_main')

@section('Title_name')
    View Customers
@endsection

@section('Link')
    <link rel="stylesheet" href="/css/Messages.css"/>
@endsection

@section('content')
    <h1>
        Customers Info.
    </h1>

    @if (!$Users->isEmpty())
    <table class="Customers">
        <th>
            <p>ID</p>
        </th>

        <th>
            <p>Username</p>
        </th>

        @foreach($Users as $user)
        <tr>
            <td align = 'center'>
                {{$user->id}}
            </td>

            <td align = 'center'>
                {{$user->name}}
            </td>

            <td align = 'center'>
                <Button>
                    <a href="/admin/User/{{$user->id}}">View Info.</a>
                </Button>
            </td>
        </tr>
        @endforeach
    </table>
    @else
    <p class="fail">The list of Customers are empty</p>
    @endif
@endsection