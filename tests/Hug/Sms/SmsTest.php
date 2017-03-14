<?php

# For PHP7
// declare(strict_types=1);

// namespace Hug\Tests\Sms;

use PHPUnit\Framework\TestCase;

use Hug\Sms\Sms as Sms;

/**
 * http://stackoverflow.com/questions/27216002/best-way-to-test-an-api-in-phpunit-without-revealing-private-credentials
 */
final class SmsTest extends TestCase
{

    /* ************************************************* */
    /* ******************* Sms::send ******************* */
    /* ************************************************* */

    /**
     *
     */
    public function testCanSendSms()
    {
        $this->expectException(Exception::class);

        $sms = new Sms();
        $sms->setKey("YOUR_KEY")->setUser("YOUR_USER");
        $test = $sms->send("Test SMS from Travis.ci hugsbrugs/php-sms");
        // $this->assertInternalType(Sms::class, $test);
    }


    /**
     *
     */
    public function testCannotSendSms()
    {
        $this->expectException(Exception::class);

        $sms = new Sms();
        $sms->setKey("caca")->setUser("boudin");
        $test = $sms->send("Hello World !");
        // $this->assertInternalType(Sms::class, $test);
    }

}
