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
        
        <div id="storagesharing">
            <div class="title">
                <div style="text-align: center;margin-top:16px;">Household IoT Privacy Settings</div>
            </div>
            
            <div class="settings">
                <div class="uifixtext">
                    <p style="font-size: 22px"><strong>Storage and Sharing</strong></p>
                    <p style="font-size: 14px;margin-top: -10px;">Control the extent of sharing of the information collected by different devices in your smart home.</p>
                </div>
<!--
                <div class="storage" style="top:120px" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('introuiLS').style.display='block';currentMenu='seLS'">
                    <p><span>&nbsp;&nbsp;Local Storage &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="font-size: 12px;color:#0645AD"><strong>More &gt;</strong></span></p>
                </div>
-->
                <div class="menu" style="margin-top: 0px;" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('introuiLS').style.display='block';currentMenu='seLS'">
                    <strong>Local Storage </strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="menu" style="margin-top: 30px;" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('introuiRS').style.display='block';currentMenu='seRS'">
                    <strong>Remote Server </strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="menu" style="margin-top: 30px;" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('introuiTP').style.display='block';currentMenu='seTP'">
                    <strong>Third Party Sharing </strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
            </div>
        </div>
        
        <div id="introuiTP" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('introuiTP').style.display='none';document.getElementById('storagesharing').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Privacy Settings</strong></span></p>
            </div>
                        
            <div class="settings">
                <span style="font-size:14px;text-align: center;">For <strong>Third Party</strong>, manage information collection by devices or data usage</span>

                <!-- Device/Sensor Management -->
                <div class="dsmbox" onclick=document.getElementById('introuiTP').style.display='none';document.getElementById('dsmuiTP').style.display='block';>
                    <p style="font-size:21px;"><strong>Device / Sensor Management</strong></p>
                    Manage Device access to data collected in your home
                </div>
                <!-- Data Usage Management -->
                <div class="dumbox" onclick=document.getElementById('introuiTP').style.display='none';document.getElementById('dusguiTP').style.display='block';>
                    <p style="font-size:22px"><strong>Data Usage</strong></p>
                    Manage long-term use of data collected in your home
                </div>
            </div>
        </div>
        
        <div id="introuiRS" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('introuiRS').style.display='none';document.getElementById('storagesharing').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Privacy Settings</strong></span></p>
            </div>
                        
            <div class="settings">
                <span style="font-size:14px;text-align: center;">For <strong>Remote Server</strong>, manage information collection by devices or data usage</span>

                <!-- Device/Sensor Management -->
                <div class="dsmbox" onclick=document.getElementById('introuiRS').style.display='none';document.getElementById('dsmuiRS').style.display='block';>
                    <p style="font-size:21px;"><strong>Device / Sensor Management</strong></p>
                    Manage Device access to data collected in your home
                </div>
                <!-- Data Usage Management -->
                <div class="dumbox" onclick=document.getElementById('introuiRS').style.display='none';document.getElementById('dusguiRS').style.display='block';>
                    <p style="font-size:22px"><strong>Data Usage</strong></p>
                    Manage long-term use of data collected in your home
                </div>
            </div>
        </div>
        
        <div id="introuiLS" style="display: none">
<!--
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('introuiLS').style.display='none';document.getElementById('storagesharing').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Privacy Settings</strong></span></p>
            </div>
