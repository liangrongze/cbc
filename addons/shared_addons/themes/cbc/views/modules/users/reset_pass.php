<!-- start: title -->
<div class="page-title">
	<div class="section-wrapper">
		<div class="container">
			<h2>Reset your password</h2>
		</div>
	</div>
</div><!-- end: title -->

<!-- start: sign -->
<div class="section-sign">
	<div class="section-wrapper">

		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<div class="separator">
						<div class="">
							<div class="lines">
								<div>
								<h2 class="lines-title">Forget Password ?</h2>
								</div>
							</div>
						</div>
					</div>		
				</div>	
			</div>
		</div>
		<?php if(!empty($success_string)): ?>
			<div class="container">
				<div class="row-fluid">
				<?php echo $success_string ?>
				</div>
			</div>
		<?php else: ?>
		<div class="container">
			<div class="row-fluid">

				<?php echo form_open('users/reset_pass', array('id'=>'reset-pass','class'=>'form-password')) ?>
					<p>Enter your e-mail address below to reset your password.</p>
					<input type="text" name="email" maxlength="100" value="<?php echo set_value('email') ?>" placeholder="Email" />
		            <a href="#" class="btn-password btn btn-send" id="submit">Submit</a>	
					<div id="error"></div>
		            <p class="account">Already have an account? <a href="<?php echo site_url("users/login");?>">Sign in</a></p>
                   
    			<?php echo form_close() ?>

			</div>
		</div>
		<?php endif;?>
		</div>			
 </div><!-- end: sign -->
 <script>
 $(function() {
	$("#submit").click(function (){
		$("#reset-pass").submit();
		return false;
	});
	$("#reset-pass").validate({
		errorPlacement: function(error, element) {
				error.appendTo($("#error"));
		},
		rules: {
			email: {
				required: true,
				email: true
			},
		},
		messages: {
			email: "请输入正确的邮箱地址",
		},
		submitHandler: function(form) {
			form.submit();
		 }
	});
});
 </script>