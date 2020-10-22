<?php
require_once __DIR__ . "/utils/Head.php";

$head = new Head("CS4MS");
$head->addStyleSheet('main');
echo $head->getHtml();

echo file_get_contents(__DIR__ . "/components/navbar.html");
echo file_get_contents(__DIR__ . "/pages/index.html");
echo file_get_contents(__DIR__ . "/components/footer.html");
