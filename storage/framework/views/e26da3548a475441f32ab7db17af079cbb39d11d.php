<!doctype html>
<html>
    <Head>
        <Title>
            <?php echo $__env->yieldContent('Main_Title'); ?>
        </Title>
        
        <link rel = 'stylesheet' href = '/css/MainMenu.css'/>

        <?php echo $__env->yieldContent('Link'); ?>
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
                    <?php if(!session()->has('LoggedUser')): ?>
                    <a class = 'Main_Title' href = '/login'>
                        Login Here!
                    </a>
                    <?php else: ?>
                    <a class = 'Main_Title' href = '/logout'>
                        Logout
                    </a>
                    <?php endif; ?>

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
                        
                        <?php if(session()->has('LoggedUser')): ?>
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
                        <?php endif; ?>
                    </table>
                </td>

                <td>
                    <?php echo $__env->yieldContent('form'); ?>
                    <?php echo $__env->yieldContent('content'); ?>
                    <?php echo $__env->yieldContent('endForm'); ?>
                </td>
            </tr>
        </Table>
    </body>
</html><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Layouts/User_guest_main.blade.php ENDPATH**/ ?>