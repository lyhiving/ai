<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 2019-01-02
 * description:
 */


namespace lyhiving\AI\Tests\Baidu;


abstract class GatewayTest extends BaseTest
{
    protected $gateway;


    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->gateway = $this->driver->gateway($this->gateway());
    }


    abstract protected function gateway();
}