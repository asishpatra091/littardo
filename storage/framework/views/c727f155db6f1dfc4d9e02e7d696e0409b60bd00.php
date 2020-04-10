

<?php $__env->startSection('content'); ?>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e(__('Seller Payments')); ?></h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('Date')); ?></th>
                    <th><?php echo e(__('Seller')); ?></th>
                    <th><?php echo e(__('Amount')); ?></th>
                    <th><?php echo e(__('Payment Method')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($payment->created_at); ?></td>
                        <td>
                            <?php if(\App\Seller::find($payment->seller_id) != null): ?>
                                <?php echo e(\App\Seller::find($payment->seller_id)->user->name); ?> (<?php echo e(\App\Seller::find($payment->seller_id)->user->shop->name); ?>)
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php echo e(single_price($payment->amount)); ?>

                        </td>
                        <td><?php echo e(ucfirst($payment->payment_method)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/littardoemporium/public_html/shop/resources/views/sellers/payment_histories.blade.php ENDPATH**/ ?>