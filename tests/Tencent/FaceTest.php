<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-17
 * description:
 */

namespace lyhiving\AI\Tests\Tencent;


class FaceTest extends AbstractGatewayTest
{

    protected function gateway()
    {
        return 'face';
    }


    public function testDetect()
    {
        $base64Code = $this->imageBase64Code();
        $res = $this->gateway->base64($base64Code)->detect(['mode' => 0]);
        $this->assertSuccess($res);
    }


    public function testMultiDetect()
    {
        $base64Code = $this->imageBase64Code();
        $res = $this->gateway->base64($base64Code)->multiDetect();
        $this->assertSuccess($res);
    }

    public function testShape()
    {
        $base64Code = $this->imageBase64Code();
        $res = $this->gateway->base64($base64Code)->shape(['mode' => 0]);
        $this->assertSuccess($res);
    }


    public function testCrossAge()
    {
        $base64Code = $this->imageBase64Code();
        $res = $this->gateway->crossAge([
            'source_image' => $base64Code,
            'target_image' => $base64Code
        ]);
        $this->assertSuccess($res);
    }

    public function testCompare()
    {
        $base64Code = $this->imageBase64Code();
        $res = $this->gateway->compare([
            'source_image' => $base64Code,
            'target_image' => $base64Code
        ]);
        $this->assertSuccess($res);
    }

    public function testVerify()
    {
        $base64Code = $this->imageBase64Code();
        $res = $this->gateway->base64($base64Code)->verify([
            'mode' => 0,
            'persion_id' => $this->user
        ]);
        $this->assertSuccess($res);
    }

    public function testSearch()
    {
        $base64Code = $this->imageBase64Code();
        $res = $this->gateway->base64($base64Code)->search([
            'group_id' => $this->group,
            'topn' => 9
        ]);
        $this->assertSuccess($res);
    }


}