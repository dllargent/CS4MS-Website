<?php
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<title>Course</title>
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

<!-- CSS for Classes -->
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

    #shiftDIV {
        transition: margin-left 0.5s;
    }

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

    .leftBound {
        left: 300px;
    }
</style>

<body>
HTML;

echo file_get_contents(__DIR__ . "/components/navbar.html");

echo <<<HTML

    <!-- Header -->
    <header class="w3-display-container w3-highway-red w3-center w3-animate-top" style="padding:80px 16px; animation-duration: 1s;">
        <h1>Course Outline</h1>
        <p class="w3-xlarge" style="padding: 0 60px 0 60px">A sample 9-week overview of a diverse approach to the Indiana Computer Science Standards</p>
    </header>

    <!-- Side Navbar -->
    <div id="sidenav" class="sidenav" style="animation-duration: 1s">
        <a href="#week1Anchor">Week 1-3</a>
        <a href="#week4Anchor">Week 4</a>
        <a href="#week5Anchor">Week 5</a>
        <a href="#week6Anchor">Week 6</a>
        <a href="#week7Anchor">Week 7-9</a>
    </div>


    <div id="shiftDIV">
        <h1 style="margin: 20px 0 0 20px">Overview</h1>
        <p>
            <ul>
                <li style="font-size: 22px; margin: 0px 0 0 25px">Using google docs, sheets, and slides for a computer science project (2-3 weeks)</li>
                <li style="font-size: 22px; margin: 0px 0 0 25px">A week of the impact of technology</li>
                <li style="font-size: 22px; margin: 0px 0 0 25px">An intro to computing (hardware vs software, humans vs computers)</li>
                <li style="font-size: 22px; margin: 0px 0 0 25px">Troubleshooting, Networks, and Data</li>
                <li style="font-size: 22px; margin: 0px 0 0 25px">Problem solving with programming (2-3 weeks)</li>
            </ul>
        </p>

        <div id="week1Anchor"></div>
        <h1 style="margin: 0px 0 0 20px">Week 1 - 3</h1>
        <div class="w3-container w3-padding-large w3-card" style="min-height: 250px; margin-left: 20px; margin-right: 20px">
            <p style="font-size: 29px">
                For the first two to three weeks, we suggest each student use Google Suite (Google Docs, Sheets, and Slides) to make a project introducing Google Suite,
                which would teach them how to use the software and scaffold further learning.
            </p>
        </div>

        <div id="week4Anchor"></div>
        <h1 style="margin: 40px 0 0 20px">Week 4</h1>
        <div class="w3-container w3-padding-large w3-card" style="min-height: 250px; margin-left: 20px; margin-right: 20px">
            <p style="font-size: 29px">
                Post-Project, teach students about the significant impact of technology upon their daily lives, a focus of many
                <a href="docs/StandardsResources.pdf" target="_blank">Indiana state standards for computer science</a>.
                The lack of foreknowledge needed may bolster the students' affect if the first project proved difficult.
            </p>
        </div>

        <div id="week5Anchor"></div>
        <h1 style="margin: 40px 0 0 20px">Week 5</h1>
        <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
            <p style="font-size: 29px">
                During week five, we suggest giving your students a general introduction to computers. This includes two main topics the differences between humans and
                computers and the differences between hardware and software. This also includes simple computer knowledge that will help the rest of the course go
                smoothly. We suggest this because the student should know what they’re using before they use it.
            </p>
        </div>

        <div id="week6Anchor"></div>
        <h1 style="margin: 40px 0 0 20px">Week 6</h1>
        <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px">
            <p style="font-size: 29px">
                By now, students should have a basic understanding of computers. Therefore, we suggest starting more involved topics during week six. These topics
                include troubleshooting, networks, and data. These topics are moderately difficult, and so they will act as a transition into more challenging topics.
                We tried to build up as much knowledge as we could before starting these topics.
            </p>
        </div>

        <div id="week7Anchor"></div>
        <h1 style="margin: 40px 0 0 20px">Week 7 - 9</h1>
        <div class="w3-container w3-padding-large w3-card" style="min-height: 300px; margin-left: 20px; margin-right: 20px; margin-bottom: 3em;">
            <p style="font-size: 29px">
                For the last three weeks, we suggest starting an <a href="https://www.khanacademy.org/computing/computer-programming/programming" target="_blank">
                    Intro to Programming course provided by Khan Academy
                </a>. This is free and teaches simple JavaScript while making it fun for middle schoolers.
                During these weeks, you can take breaks to teach the last standards such as algorithms and parallelization. The programming course includes many
                of the standards within it making it a great finish to the class and an easy way to cover them. These are hardest topics to cover which is why we
                spent the weeks before preparing them for such difficult work.
            </p>
        </div>
        <p style="font-size: 24px" class="w3-padding">
            This is a pdf overview of the course 9-week course: <a href="docs/CourseStructure.pdf" target="_blank">
                Click here to view a full description
            </a>
        </p>
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
                NOTICE: The information presented on this page represents the personal views, ideas,
                and opinions of the author. This is not an official Ball State University web page. Links contained in this web site to other organizations
                are presented as a service and neither constitute nor imply university endorsement or warranty.
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

        // Used to shift the sideNavbar over when the page scrolls past 250. Also stops it from showing when screen is small
        var x = window.matchMedia("(min-width: 700px)")
        window.onscroll = function () { scrollFunction(x) };
        function scrollFunction(x) {
            var width = Math.max(window.screen.width, window.innerWidth);
            if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250 && window.innerWidth > 700) {
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
