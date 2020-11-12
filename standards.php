<?php

require_once __DIR__ . "/utils/Head.php";
require_once __DIR__ . "/utils/Navbar.php";

$head = new Head("Standards");
$head->addStyleSheet('main');
$head->addScript('toggleActive');
echo $head->getHtml();

$navbar = new Navbar();
echo $navbar->getHtml();

$uri = $_SERVER['REQUEST_URI'];
$filepath = str_replace(Head::getRoot(), "", urldecode($uri));

include __DIR__ . "/pages/" . $filepath;
include __DIR__ . "/components/footer.html";
