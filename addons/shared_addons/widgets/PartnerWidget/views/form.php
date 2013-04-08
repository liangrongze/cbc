<ul>
  <li>
    <label>图片</label>
    <?php echo form_dropdown('image_id', $image_select, $options['image_id']); ?>
  </li>
  <li class="even">
	<label>图片链接</label>
	<?php echo form_input('image_url',$options['image_url']); ?>
  </li>
  <li class="even">
	<label>标题</label>
	<?php echo form_input('image_title',$options['image_title'],'style="width:290px;"'); ?>
  </li>
</ul>