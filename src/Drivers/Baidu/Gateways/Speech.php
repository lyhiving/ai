<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-4
 * description:
 */


namespace lyhiving\AI\Drivers\Baidu;


use lyhiving\AI\Drivers\Baidu\Gateways\AbstractBaiduGateway;


class Speech extends AbstractBaiduGateway
{


    public function resourcePath(): array
    {
        return [
            'rest', '2.0', 'image-classify', 'v3'
        ];
    }
    
}