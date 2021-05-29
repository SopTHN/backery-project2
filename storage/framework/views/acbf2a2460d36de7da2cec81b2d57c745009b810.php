

<?php $__env->startSection('Main_Title'); ?>
    Account Info.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('Link'); ?>
<link rel = 'stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table align = 'center' class = 'Snd_Row-Right'>
    <tr>
        <td>
            <h1 align = 'center'>
                Account Info.
            </h1>
        </td>
    </tr>

    <tr>
        <td>
            <table align = 'center' class = 'Customer_info'>
                <tr>
                    <td>
                        <p align = 'center'>
                            Account Name:
                        </p>
                    </td>

                    <td>
                        <p align = 'center'>
                            <?php echo e($user->name); ?>

                        </p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p align = 'center'>
                            Email:
                        </p>
                    </td>

                    <td>
                        <p align = 'center'>
                            <?php echo e($user->email_user); ?>

                        </p>
                    </td>
                </tr>

                <tr>
                    <td colspan = '2' align = 'center'>
                        <button style = 'margin-top: 10px; margin-bottom: 10px;'>
                            <a href="/User/account/changeAccount">Change Your account</a>
                        </button>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td>
            <h2 align = 'center'>
                <?php if(is_null($Orders)): ?>
                <p class="fail">
                    You don't have any Orders
                </p>
                <?php else: ?>
                <table align = 'center' class = 'Orders_User'>
                    <th>
                        Order id.
                    </th>

                    <th>
                        Order date
                    </th>

                    <th>
                        Total cost
                    </th>
                    <?php $__currentLoopData = $Orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form action="<?php echo e(url('User/account/Order')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <tr>
                        <td>
                            <input type = "hidden" name = 'Order_id' value = "<?php echo e($Order->id); ?>"/>
                            <p>
                                <?php echo e($Order->id); ?>

                            </p>
                        </td>

                        <td>
                            <p>
                                <?php echo e($Order->created_at->format('d/m/Y')); ?>

                            </p>
                        </td>

                        <td>
                            <p>
                                <?php echo e($Order->total_cost); ?>$
                            </p>
                        </td>

                        <td>
                            <input type="submit" value="View Order">
                        </td>
                    </tr>
                    </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <?php endif; ?>
            </h2>
        </td>
    </tr>

    <?php if(Session::has('Success')): ?>
    <tr>
        <td align = 'center'>
            <?php echo e(Session::get('Success')); ?>  
        </td>
    </tr>
    <?php endif; ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.User_guest_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Users/account_info.blade.php ENDPATH**/ ?>