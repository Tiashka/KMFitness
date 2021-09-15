<!DOCTYPE html>
<html>
<title>KM Fitness</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">

<body>
    <?php include("components/header.php");?>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">KM Health and Fitness</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">KM Health and Fitness</span><br>
            <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
            <p><a href="#about"
                    class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn
                    more and start today</a></p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </header>

    <!-- About Section -->
    <div class="w3-container" style="padding:70px 16px" id="about">
        <h3 class="w3-center">ABOUT THE COMPANY</h3>
        <p class="w3-center w3-large">Key principles of our company</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-third">
                <i class="fas fa-fire-alt w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Dedication</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore.</p>
            </div>
            <div class="w3-third">
                <i class="fas fa-dumbbell w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">Passion</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore.</p>
            </div>

            <div class="w3-third">
                <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Obsession</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore.</p>
            </div>
        </div>
    </div>
    <div class="parallax1"></div>
    <div class="w3-container" style="padding:70px 16px" id="about">
        <h2 class="w3-center">What we offer</h2>
        <div class=" w3-center">
            <p class="w3-large">Training and nutrition plans which are tailored to your specific training and nutrition
                goals, helping you stay on track and meet your targets.</p>
            <p class="w3-large">Detailed meal planning outlining calories and portion sizes, including quick easy
                recipes, we all know the hardest part of eating healthy is deciding what to eat.</p>
            <p class="w3-large">Custom training plans on a week by week providing you with the blueprint to achieve that
                ideal body youve always wanted.
            </p>
            <p class="w3-large">One on one advice and guidance whenever its required, sometimes we all need that push
                when we feel that plateau.</p>
            <br>
            <p>All at an affordable cost.</p>
        </div>
    </div>
    <div class="parallax1"></div>

    <!-- Promo Section - "We know design" -->
    <div class="w3-container w3-light-grey" style="padding:70px 16px">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>We know fitness.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut
                    labore et dolore.</p>
                <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
            </div>
            <div class="w3-col m6">
                <img class="w3-image w3-round-large" src="/w3images/phone_buildings.jpg" alt="Buildings" width="700"
                    height="394">
            </div>
        </div>
    </div>
    <div class="parallax2"></div>
    <!-- Team Section -->
    <div class="w3-container" style="padding:70px 16px" id="team">
        <h3 class="w3-center">THE TEAM</h3>
        <p class="w3-center w3-large">The ones who runs this company</p>
        <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="/w3images/team2.jpg" alt="John" style="width:100%">
                    <div class="w3-container">
                        <h3>John Doe</h3>
                        <p class="w3-opacity">CEO & Founder</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                            elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
                    <div class="w3-container">
                        <h3>Anja Doe</h3>
                        <p class="w3-opacity">Art Director</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                            elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
                    <div class="w3-container">
                        <h3>Mike Ross</h3>
                        <p class="w3-opacity">Web Designer</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                            elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
                    <div class="w3-container">
                        <h3>Dan Star</h3>
                        <p class="w3-opacity">Designer</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque
                            elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                Contact</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Section "Statistics" -->
    <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
        <div class="w3-quarter">
            <span class="w3-xxlarge">14+</span>
            <br>Partners
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">55+</span>
            <br>Projects Done
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">89+</span>
            <br>Happy Clients
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">150+</span>
            <br>Meetings
        </div>
    </div>

    <!-- Work Section -->
    <div class="w3-container" style="padding:128px 16px" id="work">
        <h3 class="w3-center">OUR WORK</h3>
        <p class="w3-center w3-large">What we've done for people</p>

        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="A microphone">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="A phone">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="A drone">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Soundbox">
            </div>
        </div>

        <div class="w3-row-padding w3-section">
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="A tablet">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="A camera">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)"
                    class="w3-hover-opacity" alt="A typewriter">
            </div>
            <div class="w3-col l3 m6">
                <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)"
                    class="w3-hover-opacity" alt="A tableturner">
            </div>
        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright"
            title="Close Modal Image">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="w3-container w3-light-grey w3-padding-64">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>Our Skills.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                    tempor incididunt ut labore et dolore.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
                    tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-col m6">
                <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
        <h3>PRICING</h3>
        <p class="w3-large">Choose a pricing plan that fits your needs.</p>
        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-third w3-section">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
                    <li class="w3-padding-16"><b>10GB</b> Storage</li>
                    <li class="w3-padding-16"><b>10</b> Emails</li>
                    <li class="w3-padding-16"><b>10</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">$ 10</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
                    <li class="w3-padding-16"><b>25GB</b> Storage</li>
                    <li class="w3-padding-16"><b>25</b> Emails</li>
                    <li class="w3-padding-16"><b>25</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">$ 25</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third w3-section">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
                    <li class="w3-padding-16"><b>50GB</b> Storage</li>
                    <li class="w3-padding-16"><b>50</b> Emails</li>
                    <li class="w3-padding-16"><b>50</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">$ 50</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <?php include("components/footer.php");?>

    <script src="scripts.js"></script>

</body>

</html>