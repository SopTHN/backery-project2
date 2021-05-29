

<?php $__env->startSection('Main_Title'); ?>
    View My cart
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table class = 'Snd_Row-Right'>
    <tr>
        <td>
            <h1 align = 'center'>
                View my Cart
            </h1>
        </td>
    </tr>

    <tr>
        <td>
            <table class = 'Cart' align = 'center'>
                <th>
                    Product Name
                </th>

                <th>
                    Number of Quantity
                </th>

                <th>
                    Price per item
                </th>

                <th>
                    TotalCost
                </th>

                <?php for($i = 0; $i < sizeof($cart); $i++): ?>
                <form action="/User/cart/delete" method="post">
                <?php echo csrf_field(); ?>
                <tr>
                    <td align = 'center'>
                        <input type="hidden" value = "<?php echo e($cart[$i]['Prod_id']); ?>" name="Prod_id">
                        <p>
                            <?php echo e($cart[$i]['Product']); ?>

                        </p>
                    </td>

                    <td align = 'center'>
                        <p>
                            <?php echo e($cart[$i]['Quantity']); ?>

                        </p>
                    </td>
                    
                    <td align = 'center'>
                        <p>
                            <?php echo e($cart[$i]['Price_per_item']); ?>$
                        </p>
                    </td>
                    
                    <td align = 'center'>
                        <p>
                            <?php echo e($cart[$i]['TotalCost']); ?>$
                        </p>
                    </td>

                    <td align = 'center'>
                        <input type="submit" value="Delete Item"/>
                    </td>
                </tr>
                </form>
                <?php endfor; ?>
            </table>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <h2>
                Your Total cost is: <?php echo e($totalCost); ?>$
            </h2>
        </td>
    </tr>
    
    <tr align = 'center'>
        <td>
            <button>
                <a href="/User/Cart/NewOrder">Add new Order</a>
            </button>
        </td>
    </tr>

    <?php if(Session::has('Success')): ?>
    <tr>
        <td align = 'center'>
            <p class="Success">
                <?php echo e(Session::get('Success')); ?>

            </p>
        </td>
    </tr>
    <?php endif; ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.User_guest_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Users/Cart.blade.php ENDPATH**/ ?>