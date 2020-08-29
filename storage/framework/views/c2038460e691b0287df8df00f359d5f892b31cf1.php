<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body settings-page">
	<h3>Recent Posts Sent To Buffer</h3>
    <table border="1">
    <tr>
        <th>Group Name</th>
        <th>Group Type</th>
        <th>Account Name</th>
        <th>Post Text</th>
        <th>Time</th>
    </tr>
    <?php $__currentLoopData = $BufferPosting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buffer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($buffer->group_name); ?></td>
        <td><?php echo e($buffer->group_type); ?></td>
        <td><?php echo e($buffer->account_name); ?></td>
        <td><?php echo e($buffer->account_name); ?></td>
        <td><?php echo e($buffer->account_name); ?></td>
        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    <?php echo e($BufferPosting->links()); ?>

	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>