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
        $(function(){
            $("#name").prop('required',true);
            $("#delegation").prop('required',true);
            $("#phone").prop('required',true);
            $("#email").prop('required',true);
            $("#grade").prop('required',true);
            $("#contact").prop('required',true);
            $("#contactphone").prop('required',true);
            $("#contactemail").prop('required',true);
            $("#com1").prop('required',true);
            $("#1com1").prop('required',true);
            $("#1com2").prop('required',true);
            $("#1com3").prop('required',true);
            $("#com2").prop('required',true);
            $("#2com1").prop('required',true);
            $("#2com2").prop('required',true);
            $("#2com3").prop('required',true);
            $("#com3").prop('required',true);
            $("#3com1").prop('required',true);
            $("#3com2").prop('required',true);
            $("#3com3").prop('required',true);
            $("#numconf").prop('required',true);
        });
        $(function () {
            $('#numconf').on('change', function () {
                if (this.value == '1' || this.value == '2' || this.value == '3' || this.value == '4' || this.value == '5+') {
                    $("#whatcom").css("display", "block");
                    $("#whichcom").prop('required',true);
                } else {
                    $("#whatcom").css("display", "none");
                    $("#whichcom").prop('required',false);
                }
            });
        });
        $(function () {
            $('#delegation').on('change', function () {
                if (this.value == "indv") {
                    $("#secondc").css("display", "block");
                    $("#contact2").prop('required',true);
                    $("#contactphone2").prop('required',true);
                    $("#contactemail2").prop('required',true);
                } else {
                    $("#secondc").css("display", "none");
                    $("#contact2").prop('required',false);
                    $("#contactphone2").prop('required',false);
                    $("#contactemail2").prop('required',false);
                }
            });
        });
    </script>
