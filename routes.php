<?php

Route::get('logviewer', function()
{
	$storage = path('storage').'logs/';

	// get all the files
	$files = Logviewer\Dir::read($storage, array('.gitignore'));

	$date = Input::get('date', date('Y-m-d'));

	if ( ! is_file($storage.$date.'.log'))
	{
		$vars['log'] = 'No logs for today';
	}

	$file = File::get($storage.$date.'.log');
	$contents = explode("\n", $file);

	return View::make('logviewer::viewer')
		->with('contents', $contents)
		->with('files', $files);

});