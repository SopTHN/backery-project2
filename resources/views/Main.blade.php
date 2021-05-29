@extends('Layouts.User_guest_main')

@section('Main_Title')
    Backery Project Main Menu
@endsection

@section('Link')
    <link rel = 'stylesheet' href = '/css/Messages.css'/>
@endsection

@section('content')
<table class = 'Snd_Row-Right' align = 'center'>
    <tr>
        <td>
            <h1 align = 'center'>
                Products
            </h1>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            @if(!$Products->isempty())
            <table class="Products" align = 'center'>
                @foreach($Products as $Product)
                <tr>
                   <td align = 'center'>
                        <p>
                            {{$Product->name}}
                        </p>
                   </td>

                   <td align = 'center'>
                       @if($Product->Qty >= 1)
                       <p>
                           {{$Product->Qty}}
                       </p>
                       @else
                       <p>
                           Out of stock
                       </p>
                       @endif
                   </td>

                   <td align = 'Right'>
                        <p>
                            {{$Product->Price}}$
                        </p>
                   </td>

                   @if ($Product->Qty >= 1)
                   <td align = 'center'>
                       <Button>
                           <a href="/Products/{{$Product->id}}">View Details</a>
                       </Button>
                   </td>
                   @endif
                </tr>
                @endforeach
            </table>
            
            @else
                    <p class="fail" align = 'center'>
                        Products Are Empty, Come back later.
                    </p>   
            @endif
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            @if(Session::has('Success'))
            <p class="Success" align = 'center'>
                {{Session::get('Success')}}
            </p>
            @else
            <p class="fail" align = 'center'>
                {{Session::get('Fail')}}
            </p>
            @endif
        </td>
    </tr>
</table>
@endsection