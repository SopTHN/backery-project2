@extends('Layouts\Admin_main')

@section('Title_name')
    Products
@endsection

@section('Link')
    <Link rel = 'stylesheet' href = '/css/Messages.css'/>
@endsection

@section('content')
    <h1>Update Product</h1>

    @if(!$Prods->isEmpty())
        <table class ='Products' >
            @foreach ($Prods as $Product)
            <tr>
                <td align = 'center'>
                    {{ $Product->name }}
                </td>

                <td align = 'center'>
                    {{ $Product->Qty }}
                </td>

                <td align = 'center'>
                    ${{ $Product->Price }}
                </td>
                
                <td align = 'center'>
                    <button>
                        <a href="/admin/Products/Update/{{$Product->id}}"> Edit </a>
                    </button>
                </td>

                <td align = 'center'>
                    <Button value="">
                        <a href="/admin/Products/Delete/{{ $Product->id }}">Delete</a>
                    </Button>
                </td>
            </tr>
            @endforeach
        </table>
        
        @else
                <p class="fail">The Products are empty.</br>Add New Products</p>
        @endif

    </br>
    <button>
        <a href="/admin/Products">Go back</a>
    </button>
@endsection