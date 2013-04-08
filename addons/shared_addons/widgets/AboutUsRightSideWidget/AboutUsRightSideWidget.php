<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 关于我们-右栏
 *
 * @author  	梁荣泽
 * @package		PyroCMS
 */
class Widget_AboutUsRightSideWidget extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = '关于我们-右栏';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => '关于我们-右栏'
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
			'field' => 'a_desc',
			),
		array(
			'field' => 'a_title',
			)
		);

	
	public function form($options)
	{
		
		return array(
			'options' => $options,
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

		// Store the feed items
		return array($options);
	}

}