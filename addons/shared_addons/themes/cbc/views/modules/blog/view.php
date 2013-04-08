<div class="page-title">
	<div class="section-wrapper">
		<div class="container">
			<h2>Post</h2>
		</div>
	</div>
</div><!-- end: title -->

<?php $post = current($post);
//var_dump($post);?>
<!-- start: post -->
<div class="section-wrapper section-blog">

	<div class="container">

		<div class="row">

			<div class="span8">


				<div class="row">
					
					<div class="span8">
						<?php if($post['big_pic']['img']):?>
						<div class="">
							<?php echo $post['big_pic']['img'];?>
						</div>
						<?php endif;?>


						<div class="white-content extra-padding">
							
							<div class="post">
								<h2 class="post-title"><?php echo $post['title'];?></h2>
							</div>
							<div class="post-info">
								<span><i class="icon-calendar"></i> <?php echo date('M d, Y', $post['created']);?></span>
								<!--<a href=""><span><i class="icon-heart"></i>5</span></a>
								<a href=""><span><i class="icon-user"></i> Ryan Roy</span></a>-->
							</div> 

						<?php echo $post['body'];?>

						</div>
						
					</div>

				</div>
				
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
								<h2 class="lines-title">Text</h2>
								</div>
							</div>
						</div>					
					</div>	
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quos recusandae minus quas fugiat. Incidunt quae quas maxime tenetur ipsum itaque repellat voluptas nihil dolor quo ad enim hic est.</p>		

				</div>	



			</div><!-- end: sidebar -->

			

		</div>
	</div>

</div><!-- end: post -->