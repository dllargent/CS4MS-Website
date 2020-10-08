﻿<?php
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<title>Resources</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Abel">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="icon.ico">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-28932854-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-28932854-3');
</script>

<!-- CSS for Classes -->
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.footer {min-height: 125px;left: 0;right: 0; overflow: auto;
}
.documentRef:hover {color: #a6001a;}
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 50px;
  left: -160px;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  transition: left 0.5s;
}

.sidenav a {
  padding: 10px 8px 6px 10px;
  position: relative;
  top: 30px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: #C22E2E;
}

@media screen and (max-width: 600px) {
  .searchdiv {
    max-width: 200px;
    margin-right: 70px;
  }
}
@media screen and (max-width: 1050px) {
  .searchdiv {
    max-width: 200px;
  }
}

</style>
<body>

HTML;

echo file_get_contents(__DIR__ . "/components/navbar.html");

echo <<<HTML

<!-- Header -->
<header class="w3-display-container w3-highway-red w3-center w3-animate-top" style="padding:80px 16px; animation-duration: 1s">
  <h1>Resources</h1>
  <p class="w3-xlarge" style="padding: 0 60px 0 60px">A compilation of various types of resources to assist teaching computer science to middle 
    school students. Includes presentation slides, worksheets, lesson plans and information on the official Indiana Computer Science Standards.</p>
</header>

<!-- SideNav -->
<div id="sidenav" class="sidenav" style="animation-duration: 1s">
  <a href="#activitiesAnchor">Activities</a>
  <a href="#activitiesAnchor">Lesson Plans</a>
  <a href="#slidesAnchor">Slides</a>
  <a href="#worksheetsAnchor">Worksheets</a>
  <a href="#compilationAnchor">Compilations</a>
</div>

<!-- Activites -->
<div id="activitiesAnchor"></div>
<h1 class="w3-center w3-padding-large" style="margin-top: 40px;">Activites</h1>
  <ul id="myMenu2" class="w3-row-padding w3-margin-top w3-animate-left" style="animation-duration: 1s; margin-bottom: 3em; list-style: none">
    <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
        <i class="fa fa-file w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
        <a href="docs/DifferenceActivity.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
          <h2>Difference between Humans and Computers</h2>
        </a>
    </li>
     <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
        <i class="fa fa-file w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
        <a href="docs/EduVideoGames.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
          <h2>Educational Video Games</h2>
        </a>
    </li>
    <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
        <i class="fa fa-file w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
        <a href="https://www.khanacademy.org/computing/computer-programming/programming" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
          <h2>Khan Academy</h2>
        </a>
    </li>
    <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
        <i class="fa fa-file w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
        <a href="docs/NetworkingActivity.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
          <h2>Networks</h2>
        </a>
    </li>
    <li class=" w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
        <i class="fa fa-file w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
        <a href="docs/HamburgerActivity.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
          <h2>Parallelization</h2>
        </a>
    </li>
     <li class=" w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
        <i class="fa fa-file w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
        <a href="docs/GymActivities.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
          <h2>Physical Education</h2>
        </a>
    </li>
      <div id="lessonsAnchor"></div>
  </ul>

<!-- Lesson Plans-->
<div id="lessonsAnchor"></div>
<h1 class="w3-center w3-padding-large" style="margin-top: 40px;">Lesson Plans</h1>
<ul id="myMenu2" class="w3-row-padding w3-margin-top w3-animate-left" style="animation-duration: 1s; margin-bottom: 3em; list-style: none">
    <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
        <i class="fa fa-file w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
        <a href="docs/BrainPopLesson.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
            <h2>Brain Pop Lesson Plan</h2>
        </a>
    </li>
    <li class=" w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
        <i class="fa fa-file w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
        <a href="docs/HowComputersThinkLessonPlan.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
            <h2>How Computers Think Lesson Plan</h2>
        </a>
    </li>
    <li class=" w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
        <i class="fa fa-file w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
        <a href="docs/InternetSafetyLessonPlan.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
            <h2>Internet Safety Lesson Plan</h2>
        </a>
    </li>
    <div id="slidesAnchor"></div>
</ul>


