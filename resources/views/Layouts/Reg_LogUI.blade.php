<!doctype HTML>
<html>
    <Head>
        <Title>
            @yield('Title_name')
        </Title>

        <link rel = 'stylesheet' href = '/css/RegisterAndLogin.css'/>
        @yield('cssLink')
    </Head>

    <Body>
        @yield('form')
            <div>
            <table align = 'Center'>
                <tr class = 'Main_Title'>
                    <td colspan = '2'>
                        <h1 class = 'Title-Design'>@yield('Title_name')</h1>
                    </td>
                </tr>

                @yield('inputFields')

                <tr>
                    <td colspan = '2' class = 'Back_Main_Menu'>
                        <Button class = 'Back_Main_Menu'>
                            <a href="/">Back to Main Menu</a>
                        </Button>
                    </td>
                </tr>
            </table>
            </div>
        @yield('end_form')
    </Body>
</html>