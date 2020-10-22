<?php

require_once __DIR__ . "/utils/Head.php";
require_once __DIR__ . "/utils/Navbar.php";

$head = new Head("Standards");
$head->addStyleSheet('main');
$head->addScript('sidebar-scroll');
echo $head->getHtml();

$navbar = new Navbar();
echo $navbar->getHtml();

echo file_get_contents(__DIR__ . "/pages/standards.html");
echo file_get_contents(__DIR__ . "/components/footer.html");
