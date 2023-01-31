<?php $title = 'index'; $titlefancy = 'Home'; $include = "index"; include("header.php");?>

        <main>
            <div id="scrollgallery2">
                <div id="scrollgalimages2">
                    <div id="scrollgalleryfarleft" class="scrollgallerythings">
                        <img src="carp.jpg" id="scrollgalleryfarleftimg">
                        <div id="scrollgalleryfarleftopacity" class="opacity">
                            <a href="environment.php" class="nounderline"><p class="scrolltextcategory subhead" id="scrollgalleryfarleftcategory">Environment</p></a>
                            <a href="carp.php" class="nounderline"><p class="scrolltexttitle nounderline" id="scrollgalleryfarlefttitle">Qern C.A.R.P. River Initiative</p></a>
                            <a href="carp.php" class="nounderline"><p class="scrolltextsubtitle text" id="scrollgalleryfarleftsubtitle">Ecological Engineering by Qern&trade;</p></a>
                        </div>
                    </div>
                    <div id="scrollgalleryleft" class="scrollgallerythings">
                        <img src="German-Logging.webp" id="scrollgalleryleftimg">
                        <div id="scrollgalleryleftopacity" class="opacity">
                            <a href="environment.php" class="nounderline"><p class="scrolltextcategory subhead" id="scrollgalleryleftcategory">Environment</p></a>
                            <a href="log.php" class="nounderline"><p class="scrolltexttitle nounderline" id="scrollgallerylefttitle">Qern Logging Initiative</p></a>
                            <a href="log.php" class="nounderline"><p class="scrolltextsubtitle text" id="scrollgalleryleftsubtitle">Offering Germany Alternatives to Plastic</p></a>
                        </div>
                    </div>
                    <div id="scrollgallerymain" class="scrollgallerythings">
                        <img src="xda80211.jpg" id="scrollgallerymainimg">
                        <div id="scrollgallerymainopacity" class="opacity">
                            <a href="arms.php" class="nounderline"><p class="scrolltextcategory subhead" id="scrollgallerymaincategory">Arms</p></a>
                            <a href="xda80211.php" class="nounderline"><p class="scrolltexttitle nounderline" id="scrollgallerymaintitle">The Future of Artillery Targeting</p></a>
                            <a href="xda80211.php" class="nounderline"><p class="scrolltextsubtitle text" id="scrollgallerymainsubtitle">Qern XDA80211 Released</p></a>
                        </div>
                    </div>
                    <div id="scrollgalleryright" class="scrollgallerythings">
                        <img src="Cincinnati-Subway.jpg" id="scrollgalleryrightimg">
                        <div id="scrollgalleryrightopacity" class="opacity">
                            <a href="economy.php" class="nounderline"><p class="scrolltextcategory subhead" id="scrollgalleryrightcategory">Economy</p></a>
                            <a href="cincy.php" class="nounderline"><p class="scrolltexttitle nounderline" id="scrollgalleryrighttitle">Unparalleled Rail Transport</p></a>
                            <a href="cincy.php" class="nounderline"><p class="scrolltextsubtitle text" id="scrollgalleryrightsubtitle">The Qern&trade; Cincinnati Subway</p></a>
                        </div>
                    </div>
                    <div id="scrollgalleryfarright" class="scrollgallerythings">
                        <img id="scrollgallery5" src="iceland-river.jpg" id="scrollgalleryfarrightimg">
                        <div id="scrollgalleryfarrightopacity" class="opacity">
                            <a href="environment.php" class="nounderline"><p class="scrolltextcategory subhead" id="scrollgalleryfarrightcategory">Environment</p></a>
                            <a href="kirkjufell.php" class="nounderline"><p class="scrolltexttitle nounderline" id="scrollgalleryfarrighttitle">Kirkjufell Waterfall Diversion</p></a>
                            <a href="kirkjufell.php" class="nounderline"><p class="scrolltextsubtitle text" id="scrollgalleryfarrightsubtitle">Diverting Waterfalls with Qern&trade;</p></a>
                        </div>
                    </div>
                    <a href="#/" id="scrollgalleft" class="scrollgalcontrols" onclick="shiftright();"><img src="side-arrow.svg"></a>
                    <a href="#/" id="scrollgalright" class="scrollgalcontrols" onclick="shiftleft();"><img src="side-arrow.svg"></a>
                </div>
            </div>
            <!-- Inner Container -->
            <div class="inner">
                <!-- News Div -->
                <section id="newsdiv">
                    <!-- Left Side -->
                    <!-- Jump Down to News -->
                    <a href="#news" class="heading" style="border-right-width: .1vw; border-right-style: solid; border-right-color: #818281; width: 10%;">
                        News
                        <!-- Design and Add SVG Later -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 6">
                          <defs>
                            <style>
                              #downarrow {
                                fill: #dd9350;
                                stroke: #818281;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                              }
                            </style>
                          </defs>
                          <polyline id="downarrow" points=".5 .5 5.5 5.5 10.5 .5"/>
                        </svg>
                    </a>
                    <a style="text-align: center; justify-content: center; text-decoration: none;" href="xda80211.php">Qern XDA80211 Release</a>
                </section>
                <!-- Image Gallery -->
                <section id="gallery">
                    <!-- Qern Zero Main Div -->
                    <a style="width: 15vw; height: 7vw; margin-top: 2vw;" href="zero.php">
                        <figure style="width: 100%; height: 100%; padding: 0; margin: 0;">
                            <img src="qernzero.png">
                        </figure>
                        <!-- Text Div -->
                        <figcaption>
                            <span class="subhead" style="font-size: 0.75vw;">Industrial Electronics</span>
                            <span class="text" style="font-size: .5vw; color: #000;">The All New Qern Zero; Available For Purchase Today</span>
                        </figcaption>
                    </a>
                </section>
                <!-- News Div -->
                <section id="news">
                    <h2 class="heading">News</h2>
                    <!-- First News Entry -->
                    <a href="xda80211.php">
                        <div class="subhead news">2022-10-02</div>
                        <p class="text">Qern XDA80211 Release</p>
                    </a>                    
                    <!-- Second News Entry -->
                    <a href="cincy.php">
                        <div class="subhead news">2022-08-21</div>
                        <p class="text" id="news">The Qern Cincinnati Subway</p>
                    </a>                    
                    <!-- Third News Entry -->
                    <a href="kirkjufell.php">
                        <div class="subhead news">2022-07-18</div>
                        <p class="text">Kirkjufell Waterfall Diversion</p>
                    </a>                    
                    <!-- Fourth News Entry -->
                    <a href="carp.php">
                        <div class="subhead news">2022-05-12</div>
                        <p class="text">Qern C.A.R.P River Initiative</p>
                    </a>                    
                    <!-- Fifth News Entry -->
                    <a href="log.php">
                        <div class="subhead news">2022-04-15</div>
                        <p class="text">Qern German Logging Initiative</p>
                    </a>
                    <!-- Sixth News Entry -->
                    <a href="zero.php">
                        <div class="subhead news">2022-02-05</div>
                        <p class="text">Qern Zero Release</p>
                    </a>
                </section>
            </div>
        </main>

<?php include("footer.php");?>
