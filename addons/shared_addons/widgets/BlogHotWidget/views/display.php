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
					<?php if($posts):?>
					<?php foreach( $posts AS $post):?>
					<div class="popular">
	                    <span>
							<a href="<?php echo base_url('blog/' .date('Y/m', $post['created']).'/'. $post['slug']);?>">
								<?php echo $post['display_pic']['img'];?>
							</a>
	                    </span>
	                    <p><?php echo $post['intro'];?></p>
                    </div>

                    <div class="clearfix"></div> 
					<?php endforeach;?>
					<?php endif;?>
				</div>	