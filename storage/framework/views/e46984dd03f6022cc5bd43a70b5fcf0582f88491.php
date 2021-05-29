

<?php $__env->startSection('Main_Title'); ?>
    Order info.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table class="Snd_Row-Right">
    <tr>
        <td>
            <h1 align = 'center'>
                Order info.
            </h1>
        </td>
    </tr>

    <tr>
        <td>
        <table align = 'center' class="Orders">
            <th>
                Item name
            </th>

            <th>
                Quantity
            </th>

            <th>
                Price per Item
            </th>

            <th>
                TotalCost
            </th>

            <?php for($x = 0; $x < count($Order->Items); $x++): ?>
            <tr>
                <td>
                    <p align = 'center'>
                        <?php echo e($Order->Items[$x]['Product']); ?>

                    </p>
                </td>

                <td>
                    <p align = 'center'>
                        <?php echo e($Order->Items[$x]['Quantity']); ?>

                    </p>
                </td>

                <td>
                    <p align = 'center'>
                        <?php echo e($Order->Items[$x]['Price_per_item']); ?>$
                    </p>
                </td>

                <td>
                    <p align = 'center'>
                        <?php echo e($Order->Items[$x]['TotalCost']); ?>$
                    </p>
                </td>
            </tr>
            <?php endfor; ?>
        </table>
        </td>
    </tr>

    <tr>
        <td>
            
        <table class = 'Orders_other_info' align = 'center'>
            <tr>
                <td>
                    <p align = 'center'>
                        The Order's Total Cost is:
                    </p>
                </td>

                <td>
                    <p align = 'center'>
                        <?php echo e($Order->total_cost); ?>$
                    </p>
                </td>
            </tr>


            <tr>
                <td>
                    <p align = 'center'>
                    The Order's Payment type is:
                    </p>
                </td>
        
                <td>
                    <p align = 'center'>
                    <?php echo e($Order->checkout_type); ?>

                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p align = 'center'>
                    The Order's Address:
                    </p>
                </td>

                <td>
                    <p align = 'center'>
                    <?php echo e($Order->address); ?>

                    </p>
                </td>
            </tr>

            <tr>
                <td colspan = '2' align = 'center'>
                    <button>
                        <a href="/User/account">Go back</a>
                    </button>
                </td>
            </tr>
        </table>
        </td>
    </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.User_guest_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Users/viewOrder.blade.php ENDPATH**/ ?>