﻿<?php
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<title>Standards</title>
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

#shiftDIV{
  transition: margin-left 0.5s;
}
.sidenav {

  height: 100%;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 50px;
  left: -180px;
  background-color: #111;
  padding-top: 20px;
  transition: left 0.5s;
}

.sidenav a {
  padding: 0px 8px 6px 10px;
  position: stretch;
  top: 30px;
  text-decoration: none;
  font-size: 16.5px;
  color: white;
  display: block;

}

.sidenav a:hover {
  color: #C22E2E;
}

.leftBound{
  left: 300px;

}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-highway-red w3-card w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-highway-red" href="javascript:void(0);" onclick="menuToggle()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="course" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Course</a>
    <a href="standards" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Standards</a>
    <a href="resource" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Resources</a>
    <a href="about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="index" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="course" class="w3-bar-item w3-button w3-padding-large">Course</a>
    <a href="standards" class="w3-bar-item w3-button w3-padding-large">Standards</a>
    <a href="resource" class="w3-bar-item w3-button w3-padding-large">Resources</a>
    <a href="about" class="w3-bar-item w3-button w3-padding-large">About Us</a>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-highway-red w3-center w3-animate-top" style="padding:80px 16px; animation-duration: 1s;">
  <h1>Indiana Grades 6-8 Computer Science Academic Standards</h1>
  <p class="w3-xlarge" style="padding: 0 60px 0 60px"></p>
</header>
<div id="Algorithms"></div>

<div id="sidenav" class="sidenav" style="animation-duration: 1s">
  <a href="#Algorithms">Algorithms</a>
  <a href="#Parallelization">Parallelization</a>
  <a href="#Data">Data</a>
  <a href="#Abstraction">Abstraction</a>
  <a href="#Computational">Computational Thinking</a>
  <a href="#Hardware">Hardware & Software</a>
  <a href="#Troubleshooting">Troubleshooting</a>
  <a href="#Networks">Networks</a>
  <a href="#Human">Human & Machine</a>
  <a href="#Tools">Tools & Resources</a>
  <a href="#Programming">Programming</a>
  <a href="#Problem">Problem Solving</a>
  <a href="#Collaborative">Collaborative Design</a>
  <a href="#Feedback">Feedback</a>
  <a href="#Legal">Legal & Ethical</a>
  <a href="#Impact">Impact</a>
  <a href="#Accuracy">Accuracy & Bias</a>
  <a href="#Access">Access</a>
</div>

