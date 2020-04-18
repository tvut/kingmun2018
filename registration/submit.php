<?php
if (isset($_POST['submit'])) {
    $delegation = $_POST['112932917'];
    if ($delegation == "indv") {
        $savestring = $_POST['1623957204'] . " is a Individual Delegate\n";
    } else {
        $filename = "delegationlist.txt";
        $fp = fopen($filename, "r") or die("Couldn't create new file");
        $fl = fread($fp, filesize($filename));
        $fl = explode("\n", $fl);
        $currentsize = substr($fl[$delegation], strrpos($fl[$delegation], "#") + 2);
        if ($currentsize > 0) {
            $currentsize = $currentsize - 1;
            $savestring = $_POST['1623957204'] . " from " . substr($fl[$delegation], 0, strrpos($fl[$delegation], "#") - 1) . "\n";
            $fl[$delegation] = substr($fl[$delegation], 0, strrpos($fl[$delegation], "#") + 2) . $currentsize;
        } else {
            $savestring = $_POST['1623957204'] . " from " . substr($fl[$delegation], 0, strrpos($fl[$delegation], "#") - 1) . "REJECTED\n";
            header("Location: http://kingmun.org/registration/error.php");
        }
        $fl = implode("\r\n", $fl);
        fclose($fp);

        $fp = fopen($filename, "w+") or die("Couldn't create new file");
        fwrite($fp, $fl);
        fclose($fp);
    }
    $file = fopen("registrationlist.txt", "a+");
    fwrite($file, $savestring);
    fclose($file);
}
?>
<!DOCTYPE html>
<!--action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSd90rnDX3XTjD3mlhL6pWf67d5QZpgF5E0-2PbJk9if0eMpJQ/formResponse"-->
<!--
$.post('https://docs.google.com/forms/u/1/d/e/1FAIpQLSd90rnDX3XTjD3mlhL6pWf67d5QZpgF5E0-2PbJk9if0eMpJQ/formResponse', $('#mG61Hd').serialize())
                    $("#loading").css("display", "block");
                    setTimeout(function () {
                        window.location = "delegatereg.php";
                    }, 5000);
                    -->
<!--
$(function () {
            $("#button").click(function () {
                $("#loading").css("display", "block");
                var field3 = $('#mG61Hd').val();
                $.ajax({
                    url: "https://docs.google.com/forms/u/1/d/e/1FAIpQLSd90rnDX3XTjD3mlhL6pWf67d5QZpgF5E0-2PbJk9if0eMpJQ/formResponse",
                    data: $('#mG61Hd').serialize(),
                    type: "POST",
                    dataType: "xml",
                    statusCode: {
                        0: function() {
                            window.location = "delegatereg.php";
                        },
                        200: function() {
                            window.location = "delegatereg.php";
                        }
                    }
                });
                }
            );
        });
        -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Registration</title>
    <meta name="description" content="Register for KINGMUN 2018!">
    <?php include '../phpinclude/headsub.php'; ?>
    <script type="text/javascript">
        $(document).ready(function () {
            var field3 = $('#mG61Hd').val();
            $.ajax({
                url: "https://docs.google.com/forms/u/1/d/e/1FAIpQLSd90rnDX3XTjD3mlhL6pWf67d5QZpgF5E0-2PbJk9if0eMpJQ/formResponse",
                data: $('#mG61Hd').serialize(),
                type: "POST",
                dataType: "xml",
                statusCode: {
                    0: function () {
                        window.location = "delegatereg.php";
                    },
                    200: function () {
                        window.location = "delegatereg.php";
                    }
                }
            });
        })
        ;
    </script>
</head>
<body>
<div id="loading" class="imagefull blue"
     style="display:block; position: fixed;top:0px;left:0px;z-index: 999; transition: 5s all">
    <div class="centerflex imagefull">
        <div>
            <img class="imagegrow" style="width: 150px"
                 src="../content/images/logowhite.svg">
        </div>
    </div>
