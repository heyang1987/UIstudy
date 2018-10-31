<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../main.css">
    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
    <script type="text/javascript" src="../js/ui.js"></script>
    
</head>
<body>
    <div class="container">
        <img src="../images/u1.png" width="400">

        <div id="introui"  style="display: none">
            <div class="title">
                <p style="text-align: center;">Privacy Settings</p>
            </div>
            
            
            <div class="settings">
                <span style="font-size:14px;text-align: center;">You privacy
                    settings has been pre-configured using result from our research. 
                    Please review and change them according to your demands.</span>

                <!-- Device/Sensor Management -->
                <div class="dsmbox" onclick=document.getElementById('introui').style.display='none';document.getElementById('storagesharing').style.display='block';>
                    <p style="font-size:21px;margin-top: 0px"><strong>Storage/Sharing & Device/Sensor Management</strong></p>
                    Manage the storage location and sharing options of the data collected and access to these data by the devices in your home.
                </div>
                <!-- Data Usage Management -->
                <div class="dumbox" onclick=document.getElementById('introui').style.display='none';document.getElementById('dusgui').style.display='block';>
                    <p style="font-size:22px"><strong>Data Usage</strong></p>
                    Manage long-term use of data collected in your home
                </div>
            </div>
        </div>
        
        <div id="storagesharing" style="display: block">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('storagesharing').style.display='none';document.getElementById('introui').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="align-content: center"><strong>Storage & Sharing</strong></span></p>
            </div>
            
            <div class="settings">
                <div class="storage" style="top:120px">
                    <p><span>&nbsp;&nbsp;Third Party Sharing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="font-size: 12px;">More &gt;</span></p>
                </div>

                <div class="storage" style="top:220px;" onclick="document.getElementById('introui').style.display='none';document.getElementById('rmtsvrui').style.display='block';">
                    <p><span>&nbsp;&nbsp;Remote Server &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="font-size: 12px;">More &gt;</span></p>
                </div>

                <div class="storage" style="top:320px;">
                    <p><span>&nbsp;&nbsp;Local Storage &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="font-size: 12px;">More &gt;</span></p>
                </div>
            </div>
        </div>
        
        <div id="dsmui" style="display: none">
                <div class="title">
                    <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center"><strong>Device/Sensor Management</strong></span></p>
                </div>
                <div class="settings">
                    <p style="font-size:12px;line-height:15px;">Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a></p>

                    <div class="devicecontainer">
         
                        <div class="dev" onclick="dropdownFunction('se')">    
                            &nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/>
                        </div>
                        <div id="se" class="dropdown" style="display: block">
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
                                                
                   
                        <div class="dev" onclick="dropdownFunction('re')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="re" class="dropdown" style="display: none">
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
                        
                        <div class="dev" onclick="dropdownFunction('hv')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="hv" class="dropdown" style="display: none">
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
                        
                        <div class="dev" onclick="dropdownFunction('wa')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="wa" class="dropdown" style="display: none">
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
                        
                        <div class="dev" onclick="dropdownFunction('li')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="li" class="dropdown" style="display: none">
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
                        
                        <div class="dev" onclick="dropdownFunction('as')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="as" class="dropdown" style="display: none">
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
                        
                        <div class="dev" onclick="dropdownFunction('tv')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="tv" class="dropdown" style="display: none">
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
                        
                        <div class="dev" onclick="dropdownFunction('al')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="al" class="dropdown" style="display: none">
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
                        
                        <div class="dev" onclick="dropdownFunction('lo')">&nbsp;&nbsp;Location Sensor<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="lo" class="dropdown" style="display: none">
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
                        
                        <div class="dev" onclick="dropdownFunction('ca')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="ca" class="dropdown" style="display: none">
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
                        
                        <div class="dev" onclick="dropdownFunction('mp')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="mp" class="dropdown" style="display: none">
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
                        
                        <div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('sw')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="right" style="padding-top: 5px;padding-right: 15px"/></div>
                        
                        <div id="sw" class="dropdown" style="display: none">
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
                        
                        <div><button class="right">Save</button></div>

                    </div>

                </div>
                
            </div>
        
        <div id="dusgui"  style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;" onclick="document.getElementById('dusgui').style.display='none';document.getElementById('introui').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="align-content: center"><strong>Data Storage & Use</strong></span></p>
            </div>
            <div class="settings">
                <div style="margin-top:-30px">
                    <p style="font-size: 24px"><strong>Storage & Sharing</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">Control the extent of sharing of the information collected by different devices in your smart home.</p>
                </div>
                <div id="storageChkBox" style="margin-top: -5px">    
                    Local Only<input id="l" type="checkbox" checked class="checkbox right" onclick="clickl()"><hr>
                    Local + Remote Server<input id="r" type="checkbox" class="checkbox right" onclick="clickr()"><hr>
                    Local + Third Party Sharing<input id="t" type="checkbox" class="checkbox right" onclick="clickt()"><hr>
                    No Storage<input id="n" type="checkbox" class="checkbox right" onclick="clickn()"><hr>
                </div>
                <div style="margin-top:-10px">
                    <p style="font-size: 24px"><strong>Data Use</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">Manage what happens with the shared information</p>
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
        
</body>
</html>

