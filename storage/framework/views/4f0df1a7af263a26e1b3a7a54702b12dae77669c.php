

<?php $__env->startSection('Main_Title'); ?>
    Update Account
<?php $__env->stopSection(); ?>

<?php $__env->startSection('Link'); ?>
<Link rel = 'stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table align = 'center' class = 'Snd_Row-Right'>
    <tr>
        <td>
            <h1 align = 'center'>
                Update Account.
            </h1>
        </td>
    </tr>

    <tr>
        <td>
            <form action="<?php echo e(url('User/account/update')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <table align = 'center' class = 'Customer_info'>
                <tr>
                    <td>
                        <p align = 'center'>
                            Account Name:
                        </p>
                    </td>

                    <td>
                        <input align = 'center' type="text" name="Username" id="Username" value = '<?php echo e($User->name); ?>'/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p align = 'center'>
                            Email:
                        </p>
                    </td>

                    <td>
                        <input align = 'center' type="text" name="Email" id="Email" value = '<?php echo e($User->email_user); ?>'/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p align = 'center'>
                            Password:
                        </p>
                    </td>

                    <td>
                        <input align = 'center' type="password" name="Password" id="Password" placeholder = 'Enter your Password here'/>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' align = 'center'>
                        <input type="submit" value="Update Account">
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' align = 'center'>
                        <button style = 'margin-top: 10px; margin-bottom: 10px;'>
                            <a href="/User/account">Go back</a>
                        </button>
                    </td>
                </tr>
            </table>
            </form>
        </td>
    </tr>

    <tr>
        <td align = 'center'>
            <?php $__errorArgs = ['Username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class = 'fail'>
                Make sure you entered your name Correctly
            </p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <?php $__errorArgs = ['Email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="fail">
                Make sure you entered your Email Correctly
            </p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <?php $__errorArgs = ['Password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="fail">
                Make sure you entered your Password Correctly
            </p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </td>
    </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.User_guest_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Users/update_account.blade.php ENDPATH**/ ?>