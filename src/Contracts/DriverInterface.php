<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-4
 * description:
 */


namespace lyhiving\AI\Contracts;


interface  DriverInterface
{


    /**
     * choose which gateway
     * @param $name
     * @return mixed
     */
    public function gateway($name);


}