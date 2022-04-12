<?php echo $__env->make("admin_header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<head>
	<style>
	#container{
		width:42%;
		border:1px solid yellow;
		margin:100px auto;
		padding:30px;
		border-radius:20px;
		background-image: linear-gradient(to right,#ff5f6d ,#ffc371 ); 
	}
	h3{
		text-align:center;
		margin-bottom:40px;
	}
	label{
		font-weight:bold;
	}
	#chooseVenue{
		
		margin:50px auto;
		width:30%;
	}
	
	
	
	</style>
</head>
<body>
	<div id="container">
		<h3>Delete a venue</h3>
	
		<form action="removeVenue?" method="post">
			<?php echo csrf_field(); ?>		
				<div class="form-group">
				  <label for="venue_name" class="form-label"><b>Venue Name:</b></label>			 
				  <select id="venue_name" class="form-control" name="venue_name">			  
					<option selected>Choose Venue</option>
					<?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($venue['id']); ?>"><?php echo e($venue['venue_name']); ?></option>
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  </select>				 
				</div>			
				
				<div id="chooseVenue">
					<button type="submit" class="btn btn-primary" style="font-size:15px;">REMOVE VENUE</button>
				 </div>
			<form>
	</div>
</body>
<?php /**PATH C:\Users\Raja shekhar reddy B\laravel\event-booking-system\resources\views/removeVenue.blade.php ENDPATH**/ ?>