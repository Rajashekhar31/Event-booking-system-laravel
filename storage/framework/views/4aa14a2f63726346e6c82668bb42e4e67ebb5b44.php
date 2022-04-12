<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" />
<style>

	
.iconn{
	display:flex;
}
.iconss{
	height:50px;
	width:50px;
	background-color: #f5f6fa;
	border-radius: 50px;
	text-align: center;
	margin: 10px;
	line-height: 60px;
	box-shadow: 1px 4px 2px 2px #dcdde1;
}
footer{
	padding:30px;
}

</style>
</head>
<!--<h3 style="background-color: grey;color:white;margin-top: 0px;">Footer</h3>-->
<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small teal pt-4" style="background-color: antiquewhite";>
 
 <div class="mt-5 pt-5 pb-5 footer">
<div class="container-fluid p-0">
  <div class="row">
    <div class="col-lg-5 col-xs-12 ">
      <h2>Feedback</h2>
      <form action="send" method="POST">
	<?php echo csrf_field(); ?>
<div class="input-container">
	<i class="fa fa-user icon"></i>
	<input type="name" id="name" class="input-field" name="name" placeholder="Full Name">
</div>
<span class="errorMsgs"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
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
	<i class="fa fa-envelope icon"></i>
	<input type="feedback" id="feedback" class="input-field" name="feedback" placeholder="Write your feedback here!!!">
</div>
<span class="errorMsgs"><?php $__errorArgs = ['feedback'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>



<center><button class="btnStyle" type="submit">Send</button></center>
</form>
</div>
    <div class="col-lg-3 col-xs-12 ">
      
       <h5 class="text-uppercase font-weight-bold">Contact us on:</h5>
       <p> <h6>Email: eventsrs@gmail.com</h6>
		<h6>phone: (+91)9087654321</h6>
		<h6>Address: Nandyal,Andhra Pradesh.</h6>
		<h6>India 518502</h6></p>
		<div class="iconn">
		<a class="iconss" href="">
		<i class="fa fa-2x fa-facebook"></i>
		</a>
		<a class="iconss" href="#">
		<i class="fa fa-2x fa-twitter"></i>
		</a>
		<a class="iconss" href="#">
		<i class="fa fa-2x fa-instagram"></i>
		</a>
		<a class="iconss" href="#">
		<i class="fa fa-2x fa-whatsapp"></i>
		</a>
		</div>
    </div>
    <div class="col-lg-4 col-xs-12 ">
       <h5 class="text-uppercase font-weight-bold">Google map</h5>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.8223096612824!2d73.83083901433008!3d15.493987158712871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfc08e645c34e5%3A0x44cff9cbac25c449!2sKrishnadas%20Shama%20State%20Central%20Library!5e0!3m2!1sen!2sin!4v1618415049894!5m2!1sen!2sin" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>

    </div>
  </div>

</div>
</div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="#"> RajaShekhar.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer --><?php /**PATH C:\Users\Raja shekhar reddy B\laravel\G-06_EventManagementSystem-master\resources\views/footer.blade.php ENDPATH**/ ?>