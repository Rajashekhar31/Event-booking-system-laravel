<?php echo $__env->make("admin_header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<style type="text/css">
	.feed{
		margin: 0px auto;
		width: 70%;
		background: linear-gradient(to bottom, #0099cc 0%, #ffccff 100%);
		
	}
		.feed:hover{
		background: linear-gradient(to bottom, #ffccff 0%, #0099cc 100%);
}
	.pstyle {
		margin-top: 20px;
		text-indent: 25px;
	}
	.deco{
		font-weight:bold;
		margin:20px auto;
		
	}
	.space{
		padding:15px;
	}
</style>
<?php if(session('message')): ?>
     <div class="alert alert-success" role="alert">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>	
<?php if($errors->any()): ?>
	<div class="alert alert-danger m-0" >
		<?php echo e($errors->first()); ?>

	</div>
<?php endif; ?>
<div class="space">
<h1 style="text-align:center">Booking Details</h1>
</div>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="shadow p-3 mb-5 rounded feed">
<!--<img src="/images/2.jpg" alt="..." style="height:60px;">-->
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Name:</span> <?php echo e($row->fullname); ?> </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> No Of Guest:</span> <?php echo e($row->no_of_guests); ?> </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Booking Status:</span> <?php echo e($row->booking_status); ?> </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Total Amount:</span> <?php echo e($row->total_amount); ?> </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Event:</span> <?php echo e($row->event_type); ?> </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Event Date:</span> <?php echo e($row->event_date); ?> </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Event Time:</span> <?php echo e($row->event_time); ?> </div>
	<div class="d-inline-block pstyle"><span class="font-weight-bold"> Venue:</span> <?php echo e($row->venue_name); ?> </div>
	<?php if($row->booking_status!='Cancelled' && $row->booking_status!='Confirmed' && $row->booking_status!='Rejected'): ?>
	<div class="text-center m-3">
		<a href="confirm_bkg?bkgId=<?php echo e($row->id); ?>" class="btn btn-secondary d-inline-block m-4">Confirm Booking</a>
		<a href="reject_bkg?bkgId=<?php echo e($row->id); ?>" class="btn btn-secondary d-inline-block m-4">Reject booking</a>
	</div>
	<?php endif; ?>
</div>
<center><div class="deco">~~O~~</div></center>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\G-06_EventManagementSystem-master\resources\views/admin_main.blade.php ENDPATH**/ ?>