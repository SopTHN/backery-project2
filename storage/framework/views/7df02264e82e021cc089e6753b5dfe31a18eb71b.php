

<?php $__env->startSection('Main_Title'); ?>
    Confirm Your Order
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
    <form action='<?php echo e(url("/Products/ConfirmOrder")); ?>' method="post">
    <?php echo csrf_field(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table class = 'Snd_Row-Right' align = 'center'>
    <tr>
        <td>
            <input type="hidden" name="id" value = '<?php echo e($Product->id); ?>'/>
            <input type="hidden" name="Qty" value = '<?php echo e($Qty); ?>'/>
            <input type="hidden" name="Price" value = '<?php echo e($Product->Price); ?>'>
            <h1 align = 'center'>
                Confirm Your Order
            </h1>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <table class = 'bill'>
                <th>
                    <p>
                        Product Name
                    </p>
                </th>

                <th>
                    <p>
                        Num of Qty.
                    </p>
                </th>

                <th>
                    <p>
                        Price Per item
                    </p>
                </th>

                <th>
                    <p>
                        total Cost
                    </p>
                </th>

                <tr>
                    <td align = 'center'>
                        <p>
                            <?php echo e($Product->name); ?>

                        </p>
                    </td>
                    
                    <td align = 'center'>
                        <p>
                            <?php echo e($Qty); ?>

                        </p>
                    </td>
                    
                    <td align = 'center'>
                        <p>
                            <?php echo e($Product->Price); ?>$
                        </p>
                    </td>

                    <td align = 'center'>
                        <p>
                            <?php echo e($totalCost); ?>$
                        </p>
                    </td>
                </tr>

                <tr>
                    <td colspan = '4'>
                        <h3 align = 'center'>
                            Total Cost is: <?php echo e($totalCost); ?>$
                        </h3>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <h2 align = 'center'>
                Fillout all fields to Continue
            </h2>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <table class = 'Order_Fields' align = 'center'>
                <tr>
                    <td align = 'right'>
                        <p>
                            Address:
                        </p>
                    </td>

                    <td align = 'center'>
                        <input type="text" name = 'Address' placeholder = 'Put your Address Here'/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p align = 'right'>
                            Payment:
                        </p>
                    </td>

                    <td align = 'center'>
                        <input type="radio" name="PaymentType" id="PaymentType">
                            Credit Card
                        </input>

                        <input type="radio" name="PaymentType" id="PaymentType">
                            Cash
                        </input>
                    </td>
                </tr>

                <tr>
                    <td align = 'center' colspan = '2'>
                        <input type="submit" value="Confirm The Order">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
</table>

<?php $__env->startSection('endForm'); ?>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.User_guest_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Users/newOrder.blade.php ENDPATH**/ ?>