<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-17
 * description:
 */

namespace lyhiving\AI\Drivers\Tencent\Gateways;


class Face extends AbstractTencentGateway
{


    /**
     * @return array
     */
    protected function resourcePath(): array
    {
        return ['face'];
    }

    /**
     * 人脸检测
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function detect(array $options = [])
    {
        return $this->send('face_detectface', $options);
    }


    /**
     * 多人脸检测
     * @param array $options
     * @return \lyhiving\AI\Drivers\Tencent\TencentResponse
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function multiDetect($options = [])
    {
        return $this->send('face_detectmultiface', $options);

    }

    /**
     * 人脸关键点定位
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function shape(array $options = [])
    {
        return $this->send('face_faceshape', $options);
    }


    /**
     * 跨年龄人脸识别
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function crossAge(array $options = [])
    {
        return $this->send('face_detectcrossageface', $options);
    }


    /**
     * 跨年龄人脸识别
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function compare(array $options = [])
    {
        return $this->send('face_facecompare', $options);
    }

    /**
     * 人脸验证
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function verify(array $options = [])
    {
        return $this->send('face_faceverify', $options);
    }


    /**
     * 人脸搜索
     * @param array $options
     * @return mixed
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function search(array $options = [])
    {
        return $this->send('face_faceidentify', $options);
    }


}