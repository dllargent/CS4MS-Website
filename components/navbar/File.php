<?php
/**
 * Created by PhpStorm.
 * User: Drew
 * Date: 11/9/20
 * Time: 20:36
 */

namespace cs4ms\components\navbar;

use Head;

class File
{
	public $path;
	public $name;

	public function __construct(string $path)
	{
		$this->path = $path;
		$this->setNameFromPath($path);
	}

	public function getUrl()
	{
		$path = realpath($this->path);
		// Remove Base
		$path = str_replace(realpath(__DIR__ . "/../.."), "", $path);
		$path = str_replace('\\', '/', $path);
		return str_replace("/pages/", "", $path);
	}

	private function setNameFromPath(string $path)
	{
		$this->name = basename($path, ".html");
	}

}
