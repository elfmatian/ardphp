<?php

namespace Addons\\Model;

use Home\Model\WeixinModel;

/**
 * WeiSite的微信模型
 */
class WeixinAddonModel extends WeixinModel {
	function reply($dataArr, $keywordArr = array()) {
		// 其中token和openid这两个参数一定要传，否则程序不知道是哪个微信用户进入了系统
		$param ['token'] = get_token ();
		$param ['openid'] = get_openid ();
		
		if ($keywordArr ['extra_text'] == 'custom_reply_news') {
			// 单条图文回复
			$map ['id'] = $keywordArr ['aim_id'];
			$info = M ( 'custom_reply_news' )->where ( $map )->find ();
			
			// 组装用户在微信里点击图文的时跳转URL
			$param ['id'] = $info ['id'];
			//$url = addons_url ( 'CustomReply://CustomReply/detail', $param );
			$url = addons_url('WeiBbs://WeiBbs/detail',$param);
			// 组装微信需要的图文数据，格式是固定的
			$articles [0] = array (
					'Title' => $info ['title'],
					'Description' => $info ['intro'],
					'PicUrl' => get_cover_url ( $info ['cover'] ),
					'Url' => $url 
			);
		} else {
			$config = getAddonConfig ( 'WeiBbs' ); // 获取后台插件的配置参数
			
			$url = addons_url ( 'WeiBbs://WeiBbs/index', $param );
			
			// 组装微信需要的图文数据，格式是固定的
			$articles [0] = array (
					'Title' => $config ['title'],
					'Description' => $config ['info'],
					'PicUrl' => get_cover_url ( $config ['cover'] ),
					'Url' => $url 
			);
		}
		$this->replyNews ( $articles );
	}
}
        	