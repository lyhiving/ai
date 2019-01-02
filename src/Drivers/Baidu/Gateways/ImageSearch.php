<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-4
 * description:
 */


namespace lyhiving\AI\Drivers\Baidu\Gateways;


class ImageSearch extends AbstractBaiduGateway
{

    public function resourcePath(): array
    {

        return [
            'rest', '2.0', 'realtime_search'
        ];
    }


    public function headers()
    {
        return [
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
    }
    
}