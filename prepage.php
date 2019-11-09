<?php
    session_start();
    $sessionId = session_id();
    ob_start();
    include_once "db.php";
    $mysqli = OpenCon();
    $mysqli->query("UPDATE uistudy SET
        atten2 = $_POST[atten2],
        atten3 = $_POST[atten3]
    WHERE (sessionid = '$sessionId')");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
    <script>
        
        function jump() {
//          alert("start clicked!");
//          window.onbeforeunload = null;
            var rdnum = Math.floor(Math.random() * 8) + 1;
            //window.alert(rdnum);
            switch (rdnum){
                case(1):
                    document.location.href = './uipages/ui1allOff.php';
                    break;
                case(2):
                    document.location.href = './uipages/ui2allOff.php';
                    break;
                case(3):
                    document.location.href = './uipages/ui1allOn.php';
                    break;
                case(4):
                    document.location.href = './uipages/ui2allOn.php';
                    break;
                case(5):
                    document.location.href = './uipages/ui1oneRule.php';
                    break;
                case(6):
                    document.location.href = './uipages/ui2oneRule.php';
                    break;
                case(7):
                    document.location.href = './uipages/ui1profile.php';
                    break;
                case(8):
                    document.location.href = './uipages/ui2profile.php';
                    break;
                default:
                    window.alert("error!");
            }
        }
    </script>
</head>
<body>  
    <div class="parent_container">
        <div id="prepage">
            <div>
                <span><h1><strong>Prepare to Start!</strong></h1></span>
                <p>Assume you are about to set up a smart home environment, a company designed a mobile app to assist you with the settings. You will be shown the interface, please go through the entire setting interface and make changes according to your preferences.</p>
                <hr>
                <img src="./images/uiscreenshot2.png" width="315px">&nbsp;&nbsp;<img src="./images/uiscreenshot3.png" width="470px">
            </div>
            <div class="bottomrow">
                <button id="prepagebutton" class="button right" onclick="jump();"><strong>Start!</strong></button>
            </div>
            
        </div>
</div>

</body>
</html>