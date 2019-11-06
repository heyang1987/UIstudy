<?php
    session_start();
    $sessionId = session_id();
    ob_start();
    include_once "../db.php";
    $mysqli = OpenCon();
    $mysqli->query("UPDATE uistudy SET time2 = now(), cond = '7' WHERE (sessionid = '$sessionId')");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/ui.js"></script>
    <script>
        // Warning before leaving the page (back button, or outgoinglink)
        window.onbeforeunload = function() {
           return "Do you really want to leave our study?";
           //if we return nothing here (just calling return;) then there will be no pop-up question at all
           //return;
        };
    </script>
</head>
<body>
    <div class="container">
        <img src="../images/u1.png" width="400">
        
        <div id="profileSelect" style="display: block">
            <div class="title">
                <div style="text-align: center;margin-top:16px;">Household IoT Privacy Settings</div>
            </div>
            
            <div class="settings">
                <div class="uifixtext">
                    <p>Please read the description of the following privacy-setting profiles and select <b>one</b> profile that matches your privacy preference as much as possible. You can change individual settings in the profile on the next screen.</p>
                </div>
                
                <div class="inputGroup">
                    <input id="profile1" name="radio" type="radio"/>
                    <label for="profile1" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('EAintroui').style.display='block';currentMenu='EAse'"><b>Enable All</b>
                    <div style="position:relative;left:10px;width:270px;font-size:12px">Allow data to be collected, used, storaged and shared without restrictions.</div></label>
                </div>
				<br/>
                <div class="inputGroup">
                    <input id="profile2" name="radio" type="radio"/>
                    <label for="profile2" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('NSintroui').style.display='block';currentMenu='NSse'"><b>No Sharing</b>
                    <div style="position:relative;left:10px;width:270px;font-size:12px">Allow data to be collected, used, and stored without restrictions but disable third party sharing.</div></label>
                </div>
				<br/>
                <div class="inputGroup">
                    <input id="profile3" name="radio" type="radio"/>
                    <label for="profile3" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('LSintroui').style.display='block';currentMenu='LSse'"><b>Local Storage Only</b>
                    <div style="position:relative;left:10px;width:280px;font-size:12px">Allow data to be collected and used without restrictions but disable remote storage and third party sharing</div>
                    </label>
                </div>
				<br/>
                <div class="inputGroup">
                    <input id="profile4" name="radio" type="radio"/>
                    <label for="profile4" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('NTintroui').style.display='block';currentMenu='NTse'"><b>No Tracking</b>
                    <div style="position:relative;left:10px;width:250px;font-size:12px">Allow all, except location and presence tracking data, to be collected, used, and shared without restrictions.</div>
                    </label>
                </div>
				<br/>
                <div class="inputGroup">
                    <input id="profile5" name="radio" type="radio"/>
                    <label for="profile5" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('DAintroui').style.display='block';currentMenu='DAse'"><b>Disable All</b>
                    <div style="position:relative;left:10px;width:250px;font-size:12px">Do not allow any data storage and sharing. Turn off all smart home functionalities.</div>
                    </label>
                </div>
            </div>
        </div>
        
        <div id="EAintroui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('EAintroui').style.display='none';document.getElementById('profileSelect').style.display='block';"></button>
				<div style="text-align: center;margin-top:16px;">Settings for Enable All profile</div>
			</div>
                        
            <div class="settings">
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('EAintroui').style.display='none';document.getElementById('EAdsmui').style.display='block';currentMenu='EAse'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('EAintroui').style.display='none';document.getElementById('EAdusgui').style.display='block';currentMenu='EAse'>
                    <strong>Data Storage and Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>
		
		<div id="EAdsmui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('EAdsmui').style.display='none';document.getElementById('EAintroui').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device and Sensor Management</div>
            </div>
			<div class="settingsWithScroll">
				<div class="uifixtext">
                    <p>Expand to set permissions for information collected by who (which device) and for what purpose.</p>
                </div>

                <div class="devicecontainer">
                    <div class="narrowmenu" onclick="dropdownFunction('EAse')">
                        <div class="narrowmenuicon"><img src="../icons/1.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Home Security System
                            <img id="EAseArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="EAse" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAsedata">
                            <tr>
                                <th><strong>Data from your Home Security System can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAse','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAse','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAse','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAse','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:38px;font-size:14px;padding:5px 1px" id="EAseAllButton" onclick="checkAll('EAse')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsese" id="EAseseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsese" id="EAseseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsese" id="EAseseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsese" id="EAsesealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAseseall" onclick="checkRow('EAsese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsere" id="EAsereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsere" id="EAsereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsere" id="EAsereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsere" id="EAserealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsereall" onclick="checkRow('EAsere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsehv" id="EAsehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsehv" id="EAsehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsehv" id="EAsehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsehv" id="EAsehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsehvall" onclick="checkRow('EAsehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsewm" id="EAsewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsewm" id="EAsewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsewm" id="EAsewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsewm" id="EAsewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsewmall" onclick="checkRow('EAsewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsels" id="EAselsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsels" id="EAselsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsels" id="EAselsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsels" id="EAselsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAselsall" onclick="checkRow('EAsels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsesa" id="EAsesaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsesa" id="EAsesaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsesa" id="EAsesaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsesa" id="EAsesaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsesaall" onclick="checkRow('EAsesa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsetv" id="EAsetvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsetv" id="EAsetvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsetv" id="EAsetvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsetv" id="EAsetvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsetvall" onclick="checkRow('EAsetv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsecl" id="EAseclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsecl" id="EAseclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsecl" id="EAseclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsecl" id="EAseclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAseclall" onclick="checkRow('EAsecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>


                    <div class="narrowmenu" onclick="dropdownFunction('EAre')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img id="EAreArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="EAre" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAredata">
                            <tr>
                                <th><strong>Data from your Refrigerator can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAre','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAre','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAre','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAre','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="EAreAllButton" onclick="checkAll('EAre')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArere" id="EArereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArere" id="EArereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArere" id="EArereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArere" id="EArerealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EArereall" onclick="checkRow('EArere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArese" id="EAreseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArese" id="EAreseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArese" id="EAreseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArese" id="EAresealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAreseall" onclick="checkRow('EArese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArehv" id="EArehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArehv" id="EArehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArehv" id="EArehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArehv" id="EArehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EArehvall" onclick="checkRow('EArehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArewm" id="EArewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArewm" id="EArewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArewm" id="EArewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArewm" id="EArewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EArewmall" onclick="checkRow('EArewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArels" id="EArelsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArels" id="EArelsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArels" id="EArelsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArels" id="EArelsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EArelsall" onclick="checkRow('EArels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAresa" id="EAresaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAresa" id="EAresaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAresa" id="EAresaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAresa" id="EAresaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAresaall" onclick="checkRow('EAresa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAretv" id="EAretvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAretv" id="EAretvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAretv" id="EAretvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAretv" id="EAretvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAretvall" onclick="checkRow('EAretv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArecl" id="EAreclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArecl" id="EAreclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArecl" id="EAreclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EArecl" id="EAreclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAreclall" onclick="checkRow('EArecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAhv')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img id="EAhvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="EAhv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAhvdata">
                            <tr>
                                <th><strong>Data from your HVAC can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAhv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAhv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAhv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAhv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="EAhvAllButton" onclick="checkAll('EAhv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvhv" id="EAhvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvhv" id="EAhvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvhv" id="EAhvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvhv" id="EAhvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAhvhvall" onclick="checkRow('EAhvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvse" id="EAhvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvse" id="EAhvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvse" id="EAhvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvse" id="EAhvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAhvseall" onclick="checkRow('EAhvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvre" id="EAhvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvre" id="EAhvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvre" id="EAhvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvre" id="EAhvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAhvreall" onclick="checkRow('EAhvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvwm" id="EAhvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvwm" id="EAhvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvwm" id="EAhvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvwm" id="EAhvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAhvwmall" onclick="checkRow('EAhvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvls" id="EAhvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvls" id="EAhvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvls" id="EAhvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvls" id="EAhvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAhvlsall" onclick="checkRow('EAhvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvsa" id="EAhvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvsa" id="EAhvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvsa" id="EAhvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvsa" id="EAhvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAhvsaall" onclick="checkRow('EAhvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvtv" id="EAhvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvtv" id="EAhvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvtv" id="EAhvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvtv" id="EAhvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAhvtvall" onclick="checkRow('EAhvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvcl" id="EAhvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvcl" id="EAhvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvcl" id="EAhvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAhvcl" id="EAhvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAhvclall" onclick="checkRow('EAhvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAwm')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washer
                            <img id="EAwmArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="EAwm" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAwmdata">
                            <tr>
                                <th><strong>Data from your wahcing machine can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAwm','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAwm','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAwm','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAwm','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('EAwm')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="EAwmAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmwm" id="EAwmwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmwm" id="EAwmwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmwm" id="EAwmwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmwm" id="EAwmwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('EAwmwm',true,true)"><div class="tooltip"><button class="allbutton" id="EAwmwmall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmse" id="EAwmseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmse" id="EAwmseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmse" id="EAwmseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmse" id="EAwmsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('EAwmse',true,true)"><div class="tooltip"><button class="allbutton" id="EAwmseall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmre" id="EAwmreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmre" id="EAwmreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmre" id="EAwmreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmre" id="EAwmrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('EAwmre',true,true)"><div class="tooltip"><button class="allbutton" id="EAwmreall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmhv" id="EAwmhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmhv" id="EAwmhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmhv" id="EAwmhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmhv" id="EAwmhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('EAwmhv',true,true)"><div class="tooltip"><button class="allbutton" id="EAwmhvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmls" id="EAwmlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmls" id="EAwmlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmls" id="EAwmlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmls" id="EAwmlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('EAwmls',true,true)"><div class="tooltip"><button class="allbutton" id="EAwmlsall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmsa" id="EAwmsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmsa" id="EAwmsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmsa" id="EAwmsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmsa" id="EAwmsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('EAwmsa',true,true)"><div class="tooltip"><button class="allbutton" id="EAwmsaall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmtv" id="EAwmtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmtv" id="EAwmtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmtv" id="EAwmtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmtv" id="EAwmtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('EAwmtv',true,true)"><div class="tooltip"><button class="allbutton" id="EAwmtvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmcl" id="EAwmclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmcl" id="EAwmclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmcl" id="EAwmclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAwmcl" id="EAwmclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAwmclall" onclick="checkRow('EAwmcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAls')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Lights
                            <img id="EAlsArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="EAls" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAlsdata">
                            <tr>
                                <th><strong>Data from your Lights can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAls','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAls','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAls','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAls','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="EAlsAllButton" onclick="checkAll('EAls')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsls" id="EAlslsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsls" id="EAlslsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsls" id="EAlslsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsls" id="EAlslsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlslsall" onclick="checkRow('EAlsls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsse" id="EAlsseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsse" id="EAlsseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsse" id="EAlsseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsse" id="EAlssealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlsseall" onclick="checkRow('EAlsse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsre" id="EAlsreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsre" id="EAlsreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsre" id="EAlsreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlsre" id="EAlsrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlsreall" onclick="checkRow('EAlsre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlshv" id="EAlshvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlshv" id="EAlshvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlshv" id="EAlshvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlshv" id="EAlshvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlshvall" onclick="checkRow('EAlshv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlswm" id="EAlswmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlswm" id="EAlswmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlswm" id="EAlswmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlswm" id="EAlswmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlswmall" onclick="checkRow('EAlswm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlssa" id="EAlssaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlssa" id="EAlssaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlssa" id="EAlssaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlssa" id="EAlssaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlssaall" onclick="checkRow('EAlssa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlstv" id="EAlstvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlstv" id="EAlstvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlstv" id="EAlstvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlstv" id="EAlstvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlstvall" onclick="checkRow('EAlstv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlscl" id="EAlsclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlscl" id="EAlsclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlscl" id="EAlsclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlscl" id="EAlsclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlsclall" onclick="checkRow('EAlscl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAsa')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Assistant
                            <img id="EAsaArrow" src="../images/arrowright.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="EAsa" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAsadata">
                            <tr>
                                <th><strong>Data from your Smart Assistant can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAsa','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAsa','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAsa','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAsa','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="EAsaAllButton" onclick="checkAll('EAsa')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsasa" id="EAsasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsasa" id="EAsasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsasa" id="EAsasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsasa" id="EAsasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsasaall" onclick="checkRow('EAsasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsase" id="EAsaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsase" id="EAsaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsase" id="EAsaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsase" id="EAsasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsaseall" onclick="checkRow('EAsase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsare" id="EAsareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsare" id="EAsareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsare" id="EAsareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsare" id="EAsarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsareall" onclick="checkRow('EAsare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsahv" id="EAsahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsahv" id="EAsahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsahv" id="EAsahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsahv" id="EAsahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsahvall" onclick="checkRow('EAsahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsawm" id="EAsawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsawm" id="EAsawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsawm" id="EAsawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsawm" id="EAsawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsawmall" onclick="checkRow('EAsawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsals" id="EAsalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsals" id="EAsalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsals" id="EAsalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsals" id="EAsalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsalsall" onclick="checkRow('EAsals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsatv" id="EAsatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsatv" id="EAsatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsatv" id="EAsatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsatv" id="EAsatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsatvall" onclick="checkRow('EAsatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsacl" id="EAsaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsacl" id="EAsaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsacl" id="EAsaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAsacl" id="EAsaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAsaclall" onclick="checkRow('EAsacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAtv')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart TV
                            <img id="EAtvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="EAtv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAtvdata">
                            <tr>
                                <th><strong>Data from your Smart TV can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAtv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAtv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAtv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAtv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('EAtv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvtv" id="EAtvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvtv" id="EAtvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvtv" id="EAtvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvtv" id="EAtvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAtvtvall" onclick="checkRow('EAtvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvse" id="EAtvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvse" id="EAtvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvse" id="EAtvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvse" id="EAtvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAtvseall" onclick="checkRow('EAtvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvre" id="EAtvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvre" id="EAtvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvre" id="EAtvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvre" id="EAtvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAtvreall" onclick="checkRow('EAtvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvhv" id="EAtvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvhv" id="EAtvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvhv" id="EAtvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvhv" id="EAtvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAtvhvall" onclick="checkRow('EAtvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvwm" id="EAtvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvwm" id="EAtvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvwm" id="EAtvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvwm" id="EAtvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAtvwmall" onclick="checkRow('EAtvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvls" id="EAtvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvls" id="EAtvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvls" id="EAtvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvls" id="EAtvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAtvlsall" onclick="checkRow('EAtvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvsa" id="EAtvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvsa" id="EAtvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvsa" id="EAtvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvsa" id="EAtvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAtvsaall" onclick="checkRow('EAtvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvcl" id="EAtvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvcl" id="EAtvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvcl" id="EAtvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAtvcl" id="EAtvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAtvclall" onclick="checkRow('EAtvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAcl')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Alarm Clock
                            <img id="EAclArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="EAcl" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAcldata">
                            <tr>
                                <th><strong>Data from your Alarm Clock can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAcl','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAcl','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAcl','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAcl','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('EAcl')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclcl" id="EAclclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclcl" id="EAclclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclcl" id="EAclclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclcl" id="EAclclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAclclall" onclick="checkRow('EAclcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclse" id="EAclseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclse" id="EAclseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclse" id="EAclseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclse" id="EAclsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAclseall" onclick="checkRow('EAclse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclre" id="EAclreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclre" id="EAclreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclre" id="EAclreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclre" id="EAclrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAclreall" onclick="checkRow('EAclre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclhv" id="EAclhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclhv" id="EAclhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclhv" id="EAclhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclhv" id="EAclhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAclhvall" onclick="checkRow('EAclhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclwm" id="EAclwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclwm" id="EAclwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclwm" id="EAclwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclwm" id="EAclwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAclwmall" onclick="checkRow('EAclwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclls" id="EAcllsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclls" id="EAcllsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclls" id="EAcllsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclls" id="EAcllsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcllsall" onclick="checkRow('EAclls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclsa" id="EAclsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclsa" id="EAclsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclsa" id="EAclsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAclsa" id="EAclsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAclsaall" onclick="checkRow('EAclsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcltv" id="EAcltvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcltv" id="EAcltvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcltv" id="EAcltvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcltv" id="EAcltvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcltvall" onclick="checkRow('EAcltv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAlo')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Location Sensor
                            <img id="EAloArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="EAlo" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAlodata">
                            <tr>
                                <th><strong>Data from your Location Sensor can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAlo','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAlo','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAlo','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAlo','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="EAloAllButton" onclick="checkAll('EAlo')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlose" id="EAloseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlose" id="EAloseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlose" id="EAloseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlose" id="EAlosealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAloseall" onclick="checkRow('EAlose',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlore" id="EAloreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlore" id="EAloreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlore" id="EAloreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlore" id="EAlorealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAloreall" onclick="checkRow('EAlore',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlohv" id="EAlohvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlohv" id="EAlohvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlohv" id="EAlohvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlohv" id="EAlohvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlohvall" onclick="checkRow('EAlohv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlowm" id="EAlowmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlowm" id="EAlowmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlowm" id="EAlowmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlowm" id="EAlowmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlowmall" onclick="checkRow('EAlowm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlols" id="EAlolsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlols" id="EAlolsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlols" id="EAlolsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlols" id="EAlolsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlolsall" onclick="checkRow('EAlols',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlosa" id="EAlosaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlosa" id="EAlosaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlosa" id="EAlosaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlosa" id="EAlosaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlosaall" onclick="checkRow('EAlosa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlotv" id="EAlotvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlotv" id="EAlotvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlotv" id="EAlotvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlotv" id="EAlotvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAlotvall" onclick="checkRow('EAlotv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlocl" id="EAloclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlocl" id="EAloclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlocl" id="EAloclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAlocl" id="EAloclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAloclall" onclick="checkRow('EAlocl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAca')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Camera
                            <img id="EAcaArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="EAca" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAcadata">
                            <tr>
                                <th><strong>Data from your Camera can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAca','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAca','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAca','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAca','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="EAcaAllButton" onclick="checkAll('EAca')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcase" id="EAcaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcase" id="EAcaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcase" id="EAcaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcase" id="EAcasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcaseall" onclick="checkRow('EAcase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcare" id="EAcareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcare" id="EAcareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcare" id="EAcareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcare" id="EAcarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcareall" onclick="checkRow('EAcare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcahv" id="EAcahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcahv" id="EAcahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcahv" id="EAcahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcahv" id="EAcahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcahvall" onclick="checkRow('EAcahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcawm" id="EAcawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcawm" id="EAcawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcawm" id="EAcawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcawm" id="EAcawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcawmall" onclick="checkRow('EAcawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcals" id="EAcalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcals" id="EAcalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcals" id="EAcalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcals" id="EAcalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcalsall" onclick="checkRow('EAcals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcasa" id="EAcasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcasa" id="EAcasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcasa" id="EAcasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcasa" id="EAcasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcasaall" onclick="checkRow('EAcasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcatv" id="EAcatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcatv" id="EAcatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcatv" id="EAcatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcatv" id="EAcatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcatvall" onclick="checkRow('EAcatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcacl" id="EAcaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcacl" id="EAcaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcacl" id="EAcaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAcacl" id="EAcaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAcaclall" onclick="checkRow('EAcacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAmp')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Microphone
                            <img id="EAmpArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="EAmp" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAmpdata">
                            <tr>
                                <th><strong>Data from your Microphone can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAmp','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAmp','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAmp','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAmp','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="EAmpAllButton" onclick="checkAll('EAmp')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpse" id="EAmpseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpse" id="EAmpseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpse" id="EAmpseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpse" id="EAmpsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAmpseall" onclick="checkRow('EAmpse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpre" id="EAmpreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpre" id="EAmpreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpre" id="EAmpreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpre" id="EAmprealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAmpreall" onclick="checkRow('EAmpre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmphv" id="EAmphvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmphv" id="EAmphvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmphv" id="EAmphvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmphv" id="EAmphvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAmphvall" onclick="checkRow('EAmphv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpwm" id="EAmpwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpwm" id="EAmpwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpwm" id="EAmpwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpwm" id="EAmpwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAmpwmall" onclick="checkRow('EAmpwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpls" id="EAmplsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpls" id="EAmplsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpls" id="EAmplsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpls" id="EAmplsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAmplsall" onclick="checkRow('EAmpls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpsa" id="EAmpsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpsa" id="EAmpsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpsa" id="EAmpsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpsa" id="EAmpsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAmpsaall" onclick="checkRow('EAmpsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmptv" id="EAmptvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmptv" id="EAmptvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmptv" id="EAmptvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmptv" id="EAmptvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAmptvall" onclick="checkRow('EAmptv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpcl" id="EAmpclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpcl" id="EAmpclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpcl" id="EAmpclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAmpcl" id="EAmpclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAmpclall" onclick="checkRow('EAmpcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('EAsw')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Phone/Watch
                            <img id="EAswArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="EAsw" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="EAswdata">
                            <tr>
                                <th><strong>Data from your Smart Phone/Watch can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('EAsw','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('EAsw','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('EAsw','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('EAsw','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="EAswAllButton" onclick="checkAll('EAsw')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswse" id="EAswseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswse" id="EAswseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswse" id="EAswseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswse" id="EAswsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAswseall" onclick="checkRow('EAswse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswre" id="EAswreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswre" id="EAswreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswre" id="EAswreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswre" id="EAswrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAswreall" onclick="checkRow('EAswre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswhv" id="EAswhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswhv" id="EAswhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswhv" id="EAswhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswhv" id="EAswhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAswhvall" onclick="checkRow('EAswhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswwm" id="EAswwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswwm" id="EAswwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswwm" id="EAswwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswwm" id="EAswwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAswwmall" onclick="checkRow('EAswwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswls" id="EAswlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswls" id="EAswlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswls" id="EAswlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswls" id="EAswlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAswlsall" onclick="checkRow('EAswls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswsa" id="EAswsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswsa" id="EAswsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswsa" id="EAswsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswsa" id="EAswsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAswsaall" onclick="checkRow('EAswsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswtv" id="EAswtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswtv" id="EAswtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswtv" id="EAswtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswtv" id="EAswtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAswtvall" onclick="checkRow('EAswtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswcl" id="EAswclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswcl" id="EAswclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswcl" id="EAswclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox EAswcl" id="EAswclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="EAswclall" onclick="checkRow('EAswcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:5px;margin-left: -30px;height:28px" onclick="document.getElementById('EAdsmui').style.display='none';document.getElementById('EAintroui').style.display='block';closeLeftDropdown();">Save</button></div>
                </div>

			</div>

		</div>
        
        <div id="EAdusgui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('EAdusgui').style.display='none';document.getElementById('EAintroui').style.display='block';"></button>
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Storage and Usage</div>
            </div>

            <div class="settings" style="font-size:15px">
                <div class="uifixtext">
                    <h2>Storage and Sharing</h2>
                    Choose <b>one</b> storage plan from below to control where to store the information collected and the extent of sharing by different devices in your smart home.
                </div>

                <div class="inputGroup">
                    <input id="radio1" name="radioEA" type="radio"/>
                    <label for="radio1">Local Only</label>
                </div>
                <div class="inputGroup">
                    <input id="radio2" name="radioEA" type="radio"/>
                    <label for="radio2">Local+Remote Server</label>
                </div>
                <div class="inputGroup">
                    <input id="radio3" name="radioEA" type="radio" checked/>
                    <label for="radio3">Local+Remote Server+Third Party Sharing</label>
                </div>
                
                <div class="uifixtext">
                    <h2>Data Usage</h2>
                    Manage what happens with the shared information.
                </div>

                <div class="radiobox">
                    Optimize services<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Behavioral insights<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Recommendation<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Other uses<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>

                <div><button class="button middle" style="top:20px;height:28px" onclick="document.getElementById('EAdusgui').style.display='none';document.getElementById('EAintroui').style.display='block';">Save</button></div>

            </div>
        </div>
 
        <div id="NSintroui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('NSintroui').style.display='none';document.getElementById('profileSelect').style.display='block';"></button>
				<div style="text-align: center;margin-top:16px;">Settings for No Sharing profile</div>
			</div>
                        
            <div class="settings">
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('NSintroui').style.display='none';document.getElementById('NSdsmui').style.display='block';currentMenu='NSse'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('NSintroui').style.display='none';document.getElementById('NSdusgui').style.display='block';currentMenu='NSse'>
                    <strong>Data Storage and Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>
		
		<div id="NSdsmui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('NSdsmui').style.display='none';document.getElementById('NSintroui').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device and Sensor Management</div>
            </div>
			<div class="settingsWithScroll">
				<div class="uifixtext">
                    <p>Expand to set permissions for information collected by who (which device) and for what purpose.</p>
                </div>

                <div class="devicecontainer">
                    <div class="narrowmenu" onclick="dropdownFunction('NSse')">
                        <div class="narrowmenuicon"><img src="../icons/1.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Home Security System
                            <img id="NSseArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="NSse" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NSsedata">
                            <tr>
                                <th><strong>Data from your Home Security System can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NSse','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NSse','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NSse','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NSse','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:38px;font-size:14px;padding:5px 1px" id="NSseAllButton" onclick="checkAll('NSse')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsese" id="NSseseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsese" id="NSseseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsese" id="NSseseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsese" id="NSsesealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSseseall" onclick="checkRow('NSsese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsere" id="NSsereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsere" id="NSsereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsere" id="NSsereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsere" id="NSserealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsereall" onclick="checkRow('NSsere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsehv" id="NSsehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsehv" id="NSsehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsehv" id="NSsehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsehv" id="NSsehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsehvall" onclick="checkRow('NSsehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsewm" id="NSsewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsewm" id="NSsewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsewm" id="NSsewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsewm" id="NSsewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsewmall" onclick="checkRow('NSsewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsels" id="NSselsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsels" id="NSselsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsels" id="NSselsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsels" id="NSselsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSselsall" onclick="checkRow('NSsels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsesa" id="NSsesaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsesa" id="NSsesaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsesa" id="NSsesaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsesa" id="NSsesaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsesaall" onclick="checkRow('NSsesa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsetv" id="NSsetvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsetv" id="NSsetvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsetv" id="NSsetvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsetv" id="NSsetvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsetvall" onclick="checkRow('NSsetv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsecl" id="NSseclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsecl" id="NSseclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsecl" id="NSseclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsecl" id="NSseclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSseclall" onclick="checkRow('NSsecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>


                    <div class="narrowmenu" onclick="dropdownFunction('NSre')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img id="NSreArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NSre" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NSredata">
                            <tr>
                                <th><strong>Data from your Refrigerator can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NSre','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NSre','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NSre','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NSre','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NSreAllButton" onclick="checkAll('NSre')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrere" id="NSrereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrere" id="NSrereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrere" id="NSrereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrere" id="NSrerealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSrereall" onclick="checkRow('NSrere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrese" id="NSreseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrese" id="NSreseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrese" id="NSreseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrese" id="NSresealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSreseall" onclick="checkRow('NSrese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrehv" id="NSrehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrehv" id="NSrehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrehv" id="NSrehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrehv" id="NSrehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSrehvall" onclick="checkRow('NSrehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrewm" id="NSrewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrewm" id="NSrewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrewm" id="NSrewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrewm" id="NSrewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSrewmall" onclick="checkRow('NSrewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrels" id="NSrelsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrels" id="NSrelsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrels" id="NSrelsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrels" id="NSrelsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSrelsall" onclick="checkRow('NSrels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSresa" id="NSresaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSresa" id="NSresaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSresa" id="NSresaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSresa" id="NSresaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSresaall" onclick="checkRow('NSresa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSretv" id="NSretvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSretv" id="NSretvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSretv" id="NSretvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSretv" id="NSretvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSretvall" onclick="checkRow('NSretv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrecl" id="NSreclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrecl" id="NSreclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrecl" id="NSreclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSrecl" id="NSreclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSreclall" onclick="checkRow('NSrecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NShv')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img id="NShvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NShv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NShvdata">
                            <tr>
                                <th><strong>Data from your HVAC can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NShv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NShv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NShv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NShv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NShvAllButton" onclick="checkAll('NShv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvhv" id="NShvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvhv" id="NShvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvhv" id="NShvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvhv" id="NShvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NShvhvall" onclick="checkRow('NShvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvse" id="NShvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvse" id="NShvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvse" id="NShvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvse" id="NShvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NShvseall" onclick="checkRow('NShvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvre" id="NShvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvre" id="NShvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvre" id="NShvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvre" id="NShvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NShvreall" onclick="checkRow('NShvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvwm" id="NShvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvwm" id="NShvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvwm" id="NShvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvwm" id="NShvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NShvwmall" onclick="checkRow('NShvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvls" id="NShvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvls" id="NShvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvls" id="NShvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvls" id="NShvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NShvlsall" onclick="checkRow('NShvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvsa" id="NShvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvsa" id="NShvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvsa" id="NShvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvsa" id="NShvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NShvsaall" onclick="checkRow('NShvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvtv" id="NShvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvtv" id="NShvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvtv" id="NShvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvtv" id="NShvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NShvtvall" onclick="checkRow('NShvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvcl" id="NShvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvcl" id="NShvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvcl" id="NShvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NShvcl" id="NShvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NShvclall" onclick="checkRow('NShvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NSwm')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washer
                            <img id="NSwmArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="NSwm" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NSwmdata">
                            <tr>
                                <th><strong>Data from your wahcing machine can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NSwm','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NSwm','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NSwm','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NSwm','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('NSwm')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NSwmAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmwm" id="NSwmwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmwm" id="NSwmwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmwm" id="NSwmwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmwm" id="NSwmwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NSwmwm',true,true)"><div class="tooltip"><button class="allbutton" id="NSwmwmall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmse" id="NSwmseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmse" id="NSwmseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmse" id="NSwmseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmse" id="NSwmsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NSwmse',true,true)"><div class="tooltip"><button class="allbutton" id="NSwmseall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmre" id="NSwmreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmre" id="NSwmreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmre" id="NSwmreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmre" id="NSwmrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NSwmre',true,true)"><div class="tooltip"><button class="allbutton" id="NSwmreall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmhv" id="NSwmhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmhv" id="NSwmhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmhv" id="NSwmhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmhv" id="NSwmhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NSwmhv',true,true)"><div class="tooltip"><button class="allbutton" id="NSwmhvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmls" id="NSwmlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmls" id="NSwmlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmls" id="NSwmlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmls" id="NSwmlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NSwmls',true,true)"><div class="tooltip"><button class="allbutton" id="NSwmlsall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmsa" id="NSwmsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmsa" id="NSwmsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmsa" id="NSwmsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmsa" id="NSwmsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NSwmsa',true,true)"><div class="tooltip"><button class="allbutton" id="NSwmsaall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmtv" id="NSwmtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmtv" id="NSwmtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmtv" id="NSwmtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmtv" id="NSwmtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NSwmtv',true,true)"><div class="tooltip"><button class="allbutton" id="NSwmtvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmcl" id="NSwmclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmcl" id="NSwmclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmcl" id="NSwmclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSwmcl" id="NSwmclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSwmclall" onclick="checkRow('NSwmcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NSls')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Lights
                            <img id="NSlsArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NSls" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NSlsdata">
                            <tr>
                                <th><strong>Data from your Lights can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NSls','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NSls','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NSls','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NSls','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NSlsAllButton" onclick="checkAll('NSls')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsls" id="NSlslsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsls" id="NSlslsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsls" id="NSlslsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsls" id="NSlslsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlslsall" onclick="checkRow('NSlsls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsse" id="NSlsseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsse" id="NSlsseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsse" id="NSlsseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsse" id="NSlssealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlsseall" onclick="checkRow('NSlsse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsre" id="NSlsreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsre" id="NSlsreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsre" id="NSlsreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlsre" id="NSlsrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlsreall" onclick="checkRow('NSlsre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlshv" id="NSlshvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlshv" id="NSlshvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlshv" id="NSlshvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlshv" id="NSlshvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlshvall" onclick="checkRow('NSlshv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlswm" id="NSlswmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlswm" id="NSlswmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlswm" id="NSlswmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlswm" id="NSlswmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlswmall" onclick="checkRow('NSlswm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlssa" id="NSlssaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlssa" id="NSlssaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlssa" id="NSlssaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlssa" id="NSlssaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlssaall" onclick="checkRow('NSlssa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlstv" id="NSlstvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlstv" id="NSlstvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlstv" id="NSlstvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlstv" id="NSlstvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlstvall" onclick="checkRow('NSlstv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlscl" id="NSlsclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlscl" id="NSlsclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlscl" id="NSlsclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlscl" id="NSlsclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlsclall" onclick="checkRow('NSlscl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NSsa')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Assistant
                            <img id="NSsaArrow" src="../images/arrowright.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="NSsa" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NSsadata">
                            <tr>
                                <th><strong>Data from your Smart Assistant can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NSsa','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NSsa','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NSsa','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NSsa','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NSsaAllButton" onclick="checkAll('NSsa')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsasa" id="NSsasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsasa" id="NSsasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsasa" id="NSsasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsasa" id="NSsasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsasaall" onclick="checkRow('NSsasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsase" id="NSsaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsase" id="NSsaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsase" id="NSsaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsase" id="NSsasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsaseall" onclick="checkRow('NSsase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsare" id="NSsareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsare" id="NSsareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsare" id="NSsareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsare" id="NSsarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsareall" onclick="checkRow('NSsare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsahv" id="NSsahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsahv" id="NSsahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsahv" id="NSsahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsahv" id="NSsahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsahvall" onclick="checkRow('NSsahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsawm" id="NSsawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsawm" id="NSsawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsawm" id="NSsawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsawm" id="NSsawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsawmall" onclick="checkRow('NSsawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsals" id="NSsalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsals" id="NSsalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsals" id="NSsalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsals" id="NSsalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsalsall" onclick="checkRow('NSsals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsatv" id="NSsatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsatv" id="NSsatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsatv" id="NSsatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsatv" id="NSsatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsatvall" onclick="checkRow('NSsatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsacl" id="NSsaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsacl" id="NSsaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsacl" id="NSsaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSsacl" id="NSsaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSsaclall" onclick="checkRow('NSsacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NStv')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart TV
                            <img id="NStvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NStv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NStvdata">
                            <tr>
                                <th><strong>Data from your Smart TV can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NStv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NStv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NStv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NStv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('NStv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvtv" id="NStvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvtv" id="NStvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvtv" id="NStvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvtv" id="NStvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NStvtvall" onclick="checkRow('NStvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvse" id="NStvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvse" id="NStvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvse" id="NStvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvse" id="NStvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NStvseall" onclick="checkRow('NStvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvre" id="NStvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvre" id="NStvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvre" id="NStvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvre" id="NStvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NStvreall" onclick="checkRow('NStvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvhv" id="NStvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvhv" id="NStvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvhv" id="NStvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvhv" id="NStvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NStvhvall" onclick="checkRow('NStvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvwm" id="NStvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvwm" id="NStvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvwm" id="NStvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvwm" id="NStvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NStvwmall" onclick="checkRow('NStvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvls" id="NStvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvls" id="NStvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvls" id="NStvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvls" id="NStvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NStvlsall" onclick="checkRow('NStvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvsa" id="NStvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvsa" id="NStvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvsa" id="NStvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvsa" id="NStvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NStvsaall" onclick="checkRow('NStvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvcl" id="NStvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvcl" id="NStvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvcl" id="NStvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NStvcl" id="NStvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NStvclall" onclick="checkRow('NStvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NScl')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Alarm Clock
                            <img id="NSclArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NScl" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NScldata">
                            <tr>
                                <th><strong>Data from your Alarm Clock can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NScl','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NScl','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NScl','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NScl','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('NScl')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclcl" id="NSclclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclcl" id="NSclclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclcl" id="NSclclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclcl" id="NSclclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSclclall" onclick="checkRow('NSclcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclse" id="NSclseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclse" id="NSclseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclse" id="NSclseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclse" id="NSclsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSclseall" onclick="checkRow('NSclse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclre" id="NSclreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclre" id="NSclreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclre" id="NSclreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclre" id="NSclrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSclreall" onclick="checkRow('NSclre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclhv" id="NSclhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclhv" id="NSclhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclhv" id="NSclhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclhv" id="NSclhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSclhvall" onclick="checkRow('NSclhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclwm" id="NSclwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclwm" id="NSclwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclwm" id="NSclwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclwm" id="NSclwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSclwmall" onclick="checkRow('NSclwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclls" id="NScllsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclls" id="NScllsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclls" id="NScllsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclls" id="NScllsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScllsall" onclick="checkRow('NSclls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclsa" id="NSclsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclsa" id="NSclsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclsa" id="NSclsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSclsa" id="NSclsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSclsaall" onclick="checkRow('NSclsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScltv" id="NScltvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScltv" id="NScltvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScltv" id="NScltvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScltv" id="NScltvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScltvall" onclick="checkRow('NScltv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NSlo')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Location Sensor
                            <img id="NSloArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NSlo" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NSlodata">
                            <tr>
                                <th><strong>Data from your Location Sensor can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NSlo','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NSlo','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NSlo','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NSlo','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NSloAllButton" onclick="checkAll('NSlo')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlose" id="NSloseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlose" id="NSloseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlose" id="NSloseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlose" id="NSlosealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSloseall" onclick="checkRow('NSlose',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlore" id="NSloreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlore" id="NSloreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlore" id="NSloreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlore" id="NSlorealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSloreall" onclick="checkRow('NSlore',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlohv" id="NSlohvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlohv" id="NSlohvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlohv" id="NSlohvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlohv" id="NSlohvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlohvall" onclick="checkRow('NSlohv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlowm" id="NSlowmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlowm" id="NSlowmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlowm" id="NSlowmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlowm" id="NSlowmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlowmall" onclick="checkRow('NSlowm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlols" id="NSlolsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlols" id="NSlolsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlols" id="NSlolsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlols" id="NSlolsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlolsall" onclick="checkRow('NSlols',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlosa" id="NSlosaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlosa" id="NSlosaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlosa" id="NSlosaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlosa" id="NSlosaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlosaall" onclick="checkRow('NSlosa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlotv" id="NSlotvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlotv" id="NSlotvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlotv" id="NSlotvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlotv" id="NSlotvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSlotvall" onclick="checkRow('NSlotv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlocl" id="NSloclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlocl" id="NSloclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlocl" id="NSloclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSlocl" id="NSloclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSloclall" onclick="checkRow('NSlocl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NSca')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Camera
                            <img id="NScaArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NSca" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NScadata">
                            <tr>
                                <th><strong>Data from your Camera can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NSca','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NSca','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NSca','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NSca','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NScaAllButton" onclick="checkAll('NSca')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScase" id="NScaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScase" id="NScaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScase" id="NScaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScase" id="NScasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScaseall" onclick="checkRow('NScase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScare" id="NScareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScare" id="NScareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScare" id="NScareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScare" id="NScarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScareall" onclick="checkRow('NScare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScahv" id="NScahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScahv" id="NScahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScahv" id="NScahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScahv" id="NScahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScahvall" onclick="checkRow('NScahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScawm" id="NScawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScawm" id="NScawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScawm" id="NScawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScawm" id="NScawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScawmall" onclick="checkRow('NScawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScals" id="NScalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScals" id="NScalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScals" id="NScalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScals" id="NScalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScalsall" onclick="checkRow('NScals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScasa" id="NScasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScasa" id="NScasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScasa" id="NScasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScasa" id="NScasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScasaall" onclick="checkRow('NScasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScatv" id="NScatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScatv" id="NScatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScatv" id="NScatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScatv" id="NScatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScatvall" onclick="checkRow('NScatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScacl" id="NScaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScacl" id="NScaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScacl" id="NScaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NScacl" id="NScaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NScaclall" onclick="checkRow('NScacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NSmp')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Microphone
                            <img id="NSmpArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NSmp" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NSmpdata">
                            <tr>
                                <th><strong>Data from your Microphone can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NSmp','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NSmp','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NSmp','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NSmp','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NSmpAllButton" onclick="checkAll('NSmp')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpse" id="NSmpseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpse" id="NSmpseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpse" id="NSmpseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpse" id="NSmpsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSmpseall" onclick="checkRow('NSmpse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpre" id="NSmpreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpre" id="NSmpreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpre" id="NSmpreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpre" id="NSmprealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSmpreall" onclick="checkRow('NSmpre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmphv" id="NSmphvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmphv" id="NSmphvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmphv" id="NSmphvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmphv" id="NSmphvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSmphvall" onclick="checkRow('NSmphv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpwm" id="NSmpwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpwm" id="NSmpwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpwm" id="NSmpwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpwm" id="NSmpwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSmpwmall" onclick="checkRow('NSmpwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpls" id="NSmplsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpls" id="NSmplsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpls" id="NSmplsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpls" id="NSmplsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSmplsall" onclick="checkRow('NSmpls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpsa" id="NSmpsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpsa" id="NSmpsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpsa" id="NSmpsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpsa" id="NSmpsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSmpsaall" onclick="checkRow('NSmpsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmptv" id="NSmptvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmptv" id="NSmptvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmptv" id="NSmptvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmptv" id="NSmptvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSmptvall" onclick="checkRow('NSmptv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpcl" id="NSmpclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpcl" id="NSmpclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpcl" id="NSmpclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSmpcl" id="NSmpclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSmpclall" onclick="checkRow('NSmpcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NSsw')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Phone/Watch
                            <img id="NSswArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NSsw" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NSswdata">
                            <tr>
                                <th><strong>Data from your Smart Phone/Watch can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NSsw','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NSsw','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NSsw','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NSsw','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NSswAllButton" onclick="checkAll('NSsw')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswse" id="NSswseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswse" id="NSswseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswse" id="NSswseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswse" id="NSswsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSswseall" onclick="checkRow('NSswse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswre" id="NSswreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswre" id="NSswreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswre" id="NSswreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswre" id="NSswrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSswreall" onclick="checkRow('NSswre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswhv" id="NSswhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswhv" id="NSswhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswhv" id="NSswhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswhv" id="NSswhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSswhvall" onclick="checkRow('NSswhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswwm" id="NSswwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswwm" id="NSswwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswwm" id="NSswwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswwm" id="NSswwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSswwmall" onclick="checkRow('NSswwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswls" id="NSswlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswls" id="NSswlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswls" id="NSswlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswls" id="NSswlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSswlsall" onclick="checkRow('NSswls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswsa" id="NSswsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswsa" id="NSswsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswsa" id="NSswsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswsa" id="NSswsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSswsaall" onclick="checkRow('NSswsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswtv" id="NSswtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswtv" id="NSswtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswtv" id="NSswtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswtv" id="NSswtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSswtvall" onclick="checkRow('NSswtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswcl" id="NSswclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswcl" id="NSswclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswcl" id="NSswclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NSswcl" id="NSswclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NSswclall" onclick="checkRow('NSswcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:5px;margin-left: -30px;height:28px" onclick="document.getElementById('NSdsmui').style.display='none';document.getElementById('NSintroui').style.display='block';closeLeftDropdown();">Save</button></div>
                </div>

			</div>

		</div>
        
        <div id="NSdusgui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('NSdusgui').style.display='none';document.getElementById('NSintroui').style.display='block';"></button>
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Storage and Usage</div>
            </div>

            <div class="settings" style="font-size:15px">
                <div class="uifixtext">
                    <h2>Storage and Sharing</h2>
                    Choose <b>one</b> storage plan from below to control where to store the information collected and the extent of sharing by different devices in your smart home.
                </div>

                <div class="inputGroup">
                    <input id="radio1" name="radioNS" type="radio"/>
                    <label for="radio1">Local Only</label>
                </div>
                <div class="inputGroup">
                    <input id="radio2" name="radioNS" type="radio" checked/>
                    <label for="radio2">Local+Remote Server</label>
                </div>
                <div class="inputGroup">
                    <input id="radio3" name="radioNS" type="radio"/>
                    <label for="radio3">Local+Remote Server+Third Party Sharing</label>
                </div>
                
                <div class="uifixtext">
                    <h2>Data Usage</h2>
                    Manage what happens with the shared information.
                </div>

                <div class="radiobox">
                    Optimize services<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Behavioral insights<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Recommendation<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Other uses<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>

                <div><button class="button middle" style="top:20px;height:28px" onclick="document.getElementById('NSdusgui').style.display='none';document.getElementById('NSintroui').style.display='block';">Save</button></div>

            </div>
        </div>
        
        <div id="LSintroui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('LSintroui').style.display='none';document.getElementById('profileSelect').style.display='block';"></button>
				<div style="text-align: center;margin-top:16px;">Settings for Local Only profile</div>
			</div>
                        
            <div class="settings">
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('LSintroui').style.display='none';document.getElementById('LSdsmui').style.display='block';currentMenu='LSse'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('LSintroui').style.display='none';document.getElementById('LSdusgui').style.display='block';currentMenu='LSse'>
                    <strong>Data Storage and Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>
		
		<div id="LSdsmui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('LSdsmui').style.display='none';document.getElementById('LSintroui').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device and Sensor Management</div>
            </div>
			<div class="settingsWithScroll">
				<div class="uifixtext">
                    <p>Expand to set permissions for information collected by who (which device) and for what purpose.</p>
                </div>

                <div class="devicecontainer">
                    <div class="narrowmenu" onclick="dropdownFunction('LSse')">
                        <div class="narrowmenuicon"><img src="../icons/1.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Home Security System
                            <img id="LSseArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="LSse" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LSsedata">
                            <tr>
                                <th><strong>Data from your Home Security System can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LSse','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LSse','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LSse','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LSse','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:38px;font-size:14px;padding:5px 1px" id="LSseAllButton" onclick="checkAll('LSse')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsese" id="LSseseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsese" id="LSseseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsese" id="LSseseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsese" id="LSsesealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSseseall" onclick="checkRow('LSsese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsere" id="LSsereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsere" id="LSsereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsere" id="LSsereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsere" id="LSserealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsereall" onclick="checkRow('LSsere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsehv" id="LSsehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsehv" id="LSsehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsehv" id="LSsehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsehv" id="LSsehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsehvall" onclick="checkRow('LSsehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsewm" id="LSsewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsewm" id="LSsewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsewm" id="LSsewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsewm" id="LSsewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsewmall" onclick="checkRow('LSsewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsels" id="LSselsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsels" id="LSselsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsels" id="LSselsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsels" id="LSselsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSselsall" onclick="checkRow('LSsels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsesa" id="LSsesaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsesa" id="LSsesaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsesa" id="LSsesaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsesa" id="LSsesaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsesaall" onclick="checkRow('LSsesa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsetv" id="LSsetvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsetv" id="LSsetvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsetv" id="LSsetvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsetv" id="LSsetvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsetvall" onclick="checkRow('LSsetv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsecl" id="LSseclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsecl" id="LSseclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsecl" id="LSseclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsecl" id="LSseclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSseclall" onclick="checkRow('LSsecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>


                    <div class="narrowmenu" onclick="dropdownFunction('LSre')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img id="LSreArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="LSre" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LSredata">
                            <tr>
                                <th><strong>Data from your Refrigerator can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LSre','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LSre','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LSre','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LSre','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="LSreAllButton" onclick="checkAll('LSre')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrere" id="LSrereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrere" id="LSrereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrere" id="LSrereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrere" id="LSrerealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSrereall" onclick="checkRow('LSrere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrese" id="LSreseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrese" id="LSreseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrese" id="LSreseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrese" id="LSresealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSreseall" onclick="checkRow('LSrese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrehv" id="LSrehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrehv" id="LSrehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrehv" id="LSrehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrehv" id="LSrehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSrehvall" onclick="checkRow('LSrehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrewm" id="LSrewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrewm" id="LSrewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrewm" id="LSrewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrewm" id="LSrewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSrewmall" onclick="checkRow('LSrewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrels" id="LSrelsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrels" id="LSrelsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrels" id="LSrelsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrels" id="LSrelsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSrelsall" onclick="checkRow('LSrels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSresa" id="LSresaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSresa" id="LSresaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSresa" id="LSresaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSresa" id="LSresaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSresaall" onclick="checkRow('LSresa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSretv" id="LSretvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSretv" id="LSretvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSretv" id="LSretvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSretv" id="LSretvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSretvall" onclick="checkRow('LSretv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrecl" id="LSreclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrecl" id="LSreclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrecl" id="LSreclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSrecl" id="LSreclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSreclall" onclick="checkRow('LSrecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LShv')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img id="LShvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="LShv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LShvdata">
                            <tr>
                                <th><strong>Data from your HVAC can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LShv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LShv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LShv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LShv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="LShvAllButton" onclick="checkAll('LShv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvhv" id="LShvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvhv" id="LShvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvhv" id="LShvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvhv" id="LShvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvhvall" onclick="checkRow('LShvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvse" id="LShvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvse" id="LShvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvse" id="LShvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvse" id="LShvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvseall" onclick="checkRow('LShvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvre" id="LShvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvre" id="LShvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvre" id="LShvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvre" id="LShvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvreall" onclick="checkRow('LShvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvwm" id="LShvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvwm" id="LShvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvwm" id="LShvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvwm" id="LShvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvwmall" onclick="checkRow('LShvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvls" id="LShvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvls" id="LShvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvls" id="LShvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvls" id="LShvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvlsall" onclick="checkRow('LShvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvsa" id="LShvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvsa" id="LShvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvsa" id="LShvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvsa" id="LShvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvsaall" onclick="checkRow('LShvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvtv" id="LShvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvtv" id="LShvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvtv" id="LShvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvtv" id="LShvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvtvall" onclick="checkRow('LShvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvcl" id="LShvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvcl" id="LShvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvcl" id="LShvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LShvcl" id="LShvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvclall" onclick="checkRow('LShvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LSwm')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washer
                            <img id="LSwmArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="LSwm" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LSwmdata">
                            <tr>
                                <th><strong>Data from your wahcing machine can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LSwm','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LSwm','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LSwm','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LSwm','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('LSwm')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="LSwmAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmwm" id="LSwmwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmwm" id="LSwmwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmwm" id="LSwmwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmwm" id="LSwmwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmwm',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmwmall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmse" id="LSwmseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmse" id="LSwmseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmse" id="LSwmseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmse" id="LSwmsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmse',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmseall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmre" id="LSwmreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmre" id="LSwmreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmre" id="LSwmreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmre" id="LSwmrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmre',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmreall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmhv" id="LSwmhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmhv" id="LSwmhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmhv" id="LSwmhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmhv" id="LSwmhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmhv',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmhvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmls" id="LSwmlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmls" id="LSwmlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmls" id="LSwmlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmls" id="LSwmlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmls',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmlsall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmsa" id="LSwmsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmsa" id="LSwmsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmsa" id="LSwmsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmsa" id="LSwmsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmsa',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmsaall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmtv" id="LSwmtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmtv" id="LSwmtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmtv" id="LSwmtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmtv" id="LSwmtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmtv',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmtvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmcl" id="LSwmclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmcl" id="LSwmclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmcl" id="LSwmclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSwmcl" id="LSwmclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSwmclall" onclick="checkRow('LSwmcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LSls')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Lights
                            <img id="LSlsArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="LSls" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LSlsdata">
                            <tr>
                                <th><strong>Data from your Lights can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LSls','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LSls','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LSls','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LSls','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="LSlsAllButton" onclick="checkAll('LSls')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsls" id="LSlslsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsls" id="LSlslsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsls" id="LSlslsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsls" id="LSlslsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlslsall" onclick="checkRow('LSlsls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsse" id="LSlsseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsse" id="LSlsseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsse" id="LSlsseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsse" id="LSlssealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlsseall" onclick="checkRow('LSlsse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsre" id="LSlsreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsre" id="LSlsreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsre" id="LSlsreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlsre" id="LSlsrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlsreall" onclick="checkRow('LSlsre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlshv" id="LSlshvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlshv" id="LSlshvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlshv" id="LSlshvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlshv" id="LSlshvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlshvall" onclick="checkRow('LSlshv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlswm" id="LSlswmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlswm" id="LSlswmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlswm" id="LSlswmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlswm" id="LSlswmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlswmall" onclick="checkRow('LSlswm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlssa" id="LSlssaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlssa" id="LSlssaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlssa" id="LSlssaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlssa" id="LSlssaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlssaall" onclick="checkRow('LSlssa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlstv" id="LSlstvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlstv" id="LSlstvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlstv" id="LSlstvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlstv" id="LSlstvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlstvall" onclick="checkRow('LSlstv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlscl" id="LSlsclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlscl" id="LSlsclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlscl" id="LSlsclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlscl" id="LSlsclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlsclall" onclick="checkRow('LSlscl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LSsa')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Assistant
                            <img id="LSsaArrow" src="../images/arrowright.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="LSsa" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LSsadata">
                            <tr>
                                <th><strong>Data from your Smart Assistant can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LSsa','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LSsa','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LSsa','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LSsa','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="LSsaAllButton" onclick="checkAll('LSsa')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsasa" id="LSsasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsasa" id="LSsasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsasa" id="LSsasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsasa" id="LSsasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsasaall" onclick="checkRow('LSsasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsase" id="LSsaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsase" id="LSsaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsase" id="LSsaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsase" id="LSsasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsaseall" onclick="checkRow('LSsase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsare" id="LSsareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsare" id="LSsareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsare" id="LSsareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsare" id="LSsarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsareall" onclick="checkRow('LSsare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsahv" id="LSsahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsahv" id="LSsahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsahv" id="LSsahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsahv" id="LSsahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsahvall" onclick="checkRow('LSsahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsawm" id="LSsawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsawm" id="LSsawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsawm" id="LSsawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsawm" id="LSsawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsawmall" onclick="checkRow('LSsawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsals" id="LSsalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsals" id="LSsalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsals" id="LSsalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsals" id="LSsalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsalsall" onclick="checkRow('LSsals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsatv" id="LSsatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsatv" id="LSsatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsatv" id="LSsatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsatv" id="LSsatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsatvall" onclick="checkRow('LSsatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsacl" id="LSsaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsacl" id="LSsaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsacl" id="LSsaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSsacl" id="LSsaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsaclall" onclick="checkRow('LSsacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LStv')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart TV
                            <img id="LStvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="LStv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LStvdata">
                            <tr>
                                <th><strong>Data from your Smart TV can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LStv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LStv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LStv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LStv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('LStv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvtv" id="LStvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvtv" id="LStvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvtv" id="LStvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvtv" id="LStvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvtvall" onclick="checkRow('LStvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvse" id="LStvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvse" id="LStvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvse" id="LStvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvse" id="LStvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvseall" onclick="checkRow('LStvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvre" id="LStvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvre" id="LStvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvre" id="LStvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvre" id="LStvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvreall" onclick="checkRow('LStvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvhv" id="LStvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvhv" id="LStvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvhv" id="LStvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvhv" id="LStvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvhvall" onclick="checkRow('LStvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvwm" id="LStvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvwm" id="LStvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvwm" id="LStvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvwm" id="LStvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvwmall" onclick="checkRow('LStvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvls" id="LStvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvls" id="LStvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvls" id="LStvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvls" id="LStvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvlsall" onclick="checkRow('LStvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvsa" id="LStvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvsa" id="LStvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvsa" id="LStvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvsa" id="LStvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvsaall" onclick="checkRow('LStvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvcl" id="LStvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvcl" id="LStvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvcl" id="LStvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LStvcl" id="LStvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvclall" onclick="checkRow('LStvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LScl')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Alarm Clock
                            <img id="LSclArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="LScl" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LScldata">
                            <tr>
                                <th><strong>Data from your Alarm Clock can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LScl','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LScl','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LScl','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LScl','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('LScl')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclcl" id="LSclclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclcl" id="LSclclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclcl" id="LSclclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclcl" id="LSclclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclclall" onclick="checkRow('LSclcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclse" id="LSclseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclse" id="LSclseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclse" id="LSclseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclse" id="LSclsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclseall" onclick="checkRow('LSclse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclre" id="LSclreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclre" id="LSclreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclre" id="LSclreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclre" id="LSclrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclreall" onclick="checkRow('LSclre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclhv" id="LSclhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclhv" id="LSclhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclhv" id="LSclhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclhv" id="LSclhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclhvall" onclick="checkRow('LSclhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclwm" id="LSclwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclwm" id="LSclwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclwm" id="LSclwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclwm" id="LSclwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclwmall" onclick="checkRow('LSclwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclls" id="LScllsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclls" id="LScllsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclls" id="LScllsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclls" id="LScllsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScllsall" onclick="checkRow('LSclls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclsa" id="LSclsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclsa" id="LSclsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclsa" id="LSclsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSclsa" id="LSclsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclsaall" onclick="checkRow('LSclsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScltv" id="LScltvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScltv" id="LScltvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScltv" id="LScltvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScltv" id="LScltvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScltvall" onclick="checkRow('LScltv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LSlo')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Location Sensor
                            <img id="LSloArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="LSlo" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LSlodata">
                            <tr>
                                <th><strong>Data from your Location Sensor can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LSlo','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LSlo','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LSlo','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LSlo','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="LSloAllButton" onclick="checkAll('LSlo')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlose" id="LSloseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlose" id="LSloseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlose" id="LSloseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlose" id="LSlosealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSloseall" onclick="checkRow('LSlose',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlore" id="LSloreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlore" id="LSloreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlore" id="LSloreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlore" id="LSlorealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSloreall" onclick="checkRow('LSlore',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlohv" id="LSlohvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlohv" id="LSlohvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlohv" id="LSlohvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlohv" id="LSlohvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlohvall" onclick="checkRow('LSlohv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlowm" id="LSlowmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlowm" id="LSlowmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlowm" id="LSlowmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlowm" id="LSlowmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlowmall" onclick="checkRow('LSlowm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlols" id="LSlolsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlols" id="LSlolsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlols" id="LSlolsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlols" id="LSlolsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlolsall" onclick="checkRow('LSlols',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlosa" id="LSlosaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlosa" id="LSlosaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlosa" id="LSlosaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlosa" id="LSlosaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlosaall" onclick="checkRow('LSlosa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlotv" id="LSlotvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlotv" id="LSlotvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlotv" id="LSlotvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlotv" id="LSlotvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlotvall" onclick="checkRow('LSlotv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlocl" id="LSloclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlocl" id="LSloclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlocl" id="LSloclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSlocl" id="LSloclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSloclall" onclick="checkRow('LSlocl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LSca')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Camera
                            <img id="LScaArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="LSca" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LScadata">
                            <tr>
                                <th><strong>Data from your Camera can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LSca','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LSca','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LSca','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LSca','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="LScaAllButton" onclick="checkAll('LSca')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScase" id="LScaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScase" id="LScaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScase" id="LScaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScase" id="LScasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScaseall" onclick="checkRow('LScase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScare" id="LScareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScare" id="LScareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScare" id="LScareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScare" id="LScarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScareall" onclick="checkRow('LScare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScahv" id="LScahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScahv" id="LScahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScahv" id="LScahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScahv" id="LScahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScahvall" onclick="checkRow('LScahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScawm" id="LScawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScawm" id="LScawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScawm" id="LScawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScawm" id="LScawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScawmall" onclick="checkRow('LScawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScals" id="LScalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScals" id="LScalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScals" id="LScalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScals" id="LScalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScalsall" onclick="checkRow('LScals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScasa" id="LScasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScasa" id="LScasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScasa" id="LScasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScasa" id="LScasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScasaall" onclick="checkRow('LScasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScatv" id="LScatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScatv" id="LScatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScatv" id="LScatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScatv" id="LScatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScatvall" onclick="checkRow('LScatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScacl" id="LScaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScacl" id="LScaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScacl" id="LScaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LScacl" id="LScaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScaclall" onclick="checkRow('LScacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LSmp')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Microphone
                            <img id="LSmpArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="LSmp" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LSmpdata">
                            <tr>
                                <th><strong>Data from your Microphone can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LSmp','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LSmp','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LSmp','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LSmp','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="LSmpAllButton" onclick="checkAll('LSmp')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpse" id="LSmpseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpse" id="LSmpseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpse" id="LSmpseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpse" id="LSmpsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmpseall" onclick="checkRow('LSmpse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpre" id="LSmpreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpre" id="LSmpreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpre" id="LSmpreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpre" id="LSmprealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmpreall" onclick="checkRow('LSmpre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmphv" id="LSmphvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmphv" id="LSmphvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmphv" id="LSmphvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmphv" id="LSmphvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmphvall" onclick="checkRow('LSmphv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpwm" id="LSmpwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpwm" id="LSmpwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpwm" id="LSmpwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpwm" id="LSmpwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmpwmall" onclick="checkRow('LSmpwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpls" id="LSmplsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpls" id="LSmplsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpls" id="LSmplsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpls" id="LSmplsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmplsall" onclick="checkRow('LSmpls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpsa" id="LSmpsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpsa" id="LSmpsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpsa" id="LSmpsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpsa" id="LSmpsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmpsaall" onclick="checkRow('LSmpsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmptv" id="LSmptvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmptv" id="LSmptvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmptv" id="LSmptvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmptv" id="LSmptvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmptvall" onclick="checkRow('LSmptv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpcl" id="LSmpclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpcl" id="LSmpclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpcl" id="LSmpclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSmpcl" id="LSmpclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmpclall" onclick="checkRow('LSmpcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('LSsw')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Phone/Watch
                            <img id="LSswArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="LSsw" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="LSswdata">
                            <tr>
                                <th><strong>Data from your Smart Phone/Watch can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('LSsw','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('LSsw','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('LSsw','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('LSsw','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="LSswAllButton" onclick="checkAll('LSsw')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswse" id="LSswseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswse" id="LSswseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswse" id="LSswseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswse" id="LSswsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswseall" onclick="checkRow('LSswse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswre" id="LSswreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswre" id="LSswreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswre" id="LSswreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswre" id="LSswrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswreall" onclick="checkRow('LSswre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswhv" id="LSswhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswhv" id="LSswhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswhv" id="LSswhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswhv" id="LSswhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswhvall" onclick="checkRow('LSswhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswwm" id="LSswwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswwm" id="LSswwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswwm" id="LSswwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswwm" id="LSswwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswwmall" onclick="checkRow('LSswwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswls" id="LSswlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswls" id="LSswlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswls" id="LSswlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswls" id="LSswlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswlsall" onclick="checkRow('LSswls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswsa" id="LSswsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswsa" id="LSswsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswsa" id="LSswsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswsa" id="LSswsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswsaall" onclick="checkRow('LSswsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswtv" id="LSswtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswtv" id="LSswtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswtv" id="LSswtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswtv" id="LSswtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswtvall" onclick="checkRow('LSswtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswcl" id="LSswclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswcl" id="LSswclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswcl" id="LSswclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox LSswcl" id="LSswclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswclall" onclick="checkRow('LSswcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:5px;margin-left: -30px;height:28px" onclick="document.getElementById('LSdsmui').style.display='none';document.getElementById('LSintroui').style.display='block';closeLeftDropdown();">Save</button></div>
                </div>

			</div>

		</div>
        
        <div id="LSdusgui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('LSdusgui').style.display='none';document.getElementById('LSintroui').style.display='block';"></button>
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Storage and Usage</div>
            </div>

            <div class="settings" style="font-size:15px">
                <div class="uifixtext">
                    <h2>Storage and Sharing</h2>
                    Choose <b>one</b> storage plan from below to control where to store the information collected and the extent of sharing by different devices in your smart home.
                </div>

                <div class="inputGroup">
                    <input id="radio1" name="radioLS" type="radio" checked/>
                    <label for="radio1">Local Only</label>
                </div>
                <div class="inputGroup">
                    <input id="radio2" name="radioLS" type="radio"/>
                    <label for="radio2">Local+Remote Server</label>
                </div>
                <div class="inputGroup">
                    <input id="radio3" name="radioLS" type="radio"/>
                    <label for="radio3">Local+Remote Server+Third Party Sharing</label>
                </div>
                
                <div class="uifixtext">
                    <h2>Data Usage</h2>
                    Manage what happens with the shared information.
                </div>

                <div class="radiobox">
                    Optimize services<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Behavioral insights<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Recommendation<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Other uses<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>

                <div><button class="button middle" style="top:20px;height:28px" onclick="document.getElementById('LSdusgui').style.display='none';document.getElementById('LSintroui').style.display='block';">Save</button></div>

            </div>
        </div>
        
        <div id="NTintroui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('NTintroui').style.display='none';document.getElementById('profileSelect').style.display='block';"></button>
				<div style="text-align: center;margin-top:16px;">Settings for No Tracking profile</div>
			</div>
                        
            <div class="settings">
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('NTintroui').style.display='none';document.getElementById('NTdsmui').style.display='block';currentMenu='NTse'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('NTintroui').style.display='none';document.getElementById('NTdusgui').style.display='block';currentMenu='NTse'>
                    <strong>Data Storage and Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>
		
		<div id="NTdsmui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('NTdsmui').style.display='none';document.getElementById('NTintroui').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device and Sensor Management</div>
            </div>
			<div class="settingsWithScroll">
				<div class="uifixtext">
                    <p>Expand to set permissions for information collected by who (which device) and for what purpose.</p>
                </div>

                <div class="devicecontainer">
                    <div class="narrowmenu" onclick="dropdownFunction('NTse')">
                        <div class="narrowmenuicon"><img src="../icons/1.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Home Security System
                            <img id="NTseArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="NTse" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTsedata">
                            <tr>
                                <th><strong>Data from your Home Security System can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTse','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTse','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTse','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTse','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:38px;font-size:14px;padding:5px 1px" id="NTseAllButton" onclick="checkAll('NTse')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsese" id="NTseseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsese" id="NTseseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsese" id="NTseseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsese" id="NTsesealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTseseall" onclick="checkRow('NTsese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsere" id="NTsereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsere" id="NTsereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsere" id="NTsereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsere" id="NTserealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsereall" onclick="checkRow('NTsere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsehv" id="NTsehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsehv" id="NTsehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsehv" id="NTsehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsehv" id="NTsehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsehvall" onclick="checkRow('NTsehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsewm" id="NTsewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsewm" id="NTsewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsewm" id="NTsewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsewm" id="NTsewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsewmall" onclick="checkRow('NTsewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsels" id="NTselsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsels" id="NTselsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsels" id="NTselsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsels" id="NTselsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTselsall" onclick="checkRow('NTsels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsesa" id="NTsesaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsesa" id="NTsesaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsesa" id="NTsesaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsesa" id="NTsesaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsesaall" onclick="checkRow('NTsesa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsetv" id="NTsetvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsetv" id="NTsetvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsetv" id="NTsetvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsetv" id="NTsetvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsetvall" onclick="checkRow('NTsetv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsecl" id="NTseclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsecl" id="NTseclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsecl" id="NTseclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsecl" id="NTseclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTseclall" onclick="checkRow('NTsecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>


                    <div class="narrowmenu" onclick="dropdownFunction('NTre')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img id="NTreArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NTre" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTredata">
                            <tr>
                                <th><strong>Data from your Refrigerator can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTre','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTre','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTre','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTre','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NTreAllButton" onclick="checkAll('NTre')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrere" id="NTrereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrere" id="NTrereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrere" id="NTrereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrere" id="NTrerealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTrereall" onclick="checkRow('NTrere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrese" id="NTreseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrese" id="NTreseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrese" id="NTreseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrese" id="NTresealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTreseall" onclick="checkRow('NTrese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrehv" id="NTrehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrehv" id="NTrehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrehv" id="NTrehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrehv" id="NTrehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTrehvall" onclick="checkRow('NTrehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrewm" id="NTrewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrewm" id="NTrewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrewm" id="NTrewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrewm" id="NTrewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTrewmall" onclick="checkRow('NTrewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrels" id="NTrelsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrels" id="NTrelsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrels" id="NTrelsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrels" id="NTrelsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTrelsall" onclick="checkRow('NTrels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTresa" id="NTresaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTresa" id="NTresaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTresa" id="NTresaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTresa" id="NTresaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTresaall" onclick="checkRow('NTresa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTretv" id="NTretvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTretv" id="NTretvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTretv" id="NTretvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTretv" id="NTretvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTretvall" onclick="checkRow('NTretv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrecl" id="NTreclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTrecl" id="NTreclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrecl" id="NTreclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTrecl" id="NTreclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTreclall" onclick="checkRow('NTrecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NThv')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img id="NThvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NThv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NThvdata">
                            <tr>
                                <th><strong>Data from your HVAC can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NThv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NThv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NThv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NThv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NThvAllButton" onclick="checkAll('NThv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvhv" id="NThvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvhv" id="NThvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvhv" id="NThvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvhv" id="NThvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NThvhvall" onclick="checkRow('NThvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvse" id="NThvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvse" id="NThvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvse" id="NThvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvse" id="NThvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NThvseall" onclick="checkRow('NThvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvre" id="NThvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvre" id="NThvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvre" id="NThvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvre" id="NThvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NThvreall" onclick="checkRow('NThvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvwm" id="NThvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvwm" id="NThvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvwm" id="NThvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvwm" id="NThvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NThvwmall" onclick="checkRow('NThvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvls" id="NThvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvls" id="NThvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvls" id="NThvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvls" id="NThvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NThvlsall" onclick="checkRow('NThvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvsa" id="NThvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvsa" id="NThvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvsa" id="NThvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvsa" id="NThvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NThvsaall" onclick="checkRow('NThvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvtv" id="NThvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvtv" id="NThvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvtv" id="NThvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvtv" id="NThvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NThvtvall" onclick="checkRow('NThvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvcl" id="NThvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NThvcl" id="NThvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvcl" id="NThvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NThvcl" id="NThvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NThvclall" onclick="checkRow('NThvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NTwm')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washer
                            <img id="NTwmArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="NTwm" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTwmdata">
                            <tr>
                                <th><strong>Data from your wahcing machine can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTwm','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTwm','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTwm','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTwm','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('NTwm')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NTwmAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmwm" id="NTwmwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmwm" id="NTwmwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmwm" id="NTwmwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmwm" id="NTwmwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NTwmwm',true,true)"><div class="tooltip"><button class="allbutton" id="NTwmwmall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmse" id="NTwmseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmse" id="NTwmseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmse" id="NTwmseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmse" id="NTwmsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NTwmse',true,true)"><div class="tooltip"><button class="allbutton" id="NTwmseall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmre" id="NTwmreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmre" id="NTwmreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmre" id="NTwmreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmre" id="NTwmrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NTwmre',true,true)"><div class="tooltip"><button class="allbutton" id="NTwmreall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmhv" id="NTwmhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmhv" id="NTwmhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmhv" id="NTwmhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmhv" id="NTwmhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NTwmhv',true,true)"><div class="tooltip"><button class="allbutton" id="NTwmhvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmls" id="NTwmlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmls" id="NTwmlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmls" id="NTwmlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmls" id="NTwmlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NTwmls',true,true)"><div class="tooltip"><button class="allbutton" id="NTwmlsall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmsa" id="NTwmsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmsa" id="NTwmsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmsa" id="NTwmsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmsa" id="NTwmsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NTwmsa',true,true)"><div class="tooltip"><button class="allbutton" id="NTwmsaall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmtv" id="NTwmtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmtv" id="NTwmtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmtv" id="NTwmtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmtv" id="NTwmtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('NTwmtv',true,true)"><div class="tooltip"><button class="allbutton" id="NTwmtvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmcl" id="NTwmclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTwmcl" id="NTwmclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmcl" id="NTwmclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTwmcl" id="NTwmclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTwmclall" onclick="checkRow('NTwmcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NTls')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Lights
                            <img id="NTlsArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NTls" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTlsdata">
                            <tr>
                                <th><strong>Data from your Lights can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTls','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTls','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTls','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTls','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NTlsAllButton" onclick="checkAll('NTls')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlsls" id="NTlslsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlsls" id="NTlslsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlsls" id="NTlslsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlsls" id="NTlslsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlslsall" onclick="checkRow('NTlsls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlsse" id="NTlsseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlsse" id="NTlsseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlsse" id="NTlsseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlsse" id="NTlssealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlsseall" onclick="checkRow('NTlsse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlsre" id="NTlsreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlsre" id="NTlsreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlsre" id="NTlsreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlsre" id="NTlsrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlsreall" onclick="checkRow('NTlsre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlshv" id="NTlshvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlshv" id="NTlshvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlshv" id="NTlshvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlshv" id="NTlshvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlshvall" onclick="checkRow('NTlshv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlswm" id="NTlswmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlswm" id="NTlswmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlswm" id="NTlswmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlswm" id="NTlswmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlswmall" onclick="checkRow('NTlswm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlssa" id="NTlssaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlssa" id="NTlssaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlssa" id="NTlssaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlssa" id="NTlssaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlssaall" onclick="checkRow('NTlssa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlstv" id="NTlstvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlstv" id="NTlstvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlstv" id="NTlstvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlstv" id="NTlstvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlstvall" onclick="checkRow('NTlstv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlscl" id="NTlsclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlscl" id="NTlsclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlscl" id="NTlsclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlscl" id="NTlsclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlsclall" onclick="checkRow('NTlscl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NTsa')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Assistant
                            <img id="NTsaArrow" src="../images/arrowright.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="NTsa" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTsadata">
                            <tr>
                                <th><strong>Data from your Smart Assistant can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTsa','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTsa','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTsa','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTsa','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NTsaAllButton" onclick="checkAll('NTsa')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsasa" id="NTsasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsasa" id="NTsasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsasa" id="NTsasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsasa" id="NTsasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsasaall" onclick="checkRow('NTsasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsase" id="NTsaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsase" id="NTsaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsase" id="NTsaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsase" id="NTsasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsaseall" onclick="checkRow('NTsase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsare" id="NTsareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsare" id="NTsareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsare" id="NTsareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsare" id="NTsarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsareall" onclick="checkRow('NTsare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsahv" id="NTsahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsahv" id="NTsahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsahv" id="NTsahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsahv" id="NTsahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsahvall" onclick="checkRow('NTsahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsawm" id="NTsawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsawm" id="NTsawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsawm" id="NTsawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsawm" id="NTsawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsawmall" onclick="checkRow('NTsawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsals" id="NTsalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsals" id="NTsalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsals" id="NTsalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsals" id="NTsalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsalsall" onclick="checkRow('NTsals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsatv" id="NTsatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsatv" id="NTsatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsatv" id="NTsatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsatv" id="NTsatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsatvall" onclick="checkRow('NTsatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsacl" id="NTsaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTsacl" id="NTsaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsacl" id="NTsaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTsacl" id="NTsaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTsaclall" onclick="checkRow('NTsacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NTtv')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart TV
                            <img id="NTtvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NTtv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTtvdata">
                            <tr>
                                <th><strong>Data from your Smart TV can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTtv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTtv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTtv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTtv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('NTtv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvtv" id="NTtvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvtv" id="NTtvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvtv" id="NTtvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvtv" id="NTtvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTtvtvall" onclick="checkRow('NTtvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvse" id="NTtvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvse" id="NTtvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvse" id="NTtvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvse" id="NTtvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTtvseall" onclick="checkRow('NTtvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvre" id="NTtvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvre" id="NTtvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvre" id="NTtvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvre" id="NTtvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTtvreall" onclick="checkRow('NTtvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvhv" id="NTtvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvhv" id="NTtvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvhv" id="NTtvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvhv" id="NTtvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTtvhvall" onclick="checkRow('NTtvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvwm" id="NTtvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvwm" id="NTtvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvwm" id="NTtvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvwm" id="NTtvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTtvwmall" onclick="checkRow('NTtvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvls" id="NTtvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvls" id="NTtvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvls" id="NTtvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvls" id="NTtvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTtvlsall" onclick="checkRow('NTtvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvsa" id="NTtvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvsa" id="NTtvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvsa" id="NTtvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvsa" id="NTtvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTtvsaall" onclick="checkRow('NTtvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvcl" id="NTtvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTtvcl" id="NTtvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvcl" id="NTtvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTtvcl" id="NTtvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTtvclall" onclick="checkRow('NTtvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NTcl')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Alarm Clock
                            <img id="NTclArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NTcl" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTcldata">
                            <tr>
                                <th><strong>Data from your Alarm Clock can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTcl','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTcl','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTcl','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTcl','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('NTcl')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclcl" id="NTclclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclcl" id="NTclclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclcl" id="NTclclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclcl" id="NTclclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTclclall" onclick="checkRow('NTclcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclse" id="NTclseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclse" id="NTclseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclse" id="NTclseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclse" id="NTclsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTclseall" onclick="checkRow('NTclse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclre" id="NTclreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclre" id="NTclreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclre" id="NTclreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclre" id="NTclrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTclreall" onclick="checkRow('NTclre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclhv" id="NTclhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclhv" id="NTclhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclhv" id="NTclhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclhv" id="NTclhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTclhvall" onclick="checkRow('NTclhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclwm" id="NTclwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclwm" id="NTclwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclwm" id="NTclwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclwm" id="NTclwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTclwmall" onclick="checkRow('NTclwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclls" id="NTcllsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclls" id="NTcllsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclls" id="NTcllsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclls" id="NTcllsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcllsall" onclick="checkRow('NTclls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclsa" id="NTclsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTclsa" id="NTclsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclsa" id="NTclsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTclsa" id="NTclsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTclsaall" onclick="checkRow('NTclsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcltv" id="NTcltvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcltv" id="NTcltvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcltv" id="NTcltvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcltv" id="NTcltvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcltvall" onclick="checkRow('NTcltv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NTlo')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Location Sensor
                            <img id="NTloArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NTlo" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTlodata">
                            <tr>
                                <th><strong>Data from your Location Sensor can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTlo','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTlo','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTlo','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTlo','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NTloAllButton" onclick="checkAll('NTlo')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlose" id="NTloseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlose" id="NTloseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlose" id="NTloseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlose" id="NTlosealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTloseall" onclick="checkRow('NTlose',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlore" id="NTloreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlore" id="NTloreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlore" id="NTloreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlore" id="NTlorealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTloreall" onclick="checkRow('NTlore',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlohv" id="NTlohvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlohv" id="NTlohvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlohv" id="NTlohvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlohv" id="NTlohvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlohvall" onclick="checkRow('NTlohv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlowm" id="NTlowmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlowm" id="NTlowmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlowm" id="NTlowmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlowm" id="NTlowmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlowmall" onclick="checkRow('NTlowm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlols" id="NTlolsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlols" id="NTlolsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlols" id="NTlolsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlols" id="NTlolsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlolsall" onclick="checkRow('NTlols',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlosa" id="NTlosaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlosa" id="NTlosaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlosa" id="NTlosaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlosa" id="NTlosaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlosaall" onclick="checkRow('NTlosa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlotv" id="NTlotvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlotv" id="NTlotvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlotv" id="NTlotvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlotv" id="NTlotvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTlotvall" onclick="checkRow('NTlotv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlocl" id="NTloclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTlocl" id="NTloclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlocl" id="NTloclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTlocl" id="NTloclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTloclall" onclick="checkRow('NTlocl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NTca')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Camera
                            <img id="NTcaArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NTca" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTcadata">
                            <tr>
                                <th><strong>Data from your Camera can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTca','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTca','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTca','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTca','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NTcaAllButton" onclick="checkAll('NTca')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcase" id="NTcaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcase" id="NTcaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcase" id="NTcaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcase" id="NTcasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcaseall" onclick="checkRow('NTcase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcare" id="NTcareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcare" id="NTcareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcare" id="NTcareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcare" id="NTcarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcareall" onclick="checkRow('NTcare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcahv" id="NTcahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcahv" id="NTcahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcahv" id="NTcahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcahv" id="NTcahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcahvall" onclick="checkRow('NTcahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcawm" id="NTcawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcawm" id="NTcawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcawm" id="NTcawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcawm" id="NTcawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcawmall" onclick="checkRow('NTcawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcals" id="NTcalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcals" id="NTcalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcals" id="NTcalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcals" id="NTcalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcalsall" onclick="checkRow('NTcals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcasa" id="NTcasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcasa" id="NTcasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcasa" id="NTcasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcasa" id="NTcasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcasaall" onclick="checkRow('NTcasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcatv" id="NTcatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcatv" id="NTcatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcatv" id="NTcatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcatv" id="NTcatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcatvall" onclick="checkRow('NTcatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcacl" id="NTcaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTcacl" id="NTcaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcacl" id="NTcaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTcacl" id="NTcaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTcaclall" onclick="checkRow('NTcacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NTmp')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Microphone
                            <img id="NTmpArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NTmp" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTmpdata">
                            <tr>
                                <th><strong>Data from your Microphone can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTmp','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTmp','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTmp','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTmp','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NTmpAllButton" onclick="checkAll('NTmp')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpse" id="NTmpseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpse" id="NTmpseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpse" id="NTmpseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpse" id="NTmpsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTmpseall" onclick="checkRow('NTmpse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpre" id="NTmpreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpre" id="NTmpreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpre" id="NTmpreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpre" id="NTmprealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTmpreall" onclick="checkRow('NTmpre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmphv" id="NTmphvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmphv" id="NTmphvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmphv" id="NTmphvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmphv" id="NTmphvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTmphvall" onclick="checkRow('NTmphv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpwm" id="NTmpwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpwm" id="NTmpwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpwm" id="NTmpwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpwm" id="NTmpwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTmpwmall" onclick="checkRow('NTmpwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpls" id="NTmplsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpls" id="NTmplsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpls" id="NTmplsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpls" id="NTmplsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTmplsall" onclick="checkRow('NTmpls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpsa" id="NTmpsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpsa" id="NTmpsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpsa" id="NTmpsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpsa" id="NTmpsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTmpsaall" onclick="checkRow('NTmpsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmptv" id="NTmptvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmptv" id="NTmptvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmptv" id="NTmptvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmptv" id="NTmptvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTmptvall" onclick="checkRow('NTmptv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpcl" id="NTmpclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTmpcl" id="NTmpclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpcl" id="NTmpclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTmpcl" id="NTmpclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTmpclall" onclick="checkRow('NTmpcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('NTsw')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Phone/Watch
                            <img id="NTswArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="NTsw" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="NTswdata">
                            <tr>
                                <th><strong>Data from your Smart Phone/Watch can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('NTsw','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('NTsw','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('NTsw','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('NTsw','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="NTswAllButton" onclick="checkAll('NTsw')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswse" id="NTswseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswse" id="NTswseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswse" id="NTswseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswse" id="NTswsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTswseall" onclick="checkRow('NTswse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswre" id="NTswreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswre" id="NTswreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswre" id="NTswreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswre" id="NTswrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTswreall" onclick="checkRow('NTswre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswhv" id="NTswhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswhv" id="NTswhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswhv" id="NTswhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswhv" id="NTswhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTswhvall" onclick="checkRow('NTswhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswwm" id="NTswwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswwm" id="NTswwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswwm" id="NTswwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswwm" id="NTswwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTswwmall" onclick="checkRow('NTswwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswls" id="NTswlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswls" id="NTswlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswls" id="NTswlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswls" id="NTswlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTswlsall" onclick="checkRow('NTswls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswsa" id="NTswsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswsa" id="NTswsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswsa" id="NTswsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswsa" id="NTswsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTswsaall" onclick="checkRow('NTswsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswtv" id="NTswtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswtv" id="NTswtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswtv" id="NTswtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswtv" id="NTswtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTswtvall" onclick="checkRow('NTswtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswcl" id="NTswclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox NTswcl" id="NTswclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswcl" id="NTswclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox NTswcl" id="NTswclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="NTswclall" onclick="checkRow('NTswcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:5px;margin-left: -30px;height:28px" onclick="document.getElementById('NTdsmui').style.display='none';document.getElementById('NTintroui').style.display='block';closeLeftDropdown();">Save</button></div>
                </div>

			</div>

		</div>
        
        <div id="NTdusgui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('NTdusgui').style.display='none';document.getElementById('NTintroui').style.display='block';"></button>
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Storage and Usage</div>
            </div>

            <div class="settings" style="font-size:15px">
                <div class="uifixtext">
                    <h2>Storage and Sharing</h2>
                    Choose <b>one</b> storage plan from below to control where to store the information collected and the extent of sharing by different devices in your smart home.
                </div>

                <div class="inputGroup">
                    <input id="radio1" name="radioNT" type="radio"/>
                    <label for="radio1">Local Only</label>
                </div>
                <div class="inputGroup">
                    <input id="radio2" name="radioNT" type="radio"/>
                    <label for="radio2">Local+Remote Server</label>
                </div>
                <div class="inputGroup">
                    <input id="radio3" name="radioNT" type="radio" checked/>
                    <label for="radio3">Local+Remote Server+Third Party Sharing</label>
                </div>
                
                <div class="uifixtext">
                    <h2>Data Usage</h2>
                    Manage what happens with the shared information.
                </div>

                <div class="radiobox">
                    Optimize services<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Behavioral insights<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Recommendation<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Other uses<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                </div>

                <div><button class="button middle" style="top:20px;height:28px" onclick="document.getElementById('NTdusgui').style.display='none';document.getElementById('NTintroui').style.display='block';">Save</button></div>

            </div>
        </div>
    
        <div id="DAintroui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('DAintroui').style.display='none';document.getElementById('profileSelect').style.display='block';"></button>
				<div style="text-align: center;margin-top:16px;">Settings for Disable All profile</div>
			</div>
                        
            <div class="settings">
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('DAintroui').style.display='none';document.getElementById('DAdsmui').style.display='block';currentMenu='DAse'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('DAintroui').style.display='none';document.getElementById('DAdusgui').style.display='block';currentMenu='DAse'>
                    <strong>Data Storage and Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>
		
		<div id="DAdsmui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('DAdsmui').style.display='none';document.getElementById('DAintroui').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device and Sensor Management</div>
            </div>
			<div class="settingsWithScroll">
				<div class="uifixtext">
                    <p>Expand to set permissions for information collected by who (which device) and for what purpose.</p>
                </div>

                <div class="devicecontainer">
                    <div class="narrowmenu" onclick="dropdownFunction('DAse')">
                        <div class="narrowmenuicon"><img src="../icons/1.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Home Security System
                            <img id="DAseArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="DAse" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAsedata">
                            <tr>
                                <th><strong>Data from your Home Security System can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAse','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAse','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAse','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAse','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:38px;font-size:14px;padding:5px 1px" id="DAseAllButton" onclick="checkAll('DAse')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsese" id="DAseseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsese" id="DAseseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsese" id="DAseseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsese" id="DAsesealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAseseall" onclick="checkRow('DAsese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsere" id="DAsereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsere" id="DAsereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsere" id="DAsereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsere" id="DAserealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsereall" onclick="checkRow('DAsere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsehv" id="DAsehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsehv" id="DAsehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsehv" id="DAsehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsehv" id="DAsehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsehvall" onclick="checkRow('DAsehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsewm" id="DAsewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsewm" id="DAsewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsewm" id="DAsewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsewm" id="DAsewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsewmall" onclick="checkRow('DAsewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsels" id="DAselsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsels" id="DAselsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsels" id="DAselsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsels" id="DAselsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAselsall" onclick="checkRow('DAsels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsesa" id="DAsesaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsesa" id="DAsesaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsesa" id="DAsesaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsesa" id="DAsesaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsesaall" onclick="checkRow('DAsesa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsetv" id="DAsetvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsetv" id="DAsetvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsetv" id="DAsetvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsetv" id="DAsetvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsetvall" onclick="checkRow('DAsetv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsecl" id="DAseclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsecl" id="DAseclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsecl" id="DAseclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsecl" id="DAseclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAseclall" onclick="checkRow('DAsecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>


                    <div class="narrowmenu" onclick="dropdownFunction('DAre')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img id="DAreArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="DAre" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAredata">
                            <tr>
                                <th><strong>Data from your Refrigerator can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAre','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAre','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAre','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAre','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="DAreAllButton" onclick="checkAll('DAre')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArere" id="DArereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArere" id="DArereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArere" id="DArereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArere" id="DArerealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DArereall" onclick="checkRow('DArere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArese" id="DAreseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArese" id="DAreseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArese" id="DAreseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArese" id="DAresealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAreseall" onclick="checkRow('DArese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArehv" id="DArehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArehv" id="DArehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArehv" id="DArehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArehv" id="DArehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DArehvall" onclick="checkRow('DArehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArewm" id="DArewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArewm" id="DArewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArewm" id="DArewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArewm" id="DArewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DArewmall" onclick="checkRow('DArewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArels" id="DArelsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArels" id="DArelsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArels" id="DArelsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArels" id="DArelsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DArelsall" onclick="checkRow('DArels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAresa" id="DAresaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAresa" id="DAresaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAresa" id="DAresaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAresa" id="DAresaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAresaall" onclick="checkRow('DAresa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAretv" id="DAretvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAretv" id="DAretvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAretv" id="DAretvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAretv" id="DAretvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAretvall" onclick="checkRow('DAretv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArecl" id="DAreclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArecl" id="DAreclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArecl" id="DAreclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DArecl" id="DAreclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAreclall" onclick="checkRow('DArecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAhv')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img id="DAhvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="DAhv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAhvdata">
                            <tr>
                                <th><strong>Data from your HVAC can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAhv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAhv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAhv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAhv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="DAhvAllButton" onclick="checkAll('DAhv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvhv" id="DAhvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvhv" id="DAhvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvhv" id="DAhvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvhv" id="DAhvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAhvhvall" onclick="checkRow('DAhvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvse" id="DAhvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvse" id="DAhvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvse" id="DAhvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvse" id="DAhvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAhvseall" onclick="checkRow('DAhvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvre" id="DAhvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvre" id="DAhvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvre" id="DAhvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvre" id="DAhvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAhvreall" onclick="checkRow('DAhvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvwm" id="DAhvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvwm" id="DAhvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvwm" id="DAhvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvwm" id="DAhvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAhvwmall" onclick="checkRow('DAhvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvls" id="DAhvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvls" id="DAhvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvls" id="DAhvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvls" id="DAhvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAhvlsall" onclick="checkRow('DAhvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvsa" id="DAhvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvsa" id="DAhvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvsa" id="DAhvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvsa" id="DAhvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAhvsaall" onclick="checkRow('DAhvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvtv" id="DAhvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvtv" id="DAhvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvtv" id="DAhvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvtv" id="DAhvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAhvtvall" onclick="checkRow('DAhvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvcl" id="DAhvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvcl" id="DAhvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvcl" id="DAhvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAhvcl" id="DAhvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAhvclall" onclick="checkRow('DAhvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAwm')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washer
                            <img id="DAwmArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="DAwm" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAwmdata">
                            <tr>
                                <th><strong>Data from your wahcing machine can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAwm','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAwm','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAwm','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAwm','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('DAwm')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="DAwmAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmwm" id="DAwmwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmwm" id="DAwmwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmwm" id="DAwmwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmwm" id="DAwmwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('DAwmwm',true,true)"><div class="tooltip"><button class="allbutton" id="DAwmwmall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmse" id="DAwmseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmse" id="DAwmseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmse" id="DAwmseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmse" id="DAwmsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('DAwmse',true,true)"><div class="tooltip"><button class="allbutton" id="DAwmseall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmre" id="DAwmreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmre" id="DAwmreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmre" id="DAwmreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmre" id="DAwmrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('DAwmre',true,true)"><div class="tooltip"><button class="allbutton" id="DAwmreall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmhv" id="DAwmhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmhv" id="DAwmhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmhv" id="DAwmhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmhv" id="DAwmhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('DAwmhv',true,true)"><div class="tooltip"><button class="allbutton" id="DAwmhvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmls" id="DAwmlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmls" id="DAwmlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmls" id="DAwmlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmls" id="DAwmlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('DAwmls',true,true)"><div class="tooltip"><button class="allbutton" id="DAwmlsall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmsa" id="DAwmsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmsa" id="DAwmsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmsa" id="DAwmsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmsa" id="DAwmsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('DAwmsa',true,true)"><div class="tooltip"><button class="allbutton" id="DAwmsaall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmtv" id="DAwmtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmtv" id="DAwmtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmtv" id="DAwmtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmtv" id="DAwmtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('DAwmtv',true,true)"><div class="tooltip"><button class="allbutton" id="DAwmtvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmcl" id="DAwmclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmcl" id="DAwmclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmcl" id="DAwmclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAwmcl" id="DAwmclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAwmclall" onclick="checkRow('DAwmcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAls')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Lights
                            <img id="DAlsArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="DAls" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAlsdata">
                            <tr>
                                <th><strong>Data from your Lights can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAls','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAls','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAls','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAls','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="DAlsAllButton" onclick="checkAll('DAls')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsls" id="DAlslsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsls" id="DAlslsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsls" id="DAlslsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsls" id="DAlslsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlslsall" onclick="checkRow('DAlsls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsse" id="DAlsseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsse" id="DAlsseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsse" id="DAlsseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsse" id="DAlssealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlsseall" onclick="checkRow('DAlsse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsre" id="DAlsreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsre" id="DAlsreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsre" id="DAlsreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlsre" id="DAlsrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlsreall" onclick="checkRow('DAlsre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlshv" id="DAlshvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlshv" id="DAlshvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlshv" id="DAlshvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlshv" id="DAlshvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlshvall" onclick="checkRow('DAlshv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlswm" id="DAlswmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlswm" id="DAlswmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlswm" id="DAlswmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlswm" id="DAlswmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlswmall" onclick="checkRow('DAlswm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlssa" id="DAlssaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlssa" id="DAlssaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlssa" id="DAlssaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlssa" id="DAlssaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlssaall" onclick="checkRow('DAlssa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlstv" id="DAlstvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlstv" id="DAlstvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlstv" id="DAlstvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlstv" id="DAlstvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlstvall" onclick="checkRow('DAlstv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlscl" id="DAlsclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlscl" id="DAlsclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlscl" id="DAlsclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlscl" id="DAlsclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlsclall" onclick="checkRow('DAlscl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAsa')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Assistant
                            <img id="DAsaArrow" src="../images/arrowright.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="DAsa" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAsadata">
                            <tr>
                                <th><strong>Data from your Smart Assistant can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAsa','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAsa','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAsa','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAsa','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="DAsaAllButton" onclick="checkAll('DAsa')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsasa" id="DAsasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsasa" id="DAsasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsasa" id="DAsasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsasa" id="DAsasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsasaall" onclick="checkRow('DAsasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsase" id="DAsaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsase" id="DAsaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsase" id="DAsaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsase" id="DAsasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsaseall" onclick="checkRow('DAsase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsare" id="DAsareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsare" id="DAsareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsare" id="DAsareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsare" id="DAsarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsareall" onclick="checkRow('DAsare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsahv" id="DAsahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsahv" id="DAsahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsahv" id="DAsahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsahv" id="DAsahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsahvall" onclick="checkRow('DAsahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsawm" id="DAsawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsawm" id="DAsawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsawm" id="DAsawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsawm" id="DAsawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsawmall" onclick="checkRow('DAsawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsals" id="DAsalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsals" id="DAsalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsals" id="DAsalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsals" id="DAsalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsalsall" onclick="checkRow('DAsals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsatv" id="DAsatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsatv" id="DAsatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsatv" id="DAsatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsatv" id="DAsatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsatvall" onclick="checkRow('DAsatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsacl" id="DAsaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsacl" id="DAsaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsacl" id="DAsaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAsacl" id="DAsaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAsaclall" onclick="checkRow('DAsacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAtv')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart TV
                            <img id="DAtvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="DAtv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAtvdata">
                            <tr>
                                <th><strong>Data from your Smart TV can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAtv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAtv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAtv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAtv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('DAtv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvtv" id="DAtvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvtv" id="DAtvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvtv" id="DAtvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvtv" id="DAtvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAtvtvall" onclick="checkRow('DAtvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvse" id="DAtvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvse" id="DAtvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvse" id="DAtvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvse" id="DAtvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAtvseall" onclick="checkRow('DAtvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvre" id="DAtvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvre" id="DAtvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvre" id="DAtvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvre" id="DAtvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAtvreall" onclick="checkRow('DAtvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvhv" id="DAtvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvhv" id="DAtvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvhv" id="DAtvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvhv" id="DAtvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAtvhvall" onclick="checkRow('DAtvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvwm" id="DAtvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvwm" id="DAtvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvwm" id="DAtvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvwm" id="DAtvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAtvwmall" onclick="checkRow('DAtvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvls" id="DAtvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvls" id="DAtvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvls" id="DAtvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvls" id="DAtvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAtvlsall" onclick="checkRow('DAtvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvsa" id="DAtvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvsa" id="DAtvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvsa" id="DAtvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvsa" id="DAtvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAtvsaall" onclick="checkRow('DAtvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvcl" id="DAtvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvcl" id="DAtvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvcl" id="DAtvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAtvcl" id="DAtvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAtvclall" onclick="checkRow('DAtvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAcl')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Alarm Clock
                            <img id="DAclArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="DAcl" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAcldata">
                            <tr>
                                <th><strong>Data from your Alarm Clock can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAcl','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAcl','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAcl','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAcl','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('DAcl')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclcl" id="DAclclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclcl" id="DAclclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclcl" id="DAclclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclcl" id="DAclclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAclclall" onclick="checkRow('DAclcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclse" id="DAclseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclse" id="DAclseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclse" id="DAclseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclse" id="DAclsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAclseall" onclick="checkRow('DAclse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclre" id="DAclreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclre" id="DAclreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclre" id="DAclreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclre" id="DAclrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAclreall" onclick="checkRow('DAclre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclhv" id="DAclhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclhv" id="DAclhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclhv" id="DAclhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclhv" id="DAclhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAclhvall" onclick="checkRow('DAclhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclwm" id="DAclwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclwm" id="DAclwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclwm" id="DAclwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclwm" id="DAclwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAclwmall" onclick="checkRow('DAclwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclls" id="DAcllsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclls" id="DAcllsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclls" id="DAcllsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclls" id="DAcllsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcllsall" onclick="checkRow('DAclls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclsa" id="DAclsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclsa" id="DAclsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclsa" id="DAclsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAclsa" id="DAclsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAclsaall" onclick="checkRow('DAclsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcltv" id="DAcltvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcltv" id="DAcltvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcltv" id="DAcltvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcltv" id="DAcltvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcltvall" onclick="checkRow('DAcltv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAlo')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Location Sensor
                            <img id="DAloArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="DAlo" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAlodata">
                            <tr>
                                <th><strong>Data from your Location Sensor can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAlo','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAlo','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAlo','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAlo','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="DAloAllButton" onclick="checkAll('DAlo')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlose" id="DAloseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlose" id="DAloseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlose" id="DAloseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlose" id="DAlosealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAloseall" onclick="checkRow('DAlose',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlore" id="DAloreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlore" id="DAloreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlore" id="DAloreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlore" id="DAlorealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAloreall" onclick="checkRow('DAlore',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlohv" id="DAlohvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlohv" id="DAlohvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlohv" id="DAlohvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlohv" id="DAlohvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlohvall" onclick="checkRow('DAlohv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlowm" id="DAlowmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlowm" id="DAlowmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlowm" id="DAlowmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlowm" id="DAlowmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlowmall" onclick="checkRow('DAlowm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlols" id="DAlolsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlols" id="DAlolsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlols" id="DAlolsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlols" id="DAlolsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlolsall" onclick="checkRow('DAlols',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlosa" id="DAlosaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlosa" id="DAlosaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlosa" id="DAlosaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlosa" id="DAlosaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlosaall" onclick="checkRow('DAlosa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlotv" id="DAlotvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlotv" id="DAlotvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlotv" id="DAlotvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlotv" id="DAlotvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAlotvall" onclick="checkRow('DAlotv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlocl" id="DAloclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlocl" id="DAloclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlocl" id="DAloclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAlocl" id="DAloclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAloclall" onclick="checkRow('DAlocl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAca')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Camera
                            <img id="DAcaArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="DAca" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAcadata">
                            <tr>
                                <th><strong>Data from your Camera can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAca','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAca','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAca','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAca','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="DAcaAllButton" onclick="checkAll('DAca')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcase" id="DAcaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcase" id="DAcaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcase" id="DAcaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcase" id="DAcasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcaseall" onclick="checkRow('DAcase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcare" id="DAcareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcare" id="DAcareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcare" id="DAcareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcare" id="DAcarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcareall" onclick="checkRow('DAcare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcahv" id="DAcahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcahv" id="DAcahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcahv" id="DAcahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcahv" id="DAcahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcahvall" onclick="checkRow('DAcahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcawm" id="DAcawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcawm" id="DAcawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcawm" id="DAcawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcawm" id="DAcawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcawmall" onclick="checkRow('DAcawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcals" id="DAcalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcals" id="DAcalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcals" id="DAcalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcals" id="DAcalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcalsall" onclick="checkRow('DAcals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcasa" id="DAcasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcasa" id="DAcasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcasa" id="DAcasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcasa" id="DAcasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcasaall" onclick="checkRow('DAcasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcatv" id="DAcatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcatv" id="DAcatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcatv" id="DAcatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcatv" id="DAcatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcatvall" onclick="checkRow('DAcatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcacl" id="DAcaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcacl" id="DAcaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcacl" id="DAcaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAcacl" id="DAcaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAcaclall" onclick="checkRow('DAcacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAmp')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Microphone
                            <img id="DAmpArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="DAmp" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAmpdata">
                            <tr>
                                <th><strong>Data from your Microphone can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAmp','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAmp','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAmp','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAmp','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="DAmpAllButton" onclick="checkAll('DAmp')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpse" id="DAmpseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpse" id="DAmpseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpse" id="DAmpseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpse" id="DAmpsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAmpseall" onclick="checkRow('DAmpse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpre" id="DAmpreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpre" id="DAmpreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpre" id="DAmpreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpre" id="DAmprealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAmpreall" onclick="checkRow('DAmpre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmphv" id="DAmphvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmphv" id="DAmphvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmphv" id="DAmphvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmphv" id="DAmphvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAmphvall" onclick="checkRow('DAmphv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpwm" id="DAmpwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpwm" id="DAmpwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpwm" id="DAmpwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpwm" id="DAmpwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAmpwmall" onclick="checkRow('DAmpwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpls" id="DAmplsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpls" id="DAmplsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpls" id="DAmplsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpls" id="DAmplsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAmplsall" onclick="checkRow('DAmpls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpsa" id="DAmpsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpsa" id="DAmpsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpsa" id="DAmpsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpsa" id="DAmpsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAmpsaall" onclick="checkRow('DAmpsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmptv" id="DAmptvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmptv" id="DAmptvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmptv" id="DAmptvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmptv" id="DAmptvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAmptvall" onclick="checkRow('DAmptv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpcl" id="DAmpclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpcl" id="DAmpclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpcl" id="DAmpclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAmpcl" id="DAmpclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAmpclall" onclick="checkRow('DAmpcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('DAsw')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Phone/Watch
                            <img id="DAswArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="DAsw" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="DAswdata">
                            <tr>
                                <th><strong>Data from your Smart Phone/Watch can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('DAsw','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('DAsw','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('DAsw','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('DAsw','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="DAswAllButton" onclick="checkAll('DAsw')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswse" id="DAswseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswse" id="DAswseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswse" id="DAswseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswse" id="DAswsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAswseall" onclick="checkRow('DAswse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswre" id="DAswreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswre" id="DAswreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswre" id="DAswreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswre" id="DAswrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAswreall" onclick="checkRow('DAswre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswhv" id="DAswhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswhv" id="DAswhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswhv" id="DAswhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswhv" id="DAswhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAswhvall" onclick="checkRow('DAswhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswwm" id="DAswwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswwm" id="DAswwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswwm" id="DAswwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswwm" id="DAswwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAswwmall" onclick="checkRow('DAswwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswls" id="DAswlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswls" id="DAswlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswls" id="DAswlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswls" id="DAswlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAswlsall" onclick="checkRow('DAswls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswsa" id="DAswsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswsa" id="DAswsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswsa" id="DAswsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswsa" id="DAswsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAswsaall" onclick="checkRow('DAswsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswtv" id="DAswtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswtv" id="DAswtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswtv" id="DAswtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswtv" id="DAswtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAswtvall" onclick="checkRow('DAswtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswcl" id="DAswclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswcl" id="DAswclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswcl" id="DAswclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox DAswcl" id="DAswclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="DAswclall" onclick="checkRow('DAswcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:5px;margin-left: -30px;height:28px" onclick="document.getElementById('DAdsmui').style.display='none';document.getElementById('DAintroui').style.display='block';closeLeftDropdown();">Save</button></div>
                </div>

			</div>

		</div>
        
        <div id="DAdusgui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('DAdusgui').style.display='none';document.getElementById('DAintroui').style.display='block';"></button>
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Storage and Usage</div>
            </div>

            <div class="settings" style="font-size:15px">
                <div class="uifixtext">
                    <h2>Storage and Sharing</h2>
                    Choose <b>one</b> storage plan from below to control where to store the information collected and the extent of sharing by different devices in your smart home.
                </div>

                <div class="inputGroup">
                    <input id="radio1" name="radioDA" type="radio" checked/>
                    <label for="radio1">Local Only</label>
                </div>
                <div class="inputGroup">
                    <input id="radio2" name="radioDA" type="radio"/>
                    <label for="radio2">Local+Remote Server</label>
                </div>
                <div class="inputGroup">
                    <input id="radio3" name="radioDA" type="radio"/>
                    <label for="radio3">Local+Remote Server+Third Party Sharing</label>
                </div>
                
                <div class="uifixtext">
                    <h2>Data Usage</h2>
                    Manage what happens with the shared information.
                </div>

                <div class="radiobox">
                    Optimize services<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Behavioral insights<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Recommendation<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Other uses<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                </div>

                <div><button class="button middle" style="top:20px;height:28px" onclick="document.getElementById('DAdusgui').style.display='none';document.getElementById('DAintroui').style.display='block';">Save</button></div>

            </div>
        </div>
    </div>
            
    <div id="continue" class="rightDiv">
        <strong>Looking for the "Continue" button :-)?</strong>
        <p>After carefully reviewing each setting, please click on the following button to answer a few questions about your experience using the system.</p>
        <button id="uifinishedbutton" class="button uiFinishButton" onclick="handler();">Continue</button>
    </div>
    <div id="warningDialog" class="rightDiv" style="display: none">
        <strong>Do you really want to continue?</strong>
        <p>Make sure you clicked on every privacy-setting tab and made changes according to your preferences. Otherwise, you will fail the manual check and will not get your payment.</p>
        <button id="gotosurveybutton" class="button uiFinishButton" onclick="window.onbeforeunload = null;document.location.href = '../survey.php'">Continue</button>
    </div>
        
</body>
</html>