</head>
<body>
<div class="imagebg" style="background-image:url(../content/images/bgregistration.JPG)">
    <div id="loading" class="imagefull blue"
         style="display:none; position: fixed;top:0px;left:0px;z-index: 999; transition: 5s all">
        <div class="centerflex imagefull">
            <div>
                <img class="imagegrow" style="width: 150px"
                     src="../content/images/logowhite.svg">
            </div>
        </div>
    </div>
    <div class="lightblue container-body" style="padding-top:0px;">
        <div class="container container-body" style="max-width: 750px; padding-top: 0px">
            <div style="width:100%;text-align: center;">
                <img class=" animated fadeInDown"
                     style="max-width: 300px;margin-left:auto;margin-right:auto;text-align: center;"
                     src="../content/images/logowhite.svg">
            </div>
            <form action="submit.php" target="_self" method="POST" id="mG61Hd">
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;padding-top: 10px;">
                    <h2>Personal Information</h2>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="input-lg form-control" id="name" type="text" placeholder="First Last"
                               name="1623957204"/>
                    </div>
                    <div class="form-group">
                        <label for="delegation">Delegation</label>
                        <select class="input-lg form-control" id="delegation"
                                placeholder="Delegation"
                                name="112932917">
                            <option value="">- Please Select a Delegation -</option>
                            <?php
                            if (0 !== filesize("delegationlist.txt")) {
                                $file = fopen("delegationlist.txt", "r") or exit("Unable to open file!");
                                $x = 0;
                                while (!feof($file)) {
                                    $temp = fgets($file);
                                    echo "<option value=\"" . $x . "\">" . substr($temp, 0, strrpos($temp, "#") - 1) . "</option>";
                                    $x = $x + 1;
                                }
                                fclose($file);
                            }
                            ?>
                            <option value="indv">Individual Delegate</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input id="phone" type="text" placeholder="Phone Number" name="518681367"
                               class="input-lg input-medium bfh-phone form-control"
                               data-format="ddd ddd-dddd" value=""/>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radio">
                            <label class="input-lg radio-inline">
                                <input type="radio" name="1876818326" value="Male">Male
                            </label>
                            <label class="input-lg radio-inline">
                                <input type="radio" name="1876818326" value="Female">Female
                            </label>
                            <label class="input-lg radio-inline">
                                <input type="radio" name="1876818326" value="Other">Other
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="input-lg form-control" id="email" type="text" placeholder="youremail@example.com"
                               name="825041508"/>
                    </div>
                    <div class="form-group">
                        <label for="grade">Current Grade</label>
                        <input id="grade" type="text" class="input-lg form-control bfh-number" data-min="8"
                               placeholder="Grade"
                               name="362535665"
                               data-max="12">
                    </div>
                </div>
                <!--<input type="text" placeholder="Grade" name="362535665" />-->
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;padding-top: 10px;">
                    <h2>Emergency Contact</h2>
                    <h4>Note that your emergency contacts should be people who will be able to reach you at the
                        conference should an emergency arise.</h4>
                    <div class="form-group">
                        <label for="contact">Name</label>
                        <input class="input-lg form-control" id="contact" type="text" placeholder="First and Last"
                               name="1947367510"/>
                    </div>
                    <div class="form-group">
                        <label for="contactphone">Phone Number</label>
                        <input id="contactphone" type="text" placeholder="Phone Number" name="933110634"
                               class="input-lg input-medium bfh-phone form-control"
                               data-format="ddd ddd-dddd" value=""/>
                    </div>
                    <div class="form-group">
                        <label for="contactemail">Email</label>
                        <input class="input-lg form-control" id="contactemail" type="text"
                               placeholder="youremail@example.com"
                               name="664167050"/>
                    </div>
                    <div class="form-group">
                        <label for="contactrelation">Relation to Emergency Contact</label>
                        <input class="input-lg form-control" id="contactrelation" type="text"
                               placeholder="Mom, Dad, etc."
                               name="278947312"/>
                    </div>
                    <div id="secondc" style="display: none;">
                        <h2>Second Emergency Contact</h2>
                        <h4>Since you have registered as an independent delegate, you are required to have a second
                            emergency contact.</h4>
                        <div class="form-group">
                            <label for="contact2">Name</label>
                            <input class="input-lg form-control" id="contact2" type="text" placeholder="First and Last"
                                   name="1425653941"/>
                        </div>
                        <div class="form-group">
                            <label for="contactphone2">Phone Number</label>
                            <input id="contactphone2" type="text" placeholder="Phone Number" name="960718384"
                                   class="input-lg input-medium bfh-phone form-control"
                                   data-format="ddd ddd-dddd" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="contactemail2">Email</label>
                            <input class="input-lg form-control" id="contactemail2" type="text"
                                   placeholder="youremail@example.com"
                                   name="913376672"/>
                        </div>
                        <div class="form-group">
                            <label for="contactrelation2">Relation to Emergency Contact</label>
                            <input class="input-lg form-control" id="contactrelation2" type="text"
                                   placeholder="Mom, Dad, etc."
                                   name="635696966"/>
                        </div>
                        <h2>Delegation or Adviser</h2>
                        <h4>Since you have registered as an independent delegate, KINGMUN needs to know who is your
                            chaperone or adviser. If you
                            currently do not have a chaperone or advisor, please email <a href="mailto:sg@kingmun.org">sg@kingmun.org</a>
                            and
                            leave this area blank.</h4>
                        <div class="form-group">
                            <label for="contact3">Name</label>
                            <input class="input-lg form-control" id="contact3" type="text" placeholder="First and Last"
                                   name="1544036798"/>
                        </div>
                        <div class="form-group">
                            <label for="contactemail3">Email</label>
                            <input class="input-lg form-control" id="contactemail3" type="text"
                                   placeholder="youremail@example.com"
                                   name="540419214"/>
                        </div>
                    </div>
                </div>
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;padding-top: 10px;">
                    <h2>Position Selection</h2>
                    <h4>In order to make the most of your KINGMUN experience, take the time to research before you enter
                        in your committee/position requests.</h4>
                    <h4>Use the country matrix, found <a target="_blank"
                                                         href="https://docs.google.com/spreadsheets/d/e/2PACX-1vTh96vUeQbJhUu35g-R8fZwOZdWiOQsC4IiO9Lbr-bZjM4KALvgrkxk-qZyXhHav85MV_VqPGHrl3hM/pubhtml">here</a>
                        to browse through the available committees and positions.</h4>
                </div>
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;padding-top: 10px;">
                    <h2>First Choice Committee Selection</h2>
                    <div class="form-group">
                        <label for="com1">First Choice Committee</label>
                        <select class="input-lg form-control dropdown" id="com1" name="537063502">
                            <option value="">- Please Select a Committee -</option>
                            <option value="EU">European Union</option>
                            <option value="Senate">United States Senate</option>
                            <option value="UNEP">United Nations Environmental Programme</option>
                            <option value="UNHRC">United Nations Human Rights Council</option>
                            <option value="UNOOSA">United Nations Office for Outer Space Affairs</option>
                            <option value="WHO">World Health Organization</option>
                            <option value="HCC">Historical Crisis Committee</option>
                            <option value="JCC 1">Joint Crisis Committee Block 1</option>
                            <option value="JCC 2">Joint Crisis Committee Block 2</option>
                        </select>
                    </div>
                    <!--<input type="text" placeholder="1st Choice Committee" name="537063502" />-->
                    <div style="padding-left: 20px">
                        <div class="form-group">
                            <label for="1com1">First Choice Position</label>
                            <input class="form-control" id="1com1" type="text" placeholder="1st Choice Position"
                                   name="938224558"/>
                        </div>
                        <div class="form-group">
                            <label for="1com2">Second Choice Position</label>
                            <input class="form-control" id="1com2" type="text" placeholder="2nd Choice Position"
                                   name="1861561263"/>
                        </div>
                        <div class="form-group">
                            <label for="1com3">Third Choice Position</label>
                            <input class="form-control" id="1com3" type="text" placeholder="3rd Choice Position"
                                   name="873148410"/>
                        </div>
                    </div>
                </div>
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;padding-top: 20px;">
                    <h2>Second Choice Committee Selection</h2>
                    <div class="form-group">
                        <label for="com2">Second Choice Committee</label>
                        <select class="input-lg form-control dropdown" id="com2" name="1514232825">
                            <option value="">- Please Select a Committee -</option>
                            <option value="EU">European Union</option>
                            <option value="Senate">United States Senate</option>
                            <option value="UNEP">United Nations Environmental Programme</option>
                            <option value="UNHRC">United Nations Human Rights Council</option>
                            <option value="UNOOSA">United Nations Office for Outer Space Affairs</option>
                            <option value="WHO">World Health Organization</option>
                            <option value="HCC">Historical Crisis Committee</option>
                            <option value="JCC 1">Joint Crisis Committee Block 1</option>
                            <option value="JCC 2">Joint Crisis Committee Block 2</option>
                        </select>
                    </div>
                    <!--<input type="text" placeholder="2nd Choice Committee" name="1514232825" />-->
                    <div style="padding-left: 20px">
                        <div class="form-group">
                            <label for="2com1">First Choice Position</label>
                            <input class="form-control" id="2com1" type="text" placeholder="1st Choice Position"
                                   name="730274585"/>
                        </div>
                        <div class="form-group">
                            <label for="2com2">Second Choice Position</label>
                            <input class="form-control" id="2com2" type="text" placeholder="2nd Choice Position"
                                   name="805435580"/>
                        </div>
                        <div class="form-group">
                            <label for="2com3">Third Choice Position</label>
                            <input class="form-control" id="2com3" type="text" placeholder="3rd Choice Position"
                                   name="656031196"/>
                        </div>
                    </div>
                </div>
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;padding-top: 20px;">
                    <h2>Third Choice Committee Selection</h2>
                    <div class="form-group">
                        <label for="com3">Third Choice Committee</label>
                        <select class="input-lg form-control dropdown" id="com3" name="1246061018">
                            <option value="">- Please Select a Committee -</option>
                            <option value="EU">European Union</option>
                            <option value="Senate">United States Senate</option>
                            <option value="UNEP">United Nations Environmental Programme</option>
                            <option value="UNHRC">United Nations Human Rights Council</option>
                            <option value="UNOOSA">United Nations Office for Outer Space Affairs</option>
                            <option value="WHO">World Health Organization</option>
                            <option value="HCC">Historical Crisis Committee</option>
                            <option value="JCC 1">Joint Crisis Committee Block 1</option>
                            <option value="JCC 2">Joint Crisis Committee Block 2</option>
                        </select>
                    </div>
                    <!--<input type="text" placeholder="3rd Choice Committee" name="1246061018" />-->
                    <div style="padding-left: 20px">
                        <div class="form-group">
                            <label for="3com1">First Choice Position</label>
                            <input class="form-control" id="3com1" type="text" placeholder="1st Choice Position"
                                   name="989073379"/>
                        </div>
                        <div class="form-group">
                            <label for="3com2">Second Choice Position</label>
                            <input class="form-control" id="3com2" type="text" placeholder="2nd Choice Position"
                                   name="40912589"/>
                        </div>
                        <div class="form-group">
                            <label for="3com3">Third Choice Position</label>
                            <input class="form-control" id="3com3" type="text" placeholder="3rd Choice Position"
                                   name="660234"/>
                        </div>
                    </div>
                </div>
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;padding-top: 20px;">
                    <h2>Your Model United Nations History</h2>
                    <h4>We use this information to pick a position that is best suited to your skill level and will give
                        you the best experience at KINGMUN 2018.</h4>
                    <div class="form-group">
                        <label for="numconf">How many conferences have you attended as a delegate?</label>
                        <select id="numconf" class="input-lg form-control" name="1682937066">
                            <option value="">- Please Select a Number -</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5+">5+</option>
                        </select>
                    </div>
                    <div id="whatcom" style="display: none" class="form-group">
                        <label for="whichcom">Which committees have you been in before?</label>
                        <textarea maxlength="1000" id="whichcom" class="input-lg form-control" tabindex="0"
                                  placeholder=""
                                  name="432253736"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="whychose">Why did you pick the positions you selected above?</label>
                        <textarea maxlength="1000" id="whychose" class="input-lg form-control" tabindex="0"
                                  placeholder=""
                                  name="214395303"></textarea>
                    </div>
                    <!--<input type="text" placeholder="How many conferences have you attended as a delegate?" name="1682937066" />-->
                    <div class="form-group">
                        <label for="award">Have you won any awards? If so please elaborate on them?</label>
                        <textarea maxlength="1000" id="award" class="input-lg form-control" tabindex="0" placeholder=""
                                  name="1889766441"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sec">Have you ever held any secretariat or staff positions? If so please
                            elaborate on
                            them.</label>
                        <textarea maxlength="1000" id="sec" class=" input-lg form-control" tabindex="0"
                                  placeholder=""
                                  name="33469000"></textarea>
                    </div>
                </div>
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;padding-top: 20px;">
                    <button class="btn btn-primary btn-lg" type="submit" name="submit">Register Now!</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include '../phpinclude/footer.php'; ?>
</body>
</html>