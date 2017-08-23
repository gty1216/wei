<?php
/**
 * Created by
 * 微信开发接口测试
 * PhpStorm.
 * User: hasee
 * Date: 2017/2/21
 * Time: 9:42
 */
  header("content-type:text/html;charset=utf-8");
  /*$str='{
   "touser":[
    "OPENID1",
    "OPENID2"
   ],
    "msgtype": "text",
    "text": { "content": "hello from boxer."}
}';
  var_dump(json_decode($str,true));exit;*/


//用户自定义服务器进行请求处理
   include 'class.wechat.php';
   $wechat=new wechat();
  // $wechat->valid();  //公众平台服务器和自定义服务器的验证  一旦配置成功，不需要再验证

   //获取access_TOKEN
   //echo $wechat->access_token();
   //获取票据
   //echo $wechat->ticket('123',1);   //临时二维码的票据
   //获取二维码内容
   //$wechat->qrcode(3);exit;
    //$wechat->tuisong();
   echo '<pre/>';
     //$wechat->uploadMedia('image','1.jpg');exit;
    //$wechat->createMenu();exit;
    //$wechat->deleteMenu();
    //$wechat->tuisong();
    $wechat->responseMsg();
   //header('content-type:text/xml');
   //$wechat->msgImage(2);
