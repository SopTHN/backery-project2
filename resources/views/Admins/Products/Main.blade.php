@extends('Layouts\Admin_main')

@section('Title_name')
    Products
@endsection

@section('Link')
    <Link rel = 'stylesheet' href = '/css/Messages.css'/>
@endsection

@section('content')
    <h1>View Products</h1>
    <button>
        <a href="/admin/Products/Add">Add Product</a>
    </button>

    <button>
        <a href="/admin/Products/list">View Products</a>
    </button>

    @if(Session::has('Add_Success'))
        <p class = 'Success'>{{Session::get('Add_Success')}}</p>
    @elseif(Session::has('Update_Success'))
        <p class = 'Success'>{{Session::get('Update_Success')}}</p>
    @elseif(Session::has('Delete_Success'))
        <p class = 'Success'>{{Session::get('Delete_Success')}}</p>
    @endif
@endsection