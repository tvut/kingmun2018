<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include '../phpinclude/headsub.php'; ?>
    <meta name="description"
          content="Register for KINGMUN 2018!">
    <title>Registration</title>
</head>
<body>
<?php include '../phpinclude/navsub.php'; ?>
<div class="imagebg" style="background-image:url(../content/images/bgregistration.JPG)">
    <div class="imagefull" id="viewport">
        <div class="gradfull centerflex">
            <div>
                <h1>Registration</h1>
            </div>
        </div>
    </div>
    <div class="blue container-body">
        <div class="container container-body">
            <h3>
                Thank you for your interest in KINGMUN 2018! Positions are given on a first come first serve basis - we
                suggest you register early to ensure that enough spots remain for your entire delegation.
            </h3>
            <h3>KINGMUN 2018 will cost $20, which should be payed as either cash or check at the conference.</h3>
            <h3>
                Any questions should be directed to <a href="mailto:da@kingmun.org">da@kingmun.org</a>.
                We look forward to seeing your delegation at King County Model United Nations 2018!
            </h3>
            <h3>Please follow the steps outlined below to register:</h3>
            <button type="button" class="confbut" data-toggle="collapse" data-target="#reg"><h2>Step by Step
                    Registration</h2></button>
            <div id="reg" class="collapse">
                <h3>
                    <b>1.</b> Your head delegate or adviser fills out the form below with your delegation's information. The most important detail here is to input an accurate number of spots that you believe your delegation will be bringing: This helps us work out the exact number of materials we need before the conference.
                </h3>
                <h3>
                    <b>2.</b> Delegates can then go into the registration page themselves and fill out the form accordingly with name, requested positions, emergency contacts, etc. Please note that they will select their registration under their school. Once your delegation reaches the number the adviser/head delegate initially inputted, no further registrations for that school will be allowed. If you do wish to bring more delegates, email <a href="mailto:da@kingmun.org">da@kingmun.org</a> and they will add additional spots to your delegation.
                </h3>
                <h3>If you do not receive a confirmation email within three days of submitting the form, please contact
                    us at <a href="mailto:da@kingmun.org">da@kingmun.org</a> and
                    fill out the form again. </h3>
                <h3>
                    <b>3.</b> Delegates will then receive an email with their assignment and a delegate agreement. Delegates are expected to fill out the agreement prior to the conference.  Once the school has reached the total number of people that it initially applied for, we will send the head delegate/adviser a list of all assignments for that delegation.
                </h3>
                <h3>
                    <b>4.</b> We only require one chaperone/adviser per school although we suggest a minimum of one adult per 15 delegates. Please email us this information for your delegations chaperones/adviser in a timely fashion so we can prepare materials well before the conference.
                </h3>
                <h3>
                    <b>5.</b> You will be emailed an invoice based strictly on the number of delegates in attendance—there is no delegation fee. The cost is 20 dollars per delegate. Schools will be paying altogether.
                </h3>
                <h3>
                    <b>6.</b> If you have delegates who want to join or who decide not to come, you can request more spots or give some country spots back by emailing <a href="mailto:da@kingmun.org">da@kingmun.org</a> and we will adjust your invoice. However, one week before the conference we will close the registration to new delegates or to returning spots.
                </h3>
                <h3>
                    <b>7.</b> For your delegates to attend the conference on April 28th, we either need your delegation's payment or we need proof that you have submitted a form to have the money transferred (a scan or copy of the completed form).
                </h3>
                <h3>
                    <b>8.</b> When you show up on the day of the conference, we will have pens, notepads, USBs, placards, nametags, and other materials organized and ready for your head delegate or adviser to pick up.
                </h3>
            </div>
            <button id="smallbuttom" type="button" class="confbut" data-toggle="collapse" data-target="#delreg"><h2>
                    Delegation Registration</h2></button>
            <div id="delreg" class="collapse">
                <div style="max-width: 80%;margin-left: auto;margin-right: auto;">
                    <?php
                    if (0 !== filesize("delegationlist.txt")) {
                        echo "<h3>Delegations that have already been registered:</h3>";
                        $file = fopen("delegationlist.txt", "r") or exit("Unable to open file!");
                        $x = 0;
                        while (!feof($file)) {
                            $temp = fgets($file);
                            echo "<h3>&bull; " . substr($temp, 0, strrpos($temp, "#") - 1) . "<h3/>";
                            $x = $x + 1;
                        }
                        fclose($file);
                        echo "<h3>If your delegation hasn't been registered, please register now:</h3>";
                    }
                    ?>
                    <a href="delegation.php" class="confbut"><h2>Register Delegation</h2></a>
                </div>
            </div>
            <button type="button" class="confbut" data-toggle="collapse" data-target="#matrix"><h2>Country Matrix</h2>
            </button>
            <div id="matrix" class="collapse">
                <iframe style="height:50vh;width:100%"
                        src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTh96vUeQbJhUu35g-R8fZwOZdWiOQsC4IiO9Lbr-bZjM4KALvgrkxk-qZyXhHav85MV_VqPGHrl3hM/pubhtml?widget=true&amp;headers=false"></iframe>
            </div>
            <a href="delegate.php" class="confbut" data-toggle="collapse" data-target="#regform"><h2>Delegate
                    Registration</h2></a>
        </div>
    </div>
</div>
<?php include '../phpinclude/footer.php'; ?>
</body>
</html>