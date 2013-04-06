 <!--start: comment-list -->
<div class="row">
	<div class="span8">
	<?php if ($comments): ?>
	<ol class="comment-list clearfix">
	<?php foreach ($comments as $item): ?>
		<li>
			<div class="comments">
				<div class="avatar"><?php echo gravatar($item->user_email, 60) ?></div>
				<div class="comment-info">
				<div class="comment-author"><strong><?php echo $item->user_name ?></strong><span class="reply"><a href="#" title="Reply"><i class="icon-reply"></i></a></span> <span class="date"><?php echo date("M d, Y",$item->created_on) ?></span></div>
					<?php if (Settings::get('comment_markdown') and $item->parsed): ?>
						<p><?php echo $item->parsed ?></p>
					<?php else: ?>
						<p><?php echo nl2br($item->comment) ?></p>
					<?php endif ?>
				</div>
			</div>

		</li>
	<?php endforeach ?>
	 </ol>
	<?php else: ?>
	<p><?php echo lang('comments:no_comments') ?></p>
	<?php endif ?>
</div><!--end: comment-list --> 	
</div>