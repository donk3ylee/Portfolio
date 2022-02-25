<?php 
session_start();

function display_errors(){
    if(isset($_SESSION['errors'])){
        echo '<ul class="errors" id="error_target">';
        foreach($_SESSION['errors'] as $error){
            echo '<li>'. $error .'</li>';
        }
        echo'</ul>';
    }
}

function paste_value($name){
    if(isset($_SESSION['form_data'])){
        return $_SESSION['form_data'][$name];
    }
}

function display_success(){
    if(isset($_SESSION['success'])){
        echo '<ul class="success" id="success_target"><li>'. $_SESSION['success'] .'</li></ul>';
    }
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lee Whiting - Portfolio</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b4e3e1b974.js" crossorigin="anonymous"></script>
    <script src="JS/typeEffect/core.js" defer></script>
    <script src="JS/typeEffect/myType.js" defer></script>
    <!-- <script src="JS/formValidation.js" defer></script> -->
    <script src="JS/main.js" defer></script>

</head>
<body>
<div id="menu">
    <a class="logo" href="index.html"><img src="img/LW-logo.jpg" alt="Lee Whiting Web Developer"></a>
    <nav>
        <div class="menu">
            <a href="about_me.html">About Me</a>
            <a href="#project">My Portfolio</a>
            <a href="coding_examples.html">Coding Examples</a>
            <a href="scs_scheme.html">SCS Scheme</a>
            <a href="#contact">Contact Me</a>
        </div>
        <a href="https://github.com/donk3ylee" class="center" target="_blank">
            <div class="tooltip-container">
                <i class="github-icon fab fa-github"></i>
                <span class="tooltipi">See my coding projects on GitHub</span>
            </div>
        </a>
    </nav>
</div>
<div id="slider-container">
    <div id="x"></div>
    <a href="index.html">
        <div class="slider-home"></div>
        Home
    </a>
    <a href="about_me.html">
        <div class="slider-about"></div>
        About Me
    </a>
    <a href="index.html#project">
        <div class="slider-portfolio"></div>
        My Portfolio
    </a>
    <a href="coding_examples.html">
        <div class="slider-code"></div>
        Coding Examples
    </a>
    <a href="scs_scheme.html">
        <div class="slider-scheme"></div>
        SCS Scheme
    </a>
    <a href="index.html#contact">
        <div class="slider-contact"></div>
        Contact Me
    </a>
    <a href="https://github.com/donk3ylee" target="_blank">
        <div class="slider-github"></div>
        My GitHub
    </a>
</div>
<div class="hamburger-menu" id="slider-trigger"><i class="fas fa-bars"></i></div>
<div id="hero">
    <video autoplay loop muted poster="./vid/altMatrix.jpg">
        <source src="./vid/altMatrix.mp4" type="video/mp4">
        <source src="./vid/altMatrix.webm" type="video/webm">
        <source src="./vid/altMatrix.ogv" type="video/ogg">
    </video>
    <div class="hero-text">
        <span id="type"></span>
    </div>
    <a href="#project" class="scroll-down">
        Scroll Down
        <i class="fas fa-chevron-down"></i>
    </a>
</div>
<div class="main-page">
    <div id="project">
        <div class="container">
            <div class="center row g-5">
                <div class="col-12 col-md-6 col-xl-4">
                    <a href="http://netmatters.lee-whiting.netmatters-scs.co.uk/" target="_blank">
                        <div class="project-card">
                            <img src="img/projects/netmatters.png" alt="Netmatters Site Recreation">
                            <div class="title">
                                <h2>Netmatters Reflection</h2>
                                <p class="desc">Practice task putting all my knowledge gained into creating a accurate reconstruction (a reflection) of the Netmatters homepage.</p>
                                <p class="view">View Project</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <a href="http://emailmetv.lee-whiting.netmatters-scs.co.uk/" target="_blank">
                        <div class="project-card">
                            <img src="img/projects/emailmetv.png" alt="Email Me TV - Showcase project that associates emails with images on a TV">
                            <div class="title">
                                <h2>Email Me TV</h2>
                                <p class="desc">This was a project to practice retrieving images from an API using asynchronous methods. Implementing JavaScript promises and using JavaScript arrays.</p>
                                <p class="desc">The app doesn't email you the images, it merely shows the images associated with each email that would have been sent.</p>
                                <p class="view">View Project</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <a href="http://bakers-dozen.lee-whiting.netmatters-scs.co.uk/" target="_blank">
                        <div class="project-card">
                            <img src="img/projects/bakers-dozen.png" alt="Bakers Dozen - Showcase project which was a collaboration project to build a complete website from a picture / wireframe brief.">
                            <div class="title">
                                <h2>Bakers Dozen</h2>
                                <p class="desc">This was a project to build a website as a collaborative team. The brief for the website was given to us as a wireframe image which we had a week to complete.</p>
                                <p class="desc">There were three in our group. I was responsible for everything on the homepage minus the header and footer and hero image. I was also responsible for the Testimonials page. </p>
                                <p class="view">View Project</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-12 col-md-6 col-xl-4">
                    <a href="#">
                        <div class="project-card">
                            <img src="img/project_ph.jpg" alt="Project Four">
                            <div class="title">
                                <h2>Project Four</h2>
                                <p>View Project<span class="arrow"></span></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <a href="#">
                        <div class="project-card">
                            <img src="img/project_ph.jpg" alt="Project Five">
                            <div class="title">
                                <h2>Project Five</h2>
                                <p>View Project<span class="arrow"></span></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <a href="#">
                        <div class="project-card">
                            <img src="img/project_ph.jpg" alt="Project Six">
                            <div class="title">
                                <h2>Project Six</h2>
                                <p>View Project<span class="arrow"></span></p>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="contact-copy">
            <h2>Feel Free to Get in Touch</h2>
            <p>Please feel free to contact me using the form regarding my web development skills and your business needs.</p>
            <div id="formErrorMessages"></div>
            <?= display_errors(); ?>
            <?= display_success(); ?>
            <form id="contact-form" method="POST" action="./src/processForm.php">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <input type="text" placeholder="First Name*" name="firstName" value="<?= paste_value('firstName'); ?>">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" placeholder="Last Name*" name="lastName" value="<?= paste_value('lastName'); ?>">
                        </div>
                        <div class="col-12">
                            <input type="text" placeholder="Your Email Address*" name="emailAddress" value="<?= paste_value('emailAddress'); ?>">
                        </div>
                        <div class="col-12">
                            <input type="text" placeholder="Subject of Your Enquiry*" name="subject" value="<?= paste_value('subject'); ?>">
                        </div>
                        <div class="col-12">
                            <textarea placeholder="Message*" name="message"><?= paste_value('message'); ?></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- <a href="tel:01603704020">01603 70 40 20</a>
            <a class="email" href="mailto:info@netmatters.com">info@netmatters.com</a> -->
            <p>Please also feel free to contact Netmatters about their scion scheme and how partnering can benefit your business. <a href="scs_scheme.html">More information can be found here</a></p>
        </div>
    </div>
    <footer>
        <a href="#project">
            <div class="scroll-up">
                <i class="fas fa-chevron-up"></i>
                Scroll Up
            </div>
        </a>
    </footer>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>