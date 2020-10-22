<?php

require_once __DIR__ . "/utils/Head.php";

$head = new Head("Course");
$head->addStyleSheet('main');
$head->addScript('sidebar-scroll');
echo $head->getHtml();


echo file_get_contents(__DIR__ . "/components/navbar.html");
echo file_get_contents(__DIR__ . "/pages/course.html");
echo file_get_contents(__DIR__ . "/components/footer.html");

