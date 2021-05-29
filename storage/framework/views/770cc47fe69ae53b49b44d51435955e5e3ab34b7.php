

<?php $__env->startSection('Main_Title'); ?>
    Product Info.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('Link'); ?>
    <Link rel = 'Stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
<form action = '<?php echo e(url("/Products/NewOrder")); ?>' method = 'post'>
<?php echo csrf_field(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table align = 'center' class = 'Snd_Row-Right'>
    <tr>
        <td>
            <input type="hidden" name="id" value = '<?php echo e($Product->id); ?>'>
            <h1 align = 'center'>
                <?php echo e($Product->name); ?>

            </h1>
        </td>
    </tr>

    <tr>
        <td>
            
        <table class = 'Products' align = 'center'>
            <tr align = 'center'>
                <td>
                    <p>
                        Price:
                    </p>
                </td>

                <td>
                    <p>
                        <?php echo e($Product->Price); ?> $
                    </p>
                </td>
            </tr>

            <tr align = 'center'>
                <td>
                    <p>
                        Quantity:
                    </p>
                </td>

                <td>
                    <input type="text" name="Qty" id="Qty"/> / <?php echo e($Product->Qty); ?>

                </td>
            </tr>
        </table>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <input type="submit" name = 'form1' value="Add to Cart"/>
        </td>
    </tr>

    <tr align = 'center' >
        <td>
            <input type = 'submit' name = 'form2' value = 'Buy this Product'/>
        </td>
    </tr>

    <tr align = 'center' >
        <td>
            <Button style = 'margin-bottom: 10px'>
                <a href="/">Back to Main Menu</a>
            </Button>
        </td>
    </tr
</table>

<?php $__env->startSection('endForm'); ?>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.User_guest_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/ViewProduct.blade.php ENDPATH**/ ?>