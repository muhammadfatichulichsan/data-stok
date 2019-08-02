<?php $__env->startSection('content'); ?>
		<table class="table table-bordered" style="margin-top: 100px">
			<thead>
				<tr>
					<th>Nama Pembeli</th>
					<th>Nama Produk</th>
					<th>Status</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
	<?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($data->buyer_name); ?></td>
					<td><?php echo e($data->product_name); ?></td>
					<td><?php echo e($data->status); ?></td>
					<td><?php echo e($data->total); ?></td>
				</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>