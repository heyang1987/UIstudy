<?php
    session_start();
    $sessionId = session_id();
    ob_start();
    include_once "../db.php";
    $mysqli = OpenCon();
    $mysqli->query("UPDATE uistudy SET time2 = now(), cond = '4' WHERE (sessionid = '$sessionId')");
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
        
        <div id="storagesharing">
            <div class="title">
                <div style="text-align: center;margin-top:16px;">Smart Home Settings</div>
            </div>
            
            <div class="settings">
                <div class="uifixtext">
                    <p style="font-size: 22px"><strong>Storage and Sharing</strong></p>
                    <p style="font-size: 14px;margin-top: -10px;">Choose <b>one</b> storage plan from below to control where to store the information collected and the extent of sharing by different devices in your smart home.</p>
                </div>
                <div class="inputGroup">
                    <input id="storage1" name="radio" type="radio"/>
                    <label for="storage1" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('LSintroui').style.display='block';currentMenu='LSse'">Local Storage Only (No sharing)</label>
                </div>
				<br/>
                <div class="inputGroup">
                    <input id="storage2" name="radio" type="radio"/>
                    <label for="storage2" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('RMintroui').style.display='block';currentMenu='RMse'">Local+Remote Server (No sharing)</label>
                </div>
				<br/>
				<div class="inputGroup">
                    <input id="storage3" name="radio" type="radio" checked/>
                    <label for="storage3" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('TPintroui').style.display='block';currentMenu='TPse'">Local+Remote Server+3rd Party Sharing</label>
                </div>
				<br/>
            </div>
        </div>
		
        <div id="LSintroui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('LSintroui').style.display='none';document.getElementById('storagesharing').style.display='block';"></button>
				<div style="text-align: center;margin-top:16px;">Settings for Local Storage</div>
			</div>
                        
            <div class="settings">
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('LSintroui').style.display='none';document.getElementById('LSdsmui').style.display='block';currentMenu='LSse'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('LSintroui').style.display='none';document.getElementById('LSdusgui').style.display='block';currentMenu='LSse'>
                    <strong>Data Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>
		
		<div id="LSdsmui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('LSdsmui').style.display='none';document.getElementById('LSintroui').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device & Sensor Management</div>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsese" id="LSseseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsese" id="LSseseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsese" id="LSseseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsese" id="LSsesealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSseseall" onclick="checkRow('LSsese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsere" id="LSsereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsere" id="LSsereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsere" id="LSsereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsere" id="LSserealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsereall" onclick="checkRow('LSsere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsehv" id="LSsehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsehv" id="LSsehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsehv" id="LSsehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsehv" id="LSsehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsehvall" onclick="checkRow('LSsehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsewm" id="LSsewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsewm" id="LSsewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsewm" id="LSsewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsewm" id="LSsewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsewmall" onclick="checkRow('LSsewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsels" id="LSselsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsels" id="LSselsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsels" id="LSselsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsels" id="LSselsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSselsall" onclick="checkRow('LSsels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsesa" id="LSsesaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsesa" id="LSsesaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsesa" id="LSsesaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsesa" id="LSsesaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsesaall" onclick="checkRow('LSsesa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsetv" id="LSsetvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsetv" id="LSsetvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsetv" id="LSsetvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsetv" id="LSsetvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsetvall" onclick="checkRow('LSsetv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsecl" id="LSseclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsecl" id="LSseclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsecl" id="LSseclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsecl" id="LSseclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrere" id="LSrereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrere" id="LSrereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrere" id="LSrereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrere" id="LSrerealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSrereall" onclick="checkRow('LSrere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrese" id="LSreseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrese" id="LSreseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrese" id="LSreseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrese" id="LSresealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSreseall" onclick="checkRow('LSrese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrehv" id="LSrehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrehv" id="LSrehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrehv" id="LSrehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrehv" id="LSrehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSrehvall" onclick="checkRow('LSrehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrewm" id="LSrewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrewm" id="LSrewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrewm" id="LSrewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrewm" id="LSrewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSrewmall" onclick="checkRow('LSrewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrels" id="LSrelsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrels" id="LSrelsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrels" id="LSrelsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrels" id="LSrelsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSrelsall" onclick="checkRow('LSrels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSresa" id="LSresaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSresa" id="LSresaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSresa" id="LSresaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSresa" id="LSresaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSresaall" onclick="checkRow('LSresa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSretv" id="LSretvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSretv" id="LSretvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSretv" id="LSretvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSretv" id="LSretvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSretvall" onclick="checkRow('LSretv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrecl" id="LSreclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrecl" id="LSreclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrecl" id="LSreclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSrecl" id="LSreclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvhv" id="LShvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvhv" id="LShvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvhv" id="LShvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvhv" id="LShvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvhvall" onclick="checkRow('LShvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvse" id="LShvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvse" id="LShvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvse" id="LShvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvse" id="LShvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvseall" onclick="checkRow('LShvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvre" id="LShvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvre" id="LShvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvre" id="LShvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvre" id="LShvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvreall" onclick="checkRow('LShvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvwm" id="LShvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvwm" id="LShvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvwm" id="LShvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvwm" id="LShvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvwmall" onclick="checkRow('LShvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvls" id="LShvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvls" id="LShvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvls" id="LShvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvls" id="LShvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvlsall" onclick="checkRow('LShvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvsa" id="LShvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvsa" id="LShvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvsa" id="LShvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvsa" id="LShvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvsaall" onclick="checkRow('LShvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvtv" id="LShvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvtv" id="LShvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvtv" id="LShvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvtv" id="LShvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LShvtvall" onclick="checkRow('LShvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvcl" id="LShvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvcl" id="LShvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvcl" id="LShvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LShvcl" id="LShvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmwm" id="LSwmwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmwm" id="LSwmwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmwm" id="LSwmwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmwm" id="LSwmwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmwm',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmwmall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmse" id="LSwmseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmse" id="LSwmseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmse" id="LSwmseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmse" id="LSwmsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmse',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmseall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmre" id="LSwmreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmre" id="LSwmreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmre" id="LSwmreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmre" id="LSwmrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmre',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmreall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmhv" id="LSwmhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmhv" id="LSwmhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmhv" id="LSwmhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmhv" id="LSwmhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmhv',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmhvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmls" id="LSwmlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmls" id="LSwmlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmls" id="LSwmlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmls" id="LSwmlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmls',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmlsall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmsa" id="LSwmsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmsa" id="LSwmsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmsa" id="LSwmsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmsa" id="LSwmsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmsa',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmsaall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmtv" id="LSwmtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmtv" id="LSwmtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmtv" id="LSwmtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmtv" id="LSwmtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('LSwmtv',true,true)"><div class="tooltip"><button class="allbutton" id="LSwmtvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmcl" id="LSwmclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmcl" id="LSwmclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmcl" id="LSwmclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSwmcl" id="LSwmclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsls" id="LSlslsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsls" id="LSlslsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsls" id="LSlslsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsls" id="LSlslsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlslsall" onclick="checkRow('LSlsls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsse" id="LSlsseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsse" id="LSlsseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsse" id="LSlsseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsse" id="LSlssealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlsseall" onclick="checkRow('LSlsse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsre" id="LSlsreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsre" id="LSlsreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsre" id="LSlsreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlsre" id="LSlsrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlsreall" onclick="checkRow('LSlsre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlshv" id="LSlshvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlshv" id="LSlshvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlshv" id="LSlshvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlshv" id="LSlshvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlshvall" onclick="checkRow('LSlshv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlswm" id="LSlswmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlswm" id="LSlswmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlswm" id="LSlswmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlswm" id="LSlswmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlswmall" onclick="checkRow('LSlswm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlssa" id="LSlssaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlssa" id="LSlssaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlssa" id="LSlssaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlssa" id="LSlssaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlssaall" onclick="checkRow('LSlssa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlstv" id="LSlstvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlstv" id="LSlstvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlstv" id="LSlstvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlstv" id="LSlstvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlstvall" onclick="checkRow('LSlstv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlscl" id="LSlsclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlscl" id="LSlsclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlscl" id="LSlsclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlscl" id="LSlsclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsasa" id="LSsasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsasa" id="LSsasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsasa" id="LSsasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsasa" id="LSsasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsasaall" onclick="checkRow('LSsasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsase" id="LSsaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsase" id="LSsaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsase" id="LSsaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsase" id="LSsasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsaseall" onclick="checkRow('LSsase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsare" id="LSsareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsare" id="LSsareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsare" id="LSsareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsare" id="LSsarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsareall" onclick="checkRow('LSsare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsahv" id="LSsahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsahv" id="LSsahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsahv" id="LSsahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsahv" id="LSsahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsahvall" onclick="checkRow('LSsahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsawm" id="LSsawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsawm" id="LSsawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsawm" id="LSsawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsawm" id="LSsawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsawmall" onclick="checkRow('LSsawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsals" id="LSsalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsals" id="LSsalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsals" id="LSsalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsals" id="LSsalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsalsall" onclick="checkRow('LSsals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsatv" id="LSsatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsatv" id="LSsatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsatv" id="LSsatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsatv" id="LSsatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSsatvall" onclick="checkRow('LSsatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsacl" id="LSsaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsacl" id="LSsaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsacl" id="LSsaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSsacl" id="LSsaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvtv" id="LStvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvtv" id="LStvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvtv" id="LStvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvtv" id="LStvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvtvall" onclick="checkRow('LStvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvse" id="LStvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvse" id="LStvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvse" id="LStvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvse" id="LStvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvseall" onclick="checkRow('LStvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvre" id="LStvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvre" id="LStvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvre" id="LStvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvre" id="LStvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvreall" onclick="checkRow('LStvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvhv" id="LStvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvhv" id="LStvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvhv" id="LStvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvhv" id="LStvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvhvall" onclick="checkRow('LStvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvwm" id="LStvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvwm" id="LStvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvwm" id="LStvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvwm" id="LStvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvwmall" onclick="checkRow('LStvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvls" id="LStvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvls" id="LStvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvls" id="LStvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvls" id="LStvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvlsall" onclick="checkRow('LStvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvsa" id="LStvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvsa" id="LStvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvsa" id="LStvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvsa" id="LStvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LStvsaall" onclick="checkRow('LStvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvcl" id="LStvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvcl" id="LStvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvcl" id="LStvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LStvcl" id="LStvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclcl" id="LSclclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclcl" id="LSclclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclcl" id="LSclclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclcl" id="LSclclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclclall" onclick="checkRow('LSclcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclse" id="LSclseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclse" id="LSclseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclse" id="LSclseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclse" id="LSclsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclseall" onclick="checkRow('LSclse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclre" id="LSclreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclre" id="LSclreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclre" id="LSclreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclre" id="LSclrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclreall" onclick="checkRow('LSclre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclhv" id="LSclhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclhv" id="LSclhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclhv" id="LSclhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclhv" id="LSclhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclhvall" onclick="checkRow('LSclhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclwm" id="LSclwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclwm" id="LSclwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclwm" id="LSclwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclwm" id="LSclwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclwmall" onclick="checkRow('LSclwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclls" id="LScllsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclls" id="LScllsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclls" id="LScllsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclls" id="LScllsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScllsall" onclick="checkRow('LSclls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclsa" id="LSclsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclsa" id="LSclsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclsa" id="LSclsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSclsa" id="LSclsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSclsaall" onclick="checkRow('LSclsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScltv" id="LScltvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScltv" id="LScltvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScltv" id="LScltvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScltv" id="LScltvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlose" id="LSloseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlose" id="LSloseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlose" id="LSloseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlose" id="LSlosealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSloseall" onclick="checkRow('LSlose',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlore" id="LSloreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlore" id="LSloreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlore" id="LSloreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlore" id="LSlorealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSloreall" onclick="checkRow('LSlore',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlohv" id="LSlohvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlohv" id="LSlohvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlohv" id="LSlohvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlohv" id="LSlohvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlohvall" onclick="checkRow('LSlohv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlowm" id="LSlowmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlowm" id="LSlowmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlowm" id="LSlowmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlowm" id="LSlowmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlowmall" onclick="checkRow('LSlowm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlols" id="LSlolsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlols" id="LSlolsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlols" id="LSlolsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlols" id="LSlolsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlolsall" onclick="checkRow('LSlols',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlosa" id="LSlosaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlosa" id="LSlosaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlosa" id="LSlosaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlosa" id="LSlosaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlosaall" onclick="checkRow('LSlosa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlotv" id="LSlotvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlotv" id="LSlotvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlotv" id="LSlotvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlotv" id="LSlotvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSlotvall" onclick="checkRow('LSlotv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlocl" id="LSloclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlocl" id="LSloclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlocl" id="LSloclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSlocl" id="LSloclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScase" id="LScaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScase" id="LScaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScase" id="LScaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScase" id="LScasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScaseall" onclick="checkRow('LScase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScare" id="LScareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScare" id="LScareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScare" id="LScareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScare" id="LScarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScareall" onclick="checkRow('LScare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScahv" id="LScahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScahv" id="LScahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScahv" id="LScahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScahv" id="LScahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScahvall" onclick="checkRow('LScahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScawm" id="LScawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScawm" id="LScawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScawm" id="LScawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScawm" id="LScawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScawmall" onclick="checkRow('LScawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScals" id="LScalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScals" id="LScalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScals" id="LScalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScals" id="LScalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScalsall" onclick="checkRow('LScals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScasa" id="LScasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScasa" id="LScasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScasa" id="LScasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScasa" id="LScasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScasaall" onclick="checkRow('LScasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScatv" id="LScatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScatv" id="LScatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScatv" id="LScatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScatv" id="LScatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LScatvall" onclick="checkRow('LScatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScacl" id="LScaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScacl" id="LScaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScacl" id="LScaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LScacl" id="LScaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpse" id="LSmpseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpse" id="LSmpseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpse" id="LSmpseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpse" id="LSmpsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmpseall" onclick="checkRow('LSmpse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpre" id="LSmpreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpre" id="LSmpreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpre" id="LSmpreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpre" id="LSmprealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmpreall" onclick="checkRow('LSmpre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmphv" id="LSmphvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmphv" id="LSmphvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmphv" id="LSmphvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmphv" id="LSmphvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmphvall" onclick="checkRow('LSmphv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpwm" id="LSmpwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpwm" id="LSmpwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpwm" id="LSmpwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpwm" id="LSmpwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmpwmall" onclick="checkRow('LSmpwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpls" id="LSmplsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpls" id="LSmplsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpls" id="LSmplsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpls" id="LSmplsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmplsall" onclick="checkRow('LSmpls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpsa" id="LSmpsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpsa" id="LSmpsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpsa" id="LSmpsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpsa" id="LSmpsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmpsaall" onclick="checkRow('LSmpsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmptv" id="LSmptvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmptv" id="LSmptvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmptv" id="LSmptvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmptv" id="LSmptvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSmptvall" onclick="checkRow('LSmptv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpcl" id="LSmpclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpcl" id="LSmpclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpcl" id="LSmpclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSmpcl" id="LSmpclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswse" id="LSswseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswse" id="LSswseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswse" id="LSswseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswse" id="LSswsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswseall" onclick="checkRow('LSswse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswre" id="LSswreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswre" id="LSswreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswre" id="LSswreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswre" id="LSswrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswreall" onclick="checkRow('LSswre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswhv" id="LSswhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswhv" id="LSswhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswhv" id="LSswhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswhv" id="LSswhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswhvall" onclick="checkRow('LSswhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswwm" id="LSswwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswwm" id="LSswwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswwm" id="LSswwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswwm" id="LSswwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswwmall" onclick="checkRow('LSswwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswls" id="LSswlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswls" id="LSswlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswls" id="LSswlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswls" id="LSswlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswlsall" onclick="checkRow('LSswls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswsa" id="LSswsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswsa" id="LSswsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswsa" id="LSswsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswsa" id="LSswsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswsaall" onclick="checkRow('LSswsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswtv" id="LSswtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswtv" id="LSswtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswtv" id="LSswtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswtv" id="LSswtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="LSswtvall" onclick="checkRow('LSswtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswcl" id="LSswclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswcl" id="LSswclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswcl" id="LSswclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox LSswcl" id="LSswclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
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
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Usage for Local Storage</div>
            </div>

            <div class="settings" style="font-size:15px">
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

                <div><button class="button middle" style="top:20px;height:28px" onclick="document.getElementById('LSdusgui').style.display='none';document.getElementById('LSintroui').style.display='block';">Save</button></div>

            </div>
        </div>
        
		
        <div id="RMintroui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('RMintroui').style.display='none';document.getElementById('storagesharing').style.display='block';"></button>
				<div style="text-align: center;margin-top:16px;">Settings for Remote Server Storage</div>
			</div>
                        
            <div class="settings">
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('RMintroui').style.display='none';document.getElementById('RMdsmui').style.display='block';currentMenu='RMse'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('RMintroui').style.display='none';document.getElementById('RMdusgui').style.display='block';currentMenu='RMse'>
                    <strong>Data Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>
		
		<div id="RMdsmui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('RMdsmui').style.display='none';document.getElementById('RMintroui').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device & Sensor Management</div>
            </div>
			<div class="settingsWithScroll">
				<div class="uifixtext">
                    <p>Expand to set permissions for information collected by who (which device) and for what purpose.</p>
                </div>

                <div class="devicecontainer">
                    <div class="narrowmenu" onclick="dropdownFunction('RMse')">
                        <div class="narrowmenuicon"><img src="../icons/1.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Home Security System
                            <img id="RMseArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="RMse" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMsedata">
                            <tr>
                                <th><strong>Data from your Home Security System can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMse','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMse','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMse','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMse','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:38px;font-size:14px;padding:5px 1px" id="RMseAllButton" onclick="checkAll('RMse')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsese" id="RMseseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsese" id="RMseseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsese" id="RMseseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsese" id="RMsesealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMseseall" onclick="checkRow('RMsese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsere" id="RMsereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsere" id="RMsereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsere" id="RMsereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsere" id="RMserealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsereall" onclick="checkRow('RMsere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsehv" id="RMsehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsehv" id="RMsehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsehv" id="RMsehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsehv" id="RMsehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsehvall" onclick="checkRow('RMsehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsewm" id="RMsewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsewm" id="RMsewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsewm" id="RMsewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsewm" id="RMsewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsewmall" onclick="checkRow('RMsewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsels" id="RMselsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsels" id="RMselsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsels" id="RMselsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsels" id="RMselsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMselsall" onclick="checkRow('RMsels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsesa" id="RMsesaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsesa" id="RMsesaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsesa" id="RMsesaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsesa" id="RMsesaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsesaall" onclick="checkRow('RMsesa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsetv" id="RMsetvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsetv" id="RMsetvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsetv" id="RMsetvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsetv" id="RMsetvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsetvall" onclick="checkRow('RMsetv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsecl" id="RMseclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsecl" id="RMseclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsecl" id="RMseclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsecl" id="RMseclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMseclall" onclick="checkRow('RMsecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>


                    <div class="narrowmenu" onclick="dropdownFunction('RMre')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img id="RMreArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="RMre" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMredata">
                            <tr>
                                <th><strong>Data from your Refrigerator can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMre','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMre','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMre','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMre','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="RMreAllButton" onclick="checkAll('RMre')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrere" id="RMrereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrere" id="RMrereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrere" id="RMrereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrere" id="RMrerealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMrereall" onclick="checkRow('RMrere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrese" id="RMreseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrese" id="RMreseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrese" id="RMreseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrese" id="RMresealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMreseall" onclick="checkRow('RMrese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrehv" id="RMrehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrehv" id="RMrehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrehv" id="RMrehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrehv" id="RMrehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMrehvall" onclick="checkRow('RMrehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrewm" id="RMrewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrewm" id="RMrewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrewm" id="RMrewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrewm" id="RMrewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMrewmall" onclick="checkRow('RMrewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrels" id="RMrelsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrels" id="RMrelsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrels" id="RMrelsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrels" id="RMrelsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMrelsall" onclick="checkRow('RMrels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMresa" id="RMresaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMresa" id="RMresaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMresa" id="RMresaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMresa" id="RMresaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMresaall" onclick="checkRow('RMresa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMretv" id="RMretvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMretv" id="RMretvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMretv" id="RMretvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMretv" id="RMretvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMretvall" onclick="checkRow('RMretv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrecl" id="RMreclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrecl" id="RMreclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrecl" id="RMreclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMrecl" id="RMreclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMreclall" onclick="checkRow('RMrecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMhv')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img id="RMhvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="RMhv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMhvdata">
                            <tr>
                                <th><strong>Data from your HVAC can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMhv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMhv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMhv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMhv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="RMhvAllButton" onclick="checkAll('RMhv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvhv" id="RMhvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvhv" id="RMhvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvhv" id="RMhvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvhv" id="RMhvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMhvhvall" onclick="checkRow('RMhvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvse" id="RMhvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvse" id="RMhvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvse" id="RMhvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvse" id="RMhvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMhvseall" onclick="checkRow('RMhvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvre" id="RMhvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvre" id="RMhvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvre" id="RMhvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvre" id="RMhvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMhvreall" onclick="checkRow('RMhvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvwm" id="RMhvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvwm" id="RMhvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvwm" id="RMhvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvwm" id="RMhvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMhvwmall" onclick="checkRow('RMhvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvls" id="RMhvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvls" id="RMhvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvls" id="RMhvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvls" id="RMhvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMhvlsall" onclick="checkRow('RMhvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvsa" id="RMhvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvsa" id="RMhvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvsa" id="RMhvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvsa" id="RMhvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMhvsaall" onclick="checkRow('RMhvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvtv" id="RMhvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvtv" id="RMhvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvtv" id="RMhvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvtv" id="RMhvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMhvtvall" onclick="checkRow('RMhvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvcl" id="RMhvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvcl" id="RMhvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvcl" id="RMhvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMhvcl" id="RMhvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMhvclall" onclick="checkRow('RMhvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMwm')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washer
                            <img id="RMwmArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="RMwm" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMwmdata">
                            <tr>
                                <th><strong>Data from your wahcing machine can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMwm','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMwm','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMwm','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMwm','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('RMwm')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="RMwmAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmwm" id="RMwmwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmwm" id="RMwmwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmwm" id="RMwmwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmwm" id="RMwmwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('RMwmwm',true,true)"><div class="tooltip"><button class="allbutton" id="RMwmwmall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmse" id="RMwmseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmse" id="RMwmseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmse" id="RMwmseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmse" id="RMwmsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('RMwmse',true,true)"><div class="tooltip"><button class="allbutton" id="RMwmseall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmre" id="RMwmreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmre" id="RMwmreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmre" id="RMwmreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmre" id="RMwmrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('RMwmre',true,true)"><div class="tooltip"><button class="allbutton" id="RMwmreall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmhv" id="RMwmhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmhv" id="RMwmhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmhv" id="RMwmhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmhv" id="RMwmhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('RMwmhv',true,true)"><div class="tooltip"><button class="allbutton" id="RMwmhvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmls" id="RMwmlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmls" id="RMwmlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmls" id="RMwmlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmls" id="RMwmlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('RMwmls',true,true)"><div class="tooltip"><button class="allbutton" id="RMwmlsall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmsa" id="RMwmsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmsa" id="RMwmsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmsa" id="RMwmsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmsa" id="RMwmsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('RMwmsa',true,true)"><div class="tooltip"><button class="allbutton" id="RMwmsaall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmtv" id="RMwmtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmtv" id="RMwmtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmtv" id="RMwmtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmtv" id="RMwmtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('RMwmtv',true,true)"><div class="tooltip"><button class="allbutton" id="RMwmtvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmcl" id="RMwmclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmcl" id="RMwmclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmcl" id="RMwmclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMwmcl" id="RMwmclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMwmclall" onclick="checkRow('RMwmcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMls')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Lights
                            <img id="RMlsArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="RMls" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMlsdata">
                            <tr>
                                <th><strong>Data from your Lights can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMls','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMls','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMls','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMls','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="RMlsAllButton" onclick="checkAll('RMls')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsls" id="RMlslsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsls" id="RMlslsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsls" id="RMlslsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsls" id="RMlslsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlslsall" onclick="checkRow('RMlsls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsse" id="RMlsseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsse" id="RMlsseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsse" id="RMlsseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsse" id="RMlssealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlsseall" onclick="checkRow('RMlsse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsre" id="RMlsreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsre" id="RMlsreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsre" id="RMlsreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlsre" id="RMlsrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlsreall" onclick="checkRow('RMlsre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlshv" id="RMlshvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlshv" id="RMlshvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlshv" id="RMlshvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlshv" id="RMlshvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlshvall" onclick="checkRow('RMlshv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlswm" id="RMlswmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlswm" id="RMlswmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlswm" id="RMlswmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlswm" id="RMlswmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlswmall" onclick="checkRow('RMlswm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlssa" id="RMlssaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlssa" id="RMlssaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlssa" id="RMlssaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlssa" id="RMlssaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlssaall" onclick="checkRow('RMlssa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlstv" id="RMlstvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlstv" id="RMlstvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlstv" id="RMlstvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlstv" id="RMlstvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlstvall" onclick="checkRow('RMlstv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlscl" id="RMlsclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlscl" id="RMlsclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlscl" id="RMlsclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlscl" id="RMlsclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlsclall" onclick="checkRow('RMlscl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMsa')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Assistant
                            <img id="RMsaArrow" src="../images/arrowright.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="RMsa" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMsadata">
                            <tr>
                                <th><strong>Data from your Smart Assistant can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMsa','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMsa','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMsa','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMsa','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="RMsaAllButton" onclick="checkAll('RMsa')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsasa" id="RMsasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsasa" id="RMsasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsasa" id="RMsasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsasa" id="RMsasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsasaall" onclick="checkRow('RMsasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsase" id="RMsaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsase" id="RMsaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsase" id="RMsaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsase" id="RMsasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsaseall" onclick="checkRow('RMsase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsare" id="RMsareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsare" id="RMsareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsare" id="RMsareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsare" id="RMsarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsareall" onclick="checkRow('RMsare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsahv" id="RMsahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsahv" id="RMsahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsahv" id="RMsahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsahv" id="RMsahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsahvall" onclick="checkRow('RMsahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsawm" id="RMsawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsawm" id="RMsawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsawm" id="RMsawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsawm" id="RMsawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsawmall" onclick="checkRow('RMsawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsals" id="RMsalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsals" id="RMsalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsals" id="RMsalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsals" id="RMsalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsalsall" onclick="checkRow('RMsals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsatv" id="RMsatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsatv" id="RMsatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsatv" id="RMsatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsatv" id="RMsatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsatvall" onclick="checkRow('RMsatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsacl" id="RMsaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsacl" id="RMsaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsacl" id="RMsaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMsacl" id="RMsaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMsaclall" onclick="checkRow('RMsacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMtv')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart TV
                            <img id="RMtvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="RMtv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMtvdata">
                            <tr>
                                <th><strong>Data from your Smart TV can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMtv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMtv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMtv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMtv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('RMtv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvtv" id="RMtvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvtv" id="RMtvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvtv" id="RMtvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvtv" id="RMtvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMtvtvall" onclick="checkRow('RMtvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvse" id="RMtvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvse" id="RMtvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvse" id="RMtvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvse" id="RMtvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMtvseall" onclick="checkRow('RMtvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvre" id="RMtvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvre" id="RMtvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvre" id="RMtvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvre" id="RMtvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMtvreall" onclick="checkRow('RMtvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvhv" id="RMtvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvhv" id="RMtvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvhv" id="RMtvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvhv" id="RMtvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMtvhvall" onclick="checkRow('RMtvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvwm" id="RMtvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvwm" id="RMtvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvwm" id="RMtvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvwm" id="RMtvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMtvwmall" onclick="checkRow('RMtvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvls" id="RMtvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvls" id="RMtvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvls" id="RMtvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvls" id="RMtvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMtvlsall" onclick="checkRow('RMtvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvsa" id="RMtvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvsa" id="RMtvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvsa" id="RMtvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvsa" id="RMtvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMtvsaall" onclick="checkRow('RMtvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvcl" id="RMtvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvcl" id="RMtvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvcl" id="RMtvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMtvcl" id="RMtvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMtvclall" onclick="checkRow('RMtvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMcl')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Alarm Clock
                            <img id="RMclArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="RMcl" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMcldata">
                            <tr>
                                <th><strong>Data from your Alarm Clock can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMcl','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMcl','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMcl','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMcl','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('RMcl')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclcl" id="RMclclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclcl" id="RMclclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclcl" id="RMclclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclcl" id="RMclclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMclclall" onclick="checkRow('RMclcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclse" id="RMclseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclse" id="RMclseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclse" id="RMclseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclse" id="RMclsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMclseall" onclick="checkRow('RMclse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclre" id="RMclreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclre" id="RMclreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclre" id="RMclreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclre" id="RMclrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMclreall" onclick="checkRow('RMclre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclhv" id="RMclhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclhv" id="RMclhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclhv" id="RMclhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclhv" id="RMclhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMclhvall" onclick="checkRow('RMclhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclwm" id="RMclwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclwm" id="RMclwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclwm" id="RMclwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclwm" id="RMclwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMclwmall" onclick="checkRow('RMclwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclls" id="RMcllsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclls" id="RMcllsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclls" id="RMcllsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclls" id="RMcllsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcllsall" onclick="checkRow('RMclls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclsa" id="RMclsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclsa" id="RMclsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclsa" id="RMclsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMclsa" id="RMclsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMclsaall" onclick="checkRow('RMclsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcltv" id="RMcltvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcltv" id="RMcltvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcltv" id="RMcltvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcltv" id="RMcltvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcltvall" onclick="checkRow('RMcltv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMlo')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Location Sensor
                            <img id="RMloArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="RMlo" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMlodata">
                            <tr>
                                <th><strong>Data from your Location Sensor can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMlo','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMlo','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMlo','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMlo','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="RMloAllButton" onclick="checkAll('RMlo')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlose" id="RMloseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlose" id="RMloseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlose" id="RMloseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlose" id="RMlosealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMloseall" onclick="checkRow('RMlose',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlore" id="RMloreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlore" id="RMloreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlore" id="RMloreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlore" id="RMlorealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMloreall" onclick="checkRow('RMlore',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlohv" id="RMlohvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlohv" id="RMlohvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlohv" id="RMlohvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlohv" id="RMlohvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlohvall" onclick="checkRow('RMlohv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlowm" id="RMlowmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlowm" id="RMlowmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlowm" id="RMlowmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlowm" id="RMlowmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlowmall" onclick="checkRow('RMlowm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlols" id="RMlolsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlols" id="RMlolsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlols" id="RMlolsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlols" id="RMlolsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlolsall" onclick="checkRow('RMlols',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlosa" id="RMlosaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlosa" id="RMlosaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlosa" id="RMlosaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlosa" id="RMlosaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlosaall" onclick="checkRow('RMlosa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlotv" id="RMlotvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlotv" id="RMlotvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlotv" id="RMlotvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlotv" id="RMlotvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMlotvall" onclick="checkRow('RMlotv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlocl" id="RMloclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlocl" id="RMloclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlocl" id="RMloclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMlocl" id="RMloclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMloclall" onclick="checkRow('RMlocl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMca')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Camera
                            <img id="RMcaArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="RMca" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMcadata">
                            <tr>
                                <th><strong>Data from your Camera can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMca','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMca','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMca','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMca','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="RMcaAllButton" onclick="checkAll('RMca')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcase" id="RMcaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcase" id="RMcaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcase" id="RMcaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcase" id="RMcasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcaseall" onclick="checkRow('RMcase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcare" id="RMcareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcare" id="RMcareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcare" id="RMcareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcare" id="RMcarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcareall" onclick="checkRow('RMcare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcahv" id="RMcahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcahv" id="RMcahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcahv" id="RMcahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcahv" id="RMcahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcahvall" onclick="checkRow('RMcahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcawm" id="RMcawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcawm" id="RMcawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcawm" id="RMcawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcawm" id="RMcawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcawmall" onclick="checkRow('RMcawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcals" id="RMcalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcals" id="RMcalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcals" id="RMcalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcals" id="RMcalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcalsall" onclick="checkRow('RMcals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcasa" id="RMcasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcasa" id="RMcasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcasa" id="RMcasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcasa" id="RMcasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcasaall" onclick="checkRow('RMcasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcatv" id="RMcatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcatv" id="RMcatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcatv" id="RMcatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcatv" id="RMcatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcatvall" onclick="checkRow('RMcatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcacl" id="RMcaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcacl" id="RMcaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcacl" id="RMcaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMcacl" id="RMcaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMcaclall" onclick="checkRow('RMcacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMmp')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Microphone
                            <img id="RMmpArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="RMmp" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMmpdata">
                            <tr>
                                <th><strong>Data from your Microphone can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMmp','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMmp','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMmp','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMmp','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="RMmpAllButton" onclick="checkAll('RMmp')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpse" id="RMmpseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpse" id="RMmpseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpse" id="RMmpseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpse" id="RMmpsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMmpseall" onclick="checkRow('RMmpse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpre" id="RMmpreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpre" id="RMmpreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpre" id="RMmpreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpre" id="RMmprealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMmpreall" onclick="checkRow('RMmpre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmphv" id="RMmphvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmphv" id="RMmphvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmphv" id="RMmphvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmphv" id="RMmphvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMmphvall" onclick="checkRow('RMmphv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpwm" id="RMmpwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpwm" id="RMmpwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpwm" id="RMmpwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpwm" id="RMmpwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMmpwmall" onclick="checkRow('RMmpwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpls" id="RMmplsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpls" id="RMmplsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpls" id="RMmplsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpls" id="RMmplsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMmplsall" onclick="checkRow('RMmpls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpsa" id="RMmpsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpsa" id="RMmpsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpsa" id="RMmpsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpsa" id="RMmpsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMmpsaall" onclick="checkRow('RMmpsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmptv" id="RMmptvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmptv" id="RMmptvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmptv" id="RMmptvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmptv" id="RMmptvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMmptvall" onclick="checkRow('RMmptv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpcl" id="RMmpclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpcl" id="RMmpclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpcl" id="RMmpclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMmpcl" id="RMmpclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMmpclall" onclick="checkRow('RMmpcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('RMsw')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Phone/Watch
                            <img id="RMswArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="RMsw" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="RMswdata">
                            <tr>
                                <th><strong>Data from your Smart Phone/Watch can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('RMsw','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('RMsw','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('RMsw','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('RMsw','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="RMswAllButton" onclick="checkAll('RMsw')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswse" id="RMswseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswse" id="RMswseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswse" id="RMswseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswse" id="RMswsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMswseall" onclick="checkRow('RMswse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswre" id="RMswreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswre" id="RMswreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswre" id="RMswreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswre" id="RMswrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMswreall" onclick="checkRow('RMswre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswhv" id="RMswhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswhv" id="RMswhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswhv" id="RMswhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswhv" id="RMswhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMswhvall" onclick="checkRow('RMswhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswwm" id="RMswwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswwm" id="RMswwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswwm" id="RMswwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswwm" id="RMswwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMswwmall" onclick="checkRow('RMswwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswls" id="RMswlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswls" id="RMswlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswls" id="RMswlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswls" id="RMswlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMswlsall" onclick="checkRow('RMswls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswsa" id="RMswsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswsa" id="RMswsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswsa" id="RMswsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswsa" id="RMswsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMswsaall" onclick="checkRow('RMswsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswtv" id="RMswtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswtv" id="RMswtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswtv" id="RMswtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswtv" id="RMswtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMswtvall" onclick="checkRow('RMswtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswcl" id="RMswclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswcl" id="RMswclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswcl" id="RMswclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox RMswcl" id="RMswclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="RMswclall" onclick="checkRow('RMswcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:5px;margin-left: -30px;height:28px" onclick="document.getElementById('RMdsmui').style.display='none';document.getElementById('RMintroui').style.display='block';closeLeftDropdown();">Save</button></div>
                </div>

			</div>

		</div>
        
        <div id="RMdusgui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('RMdusgui').style.display='none';document.getElementById('RMintroui').style.display='block';"></button>
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Usage for Remote Server</div>
            </div>

            <div class="settings" style="font-size:15px">
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

                <div><button class="button middle" style="top:20px;height:28px" onclick="document.getElementById('RMdusgui').style.display='none';document.getElementById('RMintroui').style.display='block';">Save</button></div>

            </div>
        </div>
        
		
        <div id="TPintroui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('TPintroui').style.display='none';document.getElementById('storagesharing').style.display='block';"></button>
				<div style="text-align: center;margin-top:16px;">Settings for Third Party Sharing</div>
			</div>
                        
            <div class="settings">
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('TPintroui').style.display='none';document.getElementById('TPdsmui').style.display='block';currentMenu='TPse'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('TPintroui').style.display='none';document.getElementById('TPdusgui').style.display='block';currentMenu='TPse'>
                    <strong>Data Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>
		
		<div id="TPdsmui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('TPdsmui').style.display='none';document.getElementById('TPintroui').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device & Sensor Management</div>
            </div>
			<div class="settingsWithScroll">
				<div class="uifixtext">
                    <p>Expand to set permissions for information collected by who (which device) and for what purpose.</p>
                </div>

                <div class="devicecontainer">
                    <div class="narrowmenu" onclick="dropdownFunction('TPse')">
                        <div class="narrowmenuicon"><img src="../icons/1.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Home Security System
                            <img id="TPseArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="TPse" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPsedata">
                            <tr>
                                <th><strong>Data from your Home Security System can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPse','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPse','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPse','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPse','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:38px;font-size:14px;padding:5px 1px" id="TPseAllButton" onclick="checkAll('TPse')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsese" id="TPseseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsese" id="TPseseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsese" id="TPseseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsese" id="TPsesealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPseseall" onclick="checkRow('TPsese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsere" id="TPsereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsere" id="TPsereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsere" id="TPsereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsere" id="TPserealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsereall" onclick="checkRow('TPsere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsehv" id="TPsehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsehv" id="TPsehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsehv" id="TPsehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsehv" id="TPsehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsehvall" onclick="checkRow('TPsehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsewm" id="TPsewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsewm" id="TPsewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsewm" id="TPsewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsewm" id="TPsewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsewmall" onclick="checkRow('TPsewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsels" id="TPselsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsels" id="TPselsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsels" id="TPselsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsels" id="TPselsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPselsall" onclick="checkRow('TPsels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsesa" id="TPsesaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsesa" id="TPsesaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsesa" id="TPsesaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsesa" id="TPsesaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsesaall" onclick="checkRow('TPsesa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsetv" id="TPsetvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsetv" id="TPsetvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsetv" id="TPsetvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsetv" id="TPsetvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsetvall" onclick="checkRow('TPsetv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsecl" id="TPseclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsecl" id="TPseclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsecl" id="TPseclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsecl" id="TPseclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPseclall" onclick="checkRow('TPsecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>


                    <div class="narrowmenu" onclick="dropdownFunction('TPre')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img id="TPreArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="TPre" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPredata">
                            <tr>
                                <th><strong>Data from your Refrigerator can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPre','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPre','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPre','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPre','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="TPreAllButton" onclick="checkAll('TPre')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrere" id="TPrereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrere" id="TPrereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrere" id="TPrereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrere" id="TPrerealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPrereall" onclick="checkRow('TPrere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrese" id="TPreseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrese" id="TPreseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrese" id="TPreseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrese" id="TPresealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPreseall" onclick="checkRow('TPrese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrehv" id="TPrehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrehv" id="TPrehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrehv" id="TPrehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrehv" id="TPrehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPrehvall" onclick="checkRow('TPrehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrewm" id="TPrewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrewm" id="TPrewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrewm" id="TPrewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrewm" id="TPrewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPrewmall" onclick="checkRow('TPrewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrels" id="TPrelsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrels" id="TPrelsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrels" id="TPrelsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrels" id="TPrelsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPrelsall" onclick="checkRow('TPrels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPresa" id="TPresaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPresa" id="TPresaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPresa" id="TPresaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPresa" id="TPresaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPresaall" onclick="checkRow('TPresa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPretv" id="TPretvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPretv" id="TPretvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPretv" id="TPretvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPretv" id="TPretvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPretvall" onclick="checkRow('TPretv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrecl" id="TPreclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrecl" id="TPreclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrecl" id="TPreclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPrecl" id="TPreclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPreclall" onclick="checkRow('TPrecl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPhv')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img id="TPhvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="TPhv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPhvdata">
                            <tr>
                                <th><strong>Data from your HVAC can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPhv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPhv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPhv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPhv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="TPhvAllButton" onclick="checkAll('TPhv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvhv" id="TPhvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvhv" id="TPhvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvhv" id="TPhvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvhv" id="TPhvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPhvhvall" onclick="checkRow('TPhvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvse" id="TPhvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvse" id="TPhvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvse" id="TPhvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvse" id="TPhvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPhvseall" onclick="checkRow('TPhvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvre" id="TPhvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvre" id="TPhvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvre" id="TPhvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvre" id="TPhvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPhvreall" onclick="checkRow('TPhvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvwm" id="TPhvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvwm" id="TPhvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvwm" id="TPhvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvwm" id="TPhvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPhvwmall" onclick="checkRow('TPhvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvls" id="TPhvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvls" id="TPhvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvls" id="TPhvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvls" id="TPhvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPhvlsall" onclick="checkRow('TPhvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvsa" id="TPhvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvsa" id="TPhvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvsa" id="TPhvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvsa" id="TPhvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPhvsaall" onclick="checkRow('TPhvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvtv" id="TPhvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvtv" id="TPhvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvtv" id="TPhvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvtv" id="TPhvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPhvtvall" onclick="checkRow('TPhvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvcl" id="TPhvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvcl" id="TPhvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvcl" id="TPhvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPhvcl" id="TPhvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPhvclall" onclick="checkRow('TPhvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPwm')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washer
                            <img id="TPwmArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="TPwm" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPwmdata">
                            <tr>
                                <th><strong>Data from your wahcing machine can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPwm','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPwm','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPwm','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPwm','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('TPwm')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="TPwmAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmwm" id="TPwmwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmwm" id="TPwmwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmwm" id="TPwmwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmwm" id="TPwmwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('TPwmwm',true,true)"><div class="tooltip"><button class="allbutton" id="TPwmwmall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmse" id="TPwmseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmse" id="TPwmseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmse" id="TPwmseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmse" id="TPwmsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('TPwmse',true,true)"><div class="tooltip"><button class="allbutton" id="TPwmseall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmre" id="TPwmreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmre" id="TPwmreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmre" id="TPwmreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmre" id="TPwmrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('TPwmre',true,true)"><div class="tooltip"><button class="allbutton" id="TPwmreall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmhv" id="TPwmhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmhv" id="TPwmhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmhv" id="TPwmhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmhv" id="TPwmhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('TPwmhv',true,true)"><div class="tooltip"><button class="allbutton" id="TPwmhvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmls" id="TPwmlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmls" id="TPwmlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmls" id="TPwmlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmls" id="TPwmlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('TPwmls',true,true)"><div class="tooltip"><button class="allbutton" id="TPwmlsall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmsa" id="TPwmsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmsa" id="TPwmsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmsa" id="TPwmsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmsa" id="TPwmsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('TPwmsa',true,true)"><div class="tooltip"><button class="allbutton" id="TPwmsaall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmtv" id="TPwmtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmtv" id="TPwmtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmtv" id="TPwmtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmtv" id="TPwmtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('TPwmtv',true,true)"><div class="tooltip"><button class="allbutton" id="TPwmtvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmcl" id="TPwmclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmcl" id="TPwmclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmcl" id="TPwmclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPwmcl" id="TPwmclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPwmclall" onclick="checkRow('TPwmcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPls')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Lights
                            <img id="TPlsArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="TPls" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPlsdata">
                            <tr>
                                <th><strong>Data from your Lights can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPls','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPls','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPls','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPls','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="TPlsAllButton" onclick="checkAll('TPls')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsls" id="TPlslsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsls" id="TPlslsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsls" id="TPlslsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsls" id="TPlslsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlslsall" onclick="checkRow('TPlsls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsse" id="TPlsseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsse" id="TPlsseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsse" id="TPlsseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsse" id="TPlssealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlsseall" onclick="checkRow('TPlsse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsre" id="TPlsreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsre" id="TPlsreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsre" id="TPlsreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlsre" id="TPlsrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlsreall" onclick="checkRow('TPlsre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlshv" id="TPlshvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlshv" id="TPlshvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlshv" id="TPlshvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlshv" id="TPlshvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlshvall" onclick="checkRow('TPlshv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlswm" id="TPlswmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlswm" id="TPlswmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlswm" id="TPlswmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlswm" id="TPlswmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlswmall" onclick="checkRow('TPlswm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlssa" id="TPlssaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlssa" id="TPlssaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlssa" id="TPlssaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlssa" id="TPlssaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlssaall" onclick="checkRow('TPlssa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlstv" id="TPlstvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlstv" id="TPlstvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlstv" id="TPlstvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlstv" id="TPlstvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlstvall" onclick="checkRow('TPlstv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlscl" id="TPlsclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlscl" id="TPlsclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlscl" id="TPlsclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlscl" id="TPlsclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlsclall" onclick="checkRow('TPlscl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPsa')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Assistant
                            <img id="TPsaArrow" src="../images/arrowright.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="TPsa" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPsadata">
                            <tr>
                                <th><strong>Data from your Smart Assistant can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPsa','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPsa','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPsa','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPsa','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="TPsaAllButton" onclick="checkAll('TPsa')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsasa" id="TPsasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsasa" id="TPsasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsasa" id="TPsasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsasa" id="TPsasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsasaall" onclick="checkRow('TPsasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsase" id="TPsaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsase" id="TPsaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsase" id="TPsaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsase" id="TPsasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsaseall" onclick="checkRow('TPsase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsare" id="TPsareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsare" id="TPsareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsare" id="TPsareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsare" id="TPsarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsareall" onclick="checkRow('TPsare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsahv" id="TPsahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsahv" id="TPsahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsahv" id="TPsahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsahv" id="TPsahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsahvall" onclick="checkRow('TPsahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsawm" id="TPsawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsawm" id="TPsawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsawm" id="TPsawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsawm" id="TPsawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsawmall" onclick="checkRow('TPsawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsals" id="TPsalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsals" id="TPsalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsals" id="TPsalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsals" id="TPsalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsalsall" onclick="checkRow('TPsals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsatv" id="TPsatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsatv" id="TPsatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsatv" id="TPsatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsatv" id="TPsatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsatvall" onclick="checkRow('TPsatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsacl" id="TPsaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsacl" id="TPsaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsacl" id="TPsaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPsacl" id="TPsaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPsaclall" onclick="checkRow('TPsacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPtv')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart TV
                            <img id="TPtvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="TPtv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPtvdata">
                            <tr>
                                <th><strong>Data from your Smart TV can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPtv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPtv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPtv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPtv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('TPtv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvtv" id="TPtvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvtv" id="TPtvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvtv" id="TPtvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvtv" id="TPtvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPtvtvall" onclick="checkRow('TPtvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvse" id="TPtvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvse" id="TPtvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvse" id="TPtvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvse" id="TPtvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPtvseall" onclick="checkRow('TPtvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvre" id="TPtvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvre" id="TPtvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvre" id="TPtvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvre" id="TPtvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPtvreall" onclick="checkRow('TPtvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvhv" id="TPtvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvhv" id="TPtvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvhv" id="TPtvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvhv" id="TPtvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPtvhvall" onclick="checkRow('TPtvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvwm" id="TPtvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvwm" id="TPtvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvwm" id="TPtvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvwm" id="TPtvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPtvwmall" onclick="checkRow('TPtvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvls" id="TPtvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvls" id="TPtvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvls" id="TPtvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvls" id="TPtvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPtvlsall" onclick="checkRow('TPtvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvsa" id="TPtvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvsa" id="TPtvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvsa" id="TPtvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvsa" id="TPtvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPtvsaall" onclick="checkRow('TPtvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvcl" id="TPtvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvcl" id="TPtvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvcl" id="TPtvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPtvcl" id="TPtvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPtvclall" onclick="checkRow('TPtvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPcl')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Alarm Clock
                            <img id="TPclArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="TPcl" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPcldata">
                            <tr>
                                <th><strong>Data from your Alarm Clock can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPcl','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPcl','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPcl','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPcl','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('TPcl')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclcl" id="TPclclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclcl" id="TPclclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclcl" id="TPclclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclcl" id="TPclclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPclclall" onclick="checkRow('TPclcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclse" id="TPclseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclse" id="TPclseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclse" id="TPclseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclse" id="TPclsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPclseall" onclick="checkRow('TPclse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclre" id="TPclreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclre" id="TPclreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclre" id="TPclreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclre" id="TPclrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPclreall" onclick="checkRow('TPclre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclhv" id="TPclhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclhv" id="TPclhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclhv" id="TPclhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclhv" id="TPclhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPclhvall" onclick="checkRow('TPclhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclwm" id="TPclwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclwm" id="TPclwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclwm" id="TPclwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclwm" id="TPclwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPclwmall" onclick="checkRow('TPclwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclls" id="TPcllsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclls" id="TPcllsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclls" id="TPcllsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclls" id="TPcllsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcllsall" onclick="checkRow('TPclls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclsa" id="TPclsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclsa" id="TPclsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclsa" id="TPclsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPclsa" id="TPclsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPclsaall" onclick="checkRow('TPclsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcltv" id="TPcltvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcltv" id="TPcltvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcltv" id="TPcltvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcltv" id="TPcltvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcltvall" onclick="checkRow('TPcltv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPlo')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Location Sensor
                            <img id="TPloArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="TPlo" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPlodata">
                            <tr>
                                <th><strong>Data from your Location Sensor can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPlo','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPlo','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPlo','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPlo','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="TPloAllButton" onclick="checkAll('TPlo')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlose" id="TPloseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlose" id="TPloseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlose" id="TPloseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlose" id="TPlosealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPloseall" onclick="checkRow('TPlose',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlore" id="TPloreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlore" id="TPloreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlore" id="TPloreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlore" id="TPlorealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPloreall" onclick="checkRow('TPlore',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlohv" id="TPlohvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlohv" id="TPlohvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlohv" id="TPlohvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlohv" id="TPlohvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlohvall" onclick="checkRow('TPlohv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlowm" id="TPlowmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlowm" id="TPlowmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlowm" id="TPlowmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlowm" id="TPlowmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlowmall" onclick="checkRow('TPlowm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlols" id="TPlolsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlols" id="TPlolsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlols" id="TPlolsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlols" id="TPlolsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlolsall" onclick="checkRow('TPlols',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlosa" id="TPlosaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlosa" id="TPlosaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlosa" id="TPlosaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlosa" id="TPlosaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlosaall" onclick="checkRow('TPlosa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlotv" id="TPlotvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlotv" id="TPlotvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlotv" id="TPlotvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlotv" id="TPlotvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPlotvall" onclick="checkRow('TPlotv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlocl" id="TPloclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlocl" id="TPloclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlocl" id="TPloclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPlocl" id="TPloclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPloclall" onclick="checkRow('TPlocl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPca')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Camera
                            <img id="TPcaArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="TPca" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPcadata">
                            <tr>
                                <th><strong>Data from your Camera can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPca','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPca','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPca','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPca','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="TPcaAllButton" onclick="checkAll('TPca')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcase" id="TPcaseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcase" id="TPcaseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcase" id="TPcaseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcase" id="TPcasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcaseall" onclick="checkRow('TPcase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcare" id="TPcareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcare" id="TPcareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcare" id="TPcareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcare" id="TPcarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcareall" onclick="checkRow('TPcare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcahv" id="TPcahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcahv" id="TPcahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcahv" id="TPcahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcahv" id="TPcahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcahvall" onclick="checkRow('TPcahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcawm" id="TPcawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcawm" id="TPcawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcawm" id="TPcawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcawm" id="TPcawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcawmall" onclick="checkRow('TPcawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcals" id="TPcalsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcals" id="TPcalsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcals" id="TPcalsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcals" id="TPcalsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcalsall" onclick="checkRow('TPcals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcasa" id="TPcasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcasa" id="TPcasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcasa" id="TPcasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcasa" id="TPcasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcasaall" onclick="checkRow('TPcasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcatv" id="TPcatvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcatv" id="TPcatvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcatv" id="TPcatvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcatv" id="TPcatvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcatvall" onclick="checkRow('TPcatv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcacl" id="TPcaclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcacl" id="TPcaclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcacl" id="TPcaclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPcacl" id="TPcaclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPcaclall" onclick="checkRow('TPcacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPmp')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Microphone
                            <img id="TPmpArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="TPmp" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPmpdata">
                            <tr>
                                <th><strong>Data from your Microphone can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPmp','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPmp','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPmp','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPmp','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="TPmpAllButton" onclick="checkAll('TPmp')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpse" id="TPmpseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpse" id="TPmpseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpse" id="TPmpseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpse" id="TPmpsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPmpseall" onclick="checkRow('TPmpse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpre" id="TPmpreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpre" id="TPmpreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpre" id="TPmpreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpre" id="TPmprealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPmpreall" onclick="checkRow('TPmpre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmphv" id="TPmphvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmphv" id="TPmphvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmphv" id="TPmphvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmphv" id="TPmphvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPmphvall" onclick="checkRow('TPmphv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpwm" id="TPmpwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpwm" id="TPmpwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpwm" id="TPmpwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpwm" id="TPmpwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPmpwmall" onclick="checkRow('TPmpwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpls" id="TPmplsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpls" id="TPmplsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpls" id="TPmplsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpls" id="TPmplsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPmplsall" onclick="checkRow('TPmpls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpsa" id="TPmpsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpsa" id="TPmpsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpsa" id="TPmpsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpsa" id="TPmpsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPmpsaall" onclick="checkRow('TPmpsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmptv" id="TPmptvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmptv" id="TPmptvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmptv" id="TPmptvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmptv" id="TPmptvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPmptvall" onclick="checkRow('TPmptv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpcl" id="TPmpclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpcl" id="TPmpclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpcl" id="TPmpclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPmpcl" id="TPmpclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPmpclall" onclick="checkRow('TPmpcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('TPsw')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Phone/Watch
                            <img id="TPswArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="TPsw" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="TPswdata">
                            <tr>
                                <th><strong>Data from your Smart Phone/Watch can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('TPsw','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('TPsw','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('TPsw','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('TPsw','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="TPswAllButton" onclick="checkAll('TPsw')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswse" id="TPswseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswse" id="TPswseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswse" id="TPswseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswse" id="TPswsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPswseall" onclick="checkRow('TPswse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswre" id="TPswreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswre" id="TPswreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswre" id="TPswreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswre" id="TPswrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPswreall" onclick="checkRow('TPswre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswhv" id="TPswhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswhv" id="TPswhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswhv" id="TPswhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswhv" id="TPswhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPswhvall" onclick="checkRow('TPswhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswwm" id="TPswwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswwm" id="TPswwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswwm" id="TPswwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswwm" id="TPswwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPswwmall" onclick="checkRow('TPswwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswls" id="TPswlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswls" id="TPswlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswls" id="TPswlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswls" id="TPswlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPswlsall" onclick="checkRow('TPswls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswsa" id="TPswsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswsa" id="TPswsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswsa" id="TPswsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswsa" id="TPswsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPswsaall" onclick="checkRow('TPswsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswtv" id="TPswtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswtv" id="TPswtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswtv" id="TPswtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswtv" id="TPswtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPswtvall" onclick="checkRow('TPswtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswcl" id="TPswclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswcl" id="TPswclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswcl" id="TPswclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox TPswcl" id="TPswclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="TPswclall" onclick="checkRow('TPswcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:5px;margin-left: -30px;height:28px" onclick="document.getElementById('TPdsmui').style.display='none';document.getElementById('TPintroui').style.display='block';closeLeftDropdown();">Save</button></div>
                </div>

			</div>

		</div>
        
        <div id="TPdusgui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('TPdusgui').style.display='none';document.getElementById('TPintroui').style.display='block';"></button>
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Usage for 3rd Party Sharing</div>
            </div>

            <div class="settings" style="font-size:15px">
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

                <div><button class="button middle" style="top:20px;height:28px" onclick="document.getElementById('TPdusgui').style.display='none';document.getElementById('TPintroui').style.display='block';">Save</button></div>

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

