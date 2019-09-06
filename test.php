<?php
use FinanceSdk\FinanceCommonClient;

/**
 * Created by PhpStorm.
 * User: cy
 * Date: 2019/9/6
 * Time: 14:15
 */

$financeCommonClient = new FinanceCommonClient();
$host       = 'http://113.204.6.164:9103';                                  //接口地址
$path       = '/dataPlatform/sensetime/idcardOcr';                          //接口路径 换成自己的具体的路径
$code       = '1005001001';                                                 //接口编号  换成自己的具体的接口编号
$method     = 'POST';                                                       //请求方法
$appKey     = '6aaedrtyt233321f159d8021178c10abc8';                         //配置的key
$appSecret  = '6b3c555fff5cc4bd62fdd632a029dc5';                        //配置的秘钥
$signType   = 'SHA256';                                                 //加密类型
$params     = ['imageFile'=>'http://weipei.oss-cn-beijing.aliyuncs.com/weipeiapp/Uploads/pictures/assets/16bff1a18e7.jpg'];//键值对数组

$result     = $financeCommonClient->CommonRequest($host,$path,$code,$signType,$method,$appKey,$appSecret,$params);
var_dump($result);