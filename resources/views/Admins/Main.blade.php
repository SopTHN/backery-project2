@extends('Layouts\Admin_main')

@section('Title_name')
    Hello, {{$LoggedAdminInfo['Username']}}!
@endsection

@section('content')
        <p>
            Select any Button to continue
        </p>
@endsection