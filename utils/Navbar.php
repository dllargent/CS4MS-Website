<?php
/**
 * Created by PhpStorm.
 * User: Drew
 * Date: 10/22/20
 * Time: 14:18
 */

class Navbar
{
	private $hasSearchBar = false;

	public function addSearchBar()
	{
		$this->hasSearchBar = true;
	}

	public function getHtml(): string
	{
		$html = file_get_contents(__DIR__ . "/../components/navbar.html");
		$html = str_replace("%{SEARCH}%",
			$this->hasSearchBar
				? file_get_contents(__DIR__ . "/../components/search-bar.html")
				: "",
			$html);
		return $html;
	}

}