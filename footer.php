        <a href="#top" class="uparrow">
            <!-- Below HTML for the SVG was autogenerated using Adobe Illustrator -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11">
                <style>
                  #parrow {
                    stroke: #fff;
                    fill: #dd9350;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    float: left; 
                    position: absolute; 
                  }
                </style>
              <polyline id="parrow" points=".5 10.5 5.5 .5 10.5 10.5"/>
            </svg>
        </a>
        <footer class="text">
            <div class="footerbar"></div>
            <p id="footerdate"><?= $date ?>The Qern Industries</p>
        </footer>
    </body>      
</html>

<?php
date_default_timezone_set('America/New_York');
$date = date('Y m l', time());