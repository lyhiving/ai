<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 2019-01-02
 * description:
 */

namespace lyhiving\AI\Tests\Baidu;


class FacesetGroupTest extends GatewayTest
{

    protected function gateway()
    {
        return 'faceset.group';
    }
    
    public function testGet()
    {
        $this->assertSuccess($this->gateway->get());
    }

    public function testAdd()
    {
        $this->assertSuccess($this->gateway->add());
    }


    public function testDelete()
    {
        $this->assertSuccess($this->gateway->delete());
    }
}