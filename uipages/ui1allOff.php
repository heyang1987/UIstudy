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
                <p>Household IoT Privacy Settings</p>
            </div>

            <div class="settings">

                <div class="uifixtext">
                    <h3>Device and Sensor Management</h3>
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>
                
                <div class="menu" onclick=document.getElementById('introui').style.display='none';document.getElementById('dsmui').style.display='block';currentMenu='se'>
                    Device / Sensor Management<img src="images/righarrow.png" style="height:20px;float:right;">
                </div>

                <div class="uifixtext" style="margin-top:40px;">
                    <h3>Data Usage</h3>
                    Manage long-term use of data collected in your home.
                </div>
                
                <div class="menu" onclick=document.getElementById('introui').style.display='none';document.getElementById('dusgui').style.display='block';currentMenu='se'>
                    Data Usage<img src="images/righarrow.png" style="height:20px;float:right;">
                </div>
            </div>
        </div>

        <div id="dsmui" style="display: none">
			<div class="title">
				<p>Device/Sensor Management</p>
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
                            <img src="images/righarrow.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="se" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>


                    <div class="narrowmenu" onclick="dropdownFunction('re')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img src="images/righarrow.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="re" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('hv')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img src="images/righarrow.png" style="height:18px;float:right;">
                        </div>
                    </div>

                    <div id="hv" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('wa')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washing Machine
                            <img src="images/righarrow.png" style="height:18px;float:right;">
                        </div></div>

                    <div id="wa" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('li')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">Lighting System<img src="images/righarrow.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="li" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('as')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">Smart Assistant<img src="images/righarrow.png" style="height:18px;float:right;"></div>
                    </div>

                    <div id="as" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>

                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('tv')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">Smart TV<img src="images/righarrow.png" style="height:18px;float:right;"></div></div>

                    <div id="tv" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alarm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('al')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">Alarm<img src="images/righarrow.png" style="height:18px;float:right;"></div></div>

                    <div id="al" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alarm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('lo')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">Location Sensor<img src="images/righarrow.png" style="height:18px;float:right;"></div></div>

                    <div id="lo" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alarm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('ca')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">Camera<img src="images/righarrow.png" style="height:18px;float:right;"></div></div>

                    <div id="ca" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alarm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" onclick="dropdownFunction('mp')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">Microphone<img src="images/righarrow.png" style="height:18px;float:right;"></div></div>

                    <div id="mp" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alarm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="narrowmenu" style="border-bottom: 1px solid grey" onclick="dropdownFunction('sw')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">Smart Phone/Watch<img src="images/righarrow.png" style="height:18px;float:right;"></div></div>

                    <div id="sw" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>prs</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alarm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                                <td><input type="checkbox" class="largerCheckbox"/></td>
                            </tr>
                        </table>
                    </div>

                    <div><button class="button middle" style="top:10px;" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';">Save</button></div>
                </div>

			</div>

		</div>

        <div id="dusgui" style="display: none">
            <div class="title">
                <p>Data Storage and Usage</p>
            </div>
            <div class="settings">
                <div class="uifixtext">
                    <h3>Storage and Sharing</h3>
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
                    <h3>Data Usage</h3>
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
