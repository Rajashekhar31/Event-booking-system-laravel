<?php echo $__env->make("admin_header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<head>
	<style>
	#container{
		width:45%;
		border:1px solid yellow;
		margin:20px auto;
		padding:30px;
		border-radius:20px;
		background-image: linear-gradient(to right,#ff5f6d ,#ffc371 ); 
	}
	h3{
		text-align:center;		
	}
	label{
		font-weight:bold;
	}
	#addButton{		
		margin:10px auto;	
		width:30%;		
	}
	
	</style>
</head>
<body>
	<div id="container">
		<h3>Add a venue</h3>
		<form action="addVenue" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<div class="form-row">
			  <div class="form-group col-12">
				<label for="venue_name">Venue Name:</label>
				<input type="text" class="form-control" id="venue_name" name="venue_name" placeholder="Enter venue name" required>
				<span style="color:red"><?php $__errorArgs = ['venue_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
			  </div>
			  <div class="form-group col-12">
				<label for="address">Venue Address:</label>
				<input type="text" class="form-control" id="address" name="address" placeholder="Enter Venue Address:" required>
				<span style="color:red"><?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
			  </div>
			   <div class="form-group col-12">
				<label for="price">Price:</label>
				<input type="number" class="form-control" id="price" name="price" min="20000" max="80000" required>
			  </div>
			  <div class="form-group col-sm-12 col-md-6">
				<label for="lat">Latitude:</label>
				<input type="number" class="form-control" id="lat" name="lat" min="-90" max="90" step="any" required>
			  </div>
			  <div class="form-group col-sm-12 col-md-6">
				<label for="lng">Longitude:</label>
				<input type="number" class="form-control" id="lng" name="lng" min="-180" max="180"step="any" required>
			  </div>
			   <div class="form-group col-sm-12 col-md-6">
				<label for="capacity">Capacity:</label>
				<input type="number" class="form-control" id="capacity" name="capacity" min="100" max="5000" required>
			  </div>
			 
			  <div class="form-group col-sm-12 col-md-6">
				<label for="venue_image">Choose Venue Image:
				<input type="file" class="form-control-file" id="venue_image" name="venue_image">
				<span style="color:red"><?php $__errorArgs = ['venue_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
			  </div>
			  <div id="addButton">
				<button  class="btn btn-primary" type="submit" style="font-size:20px;">ADD VENUE</button>
			  </div>
		 </div>
		</form>
		
			
	</div>
</body><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\event-booking-system\resources\views/addVenue.blade.php ENDPATH**/ ?>