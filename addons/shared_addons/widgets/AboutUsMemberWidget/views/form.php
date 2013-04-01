<ul>
  <li class="even">
	<label>标题</label>
	<?php echo form_input('tags_title',$options['tags_title'],'style="width:290px;"'); ?>
  </li>
  <li class="even">
	<label>描述</label>
	<?php echo form_input('tags_desc',$options['tags_desc'],'style="width:290px;"'); ?>
  </li>
 
  <li class="even">
	<label>图片</label>
	 <?php echo form_dropdown('image_id', $image_select, $options['image_id']); ?>
  </li>
   <!---->
  <li class="even">
	<label>背景文字</label>
	<?php echo form_input('tags_background', $options['tags_background']); ?>
  </li>
 
</ul>