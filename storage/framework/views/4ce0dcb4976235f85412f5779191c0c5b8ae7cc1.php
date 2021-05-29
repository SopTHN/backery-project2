

<?php $__env->startSection('Title_name'); ?>
    Products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('Link'); ?>
    <Link rel = 'stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>View Products</h1>
    <button>
        <a href="/admin/Products/Add">Add Product</a>
    </button>

    <button>
        <a href="/admin/Products/list">View Products</a>
    </button>

    <?php if(Session::has('Add_Success')): ?>
        <p class = 'Success'><?php echo e(Session::get('Add_Success')); ?></p>
    <?php elseif(Session::has('Update_Success')): ?>
        <p class = 'Success'><?php echo e(Session::get('Update_Success')); ?></p>
    <?php elseif(Session::has('Delete_Success')): ?>
        <p class = 'Success'><?php echo e(Session::get('Delete_Success')); ?></p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts\Admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views\Admins\Products\Main.blade.php ENDPATH**/ ?>