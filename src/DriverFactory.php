<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-4
 * description:
 */


namespace lyhiving\AI;


use lyhiving\AI\Exceptions\Exception;

class DriverFactory
{

    /**
     * @param $name
     * @param $config
     * @return mixed
     * @throws Exception
     */
    public static function make($name, $config)
    {
        $driver = __NAMESPACE__ . '\\Drivers\\' . ucfirst($name) . '\\' . ucfirst($name);

        if (class_exists($driver)) {
            return new $driver($config);
        }

        throw new Exception("driver [{$name}] not exist");

    }

}