<div id="shiftDIV">
  

  <h1 style="margin: 40px 0 0 20px">Algorithmic Problem-Solving</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 400px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
    	<b>Short Description</b>: Use the basic steps in algorithmic problem-solving to design solutions (e.g., problem statement and exploration, 
        examination of sample instances, design, implementing a solution, testing, and evaluation).<br><br>

     <b>Explanation For Teachers</b>: An algorithm is essentially a series of instructions used to complete a task. People use algorithms to 
        complete a wide range of tasks, specifically as the basis for writing computer programs. Students should learn how to use symbols to represent algorithms.
    </p>
    <a href="docs/StandardsResources.pdf#page=5" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Parallelization"></div>
  <h1 style="margin: 40px 0 0 20px">Parallelization</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
    <b>Short Description</b>: Describe the process of parallelization as it relates to problem solving.<br><br>
    <b>Explanation For Teachers</b>: Parallel computing is when we have a process that needs to do multiple tasks at the same time. We can use the 
        different cores of a processor to work on different tasks at the same time. Normally, instructions would be carried out in sequence, one at a time. 
        Parallelization is the process of dividing the process up into tasks that can be accomplished at the same time, so that the computer does not need 
        to wait as long to move on.
    </p>
    <a href="docs/StandardsResources.pdf#page=8" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Data"></div>
  <h1 style="margin: 40px 0 0 20px">Data</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
    <b>Short Description</b>: Represent data in various ways (e.g., numbers, text, pictures) and using visual representations of problems and data.<br><br>
    <b>Explanation For Teachers</b>: We collect data from samples, organize this data using graphs and charts, and then utilize statistical reasoning to make 
        conclusions about an entire population. Data is an important part of statistics.
    </p>
    <a href="docs/StandardsResources.pdf#page=10" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Abstraction"></div>
  <h1 style="margin: 40px 0 0 20px">Abstraction and Hierarchy</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
     <b>Short Description</b>: Understand the notion of hierarchy and abstraction in computing including high-level languages, translation, instruction set, 
        and logic circuits.<br><br>
     <b>Explanation For Teachers</b>: Abstraction: Computers at a hardware level are only able to understand binary expressions and all data (e.g., numbers, 
        characters) has to be represented using binary. The way in which a computer stores this data does not affect the user, therefore it is hidden from them. 
        Hierarchy: Many modern programming languages allow the program to be built from objects, which are collections of pieces of data and functions to be 
        able to interact with that data. Most of these are organized in a pyramid like fashion similar to a hierarchy.
    </p>
    <a href="docs/StandardsResources.pdf#page=12" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Computational"></div>
  <h1 style="margin: 40px 0 0 20px">Computational Thinking</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px; margin-bottom: 3em;">
    <p style="font-size: 29px">
    <b>Short Description</b>: Demonstrate interdisciplinary applications of computational thinking and interact with content-specific models and simulations 
        to support learning and research.<br><br>
    <b>Explanation For Teachers</b>: Computational thinking is a set of problem-solving methods that involve expressing problems and their solutions in ways 
        that a computer could execute. Even something as simple as reflecting back on an experience multiple times can be considered computational thinking 
        because it is both retrospective and recursive.
    </p>
    <a href="docs/StandardsResources.pdf#page=15" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Hardware"></div>
  <h1 style="margin: 40px 0 0 20px">Hardware and Software</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
    <b>Short Description</b>: Demonstrate an understanding of the relationship between hardware and software.<br><br>
    <b>Explanation For Teachers</b>: When most people think of a computer, they think of computer hardware. The mouse, the monitor, the keyboard - these 
        are all pieces of hardware. Software, on the other hand, cannot be seen. Software is the code that the computer runs on. Machine code, assembly code, 
        and written code are examples of software.
    </p>
    <a href="docs/StandardsResources.pdf#page=17" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Troubleshooting"></div>
  <h1 style="margin: 40px 0 0 20px">Troubleshooting</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
     <b>Short Description</b>: Apply troubleshooting strategies to identify and solve routine hardware and software problems that occur during everyday computer use.<br><br>
     <b>Explanation For Teachers</b>: Troubleshooting is a logical thinking process/method that helps discover the source of an error. Students will be 
        able to learn troubleshooting techniques that they can use in computers and their everyday lives. This will enable students to understand how a 
        problem arose and not just the symptoms of this problem.
    </p>
    <a href="docs/StandardsResources.pdf#page=19" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Networks"></div>
  <h1 style="margin: 40px 0 0 20px">Networks</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px; margin-bottom: 3em;">
    <p style="font-size: 29px">
    <b>Short Description</b>: Describe the major components and functions of computer systems and network.<br><br>
    <b>Explanation For Teachers</b>: A computer network is like a tree or web that connects multiple computers with each other. There are both wired and 
        wireless connections. Students are able to understand how information is communicated through a network, applicable to all networks. They will be 
        able to use this information to build their own networks, as well as use already existing networks to their greatest capability.
    </p>
    <a href="docs/StandardsResources.pdf#page=21" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Human"></div>
  <h1 style="margin: 40px 0 0 20px">Differences between Human and Machine</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
     <b>Short Description</b>: Describe what distinguishes humans from machines focusing on human intelligence versus machine intelligence and ways we can 
        communicate. As well as ways in which computers use models of intelligent behavior.<br><br>
     <b>Explanation For Teachers</b>: Artificial intelligence is built by humans to mimic human behavior not the structure of the brain, which is analog not 
        digital like a computer. Artificial intelligence is built upon pattern recognition over lots and lots of data. Artificial intelligence is much less 
        pliable than human intelligence, being designed to learn just one thing. Artificial intelligence also lacks the bias attached to human decision making.  
    </p>
    <a href="docs/StandardsResources.pdf#page=23" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Tools"></div>
  <h1 style="margin: 40px 0 0 20px">Tools & Resources</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px; margin-bottom: 3em;">
    <p style="font-size: 29px">
    <b>Short Description</b>: Select appropriate tools and technology resources to support learning and personal productivity, publish individual products, 
        design, develop, and publish data, accomplish a variety of tasks, and solve problems.<br><br>
    <b>Explanation For Teachers</b>: Students should be able to pick the right method of processing to do an activity. Students will encounter data in science 
        and math courses that may need to be manipulated.  This standard will help students understand computer applications for presentations that could be 
        used in all courses, including presentations for English courses.
    </p>
    <a href="docs/StandardsResources.pdf#page=25" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Programming"></div>
  <h1 style="margin: 40px 0 0 20px">Problem Solving with Programming</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
    <b>Short Description</b>: Implement problem solutions using a programming language that includes looping behavior, conditional statements, logic, 
        expressions, variables, and functions.<br><br>
    <b>Explanation For Teachers</b>: Students should be able to use computational thinking to solve problems; i.e. logic puzzles. Basic programming is 
        able to teach students valuable problem solving skills that can help them in every course. Alongside this, students will be required to understand 
        programming syntax which can help in understanding English and mathematical symbols.
    </p>
    <a href="docs/StandardsResources.pdf#page=27" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Problem"></div>
  <h1 style="margin: 40px 0 0 20px">Flexibility in Problem Solving</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
     <b>Short Description</b>: Demonstrate dispositions amenable to open-ended problem solving and programming.<br><br>
     <b>Explanation For Teachers</b>: Troubleshooting is a logical thinking process/method that helps discover the source of an error. Students will be 
        able to learn troubleshooting techniques that they can use in computers and their everyday lives. This will enable students to understand how a 
        problem arose and not just the symptoms of this problem.
    </p>
    <a href="docs/StandardsResources.pdf#page=29" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Collaborative"></div>
  <h1 style="margin: 40px 0 0 20px">Collaborative Design and Publication</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px; margin-bottom: 3em;">
    <p style="font-size: 29px">
    <b>Short Description</b>: Collaboratively design, develop, publish, and present products (e.g., videos, podcasts, websites) using technology resources 
        that demonstrate and communicate curriculum concepts.<br><br>
    <b>Explanation For Teachers</b>: Students use production and design tools such as Microsoft/Google Suite. Students will gain the ability to use 
        collaborative techniques along with knowledge of technological tools that will aid them in collaboration. This can be applied to any subject as 
        they might not have been exposed to tools they could use to solve problems.
    </p>
    <a href="docs/StandardsResources.pdf#page=31" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Feedback"></div>
  <h1 style="margin: 40px 0 0 20px">Feedback Integration</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
     <b>Short Description</b>: Exhibit dispositions necessary for collaboration: providing useful feedback, integrating feedback, understanding and 
        accepting multiple perspectives, socialization.<br><br>
     <b>Explanation For Teachers</b>: Any large scale task involving computers is going to be collaborative, it is therefore imperative that students 
        are able to communicate with each other well. Students will benefit from this standard by gaining an understanding of respectful collaboration.  
    </p>
    <a href="docs/StandardsResources.pdf#page=33" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Legal"></div>
  <h1 style="margin: 40px 0 0 20px">Legal and Ethical Behaviors</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px; margin-bottom: 3em;">
    <p style="font-size: 29px">
    <b>Short Description</b>: Exhibit legal and ethical behaviors when using technology and information and discuss the consequences of misuse.<br><br>
    <b>Explanation For Teachers</b>: Demonstrate the legal consequences of misusing the internet. Students will benefit from using technology legally and 
        ethically. This could keep students from performing actions that may get them in trouble, but also outline the benefits of using technology in a healthy way.
    </p>
    <a href="docs/StandardsResources.pdf#page=35" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Impact"></div>
  <h1 style="margin: 40px 0 0 20px">Impact of Technology</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
    <b>Short Description</b>: Analyze the positive and negative impacts of technology on one's personal life, society, and our culture.<br><br>
    <b>Explanation For Teachers</b>: Show the benefits and determinants that technology has brought to our lives and others. Students will gain an appreciation 
        for technology in their lives. Students will learn how different forms of technology assist them in everyday tasks that can transition their other 
        courses by providing them with tools that eliminate difficulties.
    </p>
    <a href="docs/StandardsResources.pdf#page=37" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Accuracy"></div>
  <h1 style="margin: 40px 0 0 20px">Accuracy and Bias</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
    <p style="font-size: 29px">
     <b>Short Description</b>: Evaluate the accuracy, relevance, appropriateness, comprehensiveness, and biases that occur in electronic information sources.<br><br>
     <b>Explanation For Teachers</b>: Demonstrate that information on the internet can be bias and misinformed. Demonstrate to the students how to tell the 
        difference and point out the bias or misinformation. This standard will be used to teach students how to think for themselves by learning information from credible sources.
    </p>
    <a href="docs/StandardsResources.pdf#page=39" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>

