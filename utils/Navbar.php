<?php
/**
 * Created by PhpStorm.
 * User: Drew
 * Date: 10/22/20
 * Time: 14:18
 */

require_once __DIR__ . "/../components/navbar/Dropdown.php";

use cs4ms\components\navbar\Dropdown;

class Navbar
{
	private $hasSearchBar = false;
	private $html;

	public function addSearchBar()
	{
		$this->hasSearchBar = true;
	}

	public function getHtml(): string
	{
		$this->html = file_get_contents(__DIR__ . "/../components/navbar/navbar.html"); 
		$this->html = str_replace("%{SEARCH}%",
			$this->hasSearchBar
				? file_get_contents(__DIR__ . "/../components/navbar/search-bar.html")
				: "",
			$this->html);
		return $this->html;
	}

}
