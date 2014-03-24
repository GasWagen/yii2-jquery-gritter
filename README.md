Yii 2 jQuery Gritter Extension
==============================

Installation
------------
Add in `composer.json`:
```
{
    "require": {
        "rmrevin/yii2-jquery-gritter": "1.1.*"
    },
    "repositories": [
    	{
    		"type": "package",
    		"package": {
    			"name": "jboesch/gritter",
    			"version": "dev-master",
    			"source": {
    				"type": "git",
    				"url": "http://github.com/jboesch/Gritter",
    				"reference": "master"
    			}
    		}
    	}
    ]
}
```

Usage
-----
In view
```php
<?
// ...

rmrevin\yii\jquery\gritter\AssetBundle::register($this);

```

od as dependency in your asset bundle
```php
<?
// ...

class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\rmrevin\yii\jquery\gritter\AssetBundle'
	];
}

```