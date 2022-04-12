
<?php echo $__env->make("admin_header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<style type="text/css">
	.cont {
		margin: 0px auto;
		width: 70%;
		background-color: #00FA9A;
		border:rounded-left, solid;
	}
	.cont:hover{
background: #00cca3; 
}
	.pstyle {
		margin-top: 20px;
	}
	
	.deco{
		font-weight:bold;
		margin:15px auto;
	}

</style>
<h2 class="text-center" style="text-shadow: 2px 2px;">Contact Enquiry Details</h2>
<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="shadow p-3 mb-5 rounded cont">

<center><div id="infinity"></div></center>
	<div class="d-inline-block"><span class="font-weight-bold"> Name:</span> <?php echo e($contact['name']); ?> </div>
	<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Email:</span> <?php echo e($contact['email']); ?> </div>
	<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Contact No:</span> <?php echo e($contact['ph_num1']); ?></div>
	<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Event</span> <?php echo e($contact['event']); ?></div>
	<p class="pstyle"><span class="font-weight-bold">Discription:</span> <?php echo e($contact['discription']); ?></p>
</div>
<center><div class="deco">~~O~~</div></center>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\G-06_EventManagementSystem-master\resources\views/admin_contactus.blade.php ENDPATH**/ ?>