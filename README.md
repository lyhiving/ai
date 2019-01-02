# 优雅的AI客户端调用

官方的sdk用起来的感觉实在是太忧伤了,换一种更好的调用方式吧。



## 特点

- 优雅的调用方式
- 仅支持php 7.0以上版本
- 参数兼容原生接口
- 隐藏了开发者不需要关注的细节
- 高度抽象的类
- 符合psr4标准 方便集成到各种项目中

## 支持的平台

- 百度AI平台
- 腾讯AI平台

## 安装

~~~
composer require  "lyhiving/ai":"^1.0.0"
~~~

## 使用示例

~~~php

use lyhiving\AI\AI;

...

//百度ai
$baiduConfig = [
     'app_id' => 'your appid',
     'api_key' => 'your api key',
     'secret_key' => 'your secret key'
];
$ai = AI::baidu($baiduConfig);
//腾讯ai
$tencentConfig = [
     'app_id' => 'your appid',
     'app_key' => 'your secret id',
];
$ai = AI::tencent($tencentConfig);

// 图片检索
$url = 'http://aip.bdstatic.com/portal/dist/1543924308745/ai_images/logo.png';
$res = 	$ai->face()->url($url)->detect();
if($res->success()){
    var_dump($res->toArray())
}else{
    var_dump($res->getErrMsg());
}
~~~


## LICENSE

[MIT](LICENSE)

## 说明

这个包主要来自于[Crisen](https://github.com/crisenchou/ai)，我这边主要是项目中有用到，主要是有部分要修改的，也顺道接入AI。原版权还是[Crisen](https://github.com/crisenchou/ai)。

当然，[Huanghe](https://github.com/huanghe/ai) 这款会更齐全，可惜百度AI只支持V2。为了节省宝贵的流量，我不能在应用服务器直接base64扔过去，还是用了OSS做中转。
