# Log Viewer

A simple bundle to display your Laravel 3 log files.

If you are using Laravel 4 please look at this repo: 
https://github.com/mikemand/logviewer


## Installation

```bsh
php artisan bundle:install logviewer
```

## Publish assets
```bsh
php artisan bundle:publish logviewer
```

Then edit your application/bundles.php file and add:

```php
return array(
	'logviewer' => array(
		'location' => 'logviewer',
		'handles' => 'logviewer'
	)
);
```

