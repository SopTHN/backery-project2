@extends('Layouts\Admin_main')

@section('Title_name')
    Update Product
@endsection

@section('Link')
    <Link rel = 'stylesheet' href = '/css/Messages.css'/>
@endsection

@section('content')
    <h1>Update Product</h1>
    <form method="post" action="{{ url('/admin/Products/list') }}">
        @csrf
        @method('post')
        <table align = 'center' class = 'Products_add_update'>
            <tr>
                <td>
                    <p>
                        <input type="hidden" id = 'id' name="id" value = "{{ $Product->id }}"/>
                        Product Name: 
                    </p>
                </td>

                <td>
                    <input type="text" name="Prod_name" id="Prod_name" value = '{{ $Product->name }}'/>
                </td>
            </tr>

            <tr>
                <td>
                    <p>
                        Quantity: 
                    </p>
                </td>

                <td>
                    <input type="text" name="Qty" id="Qty" value = '{{ $Product->Qty }}'/>
                </td>
            </tr>

            <tr>
                <td>
                    <p>
                        Price: $
                    </p>
                </td>

                <td>
                        <input type="text" name="Price" id="Price" value = '{{ $Product->Price }}'/>
                </td>
            </tr>

            <tr>
                <td colspan = 2 align = 'center'>
                    <button type="submit">Update Product</button>
                </td>
            </tr>
        </table>
    </form>

    <button>
        <a href="/admin/Products/list">Go back</a>
    </button>

    @error('Prod_name')
        <p class = 'fail'>Make sure you Put the Product's name at 25 maximumly</p>
    @enderror
    
    @error('Qty')
        <p class = 'fail'>The Quantity must be at least 10 items</p>
    @enderror
    
    @error('Price')
        <p class = 'fail'>The Price must be at least 2$</p>
    @enderror
@endsection