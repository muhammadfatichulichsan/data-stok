<?php if(Session('success')): ?>
	<div class="alert alert-success">
		<?php echo e(Session('success')); ?>	
	</div>
<?php endif; ?>
<?php if(Session('danger')): ?>
	<div class="alert alert-danger">
		<?php echo e(Session('danger')); ?>	
	</div>
<?php endif; ?>
<?php if(Session('info')): ?>
	<div class="alert alert-info">
		<?php echo e(Session('info')); ?>	
	</div>
<?php endif; ?>