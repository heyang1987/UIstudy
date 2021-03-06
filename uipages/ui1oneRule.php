<?php
    session_start();
    $sessionId = session_id();
    ob_start();
    include_once "../db.php";
    $mysqli = OpenCon();
    $mysqli->query("UPDATE uistudy SET time2 = now(), cond = '5' WHERE (sessionid = '$sessionId')");
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

        <div id="introui">
            <div class="title">
                <div style="text-align: center;margin-top:16px;">Smart home Settings</div>
            </div>

            <div class="settings">            
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('introui').style.display='none';document.getElementById('dsmui').style.display='block';currentMenu='se'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage smart homedevice access to the data collected by other smart homedevices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('introui').style.display='none';document.getElementById('dusgui').style.display='block';currentMenu='se'>
                    <strong>Data Storage and Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>

        <div id="dusgui" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('dusgui').style.display='none';document.getElementById('introui').style.display='block';"></button>
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Storage and Usage</div>
            </div>
            <div class="settings" style="font-size:15px">
                <div class="uifixtext">
                    <h2>Storage and Sharing</h2>
                    Choose <b>one</b> storage plan from below to control where to store the information collected and the extent of sharing by different devices in your smart home.
                </div>

                <div class="inputGroup">
                    <input id="radio1" name="radio" type="radio" checked/>
                    <label for="radio1">Local Only</label>
                </div>
                <div class="inputGroup">
                    <input id="radio2" name="radio" type="radio"/>
                    <label for="radio2">Local+Remote Server</label>
                </div>
                <div class="inputGroup">
                    <input id="radio3" name="radio" type="radio"/>
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

                <div><button class="button middle" style="top:20px;height:28px" onclick="document.getElementById('dusgui').style.display='none';document.getElementById('introui').style.display='block';">Save</button></div>

            </div>
        </div>
        
        <div id="dsmui" style="display: none">
			<div class="title">
                <button class="homebutton" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';closeLeftDropdown();"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device and Sensor Management</div>
			</div>
			<div class="settingsWithScroll">
				<div class="uifixtext">
                    <p>Expand to set permissions for information collected by who (which device) and for what purpose.</p>
                </div>

                <div class="devicecontainer">
                    <div class="narrowmenu" onclick="dropdownFunction('se')">
                        <div class="narrowmenuicon"><img src="../icons/1.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Home Security System
                            <img id="seArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="se" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="sedata">
                            <tr>
                                <th><strong>Data from your Home Security System can be used by</strong></th>
