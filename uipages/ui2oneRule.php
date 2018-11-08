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
        
        <div id="storagesharing" style="display: block">
            <div class="title">
                <p style="text-align: center;"><strong>Privacy Settings</strong></p>
            </div>
            
            <div class="settings">
                <div style="margin-top:-10px">
                    <p style="font-size: 22px"><strong>Storage & Sharing</strong></p>
                    <p style="font-size: 14px;margin-top: -10px;">Control the extent of sharing of the information collected by different devices in your smart home.</p>
                </div>
                <div class="storage" style="top:120px" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('introuiLS').style.display='block';currentMenu='seLS'">
                    <p><span>&nbsp;&nbsp;Local Storage &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="font-size: 12px;color:#0645AD"><strong>More &gt;</strong></span></p>
                </div>
                <div class="storage" style="top:220px" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('introuiRS').style.display='block';currentMenu='seRS'">
                    <p><span>&nbsp;&nbsp;Remote Server &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="font-size: 12px;color:#0645AD"><strong>More &gt;</strong></span></p>
                </div>
                <div class="storage" style="top:320px" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('introuiTP').style.display='block';currentMenu='seTP'">
                    <p><span>&nbsp;&nbsp;Third Party Sharing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span id="tpui2allOff" style="font-size: 12px;color:#0645AD"><strong>More &gt;</strong></span></p>
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
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('introuiLS').style.display='none';document.getElementById('storagesharing').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Privacy Settings</strong></span></p>
            </div>
                        
            <div class="settings">
                <span style="font-size:14px;text-align: center;">For <strong>Local Storage</strong>, manage information collection by devices or data usage</span>

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
        
        <div id="dsmuiTP" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dsmuiTP').style.display='none';document.getElementById('introuiTP').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Device/Sensor Management</strong></span></p>
            </div>
            <div class="settingsWithScroll">
                <p style="font-size:12px;line-height:15px;">Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a></p>

                <div class="devicecontainer">
     
                    <div class="dev" onclick="dropdownFunction('seTP')">    
                        &nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/>
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
                                            
               
                    <div class="dev" onclick="dropdownFunction('reTP')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('hvTP')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('waTP')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('liTP')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('asTP')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('tvTP')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('alTP')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('loTP')">&nbsp;&nbsp;Location Sensor<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('caTP')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('mpTP')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('swTP')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                        &nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/>
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
                                            
               
                    <div class="dev" onclick="dropdownFunction('reRS')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('hvRS')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('waRS')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('liRS')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('asRS')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('tvRS')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('alRS')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('loRS')">&nbsp;&nbsp;Location Sensor<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('caRS')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" onclick="dropdownFunction('mpRS')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                    
                    <div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('swRS')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dsmuiLS').style.display='none';document.getElementById('introuiLS').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Device/Sensor Management</strong></span></p>
            </div>
            <div class="settingsWithScroll">
                <p style="font-size:12px;line-height:15px;">Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a></p>

                <div class="devicecontainer">
     
                    <div class="dev" onclick="dropdownFunction('seLS')">    
                        &nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/>
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                                            
               
                    <div class="dev" onclick="dropdownFunction('reLS')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('hvLS')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('waLS')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('liLS')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('asLS')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('tvLS')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('alLS')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('loLS')">&nbsp;&nbsp;Location Sensor<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('caLS')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" onclick="dropdownFunction('mpLS')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('swLS')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                    
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
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Refrigerator</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>HVAC System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Washing Machine</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Lighting System</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Smart Assistant</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>  
                            <tr>
                                <td>Smart TV</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>
                            <tr>
                                <td>Alarm Clock</td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                                <td><input type="checkbox"  checked /></td>
                            </tr>                            
                        </table>
                    </div>
                    
                    <div><button style="position: relative;top:20px;left:120px;">Done!</button></div>

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
                    Optimize Services<label class="switch"><input type="checkbox" checked ><span class="slider round"></span></label><hr>
                    Behavioral Insights<label class="switch"><input type="checkbox" checked ><span class="slider round"></span></label><hr>
                    Recommendation<label class="switch"><input type="checkbox" checked ><span class="slider round"></span></label><hr>
                    Other users<label class="switch"><input type="checkbox" checked ><span class="slider round"></span></label><hr>
                </div>
            </div>
        </div>
        
    </div>
        
</body>
</html>

