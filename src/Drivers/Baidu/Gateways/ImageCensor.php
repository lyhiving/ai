<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-4
 * description:
 */

namespace lyhiving\AI\Drivers\Baidu\Gateways;


class ImageCensor extends AbstractBaiduGateway
{


    /**
     * @return array
     */
    public function resourcePath(): array
    {
        return [
            'rest', '2.0', 'antiporn', 'v1'
        ];
    }
    

    /**
     * @param array $options
     * @return array
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function detect($options = [])
    {
        return $this->send('detect', $options);
    }


    /**
     * @param array $options
     * @return array
     * @throws \lyhiving\AI\Exceptions\Exception
     */
    public function detectGif($options = [])
    {
        return $this->send('detect_gif', $options);
    }


}