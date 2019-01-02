<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-17
 * description:
 */

namespace lyhiving\AI\Tests\Tencent;


class FacesetUser extends AbstractGatewayTest
{
    protected function gateway()
    {
        return 'faceset.user';
    }


    public function testAdd()
    {
        $res = $this->gateway->add([
            'group_ids' => $this->group,
            'person_id' => $this->user,
            'image' => $this->imageBase64Code(),
            'person_name' => 'lyhiving'
        ]);
        $this->assertSuccess($res);
    }


    public function testFaces()
    {
        $res = $this->gateway->faces([
            'person_id' => $this->user
        ]);
        $this->assertSuccess($res);
    }

    public function testGet()
    {
        $res = $this->gateway->get([
            'person_id' => $this->user
        ]);
        $this->assertSuccess($res);
    }

    public function testUpdate()
    {
        $res = $this->gateway->update([
            'person_id' => $this->user,
            'person_name' => 'lyhiving',
            'tag' => 'lyhiving-ai'
        ]);
        $this->assertSuccess($res);
    }


    public function testDelete()
    {
        $res = $this->gateway->update([
            'person_id' => $this->user
        ]);
        $this->assertSuccess($res);
    }

}