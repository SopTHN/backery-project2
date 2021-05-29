

<?php $__env->startSection('Main_Title'); ?>
    Backery Project Main Menu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('Link'); ?>
    <link rel = 'stylesheet' href = '/css/Messages.css'/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table class = 'Snd_Row-Right' align = 'center'>
    <tr>
        <td>
            <h1 align = 'center'>
                Products
            </h1>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <?php if(!$Products->isempty()): ?>
            <table class="Products" align = 'center'>
                <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                   <td align = 'center'>
                        <p>
                            <?php echo e($Product->name); ?>

                        </p>
                   </td>

                   <td align = 'center'>
                       <?php if($Product->Qty >= 1): ?>
                       <p>
                           <?php echo e($Product->Qty); ?>

                       </p>
                       <?php else: ?>
                       <p>
                           Out of stock
                       </p>
                       <?php endif; ?>
                   </td>

                   <td align = 'Right'>
                        <p>
                            <?php echo e($Product->Price); ?>$
                        </p>
                   </td>

                   <?php if($Product->Qty >= 1): ?>
                   <td align = 'center'>
                       <Button>
                           <a href="/Products/<?php echo e($Product->id); ?>">View Details</a>
                       </Button>
                   </td>
                   <?php endif; ?>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            
            <?php else: ?>
                    <p class="fail" align = 'center'>
                        Products Are Empty, Come back later.
                    </p>   
            <?php endif; ?>
        </td>
    </tr>

    <tr align = 'center'>
        <td>
            <?php if(Session::has('Success')): ?>
            <p class="Success" align = 'center'>
                <?php echo e(Session::get('Success')); ?>

            </p>
            <?php else: ?>
            <p class="fail" align = 'center'>
                <?php echo e(Session::get('Fail')); ?>

            </p>
            <?php endif; ?>
        </td>
    </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.User_guest_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YAZAN\Desktop\PHP\example-app\resources\views/Main.blade.php ENDPATH**/ ?>