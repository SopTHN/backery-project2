@extends('Layouts/Reg_LogUI')

@section('Title_name')
    Create Your Account
@endsection

@section('cssLink')
    <Link rel = 'stylesheet' href = '/css/Messages.css'/>
@endsection

@section('form')
    <form action = '{{ url("/login") }}' method = 'post'>
    @csrf
@endsection

@section('inputFields')
<!-- The 'Username' Textbox -->
<tr>
                    <td>
                        <p>Username:</p>
                    </td>

                    <td>
                        <input type = 'username' id = 'Username' name = 'Username' placeholder = 'Put Your Username here' value = '{{ old("Username") }}'/>
                    </td>
                </tr>

                <!-- The 'Email' Textbox -->
                <tr>
                    <td>
                        <p>Email:</p>
                    </td>
                    
                    <td>
                        <input type = 'email' id = 'Email' name = 'Email' placeholder = 'Put Your Email here' value = '{{ old("Email") }}'/>
                    </td>
                </tr>
            
                <!-- The 'Password' Textbox -->
                <tr>
                    <td >
                        <p>Password:</p>
                    </td>
                    
                    <td>
                        <input type = 'password' id = 'Password' name = 'Password' placeholder = 'Put Your Password here' value = '{{ old("Password") }}'/>
                    </td>
                </tr>
                
                <!-- The 'Already have an account' Link -->
                <tr>
                    <td colspan = '2' class = 'a-Optional'>
                        <a class = 'a-Optional' href = '/login'>Already Have an Account (Click Here!)</a>
                    </td>
                </tr>
                
<!-- The 'Submit' Button -->
<tr>
    <td colspan = '2' class = 'button-Optional'>
        <input type = 'submit' class = 'button-Optional' value = 'Create Account'/>
    </td>
</tr>

@error('Username')
<tr>
    <td colspan = '2' align = 'center'>
        <p class = 'fail'> Make sure you entered your Username Correctly </p>
    </td>
</tr>
@enderror

@error('Email')
<tr>
    <td colspan = '2' align = 'center'>
        <p class = 'fail'> Make sure you entered your Email Correctly </p>
    </td>
</tr>
@enderror

@error('Password')
<tr>
    <td colspan = '2' align = 'center'>
        <p class = 'fail'> Make sure you entered your Password Correctly </p>
    </td>
</tr>
@enderror
@endsection

@section('end_form')
</form>
@endsection