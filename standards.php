<?php

require_once __DIR__ . "/utils/Head.php";
require_once __DIR__ . "/utils/Navbar.php";
require_once __DIR__ . "/utils/Util.php";

$head = new Head("Standards");
$head->addStyleSheet('main');
echo $head->getHtml();

$navbar = new Navbar();
echo $navbar->getHtml();
echo "<div class='standards-wrapper'>";
include Util::getPagePath();
echo "</div>";
include __DIR__ . "/components/footer.html";
