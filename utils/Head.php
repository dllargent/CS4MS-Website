<?php
/**
 * Created by PhpStorm.
 * User: Drew
 * Date: 10/20/20
 * Time: 15:04
 */

class Head
{
	private $title;
	private $stylesheets = [];
	private $scripts = [];

	public function __construct(string $title = null)
	{
		$this->title = $title ?? "CS4MS";
	}

	/*
	 * Takes in the name of a css file in styles to add a link tag to in the head
	 * Example: 'about' will add <link href="./styles/link.css"> to the head.
	 */
	public function addStyleSheet(string $filename)
	{
		$this->stylesheets[] = $filename;
	}

	public function addScript(string $filename)
	{
		$this->scripts[] = $filename;
	}

	public function getHtml(): string
	{
		$html = file_get_contents(__DIR__ . "/../components/head.html");
		$html = str_replace("%{TITLE}%", $this->title, $html);
		$html = str_replace("%{STYLESHEETS}%", $this->getStyleSheetsHtml(), $html);
		$html = str_replace('%{SCRIPTS}%', $this->getScriptsHtml(), $html);
		return $html;
	}

	private function getStyleSheetsHtml(): string
	{
		$styleSheetsHtml = "";
		array_walk($this->stylesheets, function (string $sheetName) use (&$styleSheetsHtml) {
			$styleSheetsHtml .= $this->getStyleString($sheetName);
		});
		return $styleSheetsHtml;
	}

	private function getStyleString(string $sheetName): string
	{
		return "<link rel='stylesheet' href='./styles/$sheetName.css'>";
	}

	private function getScriptsHtml(): string
	{
		$scriptsHtml = "";
		array_walk($this->scripts, function (string $scriptName) use (&$scriptsHtml) {
			$scriptsHtml .= $this->getScriptString($scriptName);
		});
		return $scriptsHtml;
	}

	private function getScriptString(string $scriptName): string
	{
		return "<script src='./scripts/$scriptName.js'></script>";
	}

}