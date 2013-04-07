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
		<?php if ( ! empty($error_string)):?>
		<!-- Woops... -->
		<div class="container error">
			<div class="row">
				<div class="span6 offset3">
				<?php echo $error_string;?>
				</div>
			</div>
		</div>
		<?php endif;?>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<div class="separator">
						<div class="">
							<div class="lines">
								<div>
								<h2 class="lines-title">Create an account</h2>
								</div>
							</div>
						</div>
					</div>		
				</div>	
			</div>
		</div>	
		<div class="container">
			<div class="row-fluid">
				<div class="span3 offset4 account-avatar">
					<div class="white-content">
						{{ theme:image file="account-avatar.png" id="avatar"}}	
					</div>
					
					<div class="btn-avatar"><a href="#" id="open_upload_cnt" class="btn btn-color">Up your Photo</a></div>
					<div class="btn-avatar-upload"><input type="file" name="avatar" id="file_upload" multiple="true" /></div>
				</div>		
				<?php echo form_open('users/register', array('id' => 'register')) ?>
				<div class="span3">

						<input type="text" name="username"  placeholder="Username">
						<input type="text" name="last_name" placeholder="Last name">
						<input type="text" name="first_name" placeholder="First name">
						<input type="text" name="email"  placeholder="Email">
						<input type="hidden"  name="src_name" id="src_name" value="">
						<input type="hidden" name="file_name" id="file_name" value="">
						<input type="text" name="d0ntf1llth1s1n" value=" " class="default-form" style="display:none" />
			            <input type="password" id="password" name="password" placeholder="Password">
			            <input type="password" name="confirm_password" placeholder="Confirm password">
						<span style="display:none;" id="loading" class="btn-account btn btn-send ">请稍候... </span>
			            <a href="#" id="create" class="btn-account btn btn-send ">Create account</a>            
				</div>
				<?php echo form_close() ?>
			</div>
		</div>	
		<div class="container">
			<div class="row">
				<div class="span3 offset5 account create-account">
                        <span>Already have an account?</span>
                        <a href="sign-in.html">Sign in</a>
				</div>	
			</div>
		</div>


	</div>			
 </div><!-- end: sign -->
 <script>
 $(function() {
    $('#file_upload').uploadify({
        'swf'      : '<?php echo base_url();?>/addons/shared_addons/themes/cbc/js/uploadify.swf',
        'uploader' : '<?php echo site_url('users/upload');?>',
		'fileTypeDesc' : 'Jpg文件或Png文件',
		'fileTypeExts'   : '*.jpg;*.png',
        'fileSizeLimit': 2097152,
		'onUploadSuccess'  : function(file, data, response){
			//console.log(data);
			var data = jQuery.parseJSON(data);
			
			if( data.status == 'success'){
				$("#avatar").attr("src",data.path);
				$("#src_name").val(data.src_name);
				$("#file_name").val(data.file_name);
			}else{
				alert(data.msg);
			}
			$("#create").show();
			$("#loading").hide();
		}, 
		'onUploadStart': function (){
			$("#create").hide();
			$("#loading").show();
		}
    });
	$("#open_upload_cnt").click(function (){
		if( $(".btn-avatar-upload").is(":hidden") ){
			$(".btn-avatar-upload").show();
			$(this).html("Cancel Up Photo");
		}else{
			$(".btn-avatar-upload").hide();
			$(this).html("Up your Photo");
		}
		return false;
	});
	$("#create").click(function (){
		 $("#register").submit();
		return false;
	});
	$("#register").validate({
		rules: {
			first_name: "required",
			last_name: "required",
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
			email: {
				required: true,
				email: true
			},
		},
		messages: {
			firstname: "Please enter your firstname",
			lastname: "Please enter your lastname",
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 2 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 6 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 6 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address",
		},
		submitHandler: function(form) {
			form.submit();
			$("#create").hide();
			$("#loading").show();
		 }
	});
});
 </script>