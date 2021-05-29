

<?php $__env->startSection('Title_name'); ?>
    Products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('Link'); ?>
    <Link rel = 'stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Add Products</h1>

    <form method="post" action="<?php echo e(url('/admin/Products')); ?>">
        <?php echo e(csrf_field()); ?>

        <table align = 'center' class = 'Products_add'>
            <tr>
                <td>
                    <p>
                        Product Name: 
                    </p>
                </td>

                <td>
                    <input type="text" name="Prod_name" id="Prod_name" value = '<?php echo e(old("Prod_name")); ?>'/>
                </td>
            </tr>

            <tr>
                <td>
                    <p>
                        Quantity: 
                    </p>
                </td>

                <td>
                    <input type="text" name="Qty" id="Qty" value = '<?php echo e(old("Qty")); ?>'/>
                </td>
            </tr>

            <tr>
                <td>
                    <p>
                        Price: $
                    </p>
                </td>

                <td>
                        <input type="text" name="Price" id="Price" value = '<?php echo e(old("Price")); ?>'/>
                </td>
            </tr>

            <tr>
                <td colspan = 2 align = 'center'>
                    <button type="submit">Add Product</button>
                </td>
            </tr>
        </table>
    </form>

    <button>
        <a href="/admin/Products">Go back</a>
    </button>

    <?php $__errorArgs = ['Prod_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class = 'fail'>Make sure you Put the Product's name at 25 maximumly</p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
    <?php $__errorArgs = ['Qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class = 'fail'>The Quantity must be at least 10 items</p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
    <?php $__errorArgs = ['Price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class = 'fail'>The Price must be at least 2$</p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts\Admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views\Admins\Products\Add.blade.php ENDPATH**/ ?>