<?php snippet('header') ?>



    <body id="home">
        <!-- HERO -->
        <div id="hero" class="hero">
            <!-- HEADER -->
            <div class="header" id="header">
                <div class="container">
                    <header class="header--content">
                        <div class="header--burger-menu" onclick="showHeaderMenu()">
                            <div class="menu-stripe--wrapper menu-stripe--wrapper--header-animation to-cross-reversed">
                                <div class="menu-stripe--horizontal"></div>
                                <div class="menu-stripe--vertical"></div>
                            </div>
                            <h1 class="site-title big-text">A2SM</h1>
                        </div>
                    </header>
                </div>
                <!-- HEADER MENU -->
                <div class="header--menu" id="header--menu">
                    <div class="container">
                        <div class="header--menu-content">
                            <ul class="header--menu-list">
                                <li class="header--menu-list-item">
                                    <a class="header--menu-link big-text" href="" id="header--menu-link1">
                                        <div class="menu-square">
                                            <div class="menu-circle"></div>
                                        </div>
                                        Selected project (18)
                                    </a>
                                </li>
                                <li class="header--menu-list-item">
                                    <a class="header--menu-link big-text" href="" id="header--menu-link2">
                                        <div class="menu-square">
                                            <div class="menu-circle"></div>
                                        </div>
                                        Index (42)
                                    </a>
                                </li>
                                <li class="header--menu-list-item">
                                    <a class="header--menu-link big-text" href="" id="header--menu-link3">
                                        <div class="menu-square">
                                            <div class="menu-circle"></div>
                                        </div>
                                        About
                                    </a>
                                </li>
                                <li class="header--menu-list-item">
                                    <a class="header--menu-link big-text" href="" id="header--menu-link4">
                                        <div class="menu-square">
                                            <div class="menu-circle"></div>
                                        </div>
                                        Contacts
                                    </a>
                                </li>
                            </ul>
                            <div class="header--bottom">
                                <div class="header--socials" id="header--socials">
                                    <div class="header--socials-box instagram">
                                        <a href="#" class="header--link instagram">Instagram</a>
                                        <p>V.Kudirkos g. 6,</p>
                                        <p>LT-03105 Vilnius, LT</p>
                                    </div>
                                    <div class="header--socials-box">
                                        <a href="#" class="header--link facebook">Facebook</a>
                                        <a href="#" class="header--link">info@a2sm.lt</a>
                                        <p>+370 610 67070</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLICK SLIDER -->
            <ul class="slider fancy-slider" id="feature-block-slider" data-aos="fade">
                <li class="slick-slide" data-aos="fade">
                    <div class="overlay"></div>
                    <video class="hero--video" muted loop style="display: none;">
                        <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.ogv" type="video/ogg">
                        <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" type="video/mp4">
                        Please <a href="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" download>download</a> the video.
                    </video>
                    <img src="content/home/hero-img.jpg" alt="" style="width: 100%; object-fit: cover; height: 100vh; min-height: 657rem; max-height: 940rem;">
                </li>
                <li class="slick-slide" data-aos="fade">
                    <div class="overlay"></div>
                    <video class="hero--video" autoplay muted loop>
                        <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.ogv" type="video/ogg">
                        <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" type="video/mp4">
                        Please <a href="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" download>download</a> the video.
                    </video>
                </li>
                <li class="slick-slide" data-aos="fade">
                    <div class="overlay"></div>
                    <video class="hero--video" muted loop style="display: none;">
                        <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.ogv" type="video/ogg">
                        <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" type="video/mp4">
                        Please <a href="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" download>download</a> the video.
                    </video>
                    <img src="content/home/hero-img.jpg" alt="" style="width: 100%; object-fit: cover; height: 100vh; min-height: 657rem; max-height: 940rem;">
                </li>
                <li class="slick-slide" data-aos="fade">
                    <div class="overlay"></div>
                    <video class="hero--video" autoplay muted loop>
                        <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.ogv" type="video/ogg">
                        <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" type="video/mp4">
                        Please <a href="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" download>download</a> the video.
                    </video>
                </li>
            </ul>
        </div>


        <!-- PROJECTS SECTION -->
        <div class="projects">
            <div class="container">
                <div class="projects--content">
                    <input type="checkbox" id="projects--expand"/>
                    <div class="projects--menu-item-wrapper">
                        <label for="projects--expand" onclick="showFilterMenu()">
                            <div class="projects--menu-item selected big-text">
                                <div class="menu-stripe--wrapper menu-stripe--wrapper--projects-animation to-cross-reversed">
                                    <div class="menu-stripe--horizontal"></div>
                                    <div class="menu-stripe--vertical"></div>
                                </div>
                                Selected
                            </div>
                        </label>
                        <a href="#" class="projects--menu-item big-text" id="projects--menu-item1">
                            <div class="menu-square">
                                <div class="menu-circle"></div>
                            </div>
                            Offices (19)
                        </a>
                        <a href="#" class="projects--menu-item big-text" id="projects--menu-item2">
                            <div class="menu-square">
                                <div class="menu-circle"></div>
                            </div>
                            Living (8)
                        </a>
                        <a href="#" class="projects--menu-item big-text" id="projects--menu-item3">
                            <div class="menu-square">
                                <div class="menu-circle"></div>
                            </div>
                            Reconstruction (6)
                        </a>
                        <a href="#" class="projects--menu-item big-text" id="projects--menu-item4">
                            <div class="menu-square">
                                <div class="menu-circle"></div>
                            </div>
                            Objects (2)
                        </a>
                        <a href="#" class="projects--menu-item big-text" id="projects--menu-item5">
                            <div class="menu-square">
                                <div class="menu-circle"></div>
                            </div>
                            Interior (15)
                        </a>
                    </div>
                    <div class="projects--collection">
                        <a href="#" class="project-box">
                            <img class="project-box-image" src="content/home/project-img.jpg" alt="">
                            <div class="project-box-text">
                                <h3 class="project-box-title">Vilniaus Sapiegų Tech Parkas</h3>
                                <span class="project-box-date">2018</span>
                            </div>
                        </a>
                        <a href="#" class="project-box">
                            <img class="project-box-image" src="content/home/project-img.jpg" alt="">
                            <div class="project-box-text">
                                <h3 class="project-box-title">Vilniaus Sapiegų Tech Parkas</h3>
                                <span class="project-box-date">2018</span>
                            </div>
                        </a>                        
                        <a href="#" class="project-box">
                            <img class="project-box-image" src="content/home/project-img.jpg" alt="">
                            <div class="project-box-text">
                                <h3 class="project-box-title">Vilniaus Sapiegų Tech Parkas</h3>
                                <span class="project-box-date">2018</span>
                            </div>
                        </a>                        
                        <a href="#" class="project-box">
                            <img class="project-box-image" src="content/home/project-img--long.jpg" alt="">
                            <div class="project-box-text">
                                <h3 class="project-box-title">Vilniaus Sapiegų Tech Parkas</h3>
                                <span class="project-box-date">2018</span>
                            </div>
                        </a>
                        <a href="#" class="project-box">
                            <img class="project-box-image" src="content/home/project-img.jpg" alt="">
                            <div class="project-box-text">
                                <h3 class="project-box-title">Vilniaus Sapiegų Tech Parkas</h3>
                                <span class="project-box-date">2018</span>
                            </div>
                        </a>
                        <a href="#" class="project-box">
                            <img class="project-box-image" src="content/home/project-img.jpg" alt="">
                            <div class="project-box-text">
                                <h3 class="project-box-title">Vilniaus Sapiegų Tech Parkas</h3>
                                <span class="project-box-date">2018</span>
                            </div>
                        </a>
                        <a href="#" class="project-box">
                            <img class="project-box-image" src="content/home/project-img.jpg" alt="">
                            <div class="project-box-text">
                                <h3 class="project-box-title">Vilniaus Sapiegų Tech Parkas</h3>
                                <span class="project-box-date">2018</span>
                            </div>
                        </a>
                        <a href="#" class="project-box">
                            <img class="project-box-image" src="content/home/project-img.jpg" alt="">
                            <div class="project-box-text">
                                <h3 class="project-box-title">Vilniaus Sapiegų Tech Parkas</h3>
                                <span class="project-box-date">2018</span>
                            </div>
                        </a>
                        <a href="#" class="project-box">
                            <img class="project-box-image" src="content/home/project-img--long.jpg" alt="">
                            <div class="project-box-text">
                                <h3 class="project-box-title">Vilniaus Sapiegų Tech Parkas</h3>
                                <span class="project-box-date">2018</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <?php snippet('footer') ?>
    </body>
</html>

