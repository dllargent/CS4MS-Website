<?php

require_once __DIR__ . "/utils/Head.php";
require_once __DIR__ . "/utils/Navbar.php";

$head = new Head("Resources");
$head->addStyleSheet('main');
$head->addScript('sidebar-scroll');
$head->addScript('search');
echo $head->getHtml();


$navbar = new Navbar();
$navbar->addSearchBar();
echo $navbar->getHtml();
include __DIR__ . "/pages/resource.html";
include __DIR__ . "/components/footer.html";

