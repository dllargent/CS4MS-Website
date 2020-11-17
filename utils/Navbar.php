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

	public function addSearchBar()
	{
		$this->hasSearchBar = true;
	}

	public function getHtml(): string
	{
		$html = file_get_contents(__DIR__ . "/../components/navbar/navbar.html");
		$dropdown = new Dropdown('standards');
		$html = str_replace("%{STANDARDS_DROPDOWN}%", $dropdown->getHtml(), $html);
		$html = str_replace("%{SEARCH}%",
			$this->hasSearchBar
				? file_get_contents(__DIR__ . "/../components/navbar/search-bar.html")
				: "",
			$html);
		return $html;
	}

}
