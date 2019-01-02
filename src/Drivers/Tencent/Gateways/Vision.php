<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-20
 * description:
 */

namespace lyhiving\AI\Drivers\Tencent\Gateways;


class Vision extends AbstractTencentGateway
{

    public function resourcePath(): array
    {
        return ['vision'];
    }


    /**
     * 滤镜
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function imgFilter($options = [])
    {
        return $this->send('vision_imgfilter', $options);
    }

    /**
     * 看图说话
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function imgToText($options = [])
    {
        return $this->send('vision_imgtotext', $options);
    }


    /**
     * 场景识别
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function scener($options = [])
    {
        return $this->send('vision_scener', $options);
    }

    /**
     * 物体识别
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function object($options = [])
    {
        return $this->send('vision_objectr', $options);
    }

    /**
     * 图片鉴黄
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function porn($options = [])
    {
        return $this->send('vision_porn', $options);
    }


}