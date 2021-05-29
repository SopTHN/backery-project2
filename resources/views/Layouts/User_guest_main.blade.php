<!doctype html>
<html>
    <Head>
        <Title>
            @yield('Main_Title')
        </Title>
        
        <link rel = 'stylesheet' href = '/css/MainMenu.css'/>

        @yield('Link')
    </Head>

    <body>
        <Table align = 'center'>
            <tr>
                <td align = 'left'>
                    <p class = 'Main_Title'>
                        Welcome!
                    </p>
                </td>

                <td align = 'Right'>
                    @if(!session()->has('LoggedUser'))
                    <a class = 'Main_Title' href = '/login'>
                        Login Here!
                    </a>
                    @else
                    <a class = 'Main_Title' href = '/logout'>
                        Logout
                    </a>
                    @endif

                </td>
            </tr>

            <tr>
                <td class = 'Snd_Row-left'> 
                    <table class = 'Snd_Row-left' align = 'left'>
                        <tr>
                            <td>
                                <button class = 'Snd_Row-left' value="">
                                    <a href="/">View Products</a>
                                </button>
                            </td>
                        </tr>
                        
                        @if(session()->has('LoggedUser'))
                        <tr>
                            <td>
                                <button class = 'Snd_Row-left' value="My Cart">
                                    <a href="/User/cart">My Cart</a>
                                </button>
                            </td>
                        </tr>        

                        <tr>
                            <td>
                                <button class = 'Snd_Row-left' value="My Account">                           
                                    <a href="/User/account">My Account</a>
                                </button>
                            </td>
                        </tr>
                        @endif
                    </table>
                </td>

                <td>
                    @yield('form')
                    @yield('content')
                    @yield('endForm')
                </td>
            </tr>
        </Table>
    </body>
</html>