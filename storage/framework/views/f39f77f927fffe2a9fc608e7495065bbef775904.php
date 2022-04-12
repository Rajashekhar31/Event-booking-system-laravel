<?php $__env->startSection('contents'); ?>
<div class="div1">
<?php if($errors->any()): ?>
	<div class="alert alert-danger">
	    <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
	</div>
<?php endif; ?>
<?php if(session('message')): ?>
     <div class="alert alert-success" role="alert">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>
<div class="divStyle">
<h2 class="h2Style">Sign In</h2>

<form action="login" method="POST">
	<?php echo csrf_field(); ?>
<div class="input-container">
	<i class="fa fa-envelope icon"></i>
	<input type="email" id="email" class="input-field" name="email" placeholder="Email">
</div>
<span class="errorMsgs"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
<div class="input-container">
	<i class="fa fa-key icon"></i>
	<input type="password" id="password" class="input-field" name="password" placeholder="Password">
</div>
<span class="errorMsgs"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 
<center><button class="btnStyle" type="submit">Sign In</button></center>
<center><a href="forget-password">Forgot your password?</a></center>
<p class="paraStyle">Don't have an account?Click here to <span><a class="anchrStyle" href="signup">Sign Up</a></span></p>
</form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\event-booking-system\resources\views/login.blade.php ENDPATH**/ ?>