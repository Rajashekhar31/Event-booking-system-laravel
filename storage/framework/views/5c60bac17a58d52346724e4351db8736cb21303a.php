<?php echo $__env->make("admin_header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style type="text/css">
	.rev {
		margin: 0px auto;
		width: 70%;
		background-color: lightblue;
	}
	.pstyle {
		margin-top: 20px;
	}
</style>
<h2 class="text-center m-3" style="text-shadow: 2px 2px;">Reviews</h2>
<?php if($reviews==null): ?>
	<div class="jumbotron m-5">
	  <h3 class="text-center">There are no reviews yet!</h3>
	</div>
<?php else: ?>
	<?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="shadow p-3 mb-5 rounded rev">
		<div class="d-inline-block"><span class="font-weight-bold"> Name:</span> <?php echo e($rev->fullname); ?> </div>
		<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Event:</span> <?php echo e($rev->event_type); ?> </div>
		<p class="pstyle"><span class="font-weight-bold">Review:</span> <?php echo e($rev->review); ?></p>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\event-booking-system\resources\views/admin_view_reviews.blade.php ENDPATH**/ ?>