-->
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('introuiLS').style.display='none';document.getElementById('storagesharing').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Privacy Settings for Local Storage</div>
			</div>
                        
            <div class="settings">
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('introuiLS').style.display='none';document.getElementById('dsmuiLS').style.display='block';currentMenu='se'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>

                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('introuiLS').style.display='none';document.getElementById('dusguiLS').style.display='block';currentMenu='se'>
                    <strong>Data Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
            </div>
        </div>
        
        <div id="dsmuiTP" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dsmuiTP').style.display='none';document.getElementById('introuiTP').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Device/Sensor Management</strong></span></p>
            </div>
            <div class="settingsWithScroll">
                <p style="font-size:12px;line-height:15px;">Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a></p>

                <div class="devicecontainer">
     
                    <div class="dev" onclick="dropdownFunction('seTP')">    
                        &nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="arrowdown"/>
                    </div>
                    <div id="seTP" class="dropdown" style="display: block">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                                            
               
                    <div class="dev" onclick="dropdownFunction('reTP')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="reTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('hvTP')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="hvTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('waTP')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="waTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('liTP')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="liTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('asTP')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="asTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('tvTP')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="tvTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('alTP')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="alTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('loTP')">&nbsp;&nbsp;Location Sensor<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="loTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('caTP')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="caTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('mpTP')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="mpTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('swTP')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="swTP" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div><button style="position: relative;top:20px;left:120px;">Done!</button></div>

                </div>
            </div>
        </div>
        
        <div id="dsmuiRS" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dsmuiRS').style.display='none';document.getElementById('introuiRS').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Device/Sensor Management</strong></span></p>
            </div>
            <div class="settingsWithScroll">
                <p style="font-size:12px;line-height:15px;">Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a></p>

                <div class="devicecontainer">
     
                    <div class="dev" onclick="dropdownFunction('seRS')">    
                        &nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="arrowdown"/>
                    </div>
                    <div id="seRS" class="dropdown" style="display: block">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                                            
               
                    <div class="dev" onclick="dropdownFunction('reRS')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="reRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('hvRS')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="hvRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('waRS')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="waRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('liRS')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="liRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('asRS')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="asRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('tvRS')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="tvRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('alRS')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="alRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('loRS')">&nbsp;&nbsp;Location Sensor<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="loRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('caRS')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="caRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('mpRS')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="mpRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('swRS')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="swRS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div><button style="position: relative;top:20px;left:120px;">Done!</button></div>

                </div>
            </div>
        </div>
        
        <div id="dsmuiLS" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('dsmuiLS').style.display='none';document.getElementById('introuiLS').style.display='block';"></button>
				<div style="float:left;margin-left:10px;margin-top:16px;">Device/Sensor Management</div>
            </div>
            <div class="settingsWithScroll">
                <div class="uifixtext">
                    Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a>
                </div>

                <div class="devicecontainer">
     
                    <div class="narrowmenu" onclick="dropdownFunction('seLS')">
                        <div class="narrowmenuicon"><img src="../icons/1.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Home Security System
                            <img id="seLSArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    <div id="seLS" class="dropdown" style="display: none">
                        <div style="padding:10px 10px;font-weight:bold"></div>
                        <table class="table" id="sedataLS">
                            <tr>
                                <th><strong>Data from Home Security System can be used by</strong></th>
                                <th><div class="tooltip"><img src="../icons/001.png" style="width:25px;height:25px;"><span class="tooltiptext">detect whether you are home</span></div></th>
                                <th><div class="tooltip"><img src="../icons/002.png" style="width:25px;height:25px;"><span class="tooltiptext">detect your location in house</span></div></th>
                                <th><div class="tooltip"><img src="../icons/003.png" style="width:25px;height:25px;"><span class="tooltiptext">automate its operation</span></div></th>
                                <th><div class="tooltip"><img src="../icons/004.png" style="width:25px;height:25px;"><span class="tooltiptext">give you timely alarm</span></div></th>
                                <th><div class="tooltip" onclick="checkAll('se')"><button class="button" style="width:35px;font-size:12px;padding:5px 1px" id="seAllButton">All</button><span class="tooltiptext">allow/disallow all four purposes</span></div></th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                                            
               
                    <div class="narrowmenu" onclick="dropdownFunction('reLS')">
                        <div class="narrowmenuicon"><img src="../icons/2.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Refrigerator
                            <img id="reArrowLS" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="reLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('hvLS')">
                        <div class="narrowmenuicon"><img src="../icons/3.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            HVAC
                            <img id="hvArrowLS" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="hvLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('hvLS')">
                        <div class="narrowmenuicon"><img src="../icons/4.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Washing Machine
                            <img id="waArrowLS" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="waLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('hvLS')">
                        <div class="narrowmenuicon"><img src="../icons/5.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Lighting System
                            <img id="liArrowLS" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="liLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('hvLS')">
                        <div class="narrowmenuicon"><img src="../icons/6.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Smart Assistant
                            <img id="asArrowLS" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="asLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('hvLS')">
                        <div class="narrowmenuicon"><img src="../icons/7.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Smart TV
                            <img id="tvArrowLS" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="tvLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('hvLS')">
                        <div class="narrowmenuicon"><img src="../icons/8.png" style="width:25px;height:25px;float:left"></div>
                        <div class="narrowmenutext">
                            Alarm
                            <img id="alArrowLS" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="alLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('loLS')" style="margin-top:20px;">
                        <div class="narrowmenuicon"><img src="../icons/9.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Location Sensor
                            <img id="loArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="loLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('caLS')">
                        <div class="narrowmenuicon"><img src="../icons/10.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Camera
                            <img id="caArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="caLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('mpLS')">
                        <div class="narrowmenuicon"><img src="../icons/11.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Microphone
                            <img id="mpArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="mpLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="narrowmenu" onclick="dropdownFunction('swLS')">
                        <div class="narrowmenuicon"><img src="../icons/12.png" style="width:25px;height:25px;float:left;"></div>
                        <div class="narrowmenutext">
                            Smart Phone/Watch
                            <img id="swArrow" src="../images/arrowright.png" style="height:18px;float:right;">
                        </div>
                    </div>
                    
                    <div id="swLS" class="dropdown" style="display: none">
                        <table class="table" id="microphoneData">
                            <tr>
                                <th></th>
                                <th>Pres</th>
                                <th>Loc</th>
                                <th>Opt</th>
                                <th>Alm</th>
                            </tr>
                            <tr>
                                <td>Home Security System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                                <td><input type="checkbox" /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div><button class="button middle" style="top:10px;margin-left: -22px;" onclick="document.getElementById('dsmuiLS').style.display='none';document.getElementById('introuiLS').style.display='block';closeLeftDropdown();">Save</button></div>

                </div>
            </div>
        </div>
        
        <div id="dusguiTP"  style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dusguiTP').style.display='none';document.getElementById('introuiTP').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="align-content: center"><strong>Data Storage & Use</strong></span></p>
            </div>
            <div class="settings">
                <div style="margin-top:-10px">
                    <p style="font-size: 24px"><strong>Data Use</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">For <strong>Third Party</strong>, manage what happens with the shared information</p>
                </div>
                <div style="margin-top: -5px">    
                    Optimize Services<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                    Behavioral Insights<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                    Recommendation<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                    Other users<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                </div>
            </div>
        </div>
        
        <div id="dusguiRS"  style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dusguiRS').style.display='none';document.getElementById('introuiRS').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="align-content: center"><strong>Data Storage & Use</strong></span></p>
            </div>
            <div class="settings">
                <div style="margin-top:-10px">
                    <p style="font-size: 24px"><strong>Data Use</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">For <strong>Remote Server</strong>, manage what happens with the shared information</p>
                </div>
                <div style="margin-top: -5px">    
                    Optimize Services<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                    Behavioral Insights<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                    Recommendation<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                    Other users<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                </div>
            </div>
        </div>
        
        <div id="dusguiLS"  style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dusguiLS').style.display='none';document.getElementById('introuiLS').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="align-content: center"><strong>Data Storage & Use</strong></span></p>
            </div>
            <div class="settings">
                <div style="margin-top:-10px">
                    <p style="font-size: 24px"><strong>Data Use</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">For <strong>Local Storage</strong>, manage what happens with the shared information</p>
                </div>
                <div style="margin-top: -5px">    
                    Optimize Services<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                    Behavioral Insights<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                    Recommendation<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                    Other users<label class="switch"><input type="checkbox"><span class="slider round"></span></label><hr>
                </div>
            </div>
        </div>
        
    </div>
    <div id="continue" class="rightDiv">
        <font size="5">When you are done playing with these privacy settings, please click on the following button to answer a few questions about your experience using the system.</font><br/><br/>
        <button id="uifinishedbutton" class="uiFinishButton">Continue</button>
    </div>
</body>
</html>

