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
        
        <div id="profileSelect" style="display: block">
            <div class="title">
                <div style="text-align: center;margin-top:16px;">Household IoT Privacy Settings</div>
            </div>
            
            <div class="settings">
                <div class="uifixtext">
                    <p><strong>Please read the description of the following privacy-setting profiles and select a profile that matches your privacy preference as much as possible. You can change individual settings in the profile on the next screen.</strong></p>
                </div>
                
<!--
                <div class="profile" style="top:90px;height:80px;background-color: green" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiEA').style.display='block';currentMenu='seEA'">
                    <div style="padding-top:10px">&nbsp;&nbsp;<strong>Enable All</strong></div>
                    <div style="position:relative;left:10px;width:250px;font-size:12px">Allow data to be collected, used, storaged and shared without restrictions.</div>                    
                </div>
                <div class="profile" style="top:170px;height:90px;background-color: lightgreen" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiNS').style.display='block';currentMenu='seNS'">
                    <div style="padding-top:5px">&nbsp;&nbsp;<strong>No Sharing</strong></div>
                    <div style="position:relative;left:10px;width:250px;font-size:12px">Allow data to be collected, used, and stored without restrictions but disable third party sharing.</div>
                </div>
                <div class="profile" style="top:260px;height:90px;background-color: lightyellow" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiLS').style.display='block';currentMenu='seLS'">
                    <div style="padding-top:5px">&nbsp;&nbsp;<strong>Local Storage Only</strong></div>
                    <div style="position:relative;left:10px;width:250px;font-size:12px">Allow data to be collected and used without restrictions but disable remote storage and third party sharing</div>
                </div>
                <div class="profile" style="top:350px;height:100px;background-color: lightblue" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiNT').style.display='block';currentMenu='seNT'">
                    <div style="padding-top:10px">&nbsp;&nbsp;<strong>No Tracking</strong></div>
                    <div style="position:relative;left:10px;width:250px;font-size:12px">Allow all, except location and presence tracking data, to be collected, used, and shared without restrictions.</div>
                </div>
                <div class="profile" style="top:450px;height:80px;background-color: pink" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiDA').style.display='block';currentMenu='seDA'">
                    <div style="padding-top:10px">&nbsp;&nbsp;<strong>Disable All</strong></div>
                    <div style="position:relative;left:10px;width:250px;font-size:12px">Turn off all smart home functionalities.</div>
                </div>                                
