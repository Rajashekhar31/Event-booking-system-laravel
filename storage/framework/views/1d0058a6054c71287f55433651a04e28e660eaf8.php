<?php echo $__env->make("admin_header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--
<table border="1">
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Feedback</td>
	</tr>
	<?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($feedback['name']); ?></td>
		<td><?php echo e($feedback['email']); ?></td>
		<td><?php echo e($feedback['feedback']); ?></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
		-->
		<style type="text/css">
	.feed{
		margin: 0px auto;
		width: 70%;
		background: linear-gradient(to bottom, #ffff66 0%, #00ffff 100%);
		
	}
		.feed:hover{
background: linear-gradient(to bottom, #00ffff 0%, #99ff33 100%);
}
	.pstyle {
		margin-top: 20px;
	}
	.deco{
		font-weight:bold;
		margin:20px auto;
		
	}
</style>
<h2 class="text-center" style="text-shadow: 2px 2px;">Feedbacks</h2>
<?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="shadow p-3 mb-5 rounded feed">
<!--<img src="/images/2.jpg" alt="..." style="height:60px;">-->
	<div class="d-inline-block"><span class="font-weight-bold"> Name:</span> <?php echo e($feedback['name']); ?> </div>
	<div class="d-inline-block" style="text-indent: 50px;"><span class="font-weight-bold">Email:</span> <?php echo e($feedback['email']); ?> </div>
	<p class="pstyle"><span class="font-weight-bold">Feedbacks:</span> <?php echo e($feedback['feedback']); ?></p>
</div>
<center><div class="deco">~~O~~</div></center>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\G-06_EventManagementSystem-master\resources\views/admin_feedback.blade.php ENDPATH**/ ?>