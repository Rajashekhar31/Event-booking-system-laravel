<?php $__env->startSection('contents'); ?>
<div class="div1">
<?php if(session('message')): ?>
   <div class="alert alert-success" role="alert">
      <?php echo e(session('message')); ?>

  </div>
<?php endif; ?>
<div class="divStyle">
<h2 class="h2Style">Reset Password</h2>
<form method="POST" action="forget-password">
    <?php echo csrf_field(); ?>
      <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address:</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" autocomplete="email" autofocus>

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <center><button type="submit" class="btnStyle">Send Password Reset Link</button></center>

</form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\G-06_EventManagementSystem-master\resources\views/email.blade.php ENDPATH**/ ?>