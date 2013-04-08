<ul>
  <li>
    <label>图片</label>
    <?php echo form_dropdown('image_id', $image_select, $options['image_id']); ?>
  </li>
  <li class="even">
	<label>标题</label>
	<?php echo form_input('s_title',$options['s_title']); ?>
  </li>
  <li class="even">
	<label>描述</label>
	<?php echo form_textarea('desc',$options['desc']); ?>
  </li>
</ul>