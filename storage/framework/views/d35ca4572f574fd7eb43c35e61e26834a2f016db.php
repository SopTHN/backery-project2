

<?php $__env->startSection('Title_name'); ?>
    Products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Update Product</h1>

        <table class ='Products' >
            <?php $__currentLoopData = $Prods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php echo e($Product->name); ?>

                </td>

                <td>
                    <?php echo e($Product->Qty); ?>

                </td>

                <td>
                    $<?php echo e($Product->Price); ?>

                </td>
                
                <td>
                    <button>
                        <a href="/admin/Products/Update/<?php echo e($Product->id); ?>"> Edit </a>
                    </button>
                </td>

                <td>
                    <Button value="">
                        <a href="/admin/Products/Delete/<?php echo e($Product->id); ?>">Delete</a>
                    </Button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

    </br>
    <button>
        <a href="/admin/Products">Go back</a>
    </button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts\Admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views\Admins\Products\List.blade.php ENDPATH**/ ?>