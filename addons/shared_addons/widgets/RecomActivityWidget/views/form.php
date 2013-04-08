<ul>
  <li>
    <label>图片</label>
    <?php echo form_dropdown('image_id', $image_select, $options['image_id']); ?>
  </li>
  <li class="even">
	<label>标题</label>
	<?php echo form_input('a_title',$options['a_title']); ?>
  </li>
  <li class="even">
	<label>描述</label>
	<?php echo form_textarea('a_desc',$options['a_desc']); ?>
  </li>
   <li class="even">
	<label>链接</label>
	<?php echo form_input('a_url',$options['a_url']); ?>
  </li>
</ul>