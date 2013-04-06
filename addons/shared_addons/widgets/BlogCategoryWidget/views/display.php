<div class="category">
	<div class="separator">
		<div class="left">
			<div class="lines">
				<div>
				<h2 class="lines-title">分类</h2>
				</div>
			</div>
		</div>					
	</div>	
	<ul>
		<?php if($options['show_all']):?>
		<li class="first-child">
			<a href="<?php echo base_url('blog/');?>"><i class="icon-angle-right"></i> 全部分类</a>
		</li>
		<?php endif;?>
		<?php if( $categories):?>
		<?php foreach( $categories AS $cat ):?>
		<li class="first-child">
			<a href="<?php echo base_url('blog/category/'.$cat->slug);?>"><i class="icon-angle-right"></i> <?php echo $cat->title;?></a>
		</li>
		<?php endforeach;?>
		<?php endif;?>
	</ul>			

</div>	