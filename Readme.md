# Readme ext:phpunitexample

This is a simple TYPO3 demo extension created with 
[ext:extension_builder](https://github.com/FriendsOfTYPO3/extension_builder).
After creation the auto generated Test files was manualy changed to use 
[typo3/testing-framework](https://packagist.org/packages/typo3/testing-framework).


* To run the test change on console into this extension folder use following command:
```
$ ../../../../bin/phpunit
```
> The example was used in combination with an composer based TYPO3 installation. Paths can vary!

* To run tests within PHPStorm take a look into this [TYPO3 playground repository](https://github.com/samowitsch/typo3-playground)

## changing notes to auto generated [ext:extension_builder](https://github.com/FriendsOfTYPO3/extension_builder) files

* removed following part from auto generated composer.json
```
    "require": {
        "typo3/cms-core": "^8.7.1"
    },
```
* changed auto generated test files to use [typo3/testing-framework](https://packagist.org/packages/typo3/testing-framework)
```php
...
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
...
class BarControllerTest extends UnitTestCase
...
```