<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-4
 * description:
 */


namespace lyhiving\AI\Drivers\Baidu\Gateways;


class Nlp extends AbstractBaiduGateway
{
    public function resourcePath(): array
    {

        return [
            'rpc', '2.0', 'nlp','v1'
        ];
    }

}