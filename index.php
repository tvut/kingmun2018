<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'phpinclude/head.php'; ?>
    <meta name="description"
          content="KINGMUN is a two day Model UN conference run entirely by high school students in Kirkland, Washington!">
    <title>KINGMUN 2018</title>
    <script defer type="text/javascript">
        // Countdown with redirect
        var countDownDate = new Date("Apr 28, 2018 8:30:00").getTime();
        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
            document.getElementById("days2").innerHTML = days;
            document.getElementById("hours2").innerHTML = hours;
            document.getElementById("minutes2").innerHTML = minutes;
            document.getElementById("seconds2").innerHTML = seconds;
        }, 1000);
    </script>
    <style>
        .letterL {
            padding-left: 40px;
        }

        #letterh2 {
            font-size: 4vh;
        }

        #letterh3 {
            font-size: 3.3vh;
        }

        .letterpart h2, #font3 {
            font-family: 'Lora', serif;
        }
    </style>
</head>
<body>
<?php include 'phpinclude/nav.php'; ?>
<div class="fullscreen-bg">
    <video loop muted autoplay poster="content/images/bg.jpg" id="bgvid" class="fullscreen-bg__video">
        <source data-src="content/kingmunbg.mp4">
    </video>
</div>
<div class="gradfull">
    <div class="imagefull" id="viewport">
        <div>
            <img src="content/images/logowhite.svg" style="max-width:30%;"/>
            <h5 class="animated bounceInUp" style="font-size:3vw">Lake Washington High School</h5>
            <h1 class="animated bounceInUp" style="margin-top:0px;">KINGMUN 2018</h1>
            <h5 class="animated bounceInUp" style="font-size:3vw">April 28-29</h5>
            <div style="width:100%;height:15px"></div>
            <a href="registration/" class="clearbutton">Register Now!</a>
        </div>
    </div>
</div>
<div style="width:100vw;padding: 5vh;text-align: center;background-color: rgb(0,26,51);color:white">
    <h2>Position Papers are due to your dais' email (found on your committee page) on the 20th of April at 11:59 PM and the 25th of April at 11:59PM for Senate.</h2>
