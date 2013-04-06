<ul>
  <li class="even">
	<label>显示数目</label>
	 <?php echo form_dropdown('num', array(1,2,3,4,5,6,7,8,9,10), $options['num']); ?>
  </li>
  <li class="even">
	<label>是否展示</label>
	 <?php echo form_checkbox('is_show',1, ($options['is_show'] == 1 ? true :false)); ?>
  </li>

</ul>