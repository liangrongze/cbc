<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 热门消息，widget，使用在blog首页
 *
 * @author  	梁荣泽
 * @package		PyroCMS
 */
class Widget_BlogHotWidget extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = '热门消息';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => '热门消息-在blog首页中使用'
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
			'field' => 'is_show',
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
		// Get the latest blog posts
		$params = array(
			'stream'		=> 'blog',
			'namespace'		=> 'blogs',
			'limit'			=> $options['num'],
			'where'			=> "`status` = 'live' AND is_hot = 1",
			'paginate'		=> 'no',
		);
		$posts = $this->streams->entries->get_entries($params);

		//var_dump($posts);
		return array('posts' => $posts['entries'],'options'=>$options);
	}

}