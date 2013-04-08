<!-- start: title -->
<div class="page-title">
	<div class="section-wrapper">
		<div class="container">
			<h2>最新动态</h2>
		</div>
	</div>
</div><!-- end: title -->

<!-- start: blog -->
<div class="section-wrapper section-blog">

	<div class="container">

		<div class="row">

			<div class="span8">
				<?php if ( ! empty($posts) ): ?>
					<?php foreach ($posts as $post) : ?>
					<?php //var_dump($post);?>
				<div class="row">
					
					<div class="span8">

						<div class="white-content extra-padding">
							
							<div class="blog-info">
								<?php $title = sprintf('<div class="blog-title"><h4>%s</h4></div>',$post['title']);?>
								<?php echo anchor('blog/' .date('Y/m', $post['created']) .'/'. $post['slug'], $title); ?>
								<!--<a href="post.html"><span><i class="icon-heart"></i>5</span></a>
								<a href="post.html"><span><i class="icon-comments"></i>9</span></a>-->
								<span><i class="icon-calendar"></i> <?php echo date("M d, Y",$post['created']);?></span>
							</div>
							<div class="clearfix"></div>
							<div class="row-fluid">
								<div class="span4">
									<div class="blog-img-content">
										<a href="<?php echo base_url('blog/' .date('Y/m', $post['created']).'/'. $post['slug']);?>">
										<img src="<?php echo $post['display_pic']['image'];?>"/>
										</a>
									</div>
								</div>
								<div class="span8">
									<div class="blog-content">
										<?php echo $post['intro'];?>
									</div>
									<a class="btn btn-color pull-right" href="<?php echo base_url('blog/' .date('Y/m', $post['created']).'/'. $post['slug']);?>">Read More</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			<?php endforeach; ?>		

			<div class="row">
					
				<div class="span8">

					<div class="pagination">
						<?php echo $pagination; ?>
					</div>
					
				</div>

			</div>

			<?php else: ?>
				<p><?php echo lang('blog:currently_no_posts');?></p>
			<?php endif; ?>

				
			</div>	

			<!-- start: sidebar -->
			<div class="span4">

				<div class="search">
					<div class="separator">
						<div class="left">
							<div class="lines">
								<div>
								<h2 class="lines-title">搜索</h2>
								</div>
							</div>
						</div>					
					</div>	
						<form id="search" method="GET" action="<?php echo base_url('blog/?');?>">
				              <input type="text" name="f-intro" class="span2" placeholder="Enter a keyword">
				              <input name="filter-blog" type="hidden" class="span2" value="1">
				              <button class="btn btn-send" type="submit">Search</button>
						</form>						

				</div>

				{{ widgets:instance id="22"}}
				
				{{ widgets:instance id="23"}}

				{{ widgets:instance id="24"}}
				
				<div class="text">
					<div class="separator">
						<div class="left">
							<div class="lines">
								<div>
								<h2 class="lines-title">加入我们</h2>
								</div>
							</div>
						</div>					
					</div>	
					<p>澳洲中国游艇荟，位于墨尔本Dockland , 在墨尔本最美丽的海港中，是澳洲第一家为航海，划艇爱好者成立的俱乐部。本会宗旨是推动澳洲游艇活动，将被认为是富豪享受的游艇活动概念重新定位，以满足精英人士对此活动的各项需求。</p>		

				</div>	



			</div><!-- end: sidebar -->

			

		</div>
	</div>

</div><!-- end: blog -->
