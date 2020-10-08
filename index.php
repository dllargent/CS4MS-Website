﻿<?php
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<title>CS4MS</title>
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
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-28932854-3');

</script>

<!-- CSS for classes -->
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Lato", sans-serif;
    }

    .w3-bar, h1, button {
        font-family: "Montserrat", sans-serif;
    }

    .fa-anchor, .fa-coffee {
        font-size: 200px;
    }

    .footer {
        min-height: 125px;
        left: 0;
        right: 0;
        overflow: auto;
    }

    .under:hover {
        color: #a6001a;
    }
</style>


<body>
HTML;

echo file_get_contents(__DIR__ . "/components/navbar.html");

echo <<<HTML

    <!-- Header -->
    <header class="w3-display-container w3-highway-red w3-center w3-animate-top" style="padding:80px 16px; animation-duration: 1s;">
        <div class="w3-display-container" style="width: 200px; height: 200px; border: 4px solid white; border-radius: 50%; margin: 0 auto;">
            <p class="w3-xxxlarge" style="transform: translate(0%, 21%); font-family: 'Abel'">CS4MS+</p>
        </div>
        <p class="w3-xlarge">
            Computer Science for Middle Schoolers+ aims to find answers to this essential question:<br>
            “How can we increase exposure and access to computer science and computational thinking for ALL students?”
        </p>
    </header>

    <!-- Course Third -->
    <div class="w3-row-padding w3-center w3-margin-top w3-animate-bottom" style="animation-duration: 1s">
        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:480px">
                <a href="course" class="under" style="text-decoration: none"><h3 style="font-size: 30px">Course</h3></a><br>
                <a href="course"><i class="fa fa-calendar w3-margin-bottom w3-text-theme" style="font-size:120px; color: #a6001a"></i></a>
                <p style="padding: 0px 2rem 0px 2rem; font-size: 16pt">
                    9-week course teaching the Indiana Computer Science Standards in a variety
                    of ways, with a special focus on the order of events and outline of instruction.
                </p>
            </div>
        </div>

        <!-- Standards Third -->
        <div class="w3-third w3-animate-bottom" style="animation-duration: 1s">
            <div class="w3-card w3-container" style="min-height:480px">
                <a href="standards" class="under" style="text-decoration: none;"><h3 style="font-size: 30px">Standards</h3></a><br>
                <a href="standards"><i class="fa fa-list-alt w3-margin-bottom w3-text-theme" style="font-size:120px; color: #a6001a"></i></a>
                <p style="padding: 0px 2rem 0px 2rem; font-size: 16pt">
                    Explanations of Indiana State standards to help teachers implement them in their classroom.
                </p>
            </div>
        </div>

        <!-- Resources Third -->
        <div class="w3-third w3-animate-bottom" style="animation-duration: 1s">
            <div class="w3-card w3-container" style="min-height:480px">
                <a href="resource" class="under" style="text-decoration: none"><h3 style="font-size: 30px">Resources</h3></a><br>
                <a href="resource"><i class="fa fa fa-file-pdf-o w3-margin-bottom w3-text-theme" style="font-size:120px; color: #a6001a"></i></a>
                <p style="padding: 0px 2rem 0px 2rem; font-size: 16pt">
                    Resources to assist in teaching Computer Science to students, including programs for
                    instruction and information on the official Indiana computer Science Standards.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer w3-display-container" style="background-color: #111">
        <div class="w3-third">
            <p style="color: #C4C4C4; margin-left: 175px">
                <a href="mailto:dllargent@bsu.edu" style="text-decoration: none">Mentored by: David Largent</a><br>
                <a href="mailto:wpenglish@bsu.edu" style="text-decoration: none">Developed by: William English</a><br>
                BSU CS4MS+ Team
            </p>
        </div>
        <div class="w3-third w3-center">
            <a href="http://www.bsu.edu" class="w3-col"><img src="images/bsu.png" style="height: 100px; margin-top: 8px"></a>
        </div>
        <div class="w3-third">
            <p align="left" style="color: #C4C4C4; font-size: 13px">
                NOTICE: The information presented on this page represents the personal views,
                ideas, and opinions of the author. This is not an official Ball State University web page. Links contained in this web site to other
                organizations are presented as a service and neither constitute nor imply university endorsement or warranty.
            </p>
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
    </script>

</body>
</html>
HTML;