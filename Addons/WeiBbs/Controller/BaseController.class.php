<?php

namespace Addons\\Controller;

use Home\Controller\AddonsController;

class BaseController extends AddonsController {
	var $config;
	function _initialize() {
		parent::_initialize ();
		
		$controller = strtolower ( _CONTROLLER );
		/*
		 * $res ['title'] = '微网设置';
		 * $res ['url'] = addons_url ( 'WeiBbs://WeiBbs/config' );
		 * $res ['class'] = $controller == 'WeiBbs' ? 'current' : '';
		 * $nav [] = $res;
		 *
		 * $res ['title'] = '分类管理';
		 * $res ['url'] = addons_url ( 'WeiBbs://Category/lists' );
		 * $res ['class'] = $controller == 'category' ? 'current' : '';
		 * $nav [] = $res;
		 *
		 * $res ['title'] = '首页幻灯片';
		 * $res ['url'] = addons_url ( 'WeiBbs://Slideshow/lists' );
		 * $res ['class'] = $controller == 'slideshow' ? 'current' : '';
		 * $nav [] = $res;
		 *
		 * $res ['title'] = '底部导航';
		 * $res ['url'] = addons_url ( 'WeiBbs://Footer/lists' );
		 * $res ['class'] = $controller == 'footer' ? 'current' : '';
		 * $nav [] = $res;
		 *
		 * $res ['title'] = '文章管理';
		 * $res ['url'] = addons_url ( 'WeiBbs://Cms/lists' );
		 * $res ['class'] = $controller == 'cms' ? 'current' : '';
		 * $nav [] = $res;
		 *
		 * $res ['title'] = '模板管理';
		 * $res ['url'] = addons_url ( 'WeiBbs://Template/index' );
		 * $res ['class'] = $controller == 'template' ? 'current' : '';
		 * $nav [] = $res;
		 */
		$this->assign ( 'nav', array () );
		
		$config = getAddonConfig ( 'WeiBbs' );
		$config ['cover_url'] = get_cover_url ( $config ['cover'] );
		$config ['background_id'] = $config ['background'];
		$config ['background'] = get_cover_url ( $config ['background'] );
		$this->config = $config;
		$this->assign ( 'config', $config );
		// dump ( $config );
		// dump(get_token());
		
		// 定义模板常量
		$act = strtolower ( _ACTION );
		$temp = $config ['template_' . $act];
		$act = ucfirst ( $act );
		$this->assign ( 'page_title', $config ['title'] );
		define ( 'CUSTOM_TEMPLATE_PATH', ONETHINK_ADDON_PATH . 'WeiBbs/View/default/Template' );
	}
}
