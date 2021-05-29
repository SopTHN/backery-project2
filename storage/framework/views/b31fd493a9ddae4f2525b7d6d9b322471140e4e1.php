


<?php $__env->startSection('Title_name'); ?>
    Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('cssLink'); ?>
    <link rel = 'stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
    <form action = '' method = 'post' >
<?php $__env->stopSection(); ?>

<?php $__env->startSection('inputFields'); ?>
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
                    <td colspan = '2' class = 'a-Optional'>
                        <a class = 'a-Optional' 
                        href = '/register'> Create New Account! </a>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' class = 'button-Optional'>
                        <input type = 'Submit' value = 'Login'/>
                    </td>
                </tr>

                <?php if(Session::has('Success')): ?>
                    <p class = 'Success'><?php echo e(Session::get('Success')); ?></p>
                <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts\Reg_LogUI', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views\Users\Login.blade.php ENDPATH**/ ?>