<ul>
  <li class="even">
	<label>标题</label>
	<?php echo form_input('tags_title',$options['tags_title'],'style="width:290px;"'); ?>
  </li>
  <li class="even">
	<label>描述</label>
	<?php echo form_textarea('tags_content',$options['tags_content']); ?>
  </li>
  <li class="even">
	<label>链接</label>
	<?php echo form_input('tags_url',$options['tags_url'],'style="width:100px;"'); ?>
  </li>
  <li class="even">
	<label>默认打开</label>
	<?php echo form_dropdown('tags_active', array('1'=>'打开','0'=>'闭合'), $options['tags_active']); ?>
  </li>
 
</ul>