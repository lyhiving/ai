<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-25
 * description:
 */

namespace lyhiving\AI\Drivers\Baidu\Gateways;


class Body extends AbstractBaiduGateway
{


    public function resourcePath(): array
    {
        return [
            'rest', '2.0', 'image-classify', 'v1'
        ];
    }

    public function headers()
    {
        return [
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
    }

}