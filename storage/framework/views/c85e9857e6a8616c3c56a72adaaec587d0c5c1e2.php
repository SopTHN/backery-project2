

<?php $__env->startSection('Title_name'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1 align = 'center'>
    Account Info.
</h1>
<table class="Customer_info">
    <tr align = 'center'>
        <td>
            <p>
                Account id:
            </p>
        </td>

        <td>
            <p>
                <?php echo e($User->id); ?>

            </p>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <p>
                Account name:
            </p>
        </td>

        <td>
            <p>
                <?php echo e($User->name); ?>

            </p>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <p>
                Email:
            </p>
        </td>

        <td>
            <p>
                <?php echo e($User->email_user); ?>

            </p>
        </td>
    </tr>
</table>

<h1 align = 'center'>
    Order Info.
</h1>

<table class="Orders">
        <th>
            Order Id.
        </th>

        <th>
            Order Cost
        </th>

        <?php $__currentLoopData = $Orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr align = 'center'>
        <td>
            <p>
                <?php echo e($order->id); ?>

            </p>
        </td>

        <td>
            <p>
                <?php echo e($order->total_cost); ?>$
            </p>
        </td>

        <td>
           <button>
               <a href="/admin/User/<?php echo e($User->id); ?>/Order/<?php echo e($order->id); ?>">View Order</a>
           </button> 
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.Admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Admins/Customers/ViewAccount.blade.php ENDPATH**/ ?>