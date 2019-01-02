<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-17
 * description:
 */

namespace lyhiving\AI\Drivers\Tencent\Gateways;


class FacesetGroup extends AbstractTencentGateway
{

    public function resourcePath(): array
    {
        return ['face'];
    }


    /**
     * 组列表查询
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function get(array $options = [])
    {
        return $this->send('face_getgroupids', $options);

    }

    /**
     * 获取个体列表
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function users(array $options = [])
    {
        return $this->send('face_getpersonids', $options);
    }


}