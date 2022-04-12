<?php $__env->startSection('contents'); ?>
<style type="text/css">
	.rev {
		margin: 15px auto;
		width: 75%;
		background-color: lightblue;
		color:black;
	}
	.pstyle {
		margin-top: 20px;
		text-indent: 25px;
	}
</style>
<?php if(session('message')): ?>
    <div class="alert alert-success">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>
<?php if($errors->any()): ?>
		<div class="alert alert-danger">
		        <?php echo e($errors->first()); ?>

		</div>
<?php endif; ?>
<h2 class="text-center m-3" style="text-shadow: 2px 2px;">My Bookings</h2>
<?php if($data->isEmpty()): ?>
	<div class="jumbotron" style="margin: 5%;">
	  <h3 class="text-center">You haven't made any bookings yet!</h3>
	</div>
<?php else: ?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<a href="view_booking_details?bkgId=<?php echo e($dt->id); ?>">
		<div class="shadow p-3 mb-5 rounded rev">
			<p class="d-inline-block pstyle"><span class="font-weight-bold">Name:</span> <?php echo e($dt->fullname); ?> </p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold">Event:</span> <?php echo e($dt->event_type); ?> </p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold"> Date: </span> <?php echo e($dt->event_date); ?></p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold"> Time: </span> <?php echo e($dt->event_time); ?> </p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold"> Booking status: </span> <?php echo e($dt->booking_status); ?> </p>
			<p class="d-inline-block pstyle"><span class="font-weight-bold"> No of guests: </span> <?php echo e($dt->no_of_guests); ?> </p>
		</div>
	</a>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\G-06_EventManagementSystem-master\resources\views/view_bookings.blade.php ENDPATH**/ ?>