yii2-widget-nav
===============
The Nav widget for Yii2.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ipaya/yii2-widget-nav "*"
```

or add

```
"ipaya/yii2-widget-nav": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

In Controller:
```php
<?php

\iPaya\widgets\nav\Nav::setNavItems('main', [
    ['label'=>'首页','url'=>Yii::$app->homeUrl],
    ['label'=>'关于','url'=>['/site/about']]
]);
```

In View:
```php
<?= \iPaya\widgets\nav\Nav::widget([
    'items'=>'main',
]); ?>```