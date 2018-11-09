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
                <p style="text-align: center;">Privacy Settings</p>
            </div>
            
            
            <div class="settings">
                <span style="font-size:24px;text-align: center;">What do you want to adjust?</span>

                <!-- Device/Sensor Management -->
                <div class="dsmbox" onclick=document.getElementById('introui').style.display='none';document.getElementById('dsmui').style.display='block';currentMenu='se'>
                    <p style="font-size:21px;"><strong>Device / Sensor Management</strong></p>
                    Manage Device access to data collected in your home
                </div>
                <!-- Data Usage Management -->
                <div class="dumbox" onclick=document.getElementById('introui').style.display='none';document.getElementById('dusgui').style.display='block';currentMenu='se'>
                    <p style="font-size:22px"><strong>Data Usage</strong></p>
                    Manage long-term use of data collected in your home
                </div>
            </div>
        </div>
        
        <div id="dsmui" style="display: none">
			<div class="title">
				<p><span style="font-size:12px;color:#522D80;cursor: pointer;" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';">&lt;&nbsp;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="align-content: center">Device/Sensor Management</span></p>
			</div>
			<div class="settingsWithScroll">
				<div class="description">Expand to give access for information collected by devices. Select who gets access and for what purpose. Want to know more? Click <a>here</a></div>

				<div class="devicecontainer">
	 
					<div class="dev" onclick="dropdownFunction('se')">    
						<img src="../icon/en8.png" width="32px"/>&nbsp;&nbsp;Home Security System<img src="images/arrow-down.png" class="arrowdown"/>
					</div>
					<div id="se" class="dropdown" style="display: block">
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
								<td>Alm Clock</td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
							</tr>                            
						</table>
					</div>
											
			   
					<div class="dev" onclick="dropdownFunction('re')">&nbsp;&nbsp;Refrigerator<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
								<td>Alm Clock</td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
							</tr>                            
						</table>
					</div>
					
					<div class="dev" onclick="dropdownFunction('hv')">&nbsp;&nbsp;HVAC<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
								<td>Alm Clock</td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
							</tr>                            
						</table>
					</div>
					
					<div class="dev" onclick="dropdownFunction('wa')">&nbsp;&nbsp;Washing Machine<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
								<td>Alm Clock</td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
							</tr>                            
						</table>
					</div>
					
					<div class="dev" onclick="dropdownFunction('li')">&nbsp;&nbsp;Lighting System<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
								<td>Alm Clock</td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox" /></td>
							</tr>                            
						</table>
					</div>
					
					<div class="dev" onclick="dropdownFunction('as')">&nbsp;&nbsp;Smart Assistant<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
					
					<div class="dev" onclick="dropdownFunction('tv')">&nbsp;&nbsp;Smart TV<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
					
					<div class="dev" onclick="dropdownFunction('al')">&nbsp;&nbsp;Alarm<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
					
					<div class="dev" onclick="dropdownFunction('lo')">&nbsp;&nbsp;Loc Sensor<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
					
					<div class="dev" onclick="dropdownFunction('ca')">&nbsp;&nbsp;Camera<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
					
					<div class="dev" onclick="dropdownFunction('mp')">&nbsp;&nbsp;Microphone<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
					
					<div class="dev" style="border-bottom: 1px solid grey" onclick="dropdownFunction('sw')">&nbsp;&nbsp;Smart Phone/Watch<img src="images/arrow-down.png" class="arrowdown"/></div>
					
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
					
					<div><button class="button" style="position: relative;margin-top:10px;left:125px;margin-bottom:10px;" onclick="document.getElementById('dsmui').style.display='none';document.getElementById('introui').style.display='block';">Done!</button></div>

				</div>

			</div>
			
		</div>
        
        <div id="dusgui" style="display: none">
            <div class="title">
                <p><span style="font-size:12px;color:#522D80;cursor: pointer;" onclick="document.getElementById('dusgui').style.display='none';document.getElementById('introui').style.display='block';">&lt;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span style="align-content: center"><strong>Data Storage & Use</strong></span></p>
            </div>
            <div class="settings">
                <div style="margin-top:-30px">
                    <p style="font-size: 24px"><strong>Storage & Sharing</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">Control the extent of sharing of the information collected by different devices in your smart home.</p>
                </div>
                <div id="storageChkBox" style="margin-top: -5px">
					<div class="inputGroup">
						<input id="radio1" name="radio" type="radio" checked/>
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
						<input id="radio4" name="radio" type="radio"/>
						<label for="radio4">Local + Third Party Sharing</label>
					</div><hr>
                </div>
                <div style="margin-top:-10px">
                    <p style="font-size: 24px"><strong>Data Use</strong></p>
                    <p style="font-size: 14px;margin-top: -25px;">Manage what happens with the shared information</p>
                </div>
                <div style="margin-top: 5px">
					<div style="margin-top:15px">
						<span>&nbsp;&nbsp;Optimize Services<label class="switch"><input type="checkbox"><span class="slider round"></span></label></span>
					</div><hr>
					<div style="margin-top:15px">
						&nbsp;&nbsp;Behavioral Insights<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
					</div><hr>
                    <div style="margin-top:15px">
						&nbsp;&nbsp;Recommendation<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
					</div><hr>
                    <div style="margin-top:15px">
						&nbsp;&nbsp;Other users<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
					</div><hr>
                </div>
            </div>
        </div>
        
    </div>
        
</body>
</html>fh

