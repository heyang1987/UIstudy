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
						<div style="padding:10px 10px;font-weight:bold">Data from this device can be used by</div>
                        <table class="table" id="sedata">
                            <tr>
                                <th></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('se')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="seAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>The device itself</td>
                                <td><input type="checkbox" class="largerCheckbox sese" id="seseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sese" id="seseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sese" id="seseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sese" id="sesealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sese" id="seseall" onchange="checkRow(this.checked, 'sese')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox sere" id="sereprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sere" id="sereloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sere" id="sereope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sere" id="serealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sere" id="sereall" onchange="checkRow(this.checked, ' sere')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox sehv" id="sehvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sehv" id="sehvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sehv" id="sehvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sehv" id="sehvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sehv" id="sehvall" onchange="checkRow(this.checked, 'sehv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox sewm" id="sewmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sewm" id="sewmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sewm" id="sewmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sewm" id="sewmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sewm" id="sewmall" onchange="checkRow(this.checked,  'sewm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox sels" id="selsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sels" id="selsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sels" id="selsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sels" id="selsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sels" id="selsall" onchange="checkRow(this.checked, 'sels')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox sesa" id="sesaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sesa" id="sesaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sesa" id="sesaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sesa" id="sesaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sesa" id="sesaall" onchange="checkRow(this.checked, 'sesa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox setv" id="setvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox setv" id="setvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox setv" id="setvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox setv" id="setvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox setv" id="setvall" onchange="checkRow(this.checked, 'setv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox secl" id="seclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox secl" id="seclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox secl" id="seclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox secl" id="seclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox secl" id="seclall" onchange="checkRow(this.checked, 'secl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox rere" id="rereprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox rere" id="rereloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox rere" id="rereope"/></td>
                                <td><input type="checkbox" class="largerCheckbox rere" id="rerealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox rere" id="rereall" onchange="checkRow(this.checked, 'rere')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox rese" id="reseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox rese" id="reseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox rese" id="reseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox rese" id="resealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox rese" id="reseall" onchange="checkRow(this.checked, ' rese')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox rehv" id="rehvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox rehv" id="rehvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox rehv" id="rehvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox rehv" id="rehvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox rehv" id="rehvall" onchange="checkRow(this.checked, 'rehv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox rewm" id="rewmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox rewm" id="rewmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox rewm" id="rewmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox rewm" id="rewmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox rewm" id="rewmall" onchange="checkRow(this.checked,  'rewm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox rels" id="relsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox rels" id="relsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox rels" id="relsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox rels" id="relsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox rels" id="relsall" onchange="checkRow(this.checked, 'rels')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox resa" id="resaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox resa" id="resaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox resa" id="resaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox resa" id="resaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox resa" id="resaall" onchange="checkRow(this.checked, 'resa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox retv" id="retvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox retv" id="retvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox retv" id="retvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox retv" id="retvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox retv" id="retvall" onchange="checkRow(this.checked, 'retv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox recl" id="reclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox recl" id="reclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox recl" id="reclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox recl" id="reclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox recl" id="reclall" onchange="checkRow(this.checked, 'recl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox hvhv" id="hvhvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvhv" id="hvhvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvhv" id="hvhvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvhv" id="hvhvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvhv" id="hvhvall" onchange="checkRow(this.checked, 'hvhv')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox hvse" id="hvseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvse" id="hvseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvse" id="hvseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvse" id="hvsealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvse" id="hvseall" onchange="checkRow(this.checked, ' hvse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox hvre" id="hvreprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvre" id="hvreloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvre" id="hvreope"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvre" id="hvrealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvre" id="hvreall" onchange="checkRow(this.checked, 'hvre')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox hvwm" id="hvwmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvwm" id="hvwmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvwm" id="hvwmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvwm" id="hvwmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvwm" id="hvwmall" onchange="checkRow(this.checked,  'hvwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox hvls" id="hvlsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvls" id="hvlsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvls" id="hvlsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvls" id="hvlsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvls" id="hvlsall" onchange="checkRow(this.checked, 'hvls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox hvsa" id="hvsaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvsa" id="hvsaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvsa" id="hvsaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvsa" id="hvsaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvsa" id="hvsaall" onchange="checkRow(this.checked, 'hvsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox hvtv" id="hvtvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvtv" id="hvtvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvtv" id="hvtvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvtv" id="hvtvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvtv" id="hvtvall" onchange="checkRow(this.checked, 'hvtv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox hvcl" id="hvclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvcl" id="hvclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvcl" id="hvclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvcl" id="hvclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox hvcl" id="hvclall" onchange="checkRow(this.checked, 'hvcl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox wmwm" id="wmwmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmwm" id="wmwmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmwm" id="wmwmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmwm" id="wmwmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmwm" id="wmwmall" onchange="checkRow(this.checked, 'wmwm')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox wmse" id="wmseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmse" id="wmseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmse" id="wmseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmse" id="wmsealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmse" id="wmseall" onchange="checkRow(this.checked, ' wmse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox wmre" id="wmreprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmre" id="wmreloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmre" id="wmreope"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmre" id="wmrealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmre" id="wmreall" onchange="checkRow(this.checked, 'wmre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><input type="checkbox" class="largerCheckbox wmhv" id="wmhvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmhv" id="wmhvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmhv" id="wmhvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmhv" id="wmhvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmhv" id="wmhvall" onchange="checkRow(this.checked,  'wmhv')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox wmls" id="wmlsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmls" id="wmlsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmls" id="wmlsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmls" id="wmlsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmls" id="wmlsall" onchange="checkRow(this.checked, 'wmls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox wmsa" id="wmsaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmsa" id="wmsaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmsa" id="wmsaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmsa" id="wmsaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmsa" id="wmsaall" onchange="checkRow(this.checked, 'wmsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox wmtv" id="wmtvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmtv" id="wmtvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmtv" id="wmtvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmtv" id="wmtvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmtv" id="wmtvall" onchange="checkRow(this.checked, 'wmtv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox wmcl" id="wmclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmcl" id="wmclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmcl" id="wmclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmcl" id="wmclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox wmcl" id="wmclall" onchange="checkRow(this.checked, 'wmcl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox lsls" id="lslsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsls" id="lslsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsls" id="lslsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsls" id="lslsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsls" id="lslsall" onchange="checkRow(this.checked, 'lsls')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox lsse" id="lsseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsse" id="lsseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsse" id="lsseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsse" id="lssealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsse" id="lsseall" onchange="checkRow(this.checked, ' lsse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox lsre" id="lsreprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsre" id="lsreloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsre" id="lsreope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsre" id="lsrealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lsre" id="lsreall" onchange="checkRow(this.checked, 'lsre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><input type="checkbox" class="largerCheckbox lshv" id="lshvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lshv" id="lshvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lshv" id="lshvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lshv" id="lshvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lshv" id="lshvall" onchange="checkRow(this.checked,  'lshv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox lswm" id="lswmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lswm" id="lswmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lswm" id="lswmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lswm" id="lswmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lswm" id="lswmsall" onchange="checkRow(this.checked, 'lswm')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox lssa" id="lssaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lssa" id="lssaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lssa" id="lssaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lssa" id="lssaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lssa" id="lssaall" onchange="checkRow(this.checked, 'lssa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox lstv" id="lstvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lstv" id="lstvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lstv" id="lstvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lstv" id="lstvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lstv" id="lstvall" onchange="checkRow(this.checked, 'lstv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox lscl" id="lsclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lscl" id="lsclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lscl" id="lsclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lscl" id="lsclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lscl" id="lsclall" onchange="checkRow(this.checked, 'lscl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox sasa" id="sasaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sasa" id="sasaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sasa" id="sasaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sasa" id="sasaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sasa" id="sasaall" onchange="checkRow(this.checked, 'sasa')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox sase" id="saseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sase" id="saseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sase" id="saseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sase" id="sasealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sase" id="saseall" onchange="checkRow(this.checked, ' sase')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox sare" id="sareprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sare" id="sareloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sare" id="sareope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sare" id="sarealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sare" id="sareall" onchange="checkRow(this.checked, 'sare')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><input type="checkbox" class="largerCheckbox sahv" id="sahvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sahv" id="sahvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sahv" id="sahvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sahv" id="sahvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sahv" id="sahvall" onchange="checkRow(this.checked,  'sahv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox sawm" id="sawmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sawm" id="sawmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sawm" id="sawmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sawm" id="sawmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sawm" id="sawmsall" onchange="checkRow(this.checked, 'sawm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox sals" id="salsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sals" id="salsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sals" id="salsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sals" id="salsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sals" id="salsall" onchange="checkRow(this.checked, 'sals')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox satv" id="satvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox satv" id="satvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox satv" id="satvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox satv" id="satvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox satv" id="satvall" onchange="checkRow(this.checked, 'satv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox sacl" id="saclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox sacl" id="saclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox sacl" id="saclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox sacl" id="saclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox sacl" id="saclall" onchange="checkRow(this.checked, 'sacl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox tvtv" id="tvtvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvtv" id="tvtvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvtv" id="tvtvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvtv" id="tvtvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvtv" id="tvtvall" onchange="checkRow(this.checked, 'tvtv')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox tvse" id="tvseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvse" id="tvseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvse" id="tvseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvse" id="tvsealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvse" id="tvseall" onchange="checkRow(this.checked, ' tvse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox tvre" id="tvreprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvre" id="tvreloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvre" id="tvreope"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvre" id="tvrealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvre" id="tvreall" onchange="checkRow(this.checked, 'tvre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><input type="checkbox" class="largerCheckbox tvhv" id="tvhvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvhv" id="tvhvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvhv" id="tvhvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvhv" id="tvhvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvhv" id="tvhvall" onchange="checkRow(this.checked,  'tvhv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox tvwm" id="tvwmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvwm" id="tvwmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvwm" id="tvwmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvwm" id="tvwmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvwm" id="tvwmsall" onchange="checkRow(this.checked, 'tvwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox tvls" id="tvlsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvls" id="tvlsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvls" id="tvlsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvls" id="tvlsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvls" id="tvlsall" onchange="checkRow(this.checked, 'tvls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox tvsa" id="tvsaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvsa" id="tvsaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvsa" id="tvsaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvsa" id="tvsaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvsa" id="tvsaall" onchange="checkRow(this.checked, 'tvsa')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox tvcl" id="tvclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvcl" id="tvclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvcl" id="tvclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvcl" id="tvclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox tvcl" id="tvclall" onchange="checkRow(this.checked, 'tvcl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox clcl" id="clclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox clcl" id="clclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox clcl" id="clclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox clcl" id="clclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox clcl" id="clclall" onchange="checkRow(this.checked, 'clcl')"/></td>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox clse" id="clseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox clse" id="clseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox clse" id="clseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox clse" id="clsealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox clse" id="clseall" onchange="checkRow(this.checked, ' clse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox clre" id="clreprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox clre" id="clreloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox clre" id="clreope"/></td>
                                <td><input type="checkbox" class="largerCheckbox clre" id="clrealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox clre" id="clreall" onchange="checkRow(this.checked, 'clre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><input type="checkbox" class="largerCheckbox clhv" id="clhvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox clhv" id="clhvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox clhv" id="clhvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox clhv" id="clhvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox clhv" id="clhvall" onchange="checkRow(this.checked,  'clhv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox clwm" id="clwmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox clwm" id="clwmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox clwm" id="clwmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox clwm" id="clwmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox clwm" id="clwmsall" onchange="checkRow(this.checked, 'clwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox clls" id="cllsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox clls" id="cllsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox clls" id="cllsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox clls" id="cllsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox clls" id="cllsall" onchange="checkRow(this.checked, 'clls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox clsa" id="clsaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox clsa" id="clsaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox clsa" id="clsaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox clsa" id="clsaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox clsa" id="clsaall" onchange="checkRow(this.checked, 'clsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox cltv" id="cltvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox cltv" id="cltvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox cltv" id="cltvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox cltv" id="cltvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox cltv" id="cltvall" onchange="checkRow(this.checked, 'cltv')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox lose" id="loseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lose" id="loseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lose" id="loseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lose" id="losealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lose" id="loseall" onchange="checkRow(this.checked, ' lose')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox lore" id="loreprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lore" id="loreloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lore" id="loreope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lore" id="lorealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lore" id="loreall" onchange="checkRow(this.checked, 'lore')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><input type="checkbox" class="largerCheckbox lohv" id="lohvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lohv" id="lohvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lohv" id="lohvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lohv" id="lohvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lohv" id="lohvall" onchange="checkRow(this.checked,  'lohv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox lowm" id="lowmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lowm" id="lowmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lowm" id="lowmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lowm" id="lowmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lowm" id="lowmsall" onchange="checkRow(this.checked, 'lowm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox lols" id="lolsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lols" id="lolsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lols" id="lolsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lols" id="lolsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lols" id="lolsall" onchange="checkRow(this.checked, 'lols')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox losa" id="losaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox losa" id="losaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox losa" id="losaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox losa" id="losaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox losa" id="losaall" onchange="checkRow(this.checked, 'losa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox lotv" id="lotvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox lotv" id="lotvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox lotv" id="lotvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox lotv" id="lotvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox lotv" id="lotvall" onchange="checkRow(this.checked, 'lotv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox locl" id="loclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox locl" id="loclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox locl" id="loclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox locl" id="loclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox locl" id="loclall" onchange="checkRow(this.checked, 'locl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox case" id="caseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox case" id="caseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox case" id="caseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox case" id="casealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox case" id="caseall" onchange="checkRow(this.checked, ' case')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox care" id="careprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox care" id="careloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox care" id="careope"/></td>
                                <td><input type="checkbox" class="largerCheckbox care" id="carealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox care" id="careall" onchange="checkRow(this.checked, 'care')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><input type="checkbox" class="largerCheckbox cahv" id="cahvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox cahv" id="cahvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox cahv" id="cahvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox cahv" id="cahvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox cahv" id="cahvall" onchange="checkRow(this.checked,  'cahv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox cawm" id="cawmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox cawm" id="cawmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox cawm" id="cawmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox cawm" id="cawmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox cawm" id="cawmsall" onchange="checkRow(this.checked, 'cawm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox cals" id="calsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox cals" id="calsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox cals" id="calsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox cals" id="calsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox cals" id="calsall" onchange="checkRow(this.checked, 'cals')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox casa" id="casaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox casa" id="casaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox casa" id="casaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox casa" id="casaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox casa" id="casaall" onchange="checkRow(this.checked, 'casa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox catv" id="catvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox catv" id="catvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox catv" id="catvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox catv" id="catvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox catv" id="catvall" onchange="checkRow(this.checked, 'catv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox cacl" id="caclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox cacl" id="caclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox cacl" id="caclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox cacl" id="caclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox cacl" id="caclall" onchange="checkRow(this.checked, 'cacl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox mpse" id="mpseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpse" id="mpseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpse" id="mpseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpse" id="mpsealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpse" id="mpseall" onchange="checkRow(this.checked, ' mpse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox mpre" id="mpreprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpre" id="mpreloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpre" id="mpreope"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpre" id="mprealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpre" id="mpreall" onchange="checkRow(this.checked, 'mpre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><input type="checkbox" class="largerCheckbox mphv" id="mphvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox mphv" id="mphvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox mphv" id="mphvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox mphv" id="mphvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox mphv" id="mphvall" onchange="checkRow(this.checked,  'mphv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox mpwm" id="mpwmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpwm" id="mpwmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpwm" id="mpwmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpwm" id="mpwmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpwm" id="mpwmsall" onchange="checkRow(this.checked, 'mpwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox mpls" id="mplsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpls" id="mplsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpls" id="mplsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpls" id="mplsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpls" id="mplsall" onchange="checkRow(this.checked, 'mpls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox mpsa" id="mpsaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpsa" id="mpsaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpsa" id="mpsaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpsa" id="mpsaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpsa" id="mpsaall" onchange="checkRow(this.checked, 'mpsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox mptv" id="mptvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox mptv" id="mptvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox mptv" id="mptvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox mptv" id="mptvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox mptv" id="mptvall" onchange="checkRow(this.checked, 'mptv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox mpcl" id="mpclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpcl" id="mpclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpcl" id="mpclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpcl" id="mpclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox mpcl" id="mpclall" onchange="checkRow(this.checked, 'mpcl')"/></td>
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
                                <td><input type="checkbox" class="largerCheckbox swse" id="swseprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox swse" id="swseloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox swse" id="swseope"/></td>
                                <td><input type="checkbox" class="largerCheckbox swse" id="swsealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox swse" id="swseall" onchange="checkRow(this.checked, ' swse')"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox swre" id="swreprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox swre" id="swreloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox swre" id="swreope"/></td>
                                <td><input type="checkbox" class="largerCheckbox swre" id="swrealm"/></td>
                                <td><input type="checkbox" class="largerCheckbox swre" id="swreall" onchange="checkRow(this.checked, 'swre')"/></td>
                            </tr>
                            <tr>
                                <td>HVAC</td>
                                <td><input type="checkbox" class="largerCheckbox swhv" id="swhvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox swhv" id="swhvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox swhv" id="swhvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox swhv" id="swhvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox swhv" id="swhvall" onchange="checkRow(this.checked,  'swhv')"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox swwm" id="swwmprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox swwm" id="swwmloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox swwm" id="swwmope"/></td>
                                <td><input type="checkbox" class="largerCheckbox swwm" id="swwmalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox swwm" id="swwmsall" onchange="checkRow(this.checked, 'swwm')"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox swls" id="swlsprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox swls" id="swlsloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox swls" id="swlsope"/></td>
                                <td><input type="checkbox" class="largerCheckbox swls" id="swlsalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox swls" id="swlsall" onchange="checkRow(this.checked, 'swls')"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox swsa" id="swsaprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox swsa" id="swsaloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox swsa" id="swsaope"/></td>
                                <td><input type="checkbox" class="largerCheckbox swsa" id="swsaalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox swsa" id="swsaall" onchange="checkRow(this.checked, 'swsa')"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox swtv" id="swtvprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox swtv" id="swtvloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox swtv" id="swtvope"/></td>
                                <td><input type="checkbox" class="largerCheckbox swtv" id="swtvalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox swtv" id="swtvall" onchange="checkRow(this.checked, 'swtv')"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox swcl" id="swclprs"/></td>
                                <td><input type="checkbox" class="largerCheckbox swcl" id="swclloc"/></td>
                                <td><input type="checkbox" class="largerCheckbox swcl" id="swclope"/></td>
                                <td><input type="checkbox" class="largerCheckbox swcl" id="swclalm"/></td>
                                <td><input type="checkbox" class="largerCheckbox swcl" id="swclall" onchange="checkRow(this.checked, 'swcl')"/></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:10px;margin-left: -22px;" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';">Save</button></div>
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
