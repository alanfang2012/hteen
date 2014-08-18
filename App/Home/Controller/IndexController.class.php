<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "s";
    }
    function show(){
    	$url = U("show");
        $ip = get_client_ip();

        $Ip = new ThinkPHP\Library\Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
        $area = $Ip->getlocation('203.34.5.66');
        $this->assign('url',$url);
        $this->assign('ip',$ip);
    	$this->assign('area',$area);
    	$this->display();
    }
}