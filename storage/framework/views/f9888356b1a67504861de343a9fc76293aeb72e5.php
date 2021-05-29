

<?php $__env->startSection('Title_name'); ?>
    View Order
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1 align = 'center'>
    Order info.
</h1>
<table class = 'Orders'>
    <th>
        Product name
    </th>

    <th>
        Num of Quantity
    </th>

    <th>
        Price
    </th>

    <th>
        TotalCost
    </th>

    <?php for($x = 0; $x < sizeof($Order_Items); $x++): ?>
    <tr>
        <td align = 'center'>
            <p>
                <?php echo e($Order_Items[$x]['Product']); ?>

            </p>
        </td>
        
        <td align = 'center'>
            <p>
                <?php echo e($Order_Items[$x]['Quantity']); ?>

            </p>
        </td>
        
        <td align = 'center'>
            <p>
                <?php echo e($Order_Items[$x]['Price_per_item']); ?>

            </p>
        </td>
        
        <td align = 'center'>
            <p>
                <?php echo e($Order_Items[$x]['TotalCost']); ?>$
            </p>
        </td>
    </tr>
    <?php endfor; ?>
</table>

<h2 align = 'center'>
    The Total Cost is: <?php echo e($totalCost); ?>$
</h2>

<button align = 'center'>
    <a href='/admin/User/<?php echo e($UserId); ?>'>Go back</a>
</button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.Admin_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Admins/Customers/ViewOrder.blade.php ENDPATH**/ ?>