<!-- Slides -->
<div id="slidesAnchor"></div>
<h1 class="w3-center w3-padding-large" style="margin-top: 40px;">PowerPoint Slides</h1>
<ul id="myMenu1" class="w3-row-padding w3-margin-top w3-animate-left" style="animation-duration: 1s; list-style: none">
  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa-file-powerpoint-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/BinarySlides.pptx" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Binary</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa-file-powerpoint-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/AbstractionHierarchySlides.pptx" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Abstraction and Hierarchy</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa-file-powerpoint-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/IntroComputersSlides.pptx" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Intro to Computers</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa-file-powerpoint-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/CompoundConditionalsSlides.pptx" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Compound and Conditionals</h2>
      </a>
  </li>
  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa-file-powerpoint-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/HowComputersThinkSlides.pptx" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>How Computers Think</h2>
      </a>
  </li>
  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa-file-powerpoint-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/InternetSafetySlides.pptx" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Internet Safety Slides</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa-file-powerpoint-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/TroubleshootingSlides.pptx" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Troubleshooting</h2>
      </a>
  </li>
  <div id="worksheetsAnchor"></div>
</ul>



<!-- WorkSheets -->
<h1 class="w3-center w3-padding-large">Worksheets</h1>
<ul id="myMenu" class="w3-row-padding w3-margin-top w3-animate-left" style="animation-duration: 1s; list-style: none">
   <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa fa-file-pdf-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/BinaryWorksheet.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Binary</h2>
      </a>
  </li> 

   <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa fa-file-pdf-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/CompoundConditionals.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Compound Conditionals</h2>
      </a>
  </li>  

   <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa fa-file-pdf-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/DrawingAlgorithms.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Drawing Algorithms</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa fa-file-pdf-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/HamburgerWorksheet.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Hamburger</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa fa-file-pdf-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/LogicGates.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Logic Gates</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa fa-file-pdf-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/TechnologyImpact.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Technology Impact</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa fa-file-pdf-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/Trees.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Trees</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa fa-file-pdf-o w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/Troubleshooting.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Troubleshooting</h2>
      </a>
  </li>
</ul>


<!--Compilations-->
<div id="compilationAnchor"></div>
<h1 class="w3-center w3-padding-large" style="margin-top: 40px;">Compilations of Standards or Resources</h1>
<ul id= "myMenu3" class="w3-row-padding w3-margin-top w3-animate-left" style="animation-duration: 1s; margin-bottom: 3em; list-style: none">
   <li class=" w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
      <i class="fa fa fa-book w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
      <a href="docs/StandardsResources.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
        <h2>Compilation of Standards</h2>
      </a>
  </li>

  <li class="w3-container w3-animate-left w3-card" style="margin: auto;animation-duration: 1s;max-height: 100px; max-width: 73%;">
    <i class="fa fa fa-book w3-margin-bottom w3-text-theme w3-padding-large" style="font-size:40px; color: #a6001a; margin-top: 17px"></i>
    <a href="docs/ResourcesCompilation.pdf" class="documentRef w3-display-left" style="text-decoration: none; margin-left: 125px" target="_blank">
      <h2>Compilation of Resources</h2>
    </a>
  </li>
</ul>


<footer class="footer w3-container" style="background-color: #111">
    <div class="w3-third">  
      <p style="color: #C4C4C4; margin-left: 175px">
        <a href="mailto:dllargent@bsu.edu" style="text-decoration: none">Mentored by: David Largent</a><br>
        <a href="mailto:wpenglish@bsu.edu" style="text-decoration: none">Developed by: William English</a><br>
        BSU CS4MS Team
      </p>
    </div>
    <div class="w3-third w3-center">
      <a href="http://www.bsu.edu" class="w3-col"><img src="images/bsu.png" style="height: 100px; margin-top: 8px"></a>
    </div>
    <div class="w3-third">
      <p align = "left" style ="color: #C4C4C4; font-size: 13px">NOTICE: The information presented on this page represents the personal views, 
        ideas, and opinions of the author. This is not an official Ball State University web page. Links contained in this web site to other 
        organizations are presented as a service and neither constitute nor imply university endorsement or warranty.</p>
    </div>
</footer>




<script>
// Used to toggle the menu on small screens when clicking on the menu button
function menuToggle() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

//Used as a search bar. Will remove elements that don't have the charcater put in the search bar
function searching() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu1");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu2");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu3");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

// Used to shift the sideNavbar over when the page scrolls past 250. Also stops it from showing when screen is small
var x = window.matchMedia("(min-width: 700px)")
window.onscroll = function() {scrollFunction(x)};
function scrollFunction(x) {
  var width = Math.max(window.screen.width, window.innerWidth); 
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250 && x.matches) {
    document.getElementById("sidenav").style.left = "0";
    document.getElementById("shiftDIV").style.marginLeft = "200px";
  } else {
    document.getElementById("sidenav").style.left = "-160px";
    document.getElementById("shiftDIV").style.marginLeft = "20px";
  }
  if (window.innerWidth < 500) {
  document.getElementById("sidenav").style.left = "-160px";
  document.getElementById("shiftDIV").style.marginLeft = "20px";
  }
}
x.addListener(scrollFunction)
</script>

</body>
</html>
HTML;