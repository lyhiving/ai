<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 2019-01-02
 * description:
 */

namespace lyhiving\AI\Tests\Baidu;


class FacesetUserTest extends GatewayTest
{
    protected function gateway()
    {
        return 'faceset.user';
    }


    public function testGet()
    {
        $res = $this->gateway->get();
        $this->assertSuccess($res);
    }

    public function testAdd()
    {
        $res = $this->gateway->add();
        $this->assertSuccess($res);
    }


    public function testCopy()
    {
        $res = $this->gateway->copy('src','dest');
        $this->assertSuccess($res);
    }


    public function testDelete()
    {
        $res = $this->gateway->delete();
        $this->assertSuccess($res);
    }


}