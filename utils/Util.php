<?php
/**
 * Created by PhpStorm.
 * User: Drew
 * Date: 11/19/20
 * Time: 09:18
 */

require_once __DIR__ . "/Head.php";

class Util
{
	public static function getPagePath() {
		$uri = $_SERVER['REQUEST_URI'];
		if (Head::getRoot() !== "/") {
            $uri = str_replace("\\", "/", $uri);
            $root = str_replace("\\", "/", Head::getRoot());
			$filepath = str_replace($root, "", urldecode($uri));
		} else {
			$filepath = urldecode($uri);
		}

		return __DIR__ . "/../pages/" . $filepath;
	}

}
