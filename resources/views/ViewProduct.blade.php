@extends('Layouts.User_guest_main')

@section('Main_Title')
    Product Info.
@endsection

@section('Link')
    <Link rel = 'Stylesheet' href = '/css/Messages.css'/>
@endsection

@section('form')
<form action = '{{url("/Products/NewOrder")}}' method = 'post'>
@csrf
@endsection

@section('content')
<table align = 'center' class = 'Snd_Row-Right'>
    <tr>
        <td>
            <input type="hidden" name="id" value = '{{$Product->id}}'>
            <h1 align = 'center'>
                {{$Product->name}}
            </h1>
        </td>
    </tr>

    <tr>
        <td>
            
        <table class = 'Products' align = 'center'>
            <tr align = 'center'>
                <td>
                    <p>
                        Price:
                    </p>
                </td>

                <td>
                    <p>
                        {{$Product->Price}} $
                    </p>
                </td>
            </tr>

            <tr align = 'center'>
                <td>
                    <p>
                        Quantity:
                    </p>
                </td>

                <td>
                    <input type="text" name="Qty" id="Qty"/> / {{$Product->Qty}}
                </td>
            </tr>
        </table>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <input type="submit" name = 'form1' value="Add to Cart"/>
        </td>
    </tr>

    <tr align = 'center' >
        <td>
            <input type = 'submit' name = 'form2' value = 'Buy this Product'/>
        </td>
    </tr>

    <tr align = 'center' >
        <td>
            <Button style = 'margin-bottom: 10px'>
                <a href="/">Back to Main Menu</a>
            </Button>
        </td>
    </tr
</table>

@section('endForm')
</form>
@endsection
@endsection