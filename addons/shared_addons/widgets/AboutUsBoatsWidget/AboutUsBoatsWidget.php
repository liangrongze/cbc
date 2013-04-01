<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 设置滚动图片
 *
 * @author  	梁荣泽
 * @package		PyroCMS
 */
class Widget_AboutUsBoatsWidget extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = '我们的游艇';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => '设置我们的游艇'
		);

	/**
	 * The author of the widget
	 *
	 * @var string
	 */
	public $author = '梁荣泽';

	/**
	 * The author's website.
	 *
	 * @var string
	 */
	public $website = 'http://liangrongze.com/';

	/**
	 * The version of the widget
	 *
	 * @var string
	 */
	public $version = '1.0';

	/**
	 * The fields for customizing the options of the widget.
	 *
	 * @var array
	 */
	public $fields = array(
		array(
			'field' => 'tags_title',
		),
	
	array(
			'field' => 'image_id',
		),
		array(
			'field' => 'tags_desc',
		),
		array(
			'field' => 'tags_background',
		),
		);

	public function get_folder_images() {
		$this->load->model('files/file_m');
		$folder_files = $this->file_m->get_all();
		$imagearray = array();
		foreach ($folder_files as $file) {
			$val = explode('/', $file->mimetype);
			if ($val[0] == 'image') {
				$imagearray[$file->id] = $file->name;
			}
		}
		return $imagearray;
	}

	public function form($options)
	{
		$image_select = $this->get_folder_images();

		return array(
			'options' => $options,
			'image_select' => $image_select
			);
	}
	/**
	 * The main function of the widget.
	 *
	 * @param array $options The options for displaying an HTML widget.
	 * @return array
	 */
	public function run($options)
	{
		
		return $options;
	}

}