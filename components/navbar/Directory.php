<?php
/**
 * Created by PhpStorm.
 * User: Drew
 * Date: 11/9/20
 * Time: 20:19
 */
namespace cs4ms\components\navbar;

class Directory
{
	public $path;
	public $name;

	/**
	 * @var Directory[]
	 */
	public $directories;

	public $files;

	public function __construct(string $path)
	{
		$this->path = $path;
		$this->setNameFromPath($path);
		$this->setContentsFromPath($path);
	}

	private function setNameFromPath(string $path)
	{
		$this->name = basename($path);
	}

	private function setContentsFromPath(string $path)
	{
		$contents = scandir($path);
		$contents = array_filter($contents, function ($content) {
			$blacklist = ['.', '..'];
			return !in_array($content, $blacklist);
		});
		$contents = array_map(function (string $name) {
			return $this->path . "/$name";
		}, $contents);
		$this->setDirectories($contents);
		$this->setFiles($contents);
	}

	private function setDirectories(array $contents)
	{
		$directories = array_filter($contents, function (string $content) {
			return is_dir($content);
		});
		$directories = array_map(function (string $directory) {
			return new Directory($directory);
		}, $directories);
		$this->directories = $directories;
	}

	private function setFiles(array $contents)
	{
		$files = array_filter($contents, function (string $content) {
			return is_file($content);
		});
		$files = array_map(function (string $file) {
			return new File($file);
		}, $files);
		$this->files = $files;
	}

}