</div>
<form style="display: none;"
      action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSd90rnDX3XTjD3mlhL6pWf67d5QZpgF5E0-2PbJk9if0eMpJQ/formResponse"
      target="_self" method="POST" id="mG61Hd">
    <input class="input-lg form-control" id="name" type="text" placeholder="First Last"
           name="entry.1623957204"
           value="<?php echo $_POST['1623957204']; ?>"/>
    <input class="input-lg form-control" id="delegation" type="text" autocomplete="off"
           placeholder="Delegation"
           name="entry.112932917" / value="<?php
    if (isset($_POST['submit'])) {
        $delegation = $_POST['112932917'];
        if ($delegation == "indv") {
            echo "Individual Delegate";
        } else {
            $filename = "delegationlist.txt";
            $fp = fopen($filename, "r") or die("Couldn't create new file");
            $fl = fread($fp, filesize($filename));
            $fl = explode("\n", $fl);
            echo substr($fl[$delegation], 0, strrpos($fl[$delegation], "#") - 1);
            fclose($fp);
        }
        fclose($file);
    }
    ?>">
    <input id="phone" type="text" placeholder="Phone Number" name="entry.518681367"
           class="input-lg form-control"
           value="<?php echo $_POST['518681367']; ?>"/>
    <input type="text" name="entry.1876818326" value="<?php echo $_POST['1876818326']; ?>">
    <input class="input-lg form-control" id="email" type="text" placeholder="youremail@example.com"
           name="entry.825041508" value="<?php echo $_POST['825041508']; ?>"/>
    <input id="grade" type="text" class="input-lg form-control" value="<?php echo $_POST['362535665']; ?>"
           placeholder="Grade"
           name="entry.362535665">
    <input class="input-lg form-control" id="contact" type="text" placeholder="First and Last"
           name="entry.1947367510" value="<?php echo $_POST['1947367510']; ?>"/>
    <input id="contactphone" type="text" placeholder="Phone Number" name="entry.933110634"
           class="input-lg form-control"
           value="<?php echo $_POST['933110634']; ?>"/>
    <input class="input-lg form-control" id="contactemail" type="text"
           placeholder="youremail@example.com"
           name="entry.664167050" value="<?php echo $_POST['664167050']; ?>"/>
    <input class="input-lg form-control" id="contactrelation" type="text"
           placeholder="Mom, Dad, etc."
           name="entry.278947312" value="<?php echo $_POST['278947312']; ?>"/>
    <input class="input-lg form-control" id="contact" type="text" placeholder="First and Last"
           name="entry.1425653941" value="<?php $delegation = $_POST['112932917'];
    if ($delegation == "indv") {
        echo $_POST['1425653941'];
    }
    ?>"/>
    <input id="contactphone" type="text" placeholder="Phone Number" name="entry.960718384"
           class="input-lg form-control"
           value="<?php $delegation = $_POST['112932917'];
           if ($delegation == "indv") {
               echo $_POST['960718384'];
           }
           ?>"/>
    <input class="input-lg form-control" id="contactemail" type="text"
           placeholder="youremail@example.com"
           name="entry.913376672" value="<?php $delegation = $_POST['112932917'];
    if ($delegation == "indv") {
        echo $_POST['913376672'];
    }
    ?>"/>
    <input class="input-lg form-control" id="contactrelation" type="text"
           placeholder="Mom, Dad, etc."
           name="entry.635696966" value="<?php $delegation = $_POST['112932917'];
    if ($delegation == "indv") {
        echo $_POST['635696966'];
    }
    ?>"/>
    <input class="input-lg form-control" id="contact" type="text" placeholder="First and Last"
           name="entry.1544036798" value="<?php $delegation = $_POST['112932917'];
    if ($delegation == "indv") {
        echo $_POST['1544036798'];
    }
    ?>"/>
    <input class="input-lg form-control" id="contactemail" type="text"
           placeholder="youremail@example.com"
           name="entry.540419214" value="<?php $delegation = $_POST['112932917'];
    if ($delegation == "indv") {
        echo $_POST['540419214'];
    }
    ?>"/>

    <input type="text" placeholder="1st Choice Committee" name="entry.537063502"
           value="<?php echo $_POST['537063502']; ?>"/>
    <input class="form-control" id="1com1" type="text" placeholder="1st Choice Position"
           name="entry.938224558" value="<?php echo $_POST['938224558']; ?>"/>
    <input class="form-control" id="1com2" type="text" placeholder="2nd Choice Position"
           name="entry.1861561263" value="<?php echo $_POST['1861561263']; ?>"/>
    <input class="form-control" id="1com3" type="text" placeholder="3rd Choice Position"
           name="entry.873148410" value="<?php echo $_POST['873148410']; ?>"/>
    <input type="text" placeholder="2nd Choice Committee" name="entry.1514232825"
           value="<?php echo $_POST['1514232825']; ?>"/>
    <input class="form-control" id="2com1" type="text" placeholder="1st Choice Position"
           name="entry.730274585" value="<?php echo $_POST['730274585']; ?>"/>
    <input class="form-control" id="2com2" type="text" placeholder="2nd Choice Position"
           name="entry.805435580" value="<?php echo $_POST['805435580']; ?>"/>
    <input class="form-control" id="2com3" type="text" placeholder="3rd Choice Position"
           name="entry.656031196" value="<?php echo $_POST['656031196']; ?>"/>
    <input type="text" placeholder="3rd Choice Committee" name="entry.1246061018"
           value="<?php echo $_POST['1246061018']; ?>"/>
    <input class="form-control" id="3com1" type="text" placeholder="1st Choice Position"
           name="entry.989073379" value="<?php echo $_POST['989073379']; ?>"/>
    <input class="form-control" id="3com2" type="text" placeholder="2nd Choice Position"
           name="entry.40912589" value="<?php echo $_POST['40912589']; ?>"/>
    <input class="form-control" id="3com3" type="text" placeholder="3rd Choice Position"
           name="entry.660234" value="<?php echo $_POST['660234']; ?>"/>
    <input type="text" id="numconf" class="input-lg form-control" name="entry.1682937066"
           value="<?php echo $_POST['1682937066']; ?>"/>
    <textarea maxlength="1000" id="whichcom" class="input-lg form-control" tabindex="0"
              placeholder=""
              name="entry.432253736"><?php echo $_POST['432253736']; ?></textarea>
    <textarea maxlength="1000" id="whychose" class="input-lg form-control" tabindex="0"
              placeholder=""
              name="entry.214395303" ><?php echo $_POST['214395303']; ?></textarea>
    <textarea maxlength="1000" id="award" class="input-lg form-control" tabindex="0" placeholder=""
              name="entry.1889766441"><?php echo $_POST['1889766441']; ?></textarea>
    <textarea maxlength="1000" id="sec" class=" input-lg form-control" tabindex="0"
              placeholder=""
              name="entry.33469000" ><?php echo $_POST['33469000']; ?></textarea>
</form>
</body>
</html>