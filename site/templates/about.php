<?php snippet('header') ?>



<body id="about">
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
                    <h1 class="page-title big-text">About</h1>
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
        <img src="content/about/hero-img--about-page.jpg" alt="" style="width: 100%; object-fit: cover; height: 100vh; min-height: 657rem; max-height: 940rem;">
    </div>
    

    <!-- ABOUT SECTION -->
    <div class="about">
        <div class="container">
            <div class="about--content">
                <div class="about--description">
                    <p class="about--description-text">The office was founded in 2006 by two architects - Aurimas Sasnauskas (b.1972) and Sla Malenko (b.1975). The practice is based in Vilnius and is focusing on the objects of various scales - from single pieces of design to architectural and urban projects.</p>
                    <p class="about--description-text">Sla Malenko (b.1975). The practice is based in Vilnius and is focusing on the objects of various scales - from single pieces of design to architectural and urban projects.</p>
                </div>
                <!-- TEAM EXPAND INPUT -->
                <input type="checkbox" id="team--expand"/>
                <div class="about--team">
                    <label for="team--expand" onclick="showTeamMembers()">
                        <div class="about--team-title">
                            <div class="menu-stripe--wrapper menu-stripe--wrapper--team-animation to-cross-reversed">
                                <div class="menu-stripe--horizontal"></div>
                                <div class="menu-stripe--vertical"></div>
                            </div>
                            <h2 class="big-text">Team</h2>
                        </div>
                    </label>    
                    <div class="about--team-list">
                        <div class="about--team-person">
                            <img src="content/about/team--person-image.jpg" alt="" class="about--team-person-image">
                            <div class="about--team-person-info">
                                <p class="about--team-person-name">Aurimas Sasnauskas</p>
                                <p class="about--team-person-role">Partneris</p>
                                <p class="about--team-person-phone">00370 686 47835</p>
                                <p class="about--team-person-mail">a.sasnauskas@a2sm.lt</p>
                            </div>
                        </div>
                        <div class="about--team-person">
                            <img src="content/about/team--person-image.jpg" alt="" class="about--team-person-image">
                            <div class="about--team-person-info">
                                <p class="about--team-person-name">Aurimas Sasnauskas</p>
                                <p class="about--team-person-role">Partneris</p>
                                <p class="about--team-person-phone">00370 686 47835</p>
                                <p class="about--team-person-mail">a.sasnauskas@a2sm.lt</p>
                            </div>
                        </div>
                        <div class="about--team-person">
                            <img src="content/about/team--person-image.jpg" alt="" class="about--team-person-image">
                            <div class="about--team-person-info">
                                <p class="about--team-person-name">Aurimas Sasnauskas</p>
                                <p class="about--team-person-role">Partneris</p>
                                <p class="about--team-person-phone">00370 686 47835</p>
                                <p class="about--team-person-mail">a.sasnauskas@a2sm.lt</p>
                            </div>
                        </div>
                        <div class="about--team-person">
                            <img src="content/about/team--person-image.jpg" alt="" class="about--team-person-image">
                            <div class="about--team-person-info">
                                <p class="about--team-person-name">Aurimas Sasnauskas</p>
                                <p class="about--team-person-role">Partneris</p>
                                <p class="about--team-person-phone">00370 686 47835</p>
                                <p class="about--team-person-mail">a.sasnauskas@a2sm.lt</p>
                            </div>
                        </div>
                        <div class="about--team-person">
                            <img src="content/about/team--person-image.jpg" alt="" class="about--team-person-image">
                            <div class="about--team-person-info">
                                <p class="about--team-person-name">Aurimas Sasnauskas</p>
                                <p class="about--team-person-role">Partneris</p>
                                <p class="about--team-person-phone">00370 686 47835</p>
                                <p class="about--team-person-mail">a.sasnauskas@a2sm.lt</p>
                            </div>
                        </div>
                        <div class="about--team-person">
                            <img src="content/about/team--person-image.jpg" alt="" class="about--team-person-image">
                            <div class="about--team-person-info">
                                <p class="about--team-person-name">Aurimas Sasnauskas</p>
                                <p class="about--team-person-role">Partneris</p>
                                <p class="about--team-person-phone">00370 686 47835</p>
                                <p class="about--team-person-mail">a.sasnauskas@a2sm.lt</p>
                            </div>
                        </div>
                        <div class="about--team-person">
                            <img src="content/about/team--person-image.jpg" alt="" class="about--team-person-image">
                            <div class="about--team-person-info">
                                <p class="about--team-person-name">Aurimas Sasnauskas</p>
                                <p class="about--team-person-role">Partneris</p>
                                <p class="about--team-person-phone">00370 686 47835</p>
                                <p class="about--team-person-mail">a.sasnauskas@a2sm.lt</p>
                            </div>
                        </div>
                        <div class="about--team-person">
                            <img src="content/about/team--person-image.jpg" alt="" class="about--team-person-image">
                            <div class="about--team-person-info">
                                <p class="about--team-person-name">Aurimas Sasnauskas</p>
                                <p class="about--team-person-role">Partneris</p>
                                <p class="about--team-person-phone">00370 686 47835</p>
                                <p class="about--team-person-mail">a.sasnauskas@a2sm.lt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PUBLICITY EXPAND INPUT -->
                <input type="checkbox" id="publicity--expand"/>
                <div class="about--publicity">
                    <label for="publicity--expand">
                        <div class="about--publicity-title">
                            <div class="menu-stripe--wrapper menu-stripe--wrapper--publicity-animation to-cross-reversed">
                                <div class="menu-stripe--horizontal"></div>
                                <div class="menu-stripe--vertical"></div>
                            </div>
                            <h2 class="big-text">Publicity</h2>
                        </div>
                    </label>
                    <div class="about--publicity-description">
                        <div class="about--publicity-awards">
                            <h3>Awards:</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                            <p>llamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                        <div class="about--publicity-featured">
                            <h3>Featured</h3>
                            <p>llamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php snippet('footer') ?>
</body>
</html>