</div>
<div id="letters" class="imagebg">
    <div class="letterpart part1">
        <div class="grad">
            <div class="letterL">
                <h2 id="letterh2">Delegates, Faculty Advisors, and Visitors,</h2>
                <h3 id="letterh3">These last few years of King County Model United Nations have focused on two things-
                    growth and community. From our humble beginnings, KINGMUN has blossomed into a massive weekend of
                    270 delegates, 30 staff and 10 secretariat members. Hopefully, this year we can build on both of
                    these goals and bring you one of the best debate experiences the West Coast has to offer.</h3>
            </div>
        </div>
    </div>
    <div class="letterpart part2">
        <div class="grad">
            <div class="letterR">
                <h3 id="letterh3">It’s our honor to welcome you to KINGMUN 2018. Registration will open up February 12th
                    for delegates to experience another weekend of intense debate and diplomacy. Looking forward to the
                    largest KINGMUN yet, we’re hosting 9 committees ranging from space agencies (UNOOSA) to the all-time
                    favorite JCC. Each committee will be focused around this year’s theme, “Goal 15”, named after one of
                    the United Nations goals for sustainable development (By the way, if you have any free time I highly
                    encourage you to look through some of these goals, found on the UN website). This particular goal,
                    “Life on Land”, we’re expanding to fit climate change, environmental impacts, and much more. Always
                    unique to KINGMUN, we feel that if delegates have a common goal each committee can accomplish more
                    as the weekend goes on. </h3>
            </div>
        </div>
    </div>
    <div class="letterpart part3">
        <div class="grad">
            <div class="letterL">
                <h3 id="letterh3">Delegate fees for this year’s KINGMUN will not exceed $20, and it’s part of our
                    continuous commitment to community that we keep KINGMUN accessible for any and all delegates. If
                    attending KINGMUN is a financial hardship in any way, please reach out to us and we would be more
                    than happy to arrange special consideration. As always, my secretariat and I are always here to make
                    your KINGMUN experience as enjoyable as possible. At any time, send an email to <a
                            href="mailto:sg@kingmun.org">sg@kingmun.org</a> with any questions or concerns you might
                    have. </h3>
                <h2 id="letterh2" style="width:100%;text-align:right; line-height:40pt">Yours always,<br/>Trevor Mueller
                </h2><br/>
                <img style="float:right; width:50%" src="content/images/tsig.png"/>
            </div>
        </div>
    </div>
    <div class="grad">
        <div class="imagefull" id="viewport">
            <div style="min-width:80%;">
                <table style=" width:100%">
                    <tr style="width:100%">
                        <td style="width:50%;padding:5px;"><h5>Venue</h5></td>
                        <td style="width:50%;padding:5px;"><h5>Date</h5></td>
                    </tr>
                    <tr style="width:100%">
                        <td style="width:50%;padding:5px;"><h2>Lake Washington High School</h2></td>
                        <td style="width:50%;padding:5px;"><h2>April 28-29th</h2></td>
                    </tr>
                </table>
                <div id="countdown" style="margin-top:100px;margin-bottom:100px;">
                    <h2 style="margin-top:0px;">KINGMUN Begins In</h2>
                    <table class="table table-responsive hidden-xs">
                        <tr>
                            <td><h1 class="countdown" id="days"></h1></td>
                            <td><h1 class="countdown" id="hours"></h1></td>
                            <td><h1 class="countdown" id="minutes"></h1></td>
                            <td><h1 class="countdown" id="seconds"></h1></td>
                        </tr>
                        <tr>
                            <td><h2 class="countdown">days</h2></td>
                            <td><h2 class="countdown">hours</h2></td>
                            <td><h2 class="countdown">minutes</h2></td>
                            <td><h2 class="countdown">seconds</h2></td>
                        </tr>
                    </table>
                    <h1 class="visible-xs"><span id="days2"></span> days, <span id="hours2"></span> hours, <span
                                id="minutes2"></span> minutes, <span id="seconds2"></span> seconds</h1>
                </div>
                <table style="width:100%;">
                    <tr style="width:100%">
                        <td style="width:33%;padding:5px;"><h5>Committees</h5></td>
                        <td style="width:33%;padding:5px;"><h5>Delegates</h5></td>
                        <td style="width:33%;padding:5px;"><h5>Price</h5></td>
                    </tr>
                    <tr style="width:100%">
                        <td style="width:33%;padding:5px;"><h2>10</h2></td>
                        <td style="width:33%;padding:5px;"><h2>200+</h2></td>
                        <td style="width:33%;padding:5px;"><h2>$20</h2></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="elseletter" class="container-body blue smallhidden">
    <div class="container">
        <h2 id="font3" style="text-align:left">Delegates, Faculty Advisors, and Visitors, </h2>
        <h3>These last few years of King County Model United Nations have focused on two things- growth and community.
            From our humble beginnings, KINGMUN has blossomed into a massive weekend of 270 delegates, 30 staff and 10
            secretariat members. Hopefully, this year we can build on both of these goals and bring you one of the best
            debate experiences the West Coast has to offer.</h3>
        <h3>It’s our honor to welcome you to KINGMUN 2018. Registration will open up February 12th for delegates to
            experience another weekend of intense debate and diplomacy. Looking forward to the largest KINGMUN yet,
            we’re hosting 9 committees ranging from space agencies (UNOOSA) to the all-time favorite JCC. Each committee
            will be focused around this year’s theme, “Goal 15”, named after one of the United Nations goals for
            sustainable development (By the way, if you have any free time I highly encourage you to look through some
            of these goals, found on the UN website). This particular goal, “Life on Land”, we’re expanding to fit
            climate change, environmental impacts, and much more. Always unique to KINGMUN, we feel that if delegates
            have a common goal each committee can accomplish more as the weekend goes on.</h3>
        <h3>Delegate fees for this year’s KINGMUN will not exceed $20, and it’s part of our continuous commitment to
            community that we keep KINGMUN accessible for any and all delegates. If attending KINGMUN is a financial
            hardship in any way, please reach out to us and we would be more than happy to arrange special
            consideration. As always, my secretariat and I are always here to make your KINGMUN experience as enjoyable
            as possible. At any time, send an email to <a href="mailto:sg@kingmun.org">sg@kingmun.org</a> with any
            questions or concerns you might have.</h3>
        <h2 id="font3" style="width:100%;text-align:right">Yours always,<br/>Trevor Mueller</h2><br/>
        <img style="float:right; width:50%" src="content/images/tsig.png"/>
    </div>
</div>
<div id="map"></div>
<?php include 'phpinclude/footer.php'; ?>
</body>
</html>
test