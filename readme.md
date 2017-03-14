# php-sms-freemobile

This library allows one to play with Free (French Phone Provider) SMS Service. Cool to send yourself code notifications or to send your friends SMS from your computer. 

[![Build Status](https://travis-ci.org/hugsbrugs/php-sms-freemobile.svg?branch=master)](https://travis-ci.org/hugsbrugs/php-sms-freemobile)
[![Coverage Status](https://coveralls.io/repos/github/hugsbrugs/php-sms-freemobile/badge.svg?branch=master)](https://coveralls.io/github/hugsbrugs/php-sms-freemobile?branch=master)

## Install

Install package with composer
```
composer require hugsbrugs/php-sms-freemobile
```

In your PHP code, load library
```php
require_once __DIR__ . '/../vendor/autoload.php';
use Hug\Sms\Sms as Sms;

$sms = new Sms();
$sms->setKey("YOUR_KEY")->setUser("YOUR_USER");
 
try
{
    # Send Message
    $sms->send("Hello World !");
}
catch (Exception $e)
{
	# Catch Possible Errors
    echo "Erreur sur envoi de SMS: (".$e->getCode().") ".$e->getMessage();
}
```

## Unit Tests

```
composer exec phpunit
```