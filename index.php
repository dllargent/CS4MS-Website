<?php

require_once __DIR__ . "/utils/Head.php";
require_once __DIR__ . "/utils/Navbar.php";

$head = new Head("CS4MS");
$head->addStyleSheet('main');
echo $head->getHtml();

$navbar = new Navbar();
echo $navbar->getHtml();

include __DIR__ . "/pages/index.html";
include __DIR__ . "/components/footer.html";
