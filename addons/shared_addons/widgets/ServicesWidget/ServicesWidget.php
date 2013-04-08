<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 首页-所有服务
 *
 * @author  	梁荣泽
 * @package		PyroCMS
 */
class Widget_ServicesWidget extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = '首页-所有服务';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => '首页-所有服务'
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
			'field' => 'image_id',
			),
		array(
			'field' => 'desc',
			),
		array(
			'field' => 's_title',
			)
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

		if (empty($options['image_id'])) {
			return false;
		}

		if (empty($image_select)) {
			return '';
		}

		// Store the feed items
		return array('image_id' => $image_select);
	}

}