-->
                <div class="inputGroup">
                    <input id="profile1" name="radio" type="radio"/>
                    <label for="profile1" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiEA').style.display='block';currentMenu='seEA'">Enable All
                    <div style="position:relative;left:10px;width:270px;font-size:12px">Allow data to be collected, used, storaged and shared without restrictions.</div></label>
                </div>
                <div class="inputGroup">
                    <input id="profile2" name="radio" type="radio"/>
                    <label for="profile2" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiNS').style.display='block';currentMenu='seNS'">No Sharing
                    <div style="position:relative;left:10px;width:270px;font-size:12px">Allow data to be collected, used, and stored without restrictions but disable third party sharing.</div></label>
                </div>
                <div class="inputGroup">
                    <input id="profile3" name="radio" type="radio"/>
                    <label for="profile3" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiLS').style.display='block';currentMenu='seLS'">Local Storage Only
                    <div style="position:relative;left:10px;width:280px;font-size:12px">Allow data to be collected and used without restrictions but disable remote storage and third party sharing</div>
                    </label>
                </div>
                <div class="inputGroup">
                    <input id="profile4" name="radio" type="radio"/>
                    <label for="profile4" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiNT').style.display='block';currentMenu='seNT'">No Tracking
                    <div style="position:relative;left:10px;width:250px;font-size:12px">Allow all, except location and presence tracking data, to be collected, used, and shared without restrictions.</div>
                    </label>
                </div>
                <div class="inputGroup">
                    <input id="profile5" name="radio" type="radio"/>
                    <label for="profile5" onclick="document.getElementById('profileSelect').style.display='none';document.getElementById('introuiDA').style.display='block';currentMenu='seDA'">Disable All
                    <div style="position:relative;left:10px;width:250px;font-size:12px">Do not allow any data storage and sharing. Turn off all smart home functionalities.</div>
                    </label>
                </div>
            </div>
        </div>
        
        <div id="introuiEA" style="display: none">
            <div class="title">
                <button class="homebutton" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';closeLeftDropdown();"></button>
                <div style="float:left;margin-left:10px;margin-top:16px;">Household IoT Privacy Settings</div>
            </div>
                        
            <div class="settings">
                <div class="uifixtext" style="margin-top: 10px;">
                    For <strong>Enable All</strong> profile, manage information collection by devices or data usage
                </div>

                <!-- Device/Sensor Management -->
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('introuiEA').style.display='none';document.getElementById('dsmuiEA').style.display='block';currentMenu='seEA'>
                    <strong>Device and Sensor Management</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top: 10px;">
                    Manage IoT device access to the data collected by other IoT devices in your home.
                </div>
                <!-- Data Usage Management -->
                <div class="menu" style="margin-top: 30px;" onclick=document.getElementById('introuiEA').style.display='none';document.getElementById('dusguiEA').style.display='block';currentMenu='seEA'>
                    <strong>Data Usage</strong><img src="../images/arrowright.png" style="height:20px;float:right;">
                </div>
                <div class="uifixtext" style="margin-top:10px;">
                    Manage long-term use of data collected in your home.
                </div>
            </div>
        </div>
        
        <div id="introuiNS" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('introuiNS').style.display='none';document.getElementById('profileSelect').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Privacy Settings</strong></span></p>
            </div>
                        
            <div class="settings">
                <span style="font-size:14px;text-align: center;">For <strong>No Sharing</strong> profile, manage information collection by devices or data usage</span>

                <!-- Device/Sensor Management -->
                <div class="dsmbox" onclick=document.getElementById('introuiNS').style.display='none';document.getElementById('dsmuiNS').style.display='block';>
                    <p style="font-size:21px;"><strong>Device / Sensor Management</strong></p>
                    Manage Device access to data collected in your home
                </div>
                <!-- Data Usage Management -->
                <div class="dumbox" onclick=document.getElementById('introuiNS').style.display='none';document.getElementById('dusguiNS').style.display='block';>
                    <p style="font-size:22px"><strong>Data Usage</strong></p>
                    Manage long-term use of data collected in your home
                </div>
            </div>
        </div>
        
        <div id="introuiLS" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('introuiLS').style.display='none';document.getElementById('profileSelect').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Privacy Settings</strong></span></p>
            </div>
                        
            <div class="settings">
                <span style="font-size:14px;text-align: center;">For <strong>Local Storage Only</strong> profile, manage information collection by devices or data usage</span>

                <!-- Device/Sensor Management -->
                <div class="dsmbox" onclick=document.getElementById('introuiLS').style.display='none';document.getElementById('dsmuiLS').style.display='block';>
                    <p style="font-size:21px;"><strong>Device / Sensor Management</strong></p>
                    Manage Device access to data collected in your home
                </div>
                <!-- Data Usage Management -->
                <div class="dumbox" onclick=document.getElementById('introuiLS').style.display='none';document.getElementById('dusguiLS').style.display='block';>
                    <p style="font-size:22px"><strong>Data Usage</strong></p>
                    Manage long-term use of data collected in your home
                </div>
            </div>
        </div>
		
		<div id="introuiNT" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('introuiNT').style.display='none';document.getElementById('profileSelect').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Privacy Settings</strong></span></p>
            </div>
                        
            <div class="settings">
                <span style="font-size:14px;text-align: center;">For <strong>No Tracking</strong> profile, manage information collection by devices or data usage</span>

                <!-- Device/Sensor Management -->
                <div class="dsmbox" onclick=document.getElementById('introuiNT').style.display='none';document.getElementById('dsmuiNT').style.display='block';>
                    <p style="font-size:21px;"><strong>Device / Sensor Management</strong></p>
                    Manage Device access to data collected in your home
                </div>
                <!-- Data Usage Management -->
                <div class="dumbox" onclick=document.getElementById('introuiNT').style.display='none';document.getElementById('dusguiNT').style.display='block';>
                    <p style="font-size:22px"><strong>Data Usage</strong></p>
                    Manage long-term use of data collected in your home
                </div>
            </div>
        </div>
		
		<div id="introuiDA" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('introuiDA').style.display='none';document.getElementById('profileSelect').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Privacy Settings</strong></span></p>
            </div>
                        
            <div class="settings">
                <span style="font-size:14px;text-align: center;">For <strong>Disable All</strong> profile, manage information collection by devices or data usage</span>

                <!-- Device/Sensor Management -->
                <div class="dsmbox" onclick=document.getElementById('introuiDA').style.display='none';document.getElementById('dsmuiDA').style.display='block';>
                    <p style="font-size:21px;"><strong>Device / Sensor Management</strong></p>
                    Manage Device access to data collected in your home
                </div>
                <!-- Data Usage Management -->
                <div class="dumbox" onclick=document.getElementById('introuiDA').style.display='none';document.getElementById('dusguiDA').style.display='block';>
                    <p style="font-size:22px"><strong>Data Usage</strong></p>
                    Manage long-term use of data collected in your home
                </div>
            </div>
        </div>
        
        <div id="dsmuiEA" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dsmuiEA').style.display='none';document.getElementById('introuiEA').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Device/Sensor Management</strong></span></p>
            </div>
            <div class="settingsWithScroll">
                <p style="font-size:12px;line-height:15px;">Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a></p>

                <div class="devicecontainer">
     
                    <div class="dev" onclick="dropdownFunction('seEA')">    
                        &nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="arrowdown"/>
                    </div>
                    <div id="seEA" class="dropdown" style="display: block">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                                            
               
                    <div class="dev" onclick="dropdownFunction('reEA')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="reEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('hvEA')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="hvEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('waEA')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="waEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('liEA')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="liEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('asEA')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="asEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('tvEA')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="tvEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('alEA')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="alEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('loEA')">&nbsp;&nbsp;Location Sensor<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="loEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('caEA')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="caEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('mpEA')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="mpEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('swEA')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="swEA" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div><button style="position: relative;top:20px;left:120px;">Done!</button></div>

                </div>
            </div>
        </div>
        
        <div id="dsmuiNS" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dsmuiNS').style.display='none';document.getElementById('introuiNS').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Device/Sensor Management</strong></span></p>
            </div>
            <div class="settingsWithScroll">
                <p style="font-size:12px;line-height:15px;">Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a></p>

                <div class="devicecontainer">
     
                    <div class="dev" onclick="dropdownFunction('seNS')">    
                        &nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="arrowdown"/>
                    </div>
                    <div id="seNS" class="dropdown" style="display: block">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                                            
               
                    <div class="dev" onclick="dropdownFunction('reNS')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="reNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('hvNS')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="hvNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('waNS')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="waNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('liNS')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="liNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('asNS')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="asNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('tvNS')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="tvNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('alNS')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="alNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('loNS')">&nbsp;&nbsp;Location Sensor<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="loNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('caNS')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="caNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('mpNS')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="mpNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('swNS')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
                    <div id="swNS" class="dropdown" style="display: none">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div><button style="position: relative;top:20px;left:120px;">Done!</button></div>

                </div>
            </div>
        </div>
        
        <div id="dsmuiLS" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dsmuiLS').style.display='none';document.getElementById('introuiLS').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Device/Sensor Management</strong></span></p>
            </div>
            <div class="settingsWithScroll">
                <p style="font-size:12px;line-height:15px;">Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a></p>

                <div class="devicecontainer">
     
                    <div class="dev" onclick="dropdownFunction('seLS')">    
                        &nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="arrowdown"/>
                    </div>
                    <div id="seLS" class="dropdown" style="display: block">
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                                            
               
                    <div class="dev" onclick="dropdownFunction('reLS')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('hvLS')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('waLS')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('liLS')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('asLS')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>

                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('tvLS')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('alLS')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('loLS')">&nbsp;&nbsp;Location Sensor<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('caLS')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('mpLS')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('swLS')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="arrowdown"/></div>
                    
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
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                                <td><input type="checkbox" checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div><button style="position: relative;top:20px;left:120px;">Done!</button></div>

                </div>
            </div>
        </div>
        
        <div id="dusguiEA"  style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dusguiEA').style.display='none';document.getElementById('introuiEA').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="align-content: center"><strong>Data Storage & Use</strong></span></p>
            </div>
            <div class="settings">
                <div style="margin-top:-10px">
                    <p style="font-size: 24px"><strong>Data Use</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">Control the extent of sharing of the information collected by different devices in your smart home.</p>
                </div>
                <div id="storageChkBox" style="margin-top: -5px">
					<div class="inputGroup">
						<input id="radio1" name="radio" type="radio"/>
						<label for="radio1">No Storage</label>
					</div><hr>
					<div class="inputGroup">
						<input id="radio2" name="radio" type="radio"/>
						<label for="radio2">Local Only</label>
					</div><hr>
					<div class="inputGroup">
						<input id="radio3" name="radio" type="radio"/>
						<label for="radio3">Local + Remote Server</label>
					</div><hr>
					<div class="inputGroup">
						<input id="radio4" name="radio" type="radio" checked/>
						<label for="radio4">Local + Third Party Sharing</label>
					</div><hr>
                </div>
                <div style="margin-top:-10px">
                    <p style="font-size: 24px"><strong>Data Use</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">Manage what happens with the shared information</p>
                </div>
                <div style="margin-top: -5px">    
                    Optimize Services<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                    Behavioral Insights<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                    Recommendation<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                    Other users<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                </div>
            </div>
        </div>
        
        <div id="dusguiNS"  style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dusguiNS').style.display='none';document.getElementById('introuiNS').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="align-content: center"><strong>Data Storage & Use</strong></span></p>
            </div>
            <div class="settings">
                <div style="margin-top:-10px">
                    <p style="font-size: 24px"><strong>Data Use</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">For <strong>No Sharing</strong> profile, manage what happens with the shared information</p>
                </div>
                <div style="margin-top: -5px">    
                    Optimize Services<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                    Behavioral Insights<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                    Recommendation<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                    Other users<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
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
                    <p style="font-size: 14px;margin-top: -25px;">For <strong>Local Storage Only</strong> profile, manage what happens with the shared information</p>
                </div>
                <div style="margin-top: -5px">    
                    Optimize Services<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                    Behavioral Insights<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                    Recommendation<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                    Other users<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label><hr>
                </div>
            </div>
        </div>
        
    </div>
        
</body>
</html>

