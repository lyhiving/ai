<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-17
 * description:
 */

namespace lyhiving\AI\Drivers\Tencent\Gateways;


class Faceset extends AbstractTencentGateway
{


    public function resourcePath(): array
    {
        return ['face'];
    }

    /**
     * 增加人脸
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function add(array $options = [])
    {
        return $this->send('face_addface', $options);
    }


    /**
     * 删除人脸
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function delete(array $options = [])
    {
        return $this->send('face_delface', $options);
    }


    /**
     * 获取人脸信息
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function get(array $options = [])
    {
        return $this->send('face_getfaceinfo', $options);
    }


}