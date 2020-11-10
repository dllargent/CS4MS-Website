<?php
/**
 * Created by PhpStorm.
 * User: Drew
 * Date: 11/9/20
 * Time: 20:16
 */

namespace cs4ms\components\navbar;

require_once __DIR__ . "/Directory.php";
require_once __DIR__ . "/File.php";

class Dropdown
{
	/**
	 * @var Directory
	 */
	public $pageDirectory;

	public function __construct(string $page)
	{
		$this->pageDirectory = new Directory(__DIR__ . "/../../pages/$page");
	}

	public function getHtml()
	{
		return $this->formHtml();
	}

	private function formHtml()
	{
		$html = "<ul class='dropdown'>";

		$files = $this->pageDirectory->files;
		foreach ($files as $file) {
			$html .= $this->formHtmlForFile($file);
		}

		$directories = $this->pageDirectory->directories;
		foreach ($directories as $directory) {
			$html .= $this->formHtmlForDirectory($directory);
		}

		$html .= "</ul>";
		return $html;
	}

	private function formHtmlForFile(File $file)
	{
		$url = $file->getUrl();
		$html = "<li class='w3-hover-white'>";
		$html .= "<a class='w3-bar-item w3-button w3-hide-small w3-hide-medium w3-padding-large' href='$url'>
                            {$file->name}
                      </a>";
		$html .= "</li>";
		return $html;
	}

	private function formHtmlForDirectory(Directory $directory)
	{
		$html = "<li class='w3-hover-white'>";
		$html .= "<a class='w3-bar-item w3-button w3-hide-small w3-hide-medium w3-padding-large' href='#'>
                            {$directory->name}
                      </a>";

		if ($directory->directories || $directory->files) {
			$html .= "<ul class='dropright'>";

			$files = $directory->files;
			foreach ($files as $file) {
				$html .= $this->formHtmlForFile($file);
			}

			foreach ($directory->directories as $directory) {
				$html .= $this->formHtmlForDirectory($directory);
			}
			$html .= "</ul>";
		}
		$html .= "</li>";
		return $html;
	}

}
