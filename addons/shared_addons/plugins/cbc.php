<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Cbc Plugin
 *
 * For Cbc website
 *
 * @author		liangronzge
 * @package		PyroCMS\Addon\Plugins
 * @copyright	Copyright (c) 2009 - 2010, PyroCMS
 */
class Plugin_Cbc extends Plugin
{
	public $version = '1.0.0';

	public $name = array(
		'en'	=> 'cbc'
	);

	public $description = array(
		'en'	=> 'Cbc plugin, just for cbc website'
	);

	/**
	 * Returns a PluginDoc array that PyroCMS uses 
	 * to build the reference in the admin panel
	 *
	 * All options are listed here but refer 
	 * to the Blog plugin for a larger example
	 *
	 * @return array
	 */
	public function _self_doc()
	{
		$info = array(
			'about_us_carousel_class' => array(
				'description' => array(// a single sentence to explain the purpose of this method
					'en' => 'Set the carousel\'s first image\'s class to be "active"'
				),
				'single' => true,// will it work as a single tag?
				'double' => false,// how about as a double tag?
				'variables' => '',// list all variables available inside the double tag. Separate them|like|this
				'attributes' => array(
					'name' => array(// this is the name="World" attribute
						'type' => 'text',// Can be: slug, number, flag, text, array, any.
						'flags' => '',// flags are predefined values like asc|desc|random.
						'default' => 'World',// this attribute defaults to this if no value is given
						'required' => false,// is this attribute required?
					),
				),
			),
		);
	
		return $info;
	}

	/**
	 * Hello
	 *
	 * Usage:
	 * {{ cbc:about_us_carousel_class }}
	 *
	 * @return string
	 */
	function about_us_carousel_class()
	{
		static $count = 0;
		$count ++;
		return $count == 1 ? 'active' : "";
	}
}

/* End of file example.php */