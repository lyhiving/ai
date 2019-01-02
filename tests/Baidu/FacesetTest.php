<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 2019-01-02
 * description:
 */


namespace lyhiving\AI\Tests\Baidu;

use lyhiving\AI\Drivers\Baidu\Gateways\AbstractBaiduGateway;

class FacesetTest extends GatewayTest
{
    protected function gateway()
    {
        return 'faceset';
    }

    public function testGet()
    {
        $res = $this->gateway->get();
        $this->assertSuccess($res);
    }


    public function testUsers()
    {
        $res = $this->gateway->users();
        $this->assertSuccess($res);
    }


    public function testDelete()
    {
        $res = $this->gateway->delete();
        $this->assertSuccess($res);
    }

    public function testStaticGateway()
    {
        $face = $this->driver->face();
        $this->assertInstanceOf(AbstractBaiduGateway::class, $face);
    }

}