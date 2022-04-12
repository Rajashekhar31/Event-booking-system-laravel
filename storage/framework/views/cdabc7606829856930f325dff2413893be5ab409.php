<?php $__env->startSection('contents'); ?>
<?php if($errors->any()): ?>
	<div class="alert alert-danger m-0" >
		<?php echo e($errors->first()); ?>

	</div>
<?php endif; ?>
<?php if(session('venue')): ?>
    <div class="alert alert-success m-0">
        <?php echo e(session('venue')); ?>

    </div>
<?php endif; ?>
 <!--<div class="contents" style="margin:0px;">
	<img src="images/cateringBackground.jpg" width="100%" height="600px"/>
	<h1 class="text">Swaad Caterers</h1>
	<div class="design">~o~</div>
</div>
<div class="outerDiv">
	<div class="innerDiv">
		<h3 class="h3Style">Food Menu</h3>
		<ul class="nav nav-tabs flex-column flex-sm-row">
		  <li class="nav-item">
		    <a class="flex-sm-fill nav-link active" data-toggle="tab" href="#packages">Choose Packages</a>
		  </li>
		  <li class="nav-item">
		    <a class="flex-sm-fill nav-link" data-toggle="tab" href="#planmenu">Plan Menu</a>
		  </li>
		</ul>

		<div class="tab-content">
		  <div class="tab-pane container active menu" id="packages">
			<h4 class="h4Style">Packages:</h4>	
			<p class="title">Veg packages:</p>
			<div class="box">
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Silver Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						<?php $__currentLoopData = $vegSilverPkg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $silverPkgDish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="list-group-item"><?php echo e($silverPkgDish->dish_name); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Ruby Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush"  style="padding: 5px;">
						<?php $__currentLoopData = $vegRubyPkg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rubyPkgDish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="list-group-item"><?php echo e($rubyPkgDish->dish_name); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Gold Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						<?php $__currentLoopData = $vegGoldPkg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goldPkgDish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="list-group-item"><?php echo e($goldPkgDish->dish_name); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul> 
				</div>
			</div> 	
			<p class="title">Non-veg packages:</p>
			<div class="box">
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Silver Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						<?php $__currentLoopData = $nonVegSilverPkg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $silverNonVegPkgDish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="list-group-item"><?php echo e($silverNonVegPkgDish->dish_name); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Ruby Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush"  style="padding: 5px;">
						<?php $__currentLoopData = $nonVegRubyPkg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rubyNonVegPkgDish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="list-group-item"><?php echo e($rubyNonVegPkgDish->dish_name); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
					</ul> 
				</div>
				<div class="subPackages">
					<div class="bg">
						<p class="subTitle">Gold Package</p>
						<p style="font-weight: bold;">~O~</p>
					</div>
					<ul class="list-group list-group-flush" style="padding: 5px;">
						<?php $__currentLoopData = $nonVegGoldPkg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goldNonVegPkgDish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="list-group-item"><?php echo e($goldNonVegPkgDish->dish_name); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					</ul> 
				</div>
			</div> 	
			<form action="catering/packages?bkgId=<?php echo e($bkgId); ?>" method="POST" style="padding: 10px;">
				<?php echo csrf_field(); ?>
				<fieldset style="border: 1px solid lightgrey;padding: 50px;">
    				<legend style="width: auto;font-style: italic;text-shadow: 1px 1px;">Book Your Order Now:</legend>
    				<div style="text-align: left;">
					<label>Select Veg Package:</label>
						<select name="vegFoodPackages" class="custom-select">
							<option selected value="none">--Choose Package--</option>
							<option value="Silver">Silver</option>
							<option value="Ruby">Ruby</option>
							<option value="Gold">Gold</option>
						</select>
						<label>Select Non-Veg Package:</label>
						<select name="nonVegFoodPackages" class="custom-select">
							<option selected value="none">--Choose Package--</option>
							<option value="Silver">Silver</option>
							<option value="Ruby">Ruby</option>
							<option value="Gold">Gold</option>
						</select>
					</div>
					<button type="submit" class="btn btn-outline-dark" style="margin-top: 20px;">Next</button>
				</fieldset>	
			</form>
		  </div>
		  <div class="tab-pane container fade menu" id="planmenu">
		  	<h4 class="h4Style">Plan Your Menu</h4>
		  		<form action="catering/dishes?bkgId=<?php echo e($bkgId); ?>" method="POST">
		  			<?php echo csrf_field(); ?>
				<div id="accordion">

				  <div class="card">
				  	<a class="card-link" data-toggle="collapse" href="#collapseOne">
				    <div class="card-header">
				        Main Course
				    </div>
				    </a>
				    <div id="collapseOne" class="collapse show" data-parent="#accordion">
				    	<div class="listStyle">
				    	<?php $__currentLoopData = $mainCourse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mainCourseDish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="<?php echo e($mainCourseDish->dish_name); ?>" value="<?php echo e($mainCourseDish->dish_name); ?>" name="dish_list[]" >
					    	<label class="custom-control-label" for="<?php echo e($mainCourseDish->dish_name); ?>"><?php echo e($mainCourseDish->dish_name); ?></label>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				    </div>
					</div>
				  </div>

				  <div class="card">
				  	<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
				    <div class="card-header">  
				        Desserts
				    </div>
				    </a>
				    <div id="collapseTwo" class="collapse" data-parent="#accordion">
				      <div class="listStyle">
				      <?php $__currentLoopData = $desserts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dessertDish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				      <div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="<?php echo e($dessertDish->dish_name); ?>" value="<?php echo e($dessertDish->dish_name); ?>" name="dish_list[]">
					    	<label class="custom-control-label" for="<?php echo e($dessertDish->dish_name); ?>"><?php echo e($dessertDish->dish_name); ?></label>
					  </div>
					  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				    </div>
					</div>
				  </div>

				  <div class="card">
				  	<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
				    <div class="card-header">
				        Beverages
				    </div>
				    </a>
				    <div id="collapseThree" class="collapse" data-parent="#accordion">
				    	<div class="listStyle">
				    	<?php $__currentLoopData = $beverages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beverageDish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    	<div class="custom-control custom-checkbox chkBox">
					    	<input type="checkbox" class="custom-control-input" id="<?php echo e($beverageDish->dish_name); ?>" value="<?php echo e($beverageDish->dish_name); ?>" name="dish_list[]">
					    	<label class="custom-control-label" for="<?php echo e($beverageDish->dish_name); ?>"><?php echo e($beverageDish->dish_name); ?></label>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				    	</div>
					</div>
				  </div>
				</div>
				<button type="submit" class="btn btn-outline-dark" style="margin: 20px;">Next</button>
				</form>
		  </div>
		</div>
	</div>
</div>-->
<div>
	<h1><center><font color="green" >Your Event has been booked Successfully</font></center></h1>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\G-06_EventManagementSystem-master\resources\views/catering.blade.php ENDPATH**/ ?>