


<?php $__env->startSection('Title_name'); ?>
    Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('cssLink'); ?>
    <link rel = 'stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
    <form action = '<?php echo e(url("/")); ?>' method = 'post' >
    <?php echo csrf_field(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('inputFields'); ?>
                <tr>
                    <td>
                        <p>Username:</p>
                    </td>

                    <td>
                        <input id = 'Username' name = 'Username' type = 'textbox' value = '<?php echo e(old("Username")); ?>' placeholder = 'Put Your Username here'/>
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <p>Password:</p>
                    </td>
                    
                    <td>
                        <input id = 'Password' name = 'Password' type = 'Password' value = '<?php echo e(old("Password")); ?>' placeholder = 'Put Your Password here'/>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' class = 'a-Optional'>
                        <a class = 'a-Optional' 
                        href = '/register'> Create New Account! </a>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' class = 'button-Optional'>
                        <input type = 'Submit' class = 'button-Optional' value = 'Login'/>
                    </td>
                </tr>
            
                <?php if(Session::has('Success')): ?>
                <tr align = 'center'>
                    <td colspan = '2'>
                        <p class = 'Success'><?php echo e(Session::get('Success')); ?></p>
                    </td>
                </tr>
                <?php elseif(Session::has('fail')): ?>
                <tr align = 'center'>
                    <td colspan = '2'>
                        <p class = 'fail'><?php echo e(Session::get('fail')); ?></p>
                    </td>
                </tr>
                <?php endif; ?>

                <?php $__errorArgs = ['Username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <tr align = 'center'>
                    <td colspan = '2'>
                        <p class="fail">Make sure you enter username Correctly</p>
                    </td>
                </tr>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <?php $__errorArgs = ['Password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <tr align = 'center'>
                    <td colspan = '2'>
                        <p class="fail">Make sure you enter Password Correctly</p>
                    </td>
                </tr>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('end_form'); ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts\Reg_LogUI', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Users/Login.blade.php ENDPATH**/ ?>