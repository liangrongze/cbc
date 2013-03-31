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
	<label>背景样式</label>
	<?php echo form_dropdown('class', array('bg-1'=>'白色','bg-2'=>'黑色','bg-3'=>'灰白','bg-4'=>'手机背景大图'), $options['class']); ?>
  </li>
  <li class="even">
	<label>展示效果</label>
	<?php echo form_dropdown('display_type', array('horizontal'=>'水平打开','vertical'=>'垂直打开'), $options['display_type']); ?>
  </li>
  <li class="even">
	<label>标题</label>
	<?php echo form_input('image_title',$options['image_title'],'style="width:290px;"'); ?>
  </li>
</ul>