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
								<h2 class="lines-title">Open ID</h2>
								</div>
							</div>
						</div>
					</div>		
				</div>	
			</div>
		</div>	
		<div class="container">
			<div class="row">
				<div class="span12 openid">
					<a class="modern sign-facebook " href="#"><span class="mordern-id">Facebook</span></a>
					<a class="modern sign-twitter " href="#"><span class="mordern-id">Twitter</span></a>
					<a class="modern sign-google " href="#"><span class="mordern-id">Google +</span></a>
				</div>	
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<div class="separator">
						<div class="">
							<div class="lines">
								<div>
								<h2 class="lines-title">or</h2>
								</div>
							</div>
						</div>
					</div>		
				</div>	
			</div>
		</div>
		<?php if (validation_errors()): ?>
		<div class="container">
			<div class="row">
				<div class="span6 offset3 error">
				<?php echo validation_errors();?>
				</div>
			</div>
		</div>
		<?php endif ?>

		<?php echo form_open('users/login', array('id'=>'login'), array('redirect_to' => $redirect_to)) ?>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
						<?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '','class="open-email" placeholder="Email"')?>
						 <input type="password" id="password" name="password" maxlength="20" class="open-password" placeholder="Password"/>
			             <a href="#" class="btn btn-send btn-sign " id="sign-in">Sign in</a>
					
				</div>
				<div class="span6 offset3">
					
				</div>
			</div>
		</div>	
		<div class="container">
			<div class="row">
				<div class="span3 offset3 password">
						<label class="checkbox">
						<input type="checkbox" name="remember" value="1"> Stay signed in</label>
						<a href="<?php echo site_url('users/reset_pass');?>">Forgot password?</a>
				</div>
				<div class="span3 offset1 account">
                        <span>Don’t have yet?</span>
                        <a href="<?php echo site_url('users/register');?>">Sign up</a>
				</div>	
			</div>
		</div>
		<?php echo form_close() ?>
	</div>			
 </div><!-- end: sign -->
  <script>
 $(function() {
	$("#sign-in").click(function (){
		 $("#login").submit();
		return false;
	});
	$("#login").validate({
		errorPlacement: function(error, element) {
				error.appendTo( element.parent("div").next("div") );
			},
		rules: {
			password :{
				required: true,
				minlength:6
			},
			email: {
				required: true,
				email: true
			},
		},
		messages: {
			password : {
				required: "密码不能为空",
				minlength: "密码长度不能少于6位",
			},
			email: "请输入正确的邮箱地址",
		},
		submitHandler: function(form) {
			form.submit();
		 }
	});
});
 </script>