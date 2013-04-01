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
								<a href="post.html"><span><i class="icon-heart"></i>5</span></a>
								<a href="post.html"><span><i class="icon-comments"></i>9</span></a>
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

			<?php echo $pagination['links']; ?>

			<div class="row">
					
				<div class="span8">

					<div class="pagination">
						<ul class="white-content">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
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
						<form id="search">
				              <input type="text" class="span2" placeholder="Enter a keyword">
				              <button class="btn btn-send" type="button">Search</button>
						</form>						

				</div>	

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
						<li class="first-child">
							<a href="#"><i class="icon-angle-right"></i> Lorem ipsum dolor sit amet</a>
						</li>
						<li>
							<a href="#"><i class="icon-angle-right"></i> consectetur adipisicing elit</a>
						</li>
						<li>
							<a href="#"><i class="icon-angle-right"></i> facere reprehenderit tempore</a>
						</li>
						<li>
							<a href="#"><i class="icon-angle-right"></i> ccusantium architecto vel </a>
						</li>
						<li class="last-child">
							<a href="#"><i class="icon-angle-right"></i> deserunt adipisci quis hic</a>
						</li>
					</ul>			

				</div>	

				<div class="popular">
					<div class="separator">
						<div class="left">
							<div class="lines">
								<div>
								<h2 class="lines-title">热门消息</h2>
								</div>
							</div>
						</div>					
					</div>	

					<div class="popular">
	                    <span>
	                        <a href=""><img alt="" src="assets/images/large/5.jpg"></a>
	                    </span>
	                    <a href=""><p>Ullam dolor vitae sint voluptatum fugit necessitatibus eos nesciunt illum error aliquam non maiores.</p></a>
                    </div>

                    <div class="clearfix"></div> 

					<div class="popular">
	                    <span>
	                        <a href=""><img alt="" src="assets/images/large/6.jpg"></a>
	                    </span>
	                    <a href=""><p>Ullam dolor vitae sint voluptatum fugit necessitatibus eos nesciunt illum error aliquam non maiores.</p></a>
                    </div>    

					<div class="clearfix"></div> 

					<div class="popular">
	                    <span>
	                        <a href=""><img alt="" src="assets/images/large/8.jpg"></a>
	                    </span>
	                    <a href=""><p>Ullam dolor vitae sint voluptatum fugit necessitatibus eos nesciunt illum error aliquam non maiores.</p></a>
                    </div>

                 <div class="clearfix"></div>  	 					
					
				</div>	

				<div class="tags">
					<div class="separator">
						<div class="left">
							<div class="lines">
								<div>
								<h2 class="lines-title">热门话题</h2>
								</div>
							</div>
						</div>					
					</div>	

					<ul>
						<li>
							<a class="side-tag " href="#">CSS3</a>
						</li>
						<li>
							<a class="side-tag " href="#">JS</a>
						</li>
						<li>
							<a class="side-tag " href="#">Chrome</a>
						</li>
						<li>
							<a class="side-tag " href="#">HTML5</a>
						</li>
						<li>
							<a class="side-tag " href="#">Phone</a>
						</li>
						<li>
							<a class="side-tag " href="#">Java</a>
						</li>
						<li>
							<a class="side-tag " href="#">Responsive</a>
						</li>
						<li>
							<a class="side-tag " href="#">Tablets</a>
						</li>
						<li>
							<a class="side-tag " href="#">Jquery</a>
						</li>
					</ul>					

				</div>					
				
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