<div id="Access"></div>
  <h1 style="margin: 40px 0 0 20px">Access to Technology</h1>
  <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px; margin-bottom: 3em;">
    <p style="font-size: 29px">
    <b>Short Description</b>: Describe ethical issues that relate to computers and networks (e.g., security, privacy, ownership, and information sharing), 
        and discuss how unequal distribution of technological resources in a global economy raises issues of equity, access, and power. <br><br>
    <b>Explanation For Teachers</b>: Demonstrate how technology has affected areas power and equity and the ethical issues within. Students should learn what 
        their rights are as a digital citizen, as well as the rights of others, to better understand how their activity with computers can affect them and those around them.
    </p>
    <a href="docs/StandardsResources.pdf#page=41" style="font-size: 25px" target="_blank">For more information such as resources to use click here</a>
  </div>
  <p style="font-size: 24px"class="w3-padding">This is a pdf compilation of the standards: <a href="docs/StandardsResources.pdf" target="_blank">Click here 
      to view a full description</a></p>
</div>

<!-- Footer -->
<footer class="footer w3-display-container" style="background-color: #111">
  <div class="w3-third">  
    <p style="color: #C4C4C4; margin-left: 180px">
      <a href="mailto:dllargent@bsu.edu" style="text-decoration: none">Mentored by: David Largent</a><br>
      <a href="mailto:wpenglish@bsu.edu" style="text-decoration: none">Developed by: William English</a><br>
      BSU CS4MS Team
    </p>
  </div>
  <div class="w3-third w3-center">
    <a href="http://www.bsu.edu" class="w3-col"><img src="images/bsu.png" style="height: 100px; margin-top: 8px"></a>
  </div>
  <div class="w3-third">
    <p align = "left" style ="color: #C4C4C4; font-size: 13px">NOTICE: The information presented on this page represents the personal views, ideas, and 
      opinions of the author. This is not an official Ball State University web page. Links contained in this web site to other organizations are presented 
      as a service and neither constitute nor imply university endorsement or warranty.</p>
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

// Used to shift the sideNavbar over when the page scrolls past 250. Also stops it from showing when screen is small
var x = window.matchMedia("(min-width: 700px)")
window.onscroll = function() {scrollFunction(x)};
function scrollFunction(x) {
  var width = Math.max(window.screen.width, window.innerWidth); 
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250 && x.matches) {
    document.getElementById("sidenav").style.left = "0";
    document.getElementById("shiftDIV").style.marginLeft = "200px";
  } else {
    document.getElementById("sidenav").style.left = "-180px";
    document.getElementById("shiftDIV").style.marginLeft = "20px";
  }
  if (window.innerWidth < 500) {
    document.getElementById("sidenav").style.left = "-180px";
    document.getElementById("shiftDIV").style.marginLeft = "20px";
  }
}
x.addListener(scrollFunction)
</script>

</body>
</html>
HTML;