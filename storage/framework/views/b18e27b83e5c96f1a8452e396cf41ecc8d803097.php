<!doctype html>
<html>
    <head>
        <Title>
            Login For Admins
        </Title>

        <link rel = 'stylesheet' href = '/css/RegisterAndLogin.css'/>
    </head>

    <Body>
        <form action = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method = 'post' >
        <div>
            <table align = 'center'>
                <tr class = 'Main_Title'>
                    <td colspan = '2'>
                        <h1 class = 'Title-Design'>Login (For Admins)</h1>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Username:</p>
                    </td>

                    <td>
                        <input id = 'UserName' name = 'Username' type = 'textbox' placeholder = 'Put Your Username here'/>
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <p>Password:</p>
                    </td>
                    
                    <td>
                        <input id = 'PassWord' name = 'Pass' type = 'Password' placeholder = 'Put Your Password here'/>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' class = 'button-Optional'>
                        <input type = 'Submit' value = 'Enter' onclick = 'print()'/>
                    </td>
                </tr>
            </table>
            </div>
        </form>
    </Body>
</html><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views\Admins\Login.blade.php ENDPATH**/ ?>