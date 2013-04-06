<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 所有分类，widget，使用在blog首页
 *
 * @author  	梁荣泽
 * @package		PyroCMS
 */
class Widget_BlogCategoryWidget extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = '所有分类';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => '所有分类'
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
			'field' => 'num',
		),array(
			'field' => 'show_all',
		),
		);

	public function form($options)
	{

		return array('options' => $options,);
	}
	/**
	 * The main function of the widget.
	 *
	 * @param array $options The options for displaying an HTML widget.
	 * @return array
	 */
	public function run($options)
	{
		$categories = $this->blog_categories_m
								->order_by('title')
								->limit($options['num'])
								->offset(0)
								->get_all();
		//var_dump($options);
		return array('categories' => $categories,'options'=>$options);
	}

}