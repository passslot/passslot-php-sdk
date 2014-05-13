PassSlot PHP SDK (v.0.3.1)

This is a forked version of [PassSlot SDK](https://github.com/passslot/passslot-php-sdk).

This version add a lot of new methods to implements basic usage of PassSlot API.

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


Installing the SDK using Composer
-----

Sample configuration

```json
{
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "Kevin/passslot-sdk",
                "version": "0.3.1",
                "source": {
                    "url": "https://github.com/kevin39/passslot-php-sdk.git",
                    "type": "git",
                    "reference": "0.3.1"
                },
                "autoload": {
                    "classmap": ["src/"]
                }
            }
        }
    ],
    "require": {
        "Kevin/passslot-sdk": "0.3.*"
    }
}
````
