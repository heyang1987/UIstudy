<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../ui.css">
    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
    <script type="text/javascript" src="../js/ui.js"></script>

</head>
<body>
    <div class="container">
        <img src="../images/u1.png" width="400">

        <div id="introui">
            <div class="title">
<!--                <div style="float:left;margin-top:15px;margin-left:5px">Household IoT Privacy Settings</div>-->
                <div style="text-align: center;margin-top:16px;">Household IoT Privacy Settings</div>
            </div>

            <div class="settings">


                
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('introui').style.display='none';document.getElementById('dsmui').style.display='block';currentMenu='se'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
<!--                    <h2>Device and Sensor Management</h2>-->
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>
                
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('introui').style.display='none';document.getElementById('dusgui').style.display='block';currentMenu='se'>
                    <strong>Data Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>            
                <div class="uifixtext" style="margin-top:10px;">
<!--                    <h2>Data Usage</h2>-->
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>

        <div id="dsmui" style="display: none">
			<div class="title">
<!--                <div style="float:left;margin:10px;"><img src="../icons/home.png" style="width:30px;height:30px;"></div>-->
                <button id="homebutton" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device/Sensor Management</div>
			</div>
			<div class="settingsWithScroll">
				<div class="uifixtext">
                    <p>Expand to give access for information collected by devices. Select who gets access and for what purpose. </p>
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
                                <th><strong>Data from Home Security System can be used by</strong></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('se')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="seAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sese" id="seseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sese" id="seseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sese" id="seseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sese" id="sesealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><button class="button" style="width:35px;font-size:12px;padding:5px 1px;background-color:grey" id="seseall" onclick="checkRow('sese',true,true)">All</button><span class="tooltiptext">Enable this row</span></div></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sere" id="sereprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sere" id="sereloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sere" id="sereope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sere" id="serealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sere" id="sereall" onchange="checkRow(this.checked, ' sere')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sehv" id="sehvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sehv" id="sehvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sehv" id="sehvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sehv" id="sehvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sehv" id="sehvall" onchange="checkRow(this.checked, 'sehv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sewm" id="sewmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sewm" id="sewmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sewm" id="sewmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sewm" id="sewmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sewm" id="sewmall" onchange="checkRow(this.checked,  'sewm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sels" id="selsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sels" id="selsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sels" id="selsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sels" id="selsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sels" id="selsall" onchange="checkRow(this.checked, 'sels')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sesa" id="sesaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sesa" id="sesaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sesa" id="sesaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sesa" id="sesaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sesa" id="sesaall" onchange="checkRow(this.checked, 'sesa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox setv" id="setvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox setv" id="setvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox setv" id="setvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox setv" id="setvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox setv" id="setvall" onchange="checkRow(this.checked, 'setv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox secl" id="seclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox secl" id="seclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox secl" id="seclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox secl" id="seclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox secl" id="seclall" onchange="checkRow(this.checked, 'secl')"/></td>
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
						<div style="padding:10px 10px;font-weight:bold">Data from this.checked device can be used by</div>
                        <table class="table" id="redata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('re')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="reAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rere" id="rereprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rere" id="rereloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rere" id="rereope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rere" id="rerealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rere" id="rereall" onchange="checkRow(this.checked, 'rere')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rese" id="reseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rese" id="reseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rese" id="reseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rese" id="resealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rese" id="reseall" onchange="checkRow(this.checked, ' rese')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rehv" id="rehvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rehv" id="rehvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rehv" id="rehvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rehv" id="rehvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rehv" id="rehvall" onchange="checkRow(this.checked, 'rehv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rewm" id="rewmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rewm" id="rewmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rewm" id="rewmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rewm" id="rewmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rewm" id="rewmall" onchange="checkRow(this.checked,  'rewm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rels" id="relsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rels" id="relsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rels" id="relsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rels" id="relsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox rels" id="relsall" onchange="checkRow(this.checked, 'rels')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox resa" id="resaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox resa" id="resaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox resa" id="resaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox resa" id="resaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox resa" id="resaall" onchange="checkRow(this.checked, 'resa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox retv" id="retvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox retv" id="retvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox retv" id="retvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox retv" id="retvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox retv" id="retvall" onchange="checkRow(this.checked, 'retv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox recl" id="reclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox recl" id="reclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox recl" id="reclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox recl" id="reclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox recl" id="reclall" onchange="checkRow(this.checked, 'recl')"/></td>
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
						<div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="hvdata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('hv')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="hvAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvhv" id="hvhvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvhv" id="hvhvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvhv" id="hvhvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvhv" id="hvhvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvhv" id="hvhvall" onchange="checkRow(this.checked, 'hvhv')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvse" id="hvseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvse" id="hvseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvse" id="hvseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvse" id="hvsealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvse" id="hvseall" onchange="checkRow(this.checked, ' hvse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvre" id="hvreprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvre" id="hvreloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvre" id="hvreope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvre" id="hvrealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvre" id="hvreall" onchange="checkRow(this.checked, 'hvre')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvwm" id="hvwmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvwm" id="hvwmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvwm" id="hvwmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvwm" id="hvwmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvwm" id="hvwmall" onchange="checkRow(this.checked,  'hvwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvls" id="hvlsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvls" id="hvlsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvls" id="hvlsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvls" id="hvlsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvls" id="hvlsall" onchange="checkRow(this.checked, 'hvls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvsa" id="hvsaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvsa" id="hvsaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvsa" id="hvsaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvsa" id="hvsaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvsa" id="hvsaall" onchange="checkRow(this.checked, 'hvsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvtv" id="hvtvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvtv" id="hvtvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvtv" id="hvtvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvtv" id="hvtvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvtv" id="hvtvall" onchange="checkRow(this.checked, 'hvtv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvcl" id="hvclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvcl" id="hvclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvcl" id="hvclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvcl" id="hvclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox hvcl" id="hvclall" onchange="checkRow(this.checked, 'hvcl')"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('wm')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washing Machine
                            <img id="wmArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="wm" class="dropdown" style="display: none">
						<div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="wmdata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('wm')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="wmAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmwm" id="wmwmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmwm" id="wmwmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmwm" id="wmwmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmwm" id="wmwmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmwm" id="wmwmall" onchange="checkRow(this.checked, 'wmwm')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmse" id="wmseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmse" id="wmseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmse" id="wmseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmse" id="wmsealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmse" id="wmseall" onchange="checkRow(this.checked, ' wmse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmre" id="wmreprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmre" id="wmreloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmre" id="wmreope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmre" id="wmrealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmre" id="wmreall" onchange="checkRow(this.checked, 'wmre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmhv" id="wmhvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmhv" id="wmhvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmhv" id="wmhvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmhv" id="wmhvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmhv" id="wmhvall" onchange="checkRow(this.checked,  'wmhv')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmls" id="wmlsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmls" id="wmlsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmls" id="wmlsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmls" id="wmlsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmls" id="wmlsall" onchange="checkRow(this.checked, 'wmls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmsa" id="wmsaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmsa" id="wmsaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmsa" id="wmsaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmsa" id="wmsaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmsa" id="wmsaall" onchange="checkRow(this.checked, 'wmsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmtv" id="wmtvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmtv" id="wmtvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmtv" id="wmtvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmtv" id="wmtvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmtv" id="wmtvall" onchange="checkRow(this.checked, 'wmtv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmcl" id="wmclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmcl" id="wmclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmcl" id="wmclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmcl" id="wmclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox wmcl" id="wmclall" onchange="checkRow(this.checked, 'wmcl')"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('ls')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Lighting System
                            <img id="lsArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="ls" class="dropdown" style="display: none">
                        <div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="lsdata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('ls')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="lsAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsls" id="lslsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsls" id="lslsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsls" id="lslsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsls" id="lslsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsls" id="lslsall" onchange="checkRow(this.checked, 'lsls')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsse" id="lsseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsse" id="lsseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsse" id="lsseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsse" id="lssealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsse" id="lsseall" onchange="checkRow(this.checked, ' lsse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsre" id="lsreprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsre" id="lsreloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsre" id="lsreope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsre" id="lsrealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lsre" id="lsreall" onchange="checkRow(this.checked, 'lsre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lshv" id="lshvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lshv" id="lshvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lshv" id="lshvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lshv" id="lshvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lshv" id="lshvall" onchange="checkRow(this.checked,  'lshv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lswm" id="lswmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lswm" id="lswmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lswm" id="lswmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lswm" id="lswmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lswm" id="lswmsall" onchange="checkRow(this.checked, 'lswm')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lssa" id="lssaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lssa" id="lssaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lssa" id="lssaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lssa" id="lssaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lssa" id="lssaall" onchange="checkRow(this.checked, 'lssa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lstv" id="lstvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lstv" id="lstvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lstv" id="lstvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lstv" id="lstvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lstv" id="lstvall" onchange="checkRow(this.checked, 'lstv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lscl" id="lsclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lscl" id="lsclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lscl" id="lsclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lscl" id="lsclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lscl" id="lsclall" onchange="checkRow(this.checked, 'lscl')"/></td>
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
                        <div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="sadata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('sa')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="saAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sasa" id="sasaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sasa" id="sasaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sasa" id="sasaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sasa" id="sasaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sasa" id="sasaall" onchange="checkRow(this.checked, 'sasa')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sase" id="saseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sase" id="saseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sase" id="saseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sase" id="sasealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sase" id="saseall" onchange="checkRow(this.checked, ' sase')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sare" id="sareprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sare" id="sareloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sare" id="sareope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sare" id="sarealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sare" id="sareall" onchange="checkRow(this.checked, 'sare')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sahv" id="sahvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sahv" id="sahvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sahv" id="sahvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sahv" id="sahvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sahv" id="sahvall" onchange="checkRow(this.checked,  'sahv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sawm" id="sawmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sawm" id="sawmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sawm" id="sawmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sawm" id="sawmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sawm" id="sawmsall" onchange="checkRow(this.checked, 'sawm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sals" id="salsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sals" id="salsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sals" id="salsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sals" id="salsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sals" id="salsall" onchange="checkRow(this.checked, 'sals')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox satv" id="satvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox satv" id="satvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox satv" id="satvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox satv" id="satvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox satv" id="satvall" onchange="checkRow(this.checked, 'satv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sacl" id="saclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sacl" id="saclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sacl" id="saclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sacl" id="saclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox sacl" id="saclall" onchange="checkRow(this.checked, 'sacl')"/></td>
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
                        <div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="tvdata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('tv')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="tvAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvtv" id="tvtvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvtv" id="tvtvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvtv" id="tvtvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvtv" id="tvtvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvtv" id="tvtvall" onchange="checkRow(this.checked, 'tvtv')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvse" id="tvseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvse" id="tvseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvse" id="tvseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvse" id="tvsealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvse" id="tvseall" onchange="checkRow(this.checked, ' tvse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvre" id="tvreprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvre" id="tvreloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvre" id="tvreope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvre" id="tvrealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvre" id="tvreall" onchange="checkRow(this.checked, 'tvre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvhv" id="tvhvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvhv" id="tvhvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvhv" id="tvhvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvhv" id="tvhvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvhv" id="tvhvall" onchange="checkRow(this.checked,  'tvhv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvwm" id="tvwmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvwm" id="tvwmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvwm" id="tvwmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvwm" id="tvwmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvwm" id="tvwmsall" onchange="checkRow(this.checked, 'tvwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvls" id="tvlsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvls" id="tvlsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvls" id="tvlsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvls" id="tvlsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvls" id="tvlsall" onchange="checkRow(this.checked, 'tvls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvsa" id="tvsaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvsa" id="tvsaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvsa" id="tvsaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvsa" id="tvsaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvsa" id="tvsaall" onchange="checkRow(this.checked, 'tvsa')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvcl" id="tvclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvcl" id="tvclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvcl" id="tvclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvcl" id="tvclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox tvcl" id="tvclall" onchange="checkRow(this.checked, 'tvcl')"/></td>
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
                        <div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="cldata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('cl')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="clAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clcl" id="clclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clcl" id="clclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clcl" id="clclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clcl" id="clclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clcl" id="clclall" onchange="checkRow(this.checked, 'clcl')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clse" id="clseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clse" id="clseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clse" id="clseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clse" id="clsealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clse" id="clseall" onchange="checkRow(this.checked, ' clse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clre" id="clreprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clre" id="clreloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clre" id="clreope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clre" id="clrealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clre" id="clreall" onchange="checkRow(this.checked, 'clre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clhv" id="clhvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clhv" id="clhvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clhv" id="clhvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clhv" id="clhvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clhv" id="clhvall" onchange="checkRow(this.checked,  'clhv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clwm" id="clwmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clwm" id="clwmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clwm" id="clwmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clwm" id="clwmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clwm" id="clwmsall" onchange="checkRow(this.checked, 'clwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clls" id="cllsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clls" id="cllsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clls" id="cllsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clls" id="cllsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clls" id="cllsall" onchange="checkRow(this.checked, 'clls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clsa" id="clsaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clsa" id="clsaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clsa" id="clsaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clsa" id="clsaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox clsa" id="clsaall" onchange="checkRow(this.checked, 'clsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cltv" id="cltvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cltv" id="cltvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cltv" id="cltvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cltv" id="cltvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cltv" id="cltvall" onchange="checkRow(this.checked, 'cltv')"/></td>
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
                        <div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="lodata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('lo')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="loAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lose" id="loseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lose" id="loseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lose" id="loseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lose" id="losealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lose" id="loseall" onchange="checkRow(this.checked, ' lose')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lore" id="loreprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lore" id="loreloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lore" id="loreope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lore" id="lorealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lore" id="loreall" onchange="checkRow(this.checked, 'lore')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lohv" id="lohvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lohv" id="lohvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lohv" id="lohvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lohv" id="lohvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lohv" id="lohvall" onchange="checkRow(this.checked,  'lohv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lowm" id="lowmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lowm" id="lowmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lowm" id="lowmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lowm" id="lowmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lowm" id="lowmsall" onchange="checkRow(this.checked, 'lowm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lols" id="lolsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lols" id="lolsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lols" id="lolsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lols" id="lolsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lols" id="lolsall" onchange="checkRow(this.checked, 'lols')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox losa" id="losaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox losa" id="losaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox losa" id="losaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox losa" id="losaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox losa" id="losaall" onchange="checkRow(this.checked, 'losa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lotv" id="lotvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lotv" id="lotvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lotv" id="lotvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lotv" id="lotvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox lotv" id="lotvall" onchange="checkRow(this.checked, 'lotv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox locl" id="loclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox locl" id="loclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox locl" id="loclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox locl" id="loclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox locl" id="loclall" onchange="checkRow(this.checked, 'locl')"/></td>
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
                        <div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="cadata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('ca')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="caAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox case" id="caseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox case" id="caseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox case" id="caseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox case" id="casealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox case" id="caseall" onchange="checkRow(this.checked, ' case')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox care" id="careprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox care" id="careloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox care" id="careope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox care" id="carealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox care" id="careall" onchange="checkRow(this.checked, 'care')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cahv" id="cahvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cahv" id="cahvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cahv" id="cahvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cahv" id="cahvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cahv" id="cahvall" onchange="checkRow(this.checked,  'cahv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cawm" id="cawmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cawm" id="cawmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cawm" id="cawmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cawm" id="cawmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cawm" id="cawmsall" onchange="checkRow(this.checked, 'cawm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cals" id="calsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cals" id="calsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cals" id="calsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cals" id="calsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cals" id="calsall" onchange="checkRow(this.checked, 'cals')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox casa" id="casaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox casa" id="casaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox casa" id="casaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox casa" id="casaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox casa" id="casaall" onchange="checkRow(this.checked, 'casa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox catv" id="catvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox catv" id="catvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox catv" id="catvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox catv" id="catvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox catv" id="catvall" onchange="checkRow(this.checked, 'catv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cacl" id="caclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cacl" id="caclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cacl" id="caclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cacl" id="caclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox cacl" id="caclall" onchange="checkRow(this.checked, 'cacl')"/></td>
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
                        <div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="mpdata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('mp')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="mpAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpse" id="mpseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpse" id="mpseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpse" id="mpseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpse" id="mpsealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpse" id="mpseall" onchange="checkRow(this.checked, ' mpse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpre" id="mpreprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpre" id="mpreloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpre" id="mpreope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpre" id="mprealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpre" id="mpreall" onchange="checkRow(this.checked, 'mpre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mphv" id="mphvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mphv" id="mphvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mphv" id="mphvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mphv" id="mphvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mphv" id="mphvall" onchange="checkRow(this.checked,  'mphv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpwm" id="mpwmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpwm" id="mpwmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpwm" id="mpwmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpwm" id="mpwmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpwm" id="mpwmsall" onchange="checkRow(this.checked, 'mpwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpls" id="mplsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpls" id="mplsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpls" id="mplsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpls" id="mplsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpls" id="mplsall" onchange="checkRow(this.checked, 'mpls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpsa" id="mpsaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpsa" id="mpsaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpsa" id="mpsaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpsa" id="mpsaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpsa" id="mpsaall" onchange="checkRow(this.checked, 'mpsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mptv" id="mptvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mptv" id="mptvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mptv" id="mptvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mptv" id="mptvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mptv" id="mptvall" onchange="checkRow(this.checked, 'mptv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpcl" id="mpclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpcl" id="mpclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpcl" id="mpclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpcl" id="mpclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox mpcl" id="mpclall" onchange="checkRow(this.checked, 'mpcl')"/></td>
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
                        <div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="swdata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('sw')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="swAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swse" id="swseprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swse" id="swseloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swse" id="swseope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swse" id="swsealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swse" id="swseall" onchange="checkRow(this.checked, ' swse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swre" id="swreprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swre" id="swreloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swre" id="swreope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swre" id="swrealm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swre" id="swreall" onchange="checkRow(this.checked, 'swre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swhv" id="swhvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swhv" id="swhvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swhv" id="swhvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swhv" id="swhvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swhv" id="swhvall" onchange="checkRow(this.checked,  'swhv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swwm" id="swwmprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swwm" id="swwmloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swwm" id="swwmope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swwm" id="swwmalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swwm" id="swwmsall" onchange="checkRow(this.checked, 'swwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swls" id="swlsprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swls" id="swlsloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swls" id="swlsope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swls" id="swlsalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swls" id="swlsall" onchange="checkRow(this.checked, 'swls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swsa" id="swsaprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swsa" id="swsaloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swsa" id="swsaope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swsa" id="swsaalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swsa" id="swsaall" onchange="checkRow(this.checked, 'swsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swtv" id="swtvprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swtv" id="swtvloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swtv" id="swtvope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swtv" id="swtvalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swtv" id="swtvall" onchange="checkRow(this.checked, 'swtv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swcl" id="swclprs"/><span class="tooltiptext">detect whether you are home</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swcl" id="swclloc"/><span class="tooltiptext">detect your location in house</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swcl" id="swclope"/><span class="tooltiptext">automate its operation</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swcl" id="swclalm"/><span class="tooltiptext">give you timely alarm</span></div></td>
                                <td><div class="tooltip"><input type="checkbox" class="largerCheckbox swcl" id="swclall" onchange="checkRow(this.checked, 'swcl')"/></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:10px;margin-left: -22px;" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';closeLeftDropdown();">Save</button></div>
                </div>

			</div>

		</div>

        <div id="dusgui" style="display: none">
            <div class="title">
                <button id="homebutton" onclick="document.getElementById('dusgui').style.display='none';document.getElementById('introui').style.display='block';"></button>
                <div style="float:left;margin-left:26px;margin-top:16px;">Data Storage and Usage</div>
            </div>
            <div class="settings">
                <div class="uifixtext">
                    <h2>Storage and Sharing</h2>
                    Control the extent of sharing of the information collected by different devices in your smart home.
                </div>

                <div class="inputGroup">
                    <input id="radio1" name="radio" type="radio" checked/>
                    <label for="radio1">No Storage</label>
                </div>
                <div class="inputGroup">
                    <input id="radio2" name="radio" type="radio"/>
                    <label for="radio2">Local Only</label>
                </div>
                <div class="inputGroup">
                    <input id="radio3" name="radio" type="radio"/>
                    <label for="radio3">Local + Remote Server</label>
                </div>
                <div class="inputGroup">
                    <input id="radio4" name="radio" type="radio"/>
                    <label for="radio4">Local + Third Party Sharing</label>
                </div>

                <div class="uifixtext">
                    <h2>Data Usage</h2>
                    Manage what happens with the shared information.
                </div>
                
                <div class="radiobox">
                    Optimize Services<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Behavioral Insights<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Recommendation<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                </div>
                <div class="radiobox">
                    Other users<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                </div>
                
                <div><button class="button middle" style="top:28px;" onclick="document.getElementById('dusgui').style.display='none';document.getElementById('introui').style.display='block';">Save</button></div>
                
            </div>
        </div>
        


    </div>

</body>
</html>
