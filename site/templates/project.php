<?php snippet('header') ?>



<body id="project">
    <!-- HERO -->
    <div id="hero" class="hero about-page">
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
        
        <video class="hero--video" muted loop style="display: none;">
            <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.ogv" type="video/ogg">
            <source src="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" type="video/mp4">
            Please <a href="http://learn.shayhowe.com/assets/misc/courses/html-css/adding-media/earth.mp4" download>download</a> the video.
        </video>
        <img src="/architektai/content/index/vilniaus_sapiegu_tech_parkas/individual-project-img.jpg" alt="" style="width: 100%; object-fit: cover; height: 100vh; min-height: 657rem; max-height: 940rem;">
    </div>


    <!-- SOLO PROJECT SECTION -->
    <div class="solo-project">
        <div class="container">
            <div class="solo-project--content">
                <!-- SOLO PROJECT EXPAND INPUT -->
                <input type="checkbox" id="solo-project--expand"/>
                <div class="solo-project--more-info">
                    <label for="solo-project--expand">
                        <div class="solo-project--title">
                            <div class="menu-stripe--wrapper menu-stripe--wrapper--solo-project-animation to-cross-reversed">
                                <div class="menu-stripe--horizontal"></div>
                                <div class="menu-stripe--vertical"></div>
                            </div>
                            <h2 class="big-text">Vilnius Tech Park</h2>
                        </div>
                    </label>
                    <div class="solo-project--more-info-content">
                        <div class="solo-project--more-info-box">
                            <p>Mišrios paskirties visuomeninis pastatas 10 000 m2</p>
                            <p>Adresas: Algirdo g. 89 Vilnius, Lietuva</p>
                            <p>Statusas: 2015-2017 Baigtas projektas</p>
                        </div>
                        <div class="solo-project--more-info-box">
                            <p>Lead Architects: Aurimas Sasnauskas, Sla Malenko, Joris Šykovas, Eglė Židonytė, Greta Frišmantaitė, Paulius Venckūnas</p>
                            <p>Photographs: Norbert Tukaj</p>
                        </div>
                    </div>
                </div>

                <div class="solo-project--first-row">
                    <div class="solo-project--first-row-image-wrap">
                        <img src="/architektai/index/vilniaus_sapiegu_tech_parkas/project-photo-1.jpg" alt="">
                    </div>
                    <div class="solo-project--first-row-image-wrap">
                        <img src="../content/index/vilniaus_sapiegu_tech_parkas/project-photo-2.jpg" alt="">
                        <p>Sculpture by Name Surname</p>
                    </div>
                </div>
                
                <div class="solo-project--second-row">
                    <img src="/architektai/index/vilniaus_sapiegu_tech_parkas/project-photo-3.jpg" alt="">
                </div>

                <div class="solo-project--third-row">
                    <img src="/architektai/index/vilniaus_sapiegu_tech_parkas/project-photo-4.jpg" alt="">
                    <p>The office was founded in 2006 by two architects - Aurimas Sasnauskas (b.1972) and Sla Malenko (b.1975). The practice is based in Vilnius and is focusing on the objects of various scales - from single pieces of design to architectural and urban projects.</p>
                </div>

                <div class="solo-project--fourth-row">
                    <!-- SLICK SLIDER FIRST -->
                    <ul class="slider fancy-slider" id="feature-block-slider" data-aos="fade">
                        <li class="slick-slide" data-aos="fade">
                            <img src="/architektai/content/index/vilniaus_sapiegu_tech_parkas/project-photo-5.jpg" alt="" style="width: 100%; object-fit: cover; height: 100vh; min-height: 657rem; max-height: 940rem;">
                        </li>
                        <li class="slick-slide" data-aos="fade">
                            <img src="/architektai/content/index/vilniaus_sapiegu_tech_parkas/project-photo-5.jpg" alt="" style="width: 100%; object-fit: cover; height: 100vh; min-height: 657rem; max-height: 940rem;">
                        </li>
                    </ul>
                    <button id="prev">Prev</button>
                    <button id="next">Next</button>
                    <p>Vilniaus Sapiegų Tech Parkas Interior</p>
                </div>

                <div class="solo-project--fifth-row">
                    <div class="slick-slider-wrapper">
                        <!-- SLICK SLIDER SECOND -->
                        <ul class="slider--solo-project--second fancy-slider" id="feature-block-slider" data-aos="fade">
                            <li class="slick-slide--second" data-aos="fade">
                                <img src="/architektai/content/index/vilniaus_sapiegu_tech_parkas/project-photo-6.jpg" alt="" style="width: 100%;">
                            </li>
                            <li class="slick-slide--second" data-aos="fade">
                                <img src="/architektai/content/index/vilniaus_sapiegu_tech_parkas/project-photo-6.jpg" alt="" style="width: 100%;">
                            </li>
                        </ul>
                        <button id="prev2">Prev</button>
                        <button id="next2">Next</button>
                        <p>Vilniaus Sapiegų Tech Parkas Interior</p>
                    </div>
                    <div class="slick-slider-wrapper">
                    <!-- SLICK SLIDER THIRD -->
                        <ul class="slider--solo-project--third fancy-slider" id="feature-block-slider" data-aos="fade">
                            <li class="slick-slide--third" data-aos="fade">
                                <img src="/architektai/content/index/vilniaus_sapiegu_tech_parkas/project-photo-7.jpg" alt="" style="width: 100%;">
                            </li>
                            <li class="slick-slide--third" data-aos="fade">
                                <img src="/architektai/content/index/vilniaus_sapiegu_tech_parkas/project-photo-7.jpg" alt="" style="width: 100%;">
                            </li>
                        </ul>
                        <button id="prev3">Prev</button>
                        <button id="next3">Next</button>
                        <p>Vilniaus Sapiegų Tech Parkas Interior</p>
                    </div>
                </div>

                <div class="solo-project--sixth-row">
                    <img src="/architektai/content/index/vilniaus_sapiegu_tech_parkas/project-photo-8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>



    <?php snippet('footer') ?>
</body>
</html>