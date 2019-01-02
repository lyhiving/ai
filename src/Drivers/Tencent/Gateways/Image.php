<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-17
 * description:
 */

namespace lyhiving\AI\Drivers\Tencent\Gateways;


class Image extends AbstractTencentGateway
{

    public function resourcePath(): array
    {
        return ['image'];
    }


    /**
     * 模糊图片识别
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function fuzzy(array $options = [])
    {
        return $this->send('image_fuzzy', $options);
    }


    /**
     * 食物识别
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function food(array $options = [])
    {
        return $this->send('image_food', $options);
    }

    /**
     * 图片标签识别
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function tag(array $options = [])
    {
        return $this->send('image_tag', $options);
    }


    /**
     * 暴恐图片识别
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function terrorism(array $options = [])
    {
        return $this->send('image_terrorism', $options);
    }

}