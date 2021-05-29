

<?php $__env->startSection('Title_name'); ?>
    Products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('Link'); ?>
    <Link rel = 'stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Update Product</h1>

    <?php if(!$Prods->isEmpty()): ?>
        <table class ='Products' >
            <?php $__currentLoopData = $Prods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td align = 'center'>
                    <?php echo e($Product->name); ?>

                </td>

                <td align = 'center'>
                    <?php echo e($Product->Qty); ?>

                </td>

                <td align = 'center'>
                    $<?php echo e($Product->Price); ?>

                </td>
                
                <td align = 'center'>
                    <button>
                        <a href="/admin/Products/Update/<?php echo e($Product->id); ?>"> Edit </a>
                    </button>
                </td>

                <td align = 'center'>
                    <Button value="">
                        <a href="/admin/Products/Delete/<?php echo e($Product->id); ?>">Delete</a>
                    </Button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        
        <?php else: ?>
                <p class="fail">The Products are empty.</br>Add New Products</p>
        <?php endif; ?>

    </br>
    <button>
        <a href="/admin/Products">Go back</a>
    </button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts\Admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Admins/Products/List.blade.php ENDPATH**/ ?>