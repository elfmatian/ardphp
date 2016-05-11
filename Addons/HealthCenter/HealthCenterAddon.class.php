<?php

namespace Addons\HealthCenter;
use Common\Controller\Addon;

/**
 * 健康中心插件
 * @author 曌运
 */

    class HealthCenterAddon extends Addon{

        public $info = array(
            'name'=>'HealthCenter',
            'title'=>'健康中心',
            'description'=>'健康中心',
            'status'=>1,
            'author'=>'曌运',
            'version'=>'0.1',
            'has_adminlist'=>0
        );

	public function install() {
		$install_sql = './Addons/HealthCenter/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/HealthCenter/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }