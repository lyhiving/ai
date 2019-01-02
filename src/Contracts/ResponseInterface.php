<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-12
 * description:
 */

namespace lyhiving\AI\Contracts;

interface  ResponseInterface
{


    /**
     * @return bool
     */
    public function success();


    /**
     * @return string
     */
    public function getErrMsg();


}


