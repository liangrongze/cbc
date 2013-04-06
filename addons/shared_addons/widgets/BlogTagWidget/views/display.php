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
						<?php if($keywords):?>
						<?php foreach( $keywords AS $k):?>
						<li>
							<a class="side-tag " href="<?php echo base_url('blog/tagged/'.urlencode($k->name));?>"><?php echo $k->name;?></a>
						</li>
						<?php endforeach;?>
						<?php endif;?>
						
					</ul>					

				</div>	