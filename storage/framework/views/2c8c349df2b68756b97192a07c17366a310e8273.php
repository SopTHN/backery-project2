

<?php $__env->startSection('Title_name'); ?>
    View Customers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('Link'); ?>
    <link rel="stylesheet" href="/css/Messages.css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>
        Customers Info.
    </h1>

    <?php if(!$Users->isEmpty()): ?>
    <table class="Customers">
        <th>
            <p>ID</p>
        </th>

        <th>
            <p>Username</p>
        </th>

        <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td align = 'center'>
                <?php echo e($user->id); ?>

            </td>

            <td align = 'center'>
                <?php echo e($user->name); ?>

            </td>

            <td align = 'center'>
                <Button>
                    <a href="/admin/User/<?php echo e($user->id); ?>">View Info.</a>
                </Button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php else: ?>
    <p class="fail">The list of Customers are empty</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts/Admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Admins/Customers/Main.blade.php ENDPATH**/ ?>