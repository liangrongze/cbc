<?php echo form_open('comments/create/blog', 'class="crud"'); ?>

	<?php echo form_hidden('entry', $entry_hash) ?>
	
	<div class="row">
				<div class="span8 white-content post-form">

					<div class="separator">
						<div class="left">
							<div class="lines">
								<div>
								<h2 class="lines-title">Add your comment</h2>
								</div>
							</div>
						</div>
					</div>					

					<form method="post">
						<?php if ( ! is_logged_in()): ?>
						<div class="clearfix">
							<div class="input">
								<input type="text" placeholder="Enter your name" name="name" class="span3">						
							</div>
						</div>

						<span class="visual"><i class="icon-comments"></i></span>

						<div class="clearfix">
							<div class="input">
								<input type="text" placeholder="Enter email adress" name="email" class="span3">		
							</div>
						</div>
						<?php endif ?>
						<div class="field clearfix">
							<textarea class="text textarea" name="comment"></textarea>
						</div>

						<div class="actions">
							<button tabindex="3" type="submit" class="btn btn-color">Send</button>
						</div>
					</form>
				</div><!--end: send comment  --> 
			</div>
<?php echo form_close(); ?>