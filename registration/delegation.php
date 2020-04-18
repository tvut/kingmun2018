<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include '../phpinclude/headsub.php'; ?>
    <meta name="description"
          content="Register your delegation!">
    <title>Delegation Registration</title>
    <script type="text/javascript">
        $(function(){
            $("#delname").prop('required',true);
            $("#delegation").prop('required',true);
            $("#advisor").prop('required',true);
            $("#ademail").prop('required',true);
            $("#headdel").prop('required',true);
            $("#delemail").prop('required',true);
        });
    </script>
</head>
<body>
<div class="imagebg" style="background-image:url(../content/images/bgregistration.JPG)">
    <div id="loading" class="imagefull blue" style="display:none; position: fixed;top:0px;left:0px;z-index: 999; transition: 5s all">
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
                <img class=" animated fadeInDown" style="max-width: 300px;margin-left:auto;margin-right:auto;text-align: center;"
                     src="../content/images/logowhite.svg">
            </div>
            <form action="submitdel.php" target="_self"  method="POST" id="mG61Hd">
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;padding-top: 10px;">
                    <h2>Personal Information</h2>
                    <div class="form-group">
                        <label for="delname">Delegation Name</label>
                        <input class="input-lg form-control" id="delname" type="text" placeholder="Delegation/Organization"
                               name="501391371"/>
                    </div>
                    <div class="form-group">
                        <label for="delegation">Number of Delegates</label>
                        <input class="input-lg form-control bfh-number" id="delegation" type="text" autocomplete="off"
                               placeholder="Number of Delegates" data-min="1" data-max="100"
                               name="1262412378"/>
                    </div>
                    <div class="form-group">
                        <label for="advisor">Advisor</label>
                        <input class="input-lg form-control" id="advisor" type="text" placeholder="First Last"
                               name="1162236438"/>
                    </div>
                    <div class="form-group">
                        <label for="ademail">Advisor's Email</label>
                        <input class="input-lg form-control" id="ademail" type="text" placeholder="youremail@example.com"
                               name="1532572202"/>
                    </div>
                    <div class="form-group">
                        <label for="headdel">Head Delegate</label>
                        <input class="input-lg form-control" id="headdel" type="text" placeholder="First Last"
                               name="369565166"/>
                    </div>
                    <div class="form-group">
                        <label for="delemail">Head Delegate's Email</label>
                        <input class="input-lg form-control" id="delemail" type="text" placeholder="youremail@example.com"
                               name="858939461"/>
                    </div>
                    <div class="form-group">
                        <label for="extra">Anything we should take into consideration or any specific requests?</label>
                        <textarea class="input-lg form-control" placeholder="" id="extra" name="500405669" ></textarea>
                    </div>
                </div>
                <div class="blue"
                     style="border-radius: 30px;padding: 30px;margin: 5px;margin-top:20px;">
                    <button class="btn btn-primary btn-lg" type="submit" name="submit">Register Delegation!</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include '../phpinclude/footer.php'; ?>
</body>
</html>