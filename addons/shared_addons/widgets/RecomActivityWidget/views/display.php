<div class="span3">
	<div class="white-content">
		<div class="img-mask hover-mask">
			<img src="{{ files:image_url id="<?php echo $options['image_id']; ?>" }}" alt="<?php echo $options['a_title']; ?>"/>
			<div class="flip-container">
			  <div class="flipper">
				<div class="back">
				  <div class="flip-b">
					<a href="<?php echo $options['a_url']; ?>"><span class="icon-back"><i class="icon-plus-sign"></i></span></a>
				  </div>
				</div>
			  </div>
			</div>
			<span class="hover-fade"><i class="icon-plus-sign icon-3x"></i></span>					
		</div>							
		<a href="<?php echo $options['a_url']; ?>"><h5><?php echo $options['a_title']; ?> <span class="white-title"><i class="icon-plus"></i></span></h5></a>
		<p><?php echo $options['a_desc']; ?></p>
	</div>
</div>