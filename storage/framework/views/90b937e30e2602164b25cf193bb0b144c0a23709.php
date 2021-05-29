<!doctype html>
<html>
    <Head>
        <title>
            <?php echo $__env->yieldContent('Title_name'); ?>
        </title>
        
        <Link rel = 'stylesheet' href = '/css/MainMenu.css'/>
        <?php echo $__env->yieldContent('Link'); ?>
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
                                <?php echo $__env->yieldContent('content'); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </Table>
    </body>
</html><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Layouts/Admin_main.blade.php ENDPATH**/ ?>