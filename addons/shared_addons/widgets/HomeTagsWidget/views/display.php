<?php $id  = rand(900000,2092929);?>
 <div class="accordion-group">
	<div class="accordion-heading">
	  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $id;?>">
		<?php echo $options['tags_title'];?> <span class="accordion-icon"><i class="icon-angle-down"></i></span>
	  </a>
	</div>
	<div id="<?php echo $id;?>" class="accordion-body collapse <?php echo $options['tags_active'] ? 'in': '';?>">
	  <div class="accordion-inner">
		<?php echo $options['tags_content'];?>
	  </div>
	</div>
  </div>