<!--                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('se','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>-->
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('se','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('se','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('se','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('se','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:38px;font-size:14px;padding:5px 1px" id="seAllButton" onclick="checkAll('se')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sese" id="seseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sese" id="seseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sese" id="seseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sese" id="sesealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="seseall" onclick="checkRow('sese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sere" id="sereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sere" id="sereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sere" id="sereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sere" id="serealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="sereall" onclick="checkRow('sere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sehv" id="sehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sehv" id="sehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sehv" id="sehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sehv" id="sehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="sehvall" onclick="checkRow('sehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sewm" id="sewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sewm" id="sewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sewm" id="sewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sewm" id="sewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="sewmall" onclick="checkRow('sewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sels" id="selsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sels" id="selsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sels" id="selsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sels" id="selsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="selsall" onclick="checkRow('sels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sesa" id="sesaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sesa" id="sesaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sesa" id="sesaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sesa" id="sesaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="sesaall" onclick="checkRow('sesa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox setv" id="setvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox setv" id="setvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox setv" id="setvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox setv" id="setvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="setvall" onclick="checkRow('setv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox secl" id="seclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox secl" id="seclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox secl" id="seclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox secl" id="seclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="seclall" onclick="checkRow('secl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>


                    <div class="narrowmenu" onclick="dropdownFunction('re')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img id="reArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="re" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="redata">
                            <tr>
                                <th><strong>Data from your Refrigerator can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('re','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('re','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('re','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('re','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="reAllButton" onclick="checkAll('re')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rere" id="rereprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rere" id="rereloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rere" id="rereope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rere" id="rerealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="rereall" onclick="checkRow('rere',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rese" id="reseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rese" id="reseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rese" id="reseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rese" id="resealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="reseall" onclick="checkRow('rese',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rehv" id="rehvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rehv" id="rehvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rehv" id="rehvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rehv" id="rehvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="rehvall" onclick="checkRow('rehv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rewm" id="rewmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rewm" id="rewmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rewm" id="rewmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rewm" id="rewmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="rewmall" onclick="checkRow('rewm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rels" id="relsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rels" id="relsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rels" id="relsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox rels" id="relsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="relsall" onclick="checkRow('rels',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox resa" id="resaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox resa" id="resaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox resa" id="resaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox resa" id="resaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="resaall" onclick="checkRow('resa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox retv" id="retvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox retv" id="retvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox retv" id="retvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox retv" id="retvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="retvall" onclick="checkRow('retv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox recl" id="reclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox recl" id="reclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox recl" id="reclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox recl" id="reclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="reclall" onclick="checkRow('recl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('hv')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img id="hvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="hv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="hvdata">
                            <tr>
                                <th><strong>Data from your HVAC can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('hv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('hv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('hv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('hv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="hvAllButton" onclick="checkAll('hv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvhv" id="hvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvhv" id="hvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvhv" id="hvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvhv" id="hvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="hvhvall" onclick="checkRow('hvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvse" id="hvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvse" id="hvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvse" id="hvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvse" id="hvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="hvseall" onclick="checkRow('hvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvre" id="hvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvre" id="hvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvre" id="hvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvre" id="hvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="hvreall" onclick="checkRow('hvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvwm" id="hvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvwm" id="hvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvwm" id="hvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvwm" id="hvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="hvwmall" onclick="checkRow('hvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvls" id="hvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvls" id="hvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvls" id="hvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvls" id="hvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="hvlsall" onclick="checkRow('hvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvsa" id="hvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvsa" id="hvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvsa" id="hvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvsa" id="hvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="hvsaall" onclick="checkRow('hvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvtv" id="hvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvtv" id="hvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvtv" id="hvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvtv" id="hvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="hvtvall" onclick="checkRow('hvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvcl" id="hvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvcl" id="hvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvcl" id="hvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox hvcl" id="hvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="hvclall" onclick="checkRow('hvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('wm')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washer
                            <img id="wmArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="wm" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="wmdata">
                            <tr>
                                <th><strong>Data from your wahcing machine can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('wm','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('wm','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('wm','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('wm','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('wm')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="wmAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmwm" id="wmwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmwm" id="wmwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmwm" id="wmwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmwm" id="wmwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('wmwm',true,true)"><div class="tooltip"><button class="allbutton" id="wmwmall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmse" id="wmseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmse" id="wmseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmse" id="wmseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmse" id="wmsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('wmse',true,true)"><div class="tooltip"><button class="allbutton" id="wmseall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmre" id="wmreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmre" id="wmreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmre" id="wmreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmre" id="wmrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('wmre',true,true)"><div class="tooltip"><button class="allbutton" id="wmreall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmhv" id="wmhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmhv" id="wmhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmhv" id="wmhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmhv" id="wmhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('wmhv',true,true)"><div class="tooltip"><button class="allbutton" id="wmhvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmls" id="wmlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmls" id="wmlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmls" id="wmlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmls" id="wmlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('wmls',true,true)"><div class="tooltip"><button class="allbutton" id="wmlsall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmsa" id="wmsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmsa" id="wmsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmsa" id="wmsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmsa" id="wmsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('wmsa',true,true)"><div class="tooltip"><button class="allbutton" id="wmsaall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmtv" id="wmtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmtv" id="wmtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmtv" id="wmtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmtv" id="wmtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px" onclick="checkRow('wmtv',true,true)"><div class="tooltip"><button class="allbutton" id="wmtvall">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmcl" id="wmclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmcl" id="wmclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmcl" id="wmclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox wmcl" id="wmclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="wmclall" onclick="checkRow('wmcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('ls')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Lights
                            <img id="lsArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="ls" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="lsdata">
                            <tr>
                                <th><strong>Data from your Lights can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('ls','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('ls','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('ls','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('ls','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('ls')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsls" id="lslsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsls" id="lslsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsls" id="lslsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsls" id="lslsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lslsall" onclick="checkRow('lsls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsse" id="lsseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsse" id="lsseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsse" id="lsseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsse" id="lssealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lsseall" onclick="checkRow('lsse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsre" id="lsreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsre" id="lsreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsre" id="lsreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lsre" id="lsrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lsreall" onclick="checkRow('lsre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lshv" id="lshvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lshv" id="lshvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lshv" id="lshvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lshv" id="lshvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lshvall" onclick="checkRow('lshv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lswm" id="lswmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lswm" id="lswmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lswm" id="lswmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lswm" id="lswmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lswmall" onclick="checkRow('lswm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lssa" id="lssaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lssa" id="lssaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lssa" id="lssaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lssa" id="lssaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lssaall" onclick="checkRow('lssa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lstv" id="lstvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lstv" id="lstvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lstv" id="lstvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lstv" id="lstvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lstvall" onclick="checkRow('lstv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lscl" id="lsclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lscl" id="lsclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lscl" id="lsclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lscl" id="lsclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lsclall" onclick="checkRow('lscl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('sa')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Assistant
                            <img id="saArrow" src="../images/arrowright.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="sa" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="sadata">
                            <tr>
                                <th><strong>Data from your Smart Assistant can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('sa','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('sa','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('sa','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('sa','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('sa')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sasa" id="sasaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sasa" id="sasaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sasa" id="sasaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sasa" id="sasaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="sasaall" onclick="checkRow('sasa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sase" id="saseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sase" id="saseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sase" id="saseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sase" id="sasealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="saseall" onclick="checkRow('sase',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sare" id="sareprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sare" id="sareloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sare" id="sareope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sare" id="sarealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="sareall" onclick="checkRow('sare',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sahv" id="sahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sahv" id="sahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sahv" id="sahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sahv" id="sahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="sahvall" onclick="checkRow('sahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sawm" id="sawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sawm" id="sawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sawm" id="sawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sawm" id="sawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="sawmall" onclick="checkRow('sawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sals" id="salsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sals" id="salsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sals" id="salsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sals" id="salsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="salsall" onclick="checkRow('sals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox satv" id="satvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox satv" id="satvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox satv" id="satvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox satv" id="satvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="satvall" onclick="checkRow('satv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sacl" id="saclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sacl" id="saclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sacl" id="saclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox sacl" id="saclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="saclall" onclick="checkRow('sacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('tv')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart TV
                            <img id="tvArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="tv" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="tvdata">
                            <tr>
                                <th><strong>Data from your Smart TV can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('tv','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('tv','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('tv','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('tv','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('tv')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvtv" id="tvtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvtv" id="tvtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvtv" id="tvtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvtv" id="tvtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="tvtvall" onclick="checkRow('tvtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvse" id="tvseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvse" id="tvseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvse" id="tvseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvse" id="tvsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="tvseall" onclick="checkRow('tvse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvre" id="tvreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvre" id="tvreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvre" id="tvreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvre" id="tvrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="tvreall" onclick="checkRow('tvre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvhv" id="tvhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvhv" id="tvhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvhv" id="tvhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvhv" id="tvhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="tvhvall" onclick="checkRow('tvhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvwm" id="tvwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvwm" id="tvwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvwm" id="tvwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvwm" id="tvwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="tvwmall" onclick="checkRow('tvwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvls" id="tvlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvls" id="tvlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvls" id="tvlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvls" id="tvlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="tvlsall" onclick="checkRow('tvls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvsa" id="tvsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvsa" id="tvsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvsa" id="tvsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvsa" id="tvsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="tvsaall" onclick="checkRow('tvsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvcl" id="tvclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvcl" id="tvclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvcl" id="tvclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox tvcl" id="tvclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="tvclall" onclick="checkRow('tvcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('cl')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Alarm Clock
                            <img id="clArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="cl" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="cldata">
                            <tr>
                                <th><strong>Data from your Alarm Clock can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('cl','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('cl','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('cl','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('cl','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton" onclick="checkAll('cl')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clcl" id="clclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clcl" id="clclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clcl" id="clclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clcl" id="clclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="clclall" onclick="checkRow('clcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clse" id="clseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clse" id="clseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clse" id="clseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clse" id="clsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="clseall" onclick="checkRow('clse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clre" id="clreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clre" id="clreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clre" id="clreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clre" id="clrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="clreall" onclick="checkRow('clre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clhv" id="clhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clhv" id="clhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clhv" id="clhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clhv" id="clhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="clhvall" onclick="checkRow('clhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clwm" id="clwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clwm" id="clwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clwm" id="clwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clwm" id="clwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="clwmall" onclick="checkRow('clwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clls" id="cllsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clls" id="cllsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clls" id="cllsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clls" id="cllsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="cllsall" onclick="checkRow('clls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clsa" id="clsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clsa" id="clsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clsa" id="clsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox clsa" id="clsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="clsaall" onclick="checkRow('clsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cltv" id="cltvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cltv" id="cltvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cltv" id="cltvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cltv" id="cltvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="cltvall" onclick="checkRow('cltv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('lo')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Location Sensor
                            <img id="loArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="lo" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="lodata">
                            <tr>
                                <th><strong>Data from your Location Sensor can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('lo','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('lo','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('lo','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('lo','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="loAllButton" onclick="checkAll('lo')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lose" id="loseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lose" id="loseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lose" id="loseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lose" id="losealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="loseall" onclick="checkRow('lose',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lore" id="loreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lore" id="loreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lore" id="loreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lore" id="lorealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="loreall" onclick="checkRow('lore',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lohv" id="lohvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lohv" id="lohvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lohv" id="lohvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lohv" id="lohvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lohvall" onclick="checkRow('lohv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lowm" id="lowmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lowm" id="lowmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lowm" id="lowmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lowm" id="lowmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lowmall" onclick="checkRow('lowm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lols" id="lolsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lols" id="lolsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lols" id="lolsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lols" id="lolsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lolsall" onclick="checkRow('lols',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox losa" id="losaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox losa" id="losaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox losa" id="losaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox losa" id="losaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="losaall" onclick="checkRow('losa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lotv" id="lotvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lotv" id="lotvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lotv" id="lotvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox lotv" id="lotvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="lotvall" onclick="checkRow('lotv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox locl" id="loclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox locl" id="loclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox locl" id="loclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox locl" id="loclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="loclall" onclick="checkRow('locl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('ca')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Camera
                            <img id="caArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="ca" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="cadata">
                            <tr>
                                <th><strong>Data from your Camera can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('ca','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('ca','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('ca','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('ca','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="loAllButton" onclick="checkAll('ca')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox case" id="caseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox case" id="caseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox case" id="caseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox case" id="casealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="caseall" onclick="checkRow('case',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox care" id="careprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox care" id="careloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox care" id="careope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox care" id="carealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="careall" onclick="checkRow('care',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cahv" id="cahvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cahv" id="cahvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cahv" id="cahvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cahv" id="cahvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="cahvall" onclick="checkRow('cahv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cawm" id="cawmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cawm" id="cawmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cawm" id="cawmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cawm" id="cawmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="cawmall" onclick="checkRow('cawm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cals" id="calsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cals" id="calsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cals" id="calsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cals" id="calsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="calsall" onclick="checkRow('cals',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox casa" id="casaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox casa" id="casaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox casa" id="casaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox casa" id="casaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="casaall" onclick="checkRow('casa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox catv" id="catvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox catv" id="catvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox catv" id="catvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox catv" id="catvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="catvall" onclick="checkRow('catv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cacl" id="caclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cacl" id="caclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cacl" id="caclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox cacl" id="caclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="caclall" onclick="checkRow('cacl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('mp')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Microphone
                            <img id="mpArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="mp" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="mpdata">
                            <tr>
                                <th><strong>Data from your Microphone can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('mp','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('mp','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('mp','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('mp','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="loAllButton" onclick="checkAll('mp')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpse" id="mpseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpse" id="mpseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpse" id="mpseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpse" id="mpsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="mpseall" onclick="checkRow('mpse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpre" id="mpreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpre" id="mpreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpre" id="mpreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpre" id="mprealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="mpreall" onclick="checkRow('mpre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mphv" id="mphvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mphv" id="mphvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mphv" id="mphvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mphv" id="mphvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="mphvall" onclick="checkRow('mphv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpwm" id="mpwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpwm" id="mpwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpwm" id="mpwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpwm" id="mpwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="mpwmall" onclick="checkRow('mpwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpls" id="mplsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpls" id="mplsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpls" id="mplsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpls" id="mplsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="mplsall" onclick="checkRow('mpls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpsa" id="mpsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpsa" id="mpsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpsa" id="mpsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpsa" id="mpsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="mpsaall" onclick="checkRow('mpsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mptv" id="mptvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mptv" id="mptvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mptv" id="mptvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mptv" id="mptvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="mptvall" onclick="checkRow('mptv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpcl" id="mpclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpcl" id="mpclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpcl" id="mpclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox mpcl" id="mpclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="mpclall" onclick="checkRow('mpcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('sw')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Phone/Watch
                            <img id="swArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="sw" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="swdata">
                            <tr>
                                <th><strong>Data from your Smart Phone/Watch can be used by</strong></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/001.png);background-size: 100% 100%;" onclick="checkCol('sw','prs')"><span class="tooltiptext">to detect whether you are home</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/002.png);background-size: 100% 100%;" onclick="checkCol('sw','loc')"><span class="tooltiptext">to detect your location in house</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/003.png);background-size: 100% 100%;" onclick="checkCol('sw','ope')"><span class="tooltiptext">to automate its operation</span></div></th>
                                <th><div class="tooltip"><input type="button" class="iconbutton" style="background:url(../icons/004.png);background-size: 100% 100%;" onclick="checkCol('sw','alm')"><span class="tooltiptext">to give you timely alerts</span></div></th>
                                <th><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="loAllButton" onclick="checkAll('sw')">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swse" id="swseprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swse" id="swseloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swse" id="swseope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swse" id="swsealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="swseall" onclick="checkRow('swse',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swre" id="swreprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swre" id="swreloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swre" id="swreope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swre" id="swrealm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="swreall" onclick="checkRow('swre',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swhv" id="swhvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swhv" id="swhvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swhv" id="swhvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swhv" id="swhvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="swhvall" onclick="checkRow('swhv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Washer</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swwm" id="swwmprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swwm" id="swwmloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swwm" id="swwmope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swwm" id="swwmalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="swwmall" onclick="checkRow('swwm',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Lights</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swls" id="swlsprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swls" id="swlsloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swls" id="swlsope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swls" id="swlsalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="swlsall" onclick="checkRow('swls',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swsa" id="swsaprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swsa" id="swsaloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swsa" id="swsaope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swsa" id="swsaalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="swsaall" onclick="checkRow('swsa',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swtv" id="swtvprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swtv" id="swtvloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swtv" id="swtvope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swtv" id="swtvalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="swtvall" onclick="checkRow('swtv',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swcl" id="swclprs"/><span class="tooltiptext">to detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swcl" id="swclloc"/><span class="tooltiptext">to detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swcl" id="swclope"/><span class="tooltiptext">to automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" checked class="largerCheckbox swcl" id="swclalm"/><span class="tooltiptext">to give you timely alerts</span></div></td>
                                <td style="border-left: 2px solid #DCDCDC;margin-left:5px"><div class="tooltip"><button class="allbutton" id="swclall" onclick="checkRow('swcl',true,true)">All</button><span class="tooltiptext">Check/Uncheck this row</span></div></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:5px;margin-left: -30px;height:28px" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';closeLeftDropdown();">Save</button></div>
                </div>

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
        <?php
//        if(isset($_POST['gotosurveybutton']))
//        {
//            $mysqli->query("UPDATE uistudy SET time3 = now() WHERE (sessionid = '$sessionId')");
//            header("Location: ../survey.php");
//        }
        ?>
<!--
        <form action="" method="POST">
            <button id="gotosurveybutton" name="gotosurveybutton" class="button uiFinishButton">Continue</button>
        </form>
-->
    </div>
</body>
</html>
