<!doctype HTML>
<html>
    <Head>
        <Title>
            <?php echo $__env->yieldContent('Title_name'); ?>
        </Title>

        <link rel = 'stylesheet' href = '/css/RegisterAndLogin.css'/>
        <?php echo $__env->yieldContent('cssLink'); ?>
    </Head>

    <Body>
        <?php echo $__env->yieldContent('form'); ?>
            <div>
            <table align = 'Center'>
                <tr class = 'Main_Title'>
                    <td colspan = '2'>
                        <h1 class = 'Title-Design'><?php echo $__env->yieldContent('Title_name'); ?></h1>
                    </td>
                </tr>

                <?php echo $__env->yieldContent('inputFields'); ?>
            </table>
            </div>
        </form>
    </Body>
</html><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views\Layouts\Reg_LogUI.blade.php ENDPATH**/ ?>