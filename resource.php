<?php

require_once __DIR__ . "/utils/Head.php";
require_once __DIR__ . "/utils/Navbar.php";
require_once __DIR__ . "/utils/Util.php";

$head = new Head("Resources");
$head->addStyleSheet('main');
$head->addScript('sidebar-scroll');
$head->addScript('search');
echo $head->getHtml();


$navbar = new Navbar();
$navbar->addSearchBar();
echo $navbar->getHtml();
include Util::getPagePath();
include __DIR__ . "/components/footer.html";

