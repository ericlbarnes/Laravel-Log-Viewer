<?php namespace Logviewer;

class Dir {


	/**
	 * Read a directory into an array
	 *
	 * @access public
	 * @static
	 * @param  string $dir  full path to directory
	 * @param  array  $ignore files/directories to skip
	 * @return mixed  FALSE on failure, array on success
	 */
	static public function read($dir, $ignore = array())
	{
		$files = scandir($dir);
		$dir_contents = array();
		foreach ($files as $file)
		{
			if ($file == '.' OR $file == '..')
			{
				continue;
			}
			// Ignore files specified
			if ( ! in_array($file, $ignore))
			{
				$dir_contents[] = $file;
			}
		}
		return $dir_contents;
	}
}