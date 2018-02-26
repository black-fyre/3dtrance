<?php require_once('admin/cms.php'); ?>
    <cms:template title='About Us'/>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description"
              content="3dtrance is a top architectural firm in Nigeria. We are a Visualization and Animation Studio, that is
focused on providing cutting edge design with modern day trends in Technology and Innovative research in Construction Materials.
We offer Architectural services like Design and Build, Real Estate Service in Layout Design, Visualization, Presentation, Walkthrough, Breakers &
Animations">
        <meta name="author" content="Fehntastic Innovations">
        <meta name="robots" content="follow">

        <title>About Us | 3DTrance</title>
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <script defer src="assets/fonts/fontawesome/fontawesome-all.min.js"></script>
    </head>
    <body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-md navbar-dark color-primary fixed-top">
        <a class="navbar-brand" href="index.html"><img class="img-fluid mx-2" src="assets/images/logo50x50.png"
                                                       alt="The 3DTrance Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item dropdown nav-link-active">
                    <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item nav-link-active" href="about.php">Who are we?</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="team.html">Our Team</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="about.php#philosophy">Philosophy and Experience</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Our Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Our Projects
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--The main body of the page-->
    <div class="height-half-vp position-relative d-flex" style="background-image: url('assets/images/itan16x9.jpg');">
        <div class="about-explain-text-top-right">
            <p class="color-orange px-1 m-0">THE ITAN</p>
            <p class="bg-color-orange px-1 m-0">2nd place at the Design Competition by CPDI AFRICA 2017</p>
            <p class="bg-color-grey px-1 m-0">Design by Olalekan Afolabi & Olalekan Ileola-Gold</p>
        </div>
        <div class="about-image-text-left p-3" id="overlaid-text1">
            <h4 class="text-center">OUR MISSION</h4>
            <p>
                <cms:editable
                        name='mission_text'
                        label='Our Mission'
                        desc='Enter mission here'
                        type='textarea'>
                    To be one of the best Architectural Visualization Studio & Architectural firms in the world, a firm
                    which
                    would influence our global environment positively.
                </cms:editable>
            </p>
        </div>
        <p class="about-explain-text-bottom-right">CGI Courtesy of 3DTrance</p>
    </div>
    <div class="container my-5">
        <h2 class="mb-4 color-header font-weight-bold" id="lead">Who are we?</h2>
        <cms:editable
                name='about_us_text'
                label='About Us Preamble'
                desc='Enter the about us preamble here'
                css="css/styles.css | lib/bootstrap/css/bootstrap.min.css"
                body_class="lead"
                type='nicedit'>
            <p class="lead">3DTrance Limited is an Architectural firm that started
                out as a Visualization and Animation Studio, that is
                focused on providing cutting edge design with modern
                day trends in Technology and Innovative research in
                Construction Materials </p>
            <p>
                We offer Architectural services such as; Design and
                Build, Real Estate Service in Layout Design,
                Visualization, Presentation, Walkthrough, Breakers &
                Animations.<br>
                Also Visuals for Adverting Agencies, We work with all
                Various Industry, ranging from financial firms,
                Architectural firms, Real Estate Firms, Oil and Gas
                Industry and also for NSE listed and key public sector
                organizations, parastatals and medium-sized
                companies.</p>
        </cms:editable>
    </div>
    <div style="background-image: url('assets/images/aerialpool.jpg')"
         class="height-half-vp position-relative d-flex justify-content-center align-items-center">
        <div class="img-overlay-middle w-75 p-5 text-shadow" id="overlaid-text2">
            <blockquote class="blockquote text-white">
                <p class="mb-0">
                    <cms:editable
                            name='blockquote_text'
                            label='Blockquote'
                            desc='Enter a quote here'
                            type='nicedit'>
                        "Our Creative drive is inspired by the idea that every little droplet of water matters.<br>
                        All that is needed is consistency, focus and determination. A century later, those droplets have
                        become a mighty ocean.<br>
                        The actions of today, are the history of tomorrow.
                        So therefore, the little actions of today can impact tomorrow greatly, The right moves today
                        make you a legend tomorrow.“
                    </cms:editable>
                </p>

                <footer class="blockquote-footer text-white"> Olalekan Afolabi <cite>Managing Partner, 3DTrance</cite>
                </footer>
            </blockquote>
        </div>
    </div>
    <div class="container my-5">
        <h3 class="color-header my-3">Our History</h3>
        <p>
            <cms:editable
                    name='history_text'
                    label='Our History'
                    type='nicedit'>
                3DTrance Limited has been conceived since 2012 in Lagos,where we started as a visualization studio from
                Lagos to
                Abuja for real estate firms.<br>
                In 2014, we then added our design studio which we designed institutional buildings for the government.
                Later
                that year we added our
                animation department for Architectural walkthroughs & Panoramas.<br>
                In 2016 we added Augmented Reality(AR), Virtual Reality(VR), Holographic Reality(HR) and Interactive
                Content for
                various firms in
                different industries.
            </cms:editable>
        </p>
    </div>
    <div class="height-half-vp position-relative d-flex justify-content-center align-items-center"
         style="background-image: url('assets/images/nairamall.jpg')" id="philosophy">
        <div class="img-overlay-middle w-75 p-5 text-shadow" id="overlaid-text3">
            <h4 class="text-center text-white">Our Philosophy</h4>
            <p class="text-white">
                <cms:editable
                        name='philosophy_text'
                        label='Our Philosophy'
                        type='textarea'>
                    At 3DTrance, we believe in the ambience that creativity brings, which illuminate the atmosphere,
                    for constant flow of ground breaking ideas to flourish.
                </cms:editable>
            </p>
        </div>
    </div>
    <div class="container my-5">
        <h4 class="color-header">Our Experience</h4>
        <p>
            <cms:editable
                    name='experience_text'
                    label='Our Experience'
                    type='nicedit'>
                At 3DTrance, we have worked on all types of projects from projects like furniture design, to Lagos City
                Animations and real estate projects, both home and abroad.<br>
                From Design to Visualization (photorealistic images, animation, 360 panorama, VR, AR & HR) and
                implementation, we have you covered and our clients are always satisfied.
            </cms:editable>
        </p>
    </div>
    <!--The footer-->
    <footer class="py-3 color-primary text-white small">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Contact Us</h4>
                    <p><i class="fas fa-home"></i> 2nd Fl. The Garnet, Igbo Efon
                        Roundabout, Lekki, Lagos, Nigeria</p>
                    <p><i class="fas fa-phone"></i> + 234 818 206 0563<br>
                        + 234 705 377 4215</p>
                </div>
                <div class="col-md-2">
                    <h4>Go to</h4>
                    <nav class="nav flex-column">
                        <a class="nav-link text-white half-transparent" href="index.html">Home</a>
                        <a class="nav-link text-white half-transparent" href="about.php">About Us</a>
                        <a class="nav-link text-white half-transparent" href="projects.html">Our Projects</a>
                        <a class="nav-link text-white half-transparent" href="contact.html">Contact Us</a>
                        <a class="nav-link text-white half-transparent" href="career.html">Career</a>
                    </nav>
                </div>
                <div class="col-md-4">
                    <h4 class="d-none d-md-block">Social</h4>
                    <a href="https://www.facebook.com/3dtrance/" class="text-white half-transparent"><i
                                class="fab fa-facebook fa-3x fa-fw"></i></a>
                    <a href="https://www.youtube.com/channel/UCAWahFlRjTkgWzl43EvR7jQ"
                       class="text-white half-transparent"><i class="fab fa-youtube fa-3x fa-fw"></i></a>
                    <a href="https://www.linkedin.com/company/3dtrance/" class="text-white half-transparent"><i
                                class="fab fa-linkedin fa-3x fa-fw"></i></a>
                    <a href="https://www.instagram.com/3dtrance/" class="text-white half-transparent"><i
                                class="fab fa-instagram fa-3x fa-fw"></i></a>
                    <a href="https://twitter.com/3d_trance" class="text-white half-transparent"><i
                                class="fab fa-twitter fa-3x fa-fw"></i></a>
                    <a href="https://behance.net/3dtrance" class="text-white half-transparent"><i
                                class="fab fa-behance fa-3x fa-fw"></i></a>
                </div>
                <div class="col-md-3">
                    <a href="contact.html#quote" class="btn btn-outline-primary btn-block btn-lg color-accent">Get a
                        quote</a>
                </div>
            </div>

        </div>
    </footer>


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/in-view/in-view.min.js"></script>
    <script src="js/visibleanimations.js"></script>
    </body>
    </html>
<?php COUCH::invoke(); ?>