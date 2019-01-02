<?php
/**
 * author: lyhiving
 * email: lyhiving@gmail.com
 * date: 18-12-5
 * description:
 */


namespace lyhiving\AI\Tests\Baidu;


class AuthTest extends BaseTest
{

    public function testGetAccessToken()
    {
        $this->driver->getAccessToken();
        $this->assertNotEmpty($this->driver->accessToken);
    }
}