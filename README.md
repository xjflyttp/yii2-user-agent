# yii2-user-agent
    https://github.com/donatj/PhpUserAgent

## composer.json
```json
"require": {
    "xj/yii2-user-agent": "~1.0.0"
}
```

## Usage
```php
//A
var_dump(\xj\ua\UserAgent::model()->getAttributes());

//B
$userAgent = \xj\ua\UserAgent::model();
/* @var \xj\ua\UserAgent $userAgent */
$platform = $userAgent->platform;
$browser = $userAgent->browser;
$version = $userAgent->version;
$uaAttributes =  $userAgent->getAttributes(); // OR $userAgent->attributes
var_dump($platform, $browser, $version, $uaAttributes);

```