<?php

require_once __DIR__ . "/utils/Head.php";

$head = new Head("About Us");
$head->addStyleSheet('main');
echo $head->getHtml();

echo file_get_contents(__DIR__ . "/components/navbar.html");
echo file_get_contents(__DIR__ . "/pages/about.html");
echo file_get_contents(__DIR__ . "/components/footer.html");

