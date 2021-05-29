<!doctype html>
<html>
    <Head>
        <title>
            @yield('Title_name')
        </title>
        
        <Link rel = 'stylesheet' href = '/css/MainMenu.css'/>
        @yield('Link')
    </Head>

    <body>
        <Table align = 'center'>
            <tr>
                <td align = 'left'>
                    <p class = 'Main_Title'>
                        Welcome, Admin!
                    </p>
                </td>
                
                <td align = 'Right'>
                    <a class = 'Main_Title' href = '/admin/logout'>
                        Logout
                    </a>
                </td>
            </tr>

            <tr>
                <td class = 'Snd_Row-left'>
                    <table class = 'Snd_Row-left' valign = 'top'>
                        <tr>
                            <td>
                                <button class = 'Snd_Row-left'>
                                    <a href="/admin/Users">Click here For Customers</a>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button class = 'Snd_Row-left'>
                                    <a href="/admin/Products">Click here For Products</a>
                                </button>
                            </td>
                        </tr>
                    </table>
                </td>

                <td class = 'Snd_Row-Right'>
                    <table class = 'Snd_Row-Right'> 
                        <tr align = 'center'>
                            <td>
                                @yield('content')
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </Table>
    </body>
</html>