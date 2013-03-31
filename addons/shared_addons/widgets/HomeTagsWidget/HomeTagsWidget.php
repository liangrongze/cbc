<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 设置滚动图片
 *
 * @author  	梁荣泽
 * @package		PyroCMS
 */
class Widget_HomeTagsWidget extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = '设置首页Tab';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => '设置首页Tab'
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
			'field' => 'tags_url',
		),
		array(
			'field' => 'tags_content',
		),
		array(
			'field' => 'tags_active',
		),
		);

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