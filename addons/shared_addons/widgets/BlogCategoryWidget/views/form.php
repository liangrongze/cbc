<ul>
  <li class="even">
	<label>分类数目</label>
	 <?php echo form_dropdown('num', array(1,2,3,4,5,6,7,8,9,10), $options['num']); ?>
  </li>
  <li class="even">
	<label>显示全部分类</label>
	 <?php echo form_checkbox('show_all',1, ($options['show_all'] == 1 ? true : false)); ?>
  </li>

</ul>