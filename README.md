PassSlot PHP SDK (v.0.1)

[PassSlot](http://www.passslot.com) is a Passbook service that makes Passbook usage easy for everybody. It helps you design and distribute mobile passes to all major mobile platforms.

This repository contains the open source PHP SDK that allows you to
access PassSlot from your PHP app. Except as otherwise noted,
the PassSlot PHP SDK is licensed under the Apache Licence, Version 2.0
(http://www.apache.org/licenses/LICENSE-2.0.html).

Usage
-----

The [examples](examples/example.php) are a good place to start. The minimal you'll need to
have is:
```php
require 'passslot-php-sdk/src/PassSlot.php';

$engine = PassSlot::start('<YOUR APP KEY>');
$pass = $engine->createPassFromTemplate(<Template ID>);
$engine->redirectToPass($pass);
```
(Assuming you have already setup a template that does not require any values)