

<?php $__env->startSection('Title_name'); ?>
    Create Your Account
<?php $__env->stopSection(); ?>

<?php $__env->startSection('cssLink'); ?>
    <Link rel = 'stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
    <form action = '<?php echo e(url("/login")); ?>' method = 'post'>
    <?php echo csrf_field(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('inputFields'); ?>
<!-- The 'Username' Textbox -->
<tr>
                    <td>
                        <p>Username:</p>
                    </td>

                    <td>
                        <input type = 'username' id = 'Username' name = 'Username' placeholder = 'Put Your Username here' value = '<?php echo e(old("Username")); ?>'/>
                    </td>
                </tr>

                <!-- The 'Email' Textbox -->
                <tr>
                    <td>
                        <p>Email:</p>
                    </td>
                    
                    <td>
                        <input type = 'email' id = 'Email' name = 'Email' placeholder = 'Put Your Email here' value = '<?php echo e(old("Email")); ?>'/>
                    </td>
                </tr>
            
                <!-- The 'Password' Textbox -->
                <tr>
                    <td >
                        <p>Password:</p>
                    </td>
                    
                    <td>
                        <input type = 'password' id = 'Password' name = 'Password' placeholder = 'Put Your Password here' value = '<?php echo e(old("Password")); ?>'/>
                    </td>
                </tr>
                
                <!-- The 'Already have an account' Link -->
                <tr>
                    <td colspan = '2' class = 'a-Optional'>
                        <a class = 'a-Optional' href = '/login'>Already Have an Account (Click Here!)</a>
                    </td>
                </tr>
                
<!-- The 'Submit' Button -->
<tr>
    <td colspan = '2' class = 'button-Optional'>
        <input type = 'submit' class = 'button-Optional' value = 'Create Account'/>
    </td>
</tr>

<?php $__errorArgs = ['Username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<tr>
    <td colspan = '2' align = 'center'>
        <p class = 'fail'> Make sure you entered your Username Correctly </p>
    </td>
</tr>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<?php $__errorArgs = ['Email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<tr>
    <td colspan = '2' align = 'center'>
        <p class = 'fail'> Make sure you entered your Email Correctly </p>
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
<tr>
    <td colspan = '2' align = 'center'>
        <p class = 'fail'> Make sure you entered your Password Correctly </p>
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
<?php echo $__env->make('Layouts/Reg_LogUI', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Users/Register.blade.php ENDPATH**/ ?>