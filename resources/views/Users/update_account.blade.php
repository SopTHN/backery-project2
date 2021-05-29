@extends('Layouts.User_guest_main')

@section('Main_Title')
    Update Account
@endsection

@section('Link')
<Link rel = 'stylesheet' href = '/css/Messages.css'/>
@endsection

@section('content')
<table align = 'center' class = 'Snd_Row-Right'>
    <tr>
        <td>
            <h1 align = 'center'>
                Update Account.
            </h1>
        </td>
    </tr>

    <tr>
        <td>
            <form action="{{url('User/account/update')}}" method="post">
            @csrf
            <table align = 'center' class = 'Customer_info'>
                <tr>
                    <td>
                        <p align = 'center'>
                            Account Name:
                        </p>
                    </td>

                    <td>
                        <input align = 'center' type="text" name="Username" id="Username" value = '{{$User->name}}'/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p align = 'center'>
                            Email:
                        </p>
                    </td>

                    <td>
                        <input align = 'center' type="text" name="Email" id="Email" value = '{{$User->email_user}}'/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p align = 'center'>
                            Password:
                        </p>
                    </td>

                    <td>
                        <input align = 'center' type="password" name="Password" id="Password" placeholder = 'Enter your Password here'/>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' align = 'center'>
                        <input type="submit" value="Update Account">
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' align = 'center'>
                        <button style = 'margin-top: 10px; margin-bottom: 10px;'>
                            <a href="/User/account">Go back</a>
                        </button>
                    </td>
                </tr>
            </table>
            </form>
        </td>
    </tr>

    <tr>
        <td align = 'center'>
            @error('Username')
            <p class = 'fail'>
                Make sure you entered your name Correctly
            </p>
            @enderror

            @error('Email')
            <p class="fail">
                Make sure you entered your Email Correctly
            </p>
            @enderror

            @error('Password')
            <p class="fail">
                Make sure you entered your Password Correctly
            </p>
            @enderror
        </td>
    </tr>
</table>
@endsection