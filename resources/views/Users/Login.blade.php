
@extends('Layouts\Reg_LogUI')

@section('Title_name')
    Login
@endsection

@section('cssLink')
    <link rel = 'stylesheet' href = '/css/Messages.css'/>
@endsection

@section('form')
    <form action = '{{ url("/") }}' method = 'post' >
    @csrf
@endsection

@section('inputFields')
                <tr>
                    <td>
                        <p>Username:</p>
                    </td>

                    <td>
                        <input id = 'Username' name = 'Username' type = 'textbox' value = '{{old("Username")}}' placeholder = 'Put Your Username here'/>
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <p>Password:</p>
                    </td>
                    
                    <td>
                        <input id = 'Password' name = 'Password' type = 'Password' value = '{{old("Password")}}' placeholder = 'Put Your Password here'/>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' class = 'a-Optional'>
                        <a class = 'a-Optional' 
                        href = '/register'> Create New Account! </a>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' class = 'button-Optional'>
                        <input type = 'Submit' class = 'button-Optional' value = 'Login'/>
                    </td>
                </tr>
            
                @if(Session::has('Success'))
                <tr align = 'center'>
                    <td colspan = '2'>
                        <p class = 'Success'>{{Session::get('Success')}}</p>
                    </td>
                </tr>
                @elseif(Session::has('fail'))
                <tr align = 'center'>
                    <td colspan = '2'>
                        <p class = 'fail'>{{Session::get('fail')}}</p>
                    </td>
                </tr>
                @endif

                @error('Username')
                <tr align = 'center'>
                    <td colspan = '2'>
                        <p class="fail">Make sure you enter username Correctly</p>
                    </td>
                </tr>
                @enderror

                @error('Password')
                <tr align = 'center'>
                    <td colspan = '2'>
                        <p class="fail">Make sure you enter Password Correctly</p>
                    </td>
                </tr>
                @enderror
@endsection

@section('end_form')
</form>
@endsection