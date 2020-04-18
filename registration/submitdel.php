<?php
if(isset($_POST['submit']))
{
    $delegation = $_POST['501391371'];
    $size = $_POST['1262412378'];
    if ( 0 == filesize("delegationlist.txt") )
    {
        $savestring = $delegation . " # " . $size;
    } else {
        $savestring = "\n".$delegation . " # " . $size;
    }
    $file = fopen("delegationlist.txt","a+");
    fwrite($file,$savestring);
    fclose($file);
    print_r(error_get_last());
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Registration</title>
    <meta name="description" content="Register for KINGMUN 2018!">
    <?php include '../phpinclude/headsub.php'; ?>
    <script type="text/javascript">
        $(document).ready(function () {
            var field3 = $('#mG61Hd').val();
            $.ajax({
                url: "https://docs.google.com/forms/d/e/1FAIpQLScYi0ncpXw97RqARuiZunhSNlit2RGwg-7uD07zm1YrCR37KQ/formResponse",
                data: $('#mG61Hd').serialize(),
                type: "POST",
                dataType: "xml",
                statusCode: {
                    0: function() {
                        window.location = "delreg.php";
                    },
                    200: function() {
                        window.location = "delreg.php";
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
      action="https://docs.google.com/forms/d/e/1FAIpQLScYi0ncpXw97RqARuiZunhSNlit2RGwg-7uD07zm1YrCR37KQ/formResponse"
      target="_self" method="POST" id="mG61Hd">
        <input class="input-lg form-control" id="delname" type="text" placeholder="Delegation/Organization"
               name="entry.501391371" value="<?php echo $_POST['501391371']; ?>"/>
        <input class="input-lg form-control" id="delegation" type="text" autocomplete="off"
               placeholder="Number of Delegates"
               name="entry.1262412378" value="<?php echo $_POST['1262412378']; ?>"/>
        <input class="input-lg form-control" id="advisor" type="text" placeholder="First Last"
               name="entry.1162236438" value="<?php echo $_POST['1162236438']; ?>"/>
        <input class="input-lg form-control" id="ademail" type="text" placeholder="youremail@example.com"
               name="entry.1532572202" value="<?php echo $_POST['1532572202']; ?>"/>
        <input class="input-lg form-control" id="headdel" type="text" placeholder="First Last"
               name="entry.369565166" value="<?php echo $_POST['369565166']; ?>"/>
        <input class="input-lg form-control" id="delemail" type="text" placeholder="youremail@example.com"
               name="entry.858939461" value="<?php echo $_POST['858939461']; ?>"/>
        <textarea class="input-lg form-control" placeholder="" id="extra" name="entry.500405669" ><?php echo $_POST['500405669']; ?></textarea>
</form>
</body>
</html>