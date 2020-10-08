﻿<?php
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<title>About Us</title>
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

    .under:hover {
        color: #a6001a;
    }
</style>

<body>
    <header class="w3-display-container w3-highway-red w3-center w3-animate-top" style="padding:80px 16px; animation-duration: .75s;">
        <div class="w3-display-container" style="width: 200px; height: 200px; border: 4px solid white; border-radius: 50%; margin: 0 auto;">
            <p class="w3-xxxlarge" style="transform: translate(0%, 21%); font-family: 'Abel'">CS4MS+</p>
        </div>
        <p class="w3-xlarge">
            Our mission in CS4MS+ is to expose, educate, and encourage all K-12 students--through interactions with them and
            their educators--about computer science and computational thinking.<br><br>By working with administration and teachers, we will provide
            resources to continue our efforts beyond the semester to expose future generations to computer science and computational thinking at an early age.
        </p>
    </header>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-highway-red w3-card w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-highway-red" href="javascript:void(0);"
               onclick="menuToggle()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="index" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
            <a href="course" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Course</a>
            <a href="standards" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Standards</a>
            <a href="resource" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Resources</a>
            <a href="about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">About Us</a>
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

    <!-- About Us Div -->
    <div class="w3-center w3-container w3-animate-bottom" style="margin-top: 30px; margin-bottom:20px; animation-duration: .75s">
        <div class="w3-card-2 w3-center" style="min-height: 550px; padding-bottom: 20px">
            <h1 style="padding-top: 16px">About Us</h1>
            <p class="w3-xlarge w3-padding">
                We are Immersive Learning students who worked with neighboring schools to promote their teaching of computer science (CS) and computational
                thinking (CT). Research suggests that social and cultural factors may be behind under-representation of many demographics in scientific,
                technology, engineering, and mathematics (STEM) fields, such as the lack of awareness of STEM opportunities.
                Typical school curriculums expose students to the natural sciences and mathematics more frequently than CS and CT. As a result, students have
                little idea what it means to be a computer scientist and lose the opportunity to become one.
            </p>
            <p class="w3-xlarge w3-padding">
                To facilitate this project, we partnered with a variety of local schools. They serve students from diverse backgrounds who frequently do not
                have the resources available to participate in CS and CT activities. The focus of this immersive learning course is to expose our partners' students,
                particularly underrepresented minorities and females, to CS and CT. This project aims to assist the teachers by curating, developing, and documenting
                lessons and activities that incorporate CS and CT experiences for their students.
            </p>
            <h1 style="padding-top: 16px">CS4MS+ in the news</h1>
            <p class="w3-xlarge w3-padding">
                Watch a <a href="https://youtu.be/_SfQuN5uNCM" target="_blank">short video</a> about the CS4MS+ immersive learning project. <br />
                <a href="https://www.theindychannel.com/news/hiring-hoosiers/ball-state-muncie-schools-partner-to-expose-students-to-computer-science-opportunities"
                   target="_blank">Ball State, Muncie schools partner to expose students to computer science opportunities</a> (RTV6, 02/18/2019) <br />
                <a href="https://www.reporter.net/news/local_news/lebanon-native-helps-lead-new-computer-science-initiative/article_3a5588cc-265e-11ea-8519-07c7beb023a5.html"
                   target="_blank">Lebanon native helps lead new computer science initiative</a> (The Lebanon Reporter, 12/27/2019) <br />
                <a href="https://www.ballstatedailynews.com/article/2020/02/news-immersive-learning-computer-science-mcs"
                   target="_blank">Immersive learning project brings computer science to MCS</a> (The Ball State Daily News, 02/27/2020)
            </p>
            <h1 style="padding-top: 16px">Project participants</h1>
            <img src="images/Fall2017.jpg" style="width: 49%; border: ridge">
            <img src="images/Fall2018.jpg" style="width: 49%; border: ridge">
            <div class="w3-container">
                <div class="w3-half">
                    <h1 align="center" style="margin-top: -8px">Fall 2017</h1>
                    <h3 align="center" style="margin-top: -21px; margin-right: 40px">
                        Monica Appel, Meghan Duffy, Rachel Harvey, Anna Hawkins, Ben Lawson,
                        Ryan Magley, JR Pegg, Ian Pemberton, Jordan Reidy, Tim Skinner, and Cody York; Dave Largent (mentor)
                    </h3>
                </div>
                <div class="w3-half">
                    <h1 align="center" style="margin-top: -8px">Fall 2018</h1>
                    <h3 align="center" style="margin-top: -21px">
                        Ryan Ahler, Luke Betts, Austin Bolles, Michael Bratton, Will English, Josh Passey, Alexander Perry,
                        Sarah Phipps, Adam Wessel, and Morgan Williams; Dave Largent (mentor)
                    </h3>
                </div>
            </div>
            <img src="images/Fall2019.jpg" style="width: 49%; border: ridge; margin-right: 49%">
            <div class="w3-container">
                <div class="w3-half">
                    <h1 align="center" style="margin-top: -8px"><a onclick="document.getElementById('fall2019Modal').style.display='block'" href="#fall2019Modal">Fall 2019</a></h1>
                    <h3 align="center" style="margin-top: -21px;  margin-right: 40px">
                        Sara Bailey, Luke Betts, Ben Bishop, Chris Bucker, Corbin Creedon, Gwyn Hultquist,
                        Dakota Savage, Joe Schmidt, Madison Turley, Brian Walker, and Sean Wolfe; Dave Largent (mentor)
                    </h3>
                    <div class="w3-modal" id="fall2019Modal">
                        <div class="w3-modal-content">
                            <div class="w3-container w3-highway-red">
                                <h1>Fall 2019 Semester Description</h1>
                                <span class="w3-button w3-display-topright" onclick="document.getElementById('fall2019Modal').style.display='none'">&times;</span>
                            </div>
                            <div class="w3-container">
                                <h2>Northside Middle School</h2>
                                <p>
                                    Our team interacted with the students of Northside to help teach concepts of computer science and computational thinking.
                                    Mr. Rumple's class of PLTW Computer Science Innovators and Makers was the core focus of our attention, and we would go into his
                                    classroom on Wednesdays to help teach the topic of the week according to PLTW course schedule. While doing this, we helped design
                                    the course to be more inclusive to different students of different demographics. We were able to lay a good
                                    foundation for future classes to come.
                                </p>
                                <h2>Burris Laboratory School</h2>
                                <p>
                                    The Burris Team had a great opportunity to create our own teaching plans. The teacher we were working with was very flexible
                                    and offered support for any ideas we brought to the table. We decided to have a six lesson outline covering: Introduction to Computer Science,
                                    Introduction to How Computers Think, Variables, Conditional Statements, For Loops, and Introduction to Algorithms. Our goal was not
                                    necessarily to introduce them to actual coding, rather, to teach them the fundamental concepts of Computer Science and computational thinking.
                                    The lessons were staggered, happening roughly every two weeks. We measured our accomplishment over the semester using a Google survey.
                                    They were given the same survey on the first and last day of our lessons. We then compared the results to see if there was any notable
                                    difference in their understanding of computational thinking.
                                </p>
                                <h2>Muncie Central High School</h2>
                                <p>
                                    Our experience with Muncie Central was positive. Expanding the program into high schools was a great undertaking, as teaching
                                    principles aimed at a younger age group was the onus of our program. We ended up spending a good deal of time helping hands-on in
                                    the classroom and offering resources to the teachers. In our time together away from Muncie Central we collaborated to improve the website
                                    and update branding to be more inclusive, expanding to CS4MS+. Another accomplishment was the establishment of CS4MS+ as a Student-run
                                    organization to continue our efforts beyond the scope of a single semester.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer w3-display-container" style="background-color: #111">
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
            <p align="left" style="color: #C4C4C4; font-size: 13px">
                NOTICE: The information presented on this page represents the personal views, ideas, and opinions of the author. This is not an official
                Ball State University web page. Links contained in this web site to other organizations are presented as a service and neither constitute
                nor imply university endorsement or warranty.
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