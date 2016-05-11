<?php
        	
namespace Addons\HealthCenter\Model;
use Home\Model\WeixinModel;
        	
/**
 * HealthCenter的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'HealthCenter' ); // 获取后台插件的配置参数
		//dump($config);
		$param ['token'] = get_token ();
		$param ['openid'] = get_openid ();
		$url = addons_url ( 'HealthCenter://HealthCenter/health', $param );
		$articles [0] = array (
			'Title' => '健康中心',
			'Description' => '请点击查看健康信息',
			'PicUrl' => 'http://www.ynswet.com/Public/Home/images/about/logo.jpg',
			'Url' => $url
		);
		$res = $this->replyNews ( $articles );

	}
}
        	