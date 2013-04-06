<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 所有分类，widget，使用在blog首页
 *
 * @author  	梁荣泽
 * @package		PyroCMS
 */
class Widget_BlogTagWidget extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = '热门话题';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => '热门话题'
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
		)
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

		$this->db->select('count(ka.keyword_id) AS count, ka.keyword_id,k.name');
		$this->db->from('keywords_applied ka');
		$this->db->join('keywords k', 'k.id = ka.keyword_id', 'left');
		//var_dump($options);
		$this->db->limit($options['num']);
		$this->db->group_by('keyword_id');
		$this->db->order_by('count DESC');
		$query = $this->db->get();

		$keywords = $query->result();
		//var_dump($keywords);
		return array('keywords' => $keywords,'options'=>$options);
	}

}