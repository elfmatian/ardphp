<?php

namespace Addons\HealthCenter\Controller;
use Home\Controller\AddonsController;


class HealthCenterController extends AddonsController{

    function health() {

        $param ['openid'] = get_openid ();
        //$uid = M ( 'public_follow' )->where (  $param ['openid']  )->getField ( 'uid' );
        $info = M ( 'public_follow' )->where ( $param )->find ();
        $this->assign('uid',$info ['uid']);
        $this->assign ( 'openid',$param ['openid'] );
        $this->display ('HealthCenter/health');

    }

}
