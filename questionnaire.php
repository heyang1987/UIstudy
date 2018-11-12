<?

$firstfour =  $_POST['firstfour'];
$lastfour =  $_POST['lastfour'];
$timeint1 =  $_POST['timeint1'];
$timeint2 =  $_POST['timeint2'];
$timeint3 =  $_POST['timeint3'];

$timestart = $_POST['timestart'];
$times1 = $_POST['times1'];
$times2 = $_POST['times2'];
$times3 = $_POST['times3'];
$times4 = $_POST['times4'];
$timeend1 = $_POST['timeend1'];
$result1 = $timeend1-$timestart;

/*
echo " timestart= $timestart, timeend1= $timeend1, $result1";
*/

$s_identity = $_POST['s_identity'];
$s_contacts = $_POST['s_contacts'];
$s_location = $_POST['s_location'];
$s_sms = $_POST['s_sms'];
$s_storage = $_POST['s_storage'];
$s_camera = $_POST['s_camera'];
$s_bluetooth = $_POST['s_bluetooth'];
$s_photos = $_POST['s_photos'];
$s_phone = $_POST['s_phone'];
$s_motion = $_POST['s_motion'];
$s_media = $_POST['s_media'];
$s_mobiledata = $_POST['s_mobiledata'];
//$s_microphone = $_POST['s_microphone'];

$who_public =  $_POST['who_public'];
$who_friends =  $_POST['who_friends'];
$who_health =  $_POST['who_health'];
$who_cfp =  $_POST['who_cfp'];
$who_gfp =  $_POST['who_gfp'];
$who_oa =  $_POST['who_oa'];
$who_none =  $_POST['who_none'];


$steps_public =  $_POST['steps_public']; $steps_friends =  $_POST['steps_friends']; $steps_health =  $_POST['steps_health']; $steps_cfp =  $_POST['steps_cfp'];
$steps_gfp =  $_POST['steps_gfp']; $steps_oa =  $_POST['steps_oa']; $steps_none =  $_POST['steps_none'];

$distance_public =  $_POST['distance_public']; $distance_friends =  $_POST['distance_friends']; $distance_health =  $_POST['distance_health']; $distance_cfp =  $_POST['distance_cfp'];
$distance_gfp =  $_POST['distance_gfp']; $distance_oa =  $_POST['distance_oa']; $distance_none =  $_POST['distance_none'];

$elevation_public =  $_POST['elevation_public']; $elevation_friends =  $_POST['elevation_friends']; $elevation_health =  $_POST['elevation_health']; $elevation_cfp =  $_POST['elevation_cfp'];
$elevation_gfp =  $_POST['elevation_gfp']; $elevation_oa =  $_POST['elevation_oa']; $elevation_none =  $_POST['elevation_none'];

$floors_public =  $_POST['floors_public']; $floors_friends =  $_POST['floors_friends']; $floors_health =  $_POST['floors_health']; $floors_cfp =  $_POST['floors_cfp'];
$floors_gfp =  $_POST['floors_gfp']; $floors_oa =  $_POST['floors_oa']; $floors_none =  $_POST['floors_none'];

$activities_public =  $_POST['activities_public']; $activities_friends =  $_POST['activities_friends']; $activities_health =  $_POST['activities_health']; $activities_cfp =  $_POST['activities_cfp'];
$activities_gfp =  $_POST['activities_gfp']; $activities_oa =  $_POST['activities_oa']; $activities_none =  $_POST['activities_none'];

$calories_public =  $_POST['calories_public']; $calories_friends =  $_POST['calories_friends']; $calories_health =  $_POST['calories_health']; $calories_cfp =  $_POST['calories_cfp'];
$calories_gfp =  $_POST['calories_gfp']; $calories_oa =  $_POST['calories_oa']; $calories_none =  $_POST['calories_none'];

$weight_public =  $_POST['weight_public']; $weight_friends =  $_POST['weight_friends']; $weight_health =  $_POST['weight_health']; $weight_cfp =  $_POST['weight_cfp'];
$weight_gfp =  $_POST['weight_gfp']; $weight_oa =  $_POST['weight_oa']; $weight_none =  $_POST['weight_none'];

$sleep_public =  $_POST['sleep_public']; $sleep_friends =  $_POST['sleep_friends']; $sleep_health =  $_POST['sleep_health']; $sleep_cfp =  $_POST['sleep_cfp'];
$sleep_gfp =  $_POST['sleep_gfp']; $sleep_oa =  $_POST['sleep_oa']; $sleep_none =  $_POST['sleep_none'];

$heartrate_public =  $_POST['heartrate_public']; $heartrate_friends =  $_POST['heartrate_friends']; $heartrate_health =  $_POST['heartrate_health']; $heartrate_cfp =  $_POST['heartrate_cfp'];
$heartrate_gfp =  $_POST['heartrate_gfp']; $heartrate_oa =  $_POST['heartrate_oa']; $heartrate_none =  $_POST['heartrate_none'];

$food_public =  $_POST['food_public']; $food_friends =  $_POST['food_friends']; $food_health =  $_POST['food_health']; $food_cfp =  $_POST['food_cfp'];
$food_gfp =  $_POST['food_gfp']; $food_oa =  $_POST['food_oa']; $food_none =  $_POST['food_none'];

$friends_public =  $_POST['friends_public']; $friends_friends =  $_POST['friends_friends']; $friends_health =  $_POST['friends_health']; $friends_cfp =  $_POST['friends_cfp'];
$friends_gfp =  $_POST['friends_gfp']; $friends_oa =  $_POST['friends_oa']; $friends_none =  $_POST['friends_none'];

$profile_public =  $_POST['profile_public']; $profile_friends =  $_POST['profile_friends']; $profile_health =  $_POST['profile_health']; $profile_cfp =  $_POST['profile_cfp'];
$profile_gfp =  $_POST['profile_gfp']; $profile_oa =  $_POST['profile_oa']; $profile_none =  $_POST['profile_none'];

$location_public =  $_POST['location_public']; $location_friends =  $_POST['location_friends']; $location_health =  $_POST['location_health']; $location_cfp =  $_POST['location_cfp'];
$location_gfp =  $_POST['location_gfp']; $location_oa =  $_POST['location_oa']; $location_none =  $_POST['location_none'];

$settings_public =  $_POST['settings_public']; $settings_friends =  $_POST['settings_friends']; $settings_health =  $_POST['settings_health']; $settings_cfp =  $_POST['settings_cfp'];
$settings_gfp =  $_POST['settings_gfp']; $settings_oa =  $_POST['settings_oa']; $settings_none =  $_POST['settings_none'];


/*
who_public who_friends who_health who_cfp who_gfp who_oa who_none
steps_public steps_friends steps_health steps_cfp steps_gfp steps_oa steps_none
distance_public distance_friends distance_health distance_cfp distance_gfp distance_oa distance_none
elevation_public
floors_public
activities_public
calories_public
weight_public
sleep_public
heartrate_public
food_public
friends_public
profile_public
location_public
settings_public
*/
/*
$f_steps =  $_POST['f_steps'];
$f_distance =  $_POST['f_distance'];
$f_elevation =  $_POST['f_elevation'];
$f_floors=  $_POST['f_floors'];
$f_minutesActivity=  $_POST['f_minutesActivity'];
$f_activityCalories=  $_POST['f_activityCalories'];
$f_weight=  $_POST['f_weight'];
$f_minutesAsleep=  $_POST['f_minutesAsleep'];
$f_heartrate=  $_POST['f_heartrate'];
$f_food =  $_POST['f_food'];
$f_friends =  $_POST['f_friends'];
$f_profile =  $_POST['f_profile'];
$f_location =  $_POST['f_location'];
$f_settings =  $_POST['f_settings'];
*/
/*
echo "s_identity = $s_identity, s_contacts=$s_contacts, s_location=$s_location, s_sms= $s_sms, s_storage= $s_storage, s_camera = $s_camera,  s_bluetooth = $s_bluetooth, s_photos= $s_photos, s_phone= $s_phone, s_motion= $s_motion, s_media= $s_media, s_mobiledata= $s_mobiledata, s_microphone= $s_microphone <br>";
echo "f_steps = $f_steps, f_distance=$f_distance, f_elevation=$f_elevation, f_floors= $f_floors, f_minutesActivity= $f_minutesActivity, f_activityCalories= $f_activityCalories, f_weight=$f_weight, f_minutesAsleep=$f_minutesAsleep, f_heartrate=$f_heartrate, f_food = $f_food, f_friends = $f_friends, f_profile = $f_profile, f_location = $f_location, f_settings = $f_settings <br>";
*/

/*
$who_social =  $_POST['who_social'];
$who_efp =  $_POST['who_efp'];
$who_gfp=  $_POST['who_gfp'];
$who_tpa=  $_POST['who_tpa'];
$who_oa=  $_POST['who_oa'];
*/
/*
echo " who_social= $who_social, who_efp =  $who_efp, who_gfp=  $who_gfp, who_comp=  $who_comp, who_tpa= $who_tpa, who_oa=  $who_oa";
*/

$pur_health = $_POST['pur_health'];
$pur_safety =  $_POST['pur_safety'];
$pur_social =  $_POST['pur_social'];
$pur_commercial =  $_POST['pur_commercial'];
$pur_convenience =  $_POST['pur_convenience'];

$frequency=  $_POST['frequency'];
$retention=  $_POST['retention'];

/*
echo "pur_health = $pur_health, pur_safety = $pur_safety, pur_social = $pur_social, pur_commercial= $pur_commercial, pur_convenience= $pur_convenience, frequency= $frequency, retention= $retention";
*/


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender =  $_POST['gender'];
$bday =  $_POST['bday'];
$unitheight = $_POST['height'];
$unitweight =  $_POST['weight'];

$cm =  $_POST['cm'];
$feet =  $_POST['feet'];
$inches =  $_POST['inches'];
$lbs =  $_POST['lbs'];
$kg =  $_POST['kg'];
/*
echo "$cm=cm, $feet=feet, $inches = inches, $lbs= lbs, $kg = kg <br>";
*/
if ($unitheight == "1") {$height = $_POST['cm'];}
 else if ($unitheight == "2"){$height = (($_POST['feet']*12) + $_POST['inches'])*2.54;} else {$height = 0;}

if ($unitweight == "1") {$weight = $_POST['kg'];}
 else if ($unitweight == "2"){$weight = $_POST['lbs']*0.453592;} else {$weight = 0;}

if(empty($first_name)){$first_name_p=1;}
else{$first_name_p=2;}

if(empty($last_name)){$last_name_p=1;}
else{$last_name_p=2;}

if(empty($gender)){$gender_p=1;}
else{$gender_p=2;}

if(empty($bday)){$bday_p=1;}
else{$bday_p=2;}

if(empty($cm) && empty($feet) &&  empty($inches)){$height_p=1;}
else{$height_p=2;}

if(empty($lbs) && empty($kg)){$weight_p=1;}
else{$weight_p=2;}

/*
echo "<br> first_name_p=$first_name_p <br> last_name_p=$last_name_p <br> gender_p=$gender_p <br> bday_p=$bday_p <br> height_p=$height_p <br> weight_p=$weight_p <br>"; 
echo "<br> $unitweight=unitweight, $unitheight=unitheight <br> first_name=$first_name <br> last_name=$last_name <br> gender= $gender <br> bday = $bday <br> height= $height <br> weight=$weight";
*/




echo "

<html>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
background-image:url(\"http://pdm-aids.dibris.unige.it/run.jpg\");

    background-repeat:   repeat;
    background-position: top center;              /* optional, center the image */

}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

.floatright {
    display: inline-block;
}
.justy {
text-align:justify;
}
input {
  padding: 10px;
 /* width: 100%;*/
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
  display: inline;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
 /* background-color: #ffdddd; */
background-color: #ffdddd;
}

label {
    font-weight: normal;
color: gray;
}

.container {
        width: 100%;
        display: flex;
flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    }
.child {
/*        width: calc(100% / 7);*/
width: 90px;
    }
/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #193384;

  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #193384;
}

.to_inline div{
	display: inline;
}


table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

p.error {
    text-align: right;
}


</style>




<body onload=\"negotiation();\">


<form id='regForm' action='final.php' method='post' enctype='multipart/form-data'>
  <h1>Fitness Tracker survey</h1>
  <!-- precheck(); One 'tab' for each step in the form: -->


  <div class='tab' id='tab1'>
<!--<input type='hidden' name='userid' value='$userid'> 
<input type='hidden' name='s_microphone' value='$s_microphone'>
-->

<input type='hidden' name='firstfour' value='$firstfour'>
<input type='hidden' name='lastfour' value='$lastfour'>
<input type='hidden' name='timeint1' value='$timeint1'>
<input type='hidden' name='timeint2' value='$timeint2'>
<input type='hidden' name='timeint3' value='$timeint3'>

<input type='hidden' name='timestart' value='$timestart'>
<input type='hidden' name='times1' value='$times1'>
<input type='hidden' name='times2' value='$times2'>
<input type='hidden' name='times3' value='$times3'>
<input type='hidden' name='times4' value='$times4'>
<input type='hidden' name='timeend1' value='$timeend1'>
<input type='hidden' id='timeend2' name='timeend2'>

<input type='hidden' name='s_identity' value='$s_identity'>
<input type='hidden' name='s_contacts' value='$s_contacts'>
<input type='hidden' name='s_location' value='$s_location'>
<input type='hidden' name='s_sms' value='$s_sms'>
<input type='hidden' name='s_storage' value='$s_storage'>
<input type='hidden' name='s_camera' value='$s_camera'>
<input type='hidden' name='s_bluetooth' value='$s_bluetooth'>
<input type='hidden' name='s_photos' value='$s_photos'>
<input type='hidden' name='s_phone' value='$s_phone'>
<input type='hidden' name='s_motion' value='$s_motion'>
<input type='hidden' name='s_media' value='$s_media'>
<input type='hidden' name='s_mobiledata' value='$s_mobiledata'>

<input type='hidden' name='who_public' value='$who_public'>
<input type='hidden' name='who_friends' value='$who_friends'>
<input type='hidden' name='who_health' value='$who_health'>
<input type='hidden' name='who_cfp' value='$who_cfp'>
<input type='hidden' name='who_gfp' value='$who_gfp'>
<input type='hidden' name='who_oa' value='$who_oa'>
<input type='hidden' name='who_none' value='$who_none'>

<input type='hidden' name='steps_public' value='$steps_public'>
<input type='hidden' name='steps_friends' value='$steps_friends'>
<input type='hidden' name='steps_health' value='$steps_health'>
<input type='hidden' name='steps_cfp' value='$steps_cfp'>
<input type='hidden' name='steps_gfp' value='$steps_gfp'>
<input type='hidden' name='steps_oa' value='$steps_oa'>
<input type='hidden' name='steps_none' value='$steps_none'>

<input type='hidden' name='distance_public' value='$distance_public'>
<input type='hidden' name='distance_friends' value='$distance_friends'>
<input type='hidden' name='distance_health' value='$distance_health'>
<input type='hidden' name='distance_cfp' value='$distance_cfp'>
<input type='hidden' name='distance_gfp' value='$distance_gfp'>
<input type='hidden' name='distance_oa' value='$distance_oa'>
<input type='hidden' name='distance_none' value='$distance_none'>

<input type='hidden' name='elevation_public' value='$elevation_public'>
<input type='hidden' name='elevation_friends' value='$elevation_friends'>
<input type='hidden' name='elevation_health' value='$elevation_health'>
<input type='hidden' name='elevation_cfp' value='$elevation_cfp'>
<input type='hidden' name='elevation_gfp' value='$elevation_gfp'>
<input type='hidden' name='elevation_oa' value='$elevation_oa'>
<input type='hidden' name='elevation_none' value='$elevation_none'>

<input type='hidden' name='floors_public' value='$floors_public'>
<input type='hidden' name='floors_friends' value='$floors_friends'>
<input type='hidden' name='floors_health' value='$floors_health'>
<input type='hidden' name='floors_cfp' value='$floors_cfp'>
<input type='hidden' name='floors_gfp' value='$floors_gfp'>
<input type='hidden' name='floors_oa' value='$floors_oa'>
<input type='hidden' name='floors_none' value='$floors_none'>

<input type='hidden' name='activities_public' value='$activities_public'>
<input type='hidden' name='activities_friends' value='$activities_friends'>
<input type='hidden' name='activities_health' value='$activities_health'>
<input type='hidden' name='activities_cfp' value='$activities_cfp'>
<input type='hidden' name='activities_gfp' value='$activities_gfp'>
<input type='hidden' name='activities_oa' value='$activities_oa'>
<input type='hidden' name='activities_none' value='$activities_none'>

<input type='hidden' name='calories_public' value='$calories_public'>
<input type='hidden' name='calories_friends' value='$calories_friends'>
<input type='hidden' name='calories_health' value='$calories_health'>
<input type='hidden' name='calories_cfp' value='$calories_cfp'>
<input type='hidden' name='calories_gfp' value='$calories_gfp'>
<input type='hidden' name='calories_oa' value='$calories_oa'>
<input type='hidden' name='calories_none' value='$calories_none'>

<input type='hidden' name='weight_public' value='$weight_public'>
<input type='hidden' name='weight_friends' value='$weight_friends'>
<input type='hidden' name='weight_health' value='$weight_health'>
<input type='hidden' name='weight_cfp' value='$weight_cfp'>
<input type='hidden' name='weight_gfp' value='$weight_gfp'>
<input type='hidden' name='weight_oa' value='$weight_oa'>
<input type='hidden' name='weight_none' value='$weight_none'>

<input type='hidden' name='sleep_public' value='$sleep_public'>
<input type='hidden' name='sleep_friends' value='$sleep_friends'>
<input type='hidden' name='sleep_health' value='$sleep_health'>
<input type='hidden' name='sleep_cfp' value='$sleep_cfp'>
<input type='hidden' name='sleep_gfp' value='$sleep_gfp'>
<input type='hidden' name='sleep_oa' value='$sleep_oa'>
<input type='hidden' name='sleep_none' value='$sleep_none'>

<input type='hidden' name='heartrate_public' value='$heartrate_public'>
<input type='hidden' name='heartrate_friends' value='$heartrate_friends'>
<input type='hidden' name='heartrate_health' value='$heartrate_health'>
<input type='hidden' name='heartrate_cfp' value='$heartrate_cfp'>
<input type='hidden' name='heartrate_gfp' value='$heartrate_gfp'>
<input type='hidden' name='heartrate_oa' value='$heartrate_oa'>
<input type='hidden' name='heartrate_none' value='$heartrate_none'>

<input type='hidden' name='food_public' value='$food_public'>
<input type='hidden' name='food_friends' value='$food_friends'>
<input type='hidden' name='food_health' value='$food_health'>
<input type='hidden' name='food_cfp' value='$food_cfp'>
<input type='hidden' name='food_gfp' value='$food_gfp'>
<input type='hidden' name='food_oa' value='$food_oa'>
<input type='hidden' name='food_none' value='$food_none'>

<input type='hidden' name='friends_public' value='$friends_public'>
<input type='hidden' name='friends_friends' value='$friends_friends'>
<input type='hidden' name='friends_health' value='$friends_health'>
<input type='hidden' name='friends_cfp' value='$friends_cfp'>
<input type='hidden' name='friends_gfp' value='$friends_gfp'>
<input type='hidden' name='friends_oa' value='$friends_oa'>
<input type='hidden' name='friends_none' value='$friends_none'>

<input type='hidden' name='profile_public' value='$profile_public'>
<input type='hidden' name='profile_friends' value='$profile_friends'>
<input type='hidden' name='profile_health' value='$profile_health'>
<input type='hidden' name='profile_cfp' value='$profile_cfp'>
<input type='hidden' name='profile_gfp' value='$profile_gfp'>
<input type='hidden' name='profile_oa' value='$profile_oa'>
<input type='hidden' name='profile_none' value='$profile_none'>

<input type='hidden' name='location_public' value='$location_public'>
<input type='hidden' name='location_friends' value='$location_friends'>
<input type='hidden' name='location_health' value='$location_health'>
<input type='hidden' name='location_cfp' value='$location_cfp'>
<input type='hidden' name='location_gfp' value='$location_gfp'>
<input type='hidden' name='location_oa' value='$location_oa'>
<input type='hidden' name='location_none' value='$location_none'>

<input type='hidden' name='settings_public' value='$settings_public'>
<input type='hidden' name='settings_friends' value='$settings_friends'>
<input type='hidden' name='settings_health' value='$settings_health'>
<input type='hidden' name='settings_cfp' value='$settings_cfp'>
<input type='hidden' name='settings_gfp' value='$settings_gfp'>
<input type='hidden' name='settings_oa' value='$settings_oa'>
<input type='hidden' name='settings_none' value='$settings_none'>





<input type='hidden' name='pur_health' value='$pur_health'>
<input type='hidden' name='pur_safety' value='$pur_safety'>
<input type='hidden' name='pur_social' value='$pur_social'>
<input type='hidden' name='pur_commercial' value='$pur_commercial'>
<input type='hidden' name='pur_convenience' value='$pur_convenience'>

<input type='hidden' name='frequency' value='$frequency'>
<input type='hidden' name='retention' value='$retention'>

<input type='hidden' name='first_name' value='$first_name'>
<input type='hidden' name='last_name' value='$last_name'>
<input type='hidden' name='gender' value='$gender'>
<input type='hidden' name='bday' value='$bday'>
<input type='hidden' name='unitheight' value='$unitheight'>
<input type='hidden' name='unitweight' value='$unitweight'>

<input type='hidden' name='cm' value='$cm'>
<input type='hidden' name='feet' value='$feet'>
<input type='hidden' name='inches' value='$inches'>
<input type='hidden' name='lbs' value='$lbs'>
<input type='hidden' name='kg' value='$kg'>




The prior app simulation shows a new way of presenting the app's privacy policy. 
In the traditional way, the app <b>Policy Statement is presented in a long yet detailed static page</b>.
We would like to know your feedback.
<br>
<hr>
<br>

Did the previous app simulation help you <b>understand</b> the app's privacy policy?

<span><div>
<br/> <label for='understand1'>  <input type='radio' id='understand1' name='understand' value='1' onclick='boldage(this)'/>  Yes, I <b> definitely understand</b> the app's privacy policy. </label>  
<br/> <label for='understand2'>  <input type='radio' id='understand2' name='understand' value='2' onclick='boldage(this)'/>  Yes, I <b> understand</b> the app's privacy policy. </label>  
<br/> <label for='understand3'>  <input type='radio' id='understand3' name='understand' value='3' onclick='boldage(this)'/>  Yes, I <b> somewhat understand</b> the app's privacy policy. </label>  
<br/> <label for='understand4'>  <input type='radio' id='understand4' name='understand' value='4' onclick='boldage(this)'/>  I am <b>neutral</b>. </label> 
<br/> <label for='understand5'>  <input type='radio' id='understand5' name='understand' value='5' onclick='boldage(this)'/> No, I <b> somewhat don't understand</b> the app's privacy policy.</label>  
<br/> <label for='understand6'>  <input type='radio' id='understand6' name='understand' value='6' onclick='boldage(this)'/> No, I <b> don't understand</b> the app's privacy policy. </label>  
<br/> <label for='understand7'>  <input type='radio' id='understand7' name='understand' value='7' onclick='boldage(this)'/> No, I <b> definitely don't understand</b> the app's privacy policy.</label>  
</div></span>


<br>
<hr>
<br>
Would you <b>prefer</b> this over the traditional way of presenting privacy policy (where Policy Statement is presented in a <b>long yet detailed static page</b>)?

<span><div>
<br/> <label for='prefer1'>  <input type='radio' id='prefer1' name='prefer' value='1' onclick='boldage(this)'/>  Yes, I <b> definitely prefer</b> it over reading a long Privacy Policy. </label>  
<br/> <label for='prefer2'>  <input type='radio' id='prefer2' name='prefer' value='2' onclick='boldage(this)'/>  Yes, I <b> prefer</b> it over reading a long Privacy Policy. </label>  
<br/> <label for='prefer3'>  <input type='radio' id='prefer3' name='prefer' value='3' onclick='boldage(this)'/>  Yes, I <b> somewhat prefer</b> it over reading a long Privacy Policy. </label>  
<br/> <label for='prefer4'>  <input type='radio' id='prefer4' name='prefer' value='4' onclick='boldage(this)'/>  I am <b>neutral</b>. </label> 
<br/> <label for='prefer5'>  <input type='radio' id='prefer5' name='prefer' value='5' onclick='boldage(this)'/> No, I <b> somewhat prefer</b> to read a detailed Privacy Policy.</label>  
<br/> <label for='prefer6'>  <input type='radio' id='prefer6' name='prefer' value='6' onclick='boldage(this)'/> No, I <b> prefer</b> to read a detailed Privacy Policy.</label>  
<br/> <label for='prefer7'>  <input type='radio' id='prefer7' name='prefer' value='7' onclick='boldage(this)'/> No, I <b> definitely prefer</b> to read a detailed Privacy Policy.</label>  
</div></span>


<br>
<hr>
<br>
Did the app help you <b>control</b> the app's privacy settings?

<span><div>
<br/> <label for='control1'>  <input type='radio' id='control1' name='control' value='1' onclick='boldage(this)'/>  Yes, it <b> definitely gave me </b> more control over the app's permission settings. </label>
<br/> <label for='control2'>  <input type='radio' id='control2' name='control' value='2' onclick='boldage(this)'/>  Yes, it <b> gave me </b> more control over the app's permission settings. </label>
<br/> <label for='control3'>  <input type='radio' id='control3' name='control' value='3' onclick='boldage(this)'/>  Yes, it <b> somewhat gave me </b> more control over the app's permission settings.</label>
<br/> <label for='control4'>  <input type='radio' id='control4' name='control' value='4' onclick='boldage(this)'/>  I am <b>neutral</b>. </label>
<br/> <label for='control5'>  <input type='radio' id='control5' name='control' value='5' onclick='boldage(this)'/>  No, it <b> somewhat didn't give me </b> more control over the app's permission settings. </label>
<br/> <label for='control6'>  <input type='radio' id='control6' name='control' value='6' onclick='boldage(this)'/>  No, it <b> didn't give me </b> more control over the app's permission settings. </label>
<br/> <label for='control7'>  <input type='radio' id='control7' name='control' value='7' onclick='boldage(this)'/>  No, it <b> definitely didn't give me </b> more control over the app's permission settings. </label>
</div></span>

<br>
<hr>
<br>

How difficult or easy was it to <b>set</b> your privacy settings with the app?
<br><br>

<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='simplicity1'>  <input type='radio' id='simplicity1' name='simplicity' value='1' onclick='boldage(this)'/> <br/> very <br/> easy   </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='simplicity2'>  <input type='radio' id='simplicity2' name='simplicity' value='2' onclick='boldage(this)'/> <br/> easy <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='simplicity3'>  <input type='radio' id='simplicity3' name='simplicity' value='3' onclick='boldage(this)'/> <br/> somewhat <br/> easy  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='simplicity4'>  <input type='radio' id='simplicity4' name='simplicity' value='4' onclick='boldage(this)'/> <br/> neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='simplicity5'>  <input type='radio' id='simplicity5' name='simplicity' value='5' onclick='boldage(this)'/> <br/> somewhat <br/> difficult  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='simplicity6'>  <input type='radio' id='simplicity6' name='simplicity' value='6' onclick='boldage(this)'/> <br/> difficult  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='simplicity7'>  <input type='radio' id='simplicity7' name='simplicity' value='7' onclick='boldage(this)'/> <br/> very <br/> difficult  </label>  </div>
</div></span>

<p class='error' id='error1'><br><br></p>
<br>
<input type='hidden' id='timeq1' name='timeq1'>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_1();'>Next</button> 
    </div>
<br>

  </div>
</div>





  <div class='tab' id='tab2'>
The following questions are about your Fitbit.<hr>

On which mobile operating system do you use your <strong>Fitbit</strong> fitness app? <br>
<span><span>
<br><label for='androidid'><input type='radio' id='androidid' name='ver' value='1' onclick='boldage(this);opsys(this.value);'> Android </label>
<br><label for='iphoneid'><input type='radio' id='iphoneid' name='ver' value='2' onclick='boldage(this);opsys(this.value);android(this.value+1);'> iOS (iPhone) </label>
<br><label for='windowsid'><input type='radio' id='windowsid' name='ver' value='3' onclick='boldage(this);opsys(this.value);android(this.value+1);'>  Windows (mobile or desktop)</label>
<!--<br><label for='desktopid'><input type='radio' id='desktopid' name='ver' value='4' onclick='boldage(this);opsys(this.value);android(this.value+1);'> <font color='red'> I only use My PC/Mac (Desktop App) </font></label>-->
 </span></span>

 <br>

<div class='display' id='display12android' style='display:none'>
<br><hr><br>
<!--Android version 5.9 and below do not allow you to manage each privacy permission. 
<br><br> -->
Please choose your Android version:
<p>
<span><span>
<label for='android5'><input type='radio' id='android5' name='android_v' value='1' onclick='boldage(this);android(this.value)'> 5.9 and below </label> <br>
<label for='android6'><input type='radio' id='android6' name='android_v' value='2' onclick='boldage(this);android(this.value);'> 6.0 and above</label>
</span></span></p>

Tip: To find which version of Android your device uses, you can simply go to your device's <b>Settings app</b>. 
Then tap <b>About Phone</b>, <b>About tablet</b>, or <b>About device</b>. 
</div>

<div class='display' id='display12iphone' style='display:none'>
<br><hr><br>For the privacy settings of iOS users, you can allow/deny each privacy permission for each app.
This can be simply found by going to your device's <b>Settings</b> and tapping <b>Fitbit</b> app below on the lists of apps.
<br><br> Please check which of the following permissions you have granted:

<table>
  <tr><th></th> <th></th></tr>
  <tr><td><img src='1.png' width='20' height='20'> Location</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='iphone_location1'><input type='radio' id='iphone_location1' name='iphone_location' value='3' onclick='boldage(this);'> Always </label>
&nbsp;<label for='iphone_location2'><input type='radio' id='iphone_location2' name='iphone_location' value='2' onclick='boldage(this);'> While Using App </label>
&nbsp;<label for='iphone_location3'><input type='radio' id='iphone_location3' name='iphone_location' value='1' onclick='boldage(this);'> Never </label>
</span></span></td> </tr>
  <tr><td><img src='2.png' width='20' height='20'> Contacts</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='iphone_contacts1'><input type='radio' id='iphone_contacts1' name='iphone_contacts' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='iphone_contacts2'><input type='radio' id='iphone_contacts2' name='iphone_contacts' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td><img src='5.png' width='20' height='20'> Photos</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='iphone_photos1'><input type='radio' id='iphone_photos1' name='iphone_photos' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='iphone_photos2'><input type='radio' id='iphone_photos2' name='iphone_photos' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td><img src='6.png' width='20' height='20'> Bluetooth Sharing</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='iphone_bluetooth1'><input type='radio' id='iphone_bluetooth1' name='iphone_bluetooth' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='iphone_bluetooth2'><input type='radio' id='iphone_bluetooth2' name='iphone_bluetooth' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td><img src='9.png' width='20' height='20'> Camera </td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='iphone_camera1'><input type='radio' id='iphone_camera1' name='iphone_camera' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='iphone_camera2'><input type='radio' id='iphone_camera2' name='iphone_camera' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td><img src='12.png' width='20' height='20'> Media & Apple Music </td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='iphone_media1'><input type='radio' id='iphone_media1' name='iphone_media' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='iphone_media2'><input type='radio' id='iphone_media2' name='iphone_media' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td><img src='ios_cellulardata.png' width='20' height='20'>Mobile Data </td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='iphone_mobile1'><input type='radio' id='iphone_mobile1' name='iphone_mobile' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='iphone_mobile2'><input type='radio' id='iphone_mobile2' name='iphone_mobile' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td><img src='13.png' width='20' height='20'> Motion & Fitness </td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='iphone_motion1'><input type='radio' id='iphone_motion1' name='iphone_motion' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='iphone_motion2'><input type='radio' id='iphone_motion2' name='iphone_motion' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
</table>


<!--
  <tr><td><img src='7.png' width='20' height='20'> Microphone  <font color=\"red\"> maybe better to include?</font> </td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='iphone_microphone1'><input type='radio' id='iphone_microphone1' name='iphone_microphone' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='iphone_microphone2'><input type='radio' id='iphone_microphone2' name='iphone_microphone' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

<br><input type=\"checkbox\" name=\"iphone9\" value=\"1\"> <img src=\"ios_notifications.png\" width=\"20\" height=\"20\">  Notifications 
<br><input type=\"checkbox\" name=\"iphone10\" value=\"1\"> <img src=\"ios_backgroundapp.png\" width=\"20\" height=\"20\">  Background App Refresh 
-->
</div>



<div class='display' id='display12windows' style='display:none'>

<br><hr><br>For the privacy settings of Windows users, you can allow/deny each privacy permission for each app.
This can be found by simply pressing <strong>Start</strong>, <strong>Settings</strong>, <strong>Privacy</strong>. 
<br><br> Please check which of the following permissions you have granted to <b>Fitbit</b>: 


<table>
  <tr><th></th> <th></th></tr>
  <tr><td><img src='winlocation.png' height='20'> Location</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='windows_location1'><input type='radio' id='windows_location1' name='windows_location' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='windows_location2'><input type='radio' id='windows_location2' name='windows_location' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='wincamera.png' height='20'> Camera</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='windows_camera1'><input type='radio' id='windows_camera1' name='windows_camera' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='windows_camera2'><input type='radio' id='windows_camera2' name='windows_camera' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='wincontacts.png' height='20'> Contacts</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='windows_contacts1'><input type='radio' id='windows_contacts1' name='windows_contacts' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='windows_contacts2'><input type='radio' id='windows_contacts2' name='windows_contacts' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

<tr><td><img src='winmessaging.png' height='20'> Messaging</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='windows_messaging1'><input type='radio' id='windows_messaging1' name='windows_messaging' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='windows_messaging2'><input type='radio' id='windows_messaging2' name='windows_messaging' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

<tr><td><img src='winradios.png' height='20'> Radios</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='windows_radios1'><input type='radio' id='windows_radios1' name='windows_radios' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='windows_radios2'><input type='radio' id='windows_radios2' name='windows_radios' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
<!--
  <tr><td><img src='winmicrophone.png' height='20'> Microphone</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='windows_microphone1'><input type='radio' id='windows_microphone1' name='windows_microphone' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='windows_microphone2'><input type='radio' id='windows_microphone2' name='windows_microphone' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
-->
</table>
</div>

<br>

<div class='display' id='display123android1' style='display:none'>
<hr><br>

Please check which of the following permissions you have granted to <b>Fitbit</b>: 

<br><br>
Tip: This can be simply found by going to your device's <b>Settings</b>, tapping <b>Apps</b> or (<b>Application Manager</b> depending on your device), tapping <b>Fitbit</b> and tapping <b>Permissions</b>. 
The full instruction is shown <a href= 'https://support.google.com/googleplay/answer/6270602?hl=en\' target='_blank'> here</a>.

<br><br>
<table>
  <tr><th></th> <th></th></tr>
  <tr><td><img src='a_camera.png' width='20' height='20'> Camera</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android_camera1'><input type='radio' id='android_camera1' name='android_camera' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android_camera2'><input type='radio' id='android_camera2' name='android_camera' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_contact2.png' width='20' height='20'> Contacts</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android_contacts1'><input type='radio' id='android_contacts1' name='android_contacts' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android_contacts2'><input type='radio' id='android_contacts2' name='android_contacts' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_location.png' width='20' height='20'>Location</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android_location1'><input type='radio' id='android_location1' name='android_location' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android_location2'><input type='radio' id='android_location2' name='android_location' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_phone.png' width='20' height='20'> Phone</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android_phone1'><input type='radio' id='android_phone1' name='android_phone' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android_phone2'><input type='radio' id='android_phone2' name='android_phone' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_sms.png' width='20' height='20'> SMS</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android_sms1'><input type='radio' id='android_sms1' name='android_sms' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android_sms2'><input type='radio' id='android_sms2' name='android_sms' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_storage.png' width='20' height='20'> Storage</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android_storage1'><input type='radio' id='android_storage1' name='android_storage' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android_storage2'><input type='radio' id='android_storage2' name='android_storage' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
</table>
<span><span>

</p>
</div>




<div class='display' id='display123android2' style='display:none'>
<hr><br>
In this version, you had no choice but to accept all the privacy permissions during the installation of Fitbit.
If you have the option to change such settings, which of the following permissions would you grant to Fitbit?
<!--
In this android version, you can't allow/deny each privacy permission. 
However, if you have the chance,  please choose which of the following permissions you will allow <b>Fitbit</b> to access: 
-->
<table>
  <tr><th></th> <th></th></tr>
  <tr><td><img src='a_identity.png' width='20' height='20'> Identity</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android5_identity1'><input type='radio' id='android5_identity1' name='android5_identity' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android5_identity2'><input type='radio' id='android5_identity2' name='android5_identity' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_contact2.png' width='20' height='20'> Contacts</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android5_contacts1'><input type='radio' id='android5_contacts1' name='android5_contacts' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android5_contacts2'><input type='radio' id='android5_contacts2' name='android5_contacts' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_location.png' width='20' height='20'> Location</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android5_location1'><input type='radio' id='android5_location1' name='android5_location' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android5_location2'><input type='radio' id='android5_location2' name='android5_location' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_sms.png' width='20' height='20'> SMS</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android5_sms1'><input type='radio' id='android5_sms1' name='android5_sms' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android5_sms2'><input type='radio' id='android5_sms2' name='android5_sms' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_photos.png' width='20' height='20'> Photos</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android5_photos1'><input type='radio' id='android5_photos1' name='android5_photos' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android5_photos2'><input type='radio' id='android5_photos2' name='android5_photos' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_storage.png' width='20' height='20'> Storage</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android5_storage1'><input type='radio' id='android5_storage1' name='android5_storage' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android5_storage2'><input type='radio' id='android5_storage2' name='android5_storage' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_camera.png' width='20' height='20'> Camera</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android5_camera1'><input type='radio' id='android5_camera1' name='android5_camera' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android5_camera2'><input type='radio' id='android5_camera2' name='android5_camera' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_bluetooth.png' width='20' height='20'> Bluetooth Connection</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android5_bluetooth1'><input type='radio' id='android5_bluetooth1' name='android5_bluetooth' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android5_bluetooth2'><input type='radio' id='android5_bluetooth2' name='android5_bluetooth' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

  <tr><td><img src='a_phone.png' width='20' height='20'>Phone </td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='android5_phone1'><input type='radio' id='android5_phone1' name='android5_phone' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='android5_phone2'><input type='radio' id='android5_phone2' name='android5_phone' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>

<!--or (<img src='a_deviceid.png' width='20' height='20'>Device ID & Call Information)-->
</table>

</div>
<p class='error' id='error2'><br><br></p><input type='hidden' id='timeq2' name='timeq2'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_2();'>Next</button> 
    </div>
<br>

  </div>
</div>




<div class='tab' id='tab3'><hr>
Are you satisfied with how the current privacy permission settings work on your fitness app?
 <!-- Are you satisfied with the current privacy permission settings on your fitness app? -->
 <br> <br>


<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='agreea'>  <input type='radio' id='agreea' name='agree' value='1' onclick='boldage(this)'/> <br/> very  <br/> dissatisfied  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='agreeb'>  <input type='radio' id='agreeb' name='agree' value='2' onclick='boldage(this)'/> <br/> dissatisfied <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='agreec'>  <input type='radio' id='agreec' name='agree' value='3' onclick='boldage(this)'/> <br/> somewhat <br/> dissatisfied  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='agreed'>  <input type='radio' id='agreed' name='agree' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='agreee'>  <input type='radio' id='agreee' name='agree' value='5' onclick='boldage(this)'/> <br/> somewhat <br/> satisfied  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='agreef'>  <input type='radio' id='agreef' name='agree' value='6' onclick='boldage(this)'/> <br/> satisfied  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='agreeg'>  <input type='radio' id='agreeg' name='agree' value='7' onclick='boldage(this)'/> <br/> very <br/> satisfied  </label>  </div>
</div></span>


<p class='error' id='error3'><br><br></p><input type='hidden' id='timeq3' name='timeq3'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_3();'>Next</button> 
    </div>
<br>

  </div>
</div>



<div class='tab' id='tab4'><hr>
Fitbit allows you to grant/deny each permission that you want to share to the other apps.
For example, <b> Runkeeper </b> asks for the permissions in this <a href='fitbit4thparty4.png' target='_blank'>image link</a>.
<br><br>
To check which permissions you had given to other apps, please log-in to the Fitbit <b> Web app </b> (not the mobile app) at <a href='https://www.fitbit.com/'  target='_blank'>www.fitbit.com</a>.
Then, click the <b> configuration icon on the right side </b>, click <b> settings </b> and then click <b> applications </b>.
<br><br>
<hr>
To make sure you checked the web app, please indicate what item is listed below applications on the settings page. <br><br>
 
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='testa'>  <input type='radio' id='testa' name='test1' value='1' onclick='boldage(this)'/> <br/> Personal <br/> Info  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='testb'>  <input type='radio' id='testb' name='test1' value='2' onclick='boldage(this)'/> <br/> Notifications <br/><br/> </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='testc'>  <input type='radio' id='testc' name='test1' value='3' onclick='boldage(this)'/> <br/> Data <br/> Export  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='testd'>  <input type='radio' id='testd' name='test1' value='4' onclick='boldage(this)'/> <br/> Sharing <br/><br/>  </label>  </div>
</div></span>
<br><br>

Aside from the Fitbit app, do you have another health/fitness app that accesses your Fitbit data? <br><br>

<span><span>
<label for='fpapp'>  <input type='radio' id='fpapp' name='fourthp_app' value='2' onclick='fourthparty();boldage(this)'/> Yes </label>
<label for='fpapp2'> <input type='radio' id='fpapp2' name='fourthp_app' value='1' onclick='fourthparty();boldage(this)'/> No </label>
</span></span>
<br>



<div class='display' id='displayfp' style='display:none'>
<br>
<hr>

Please enter the name of the app (in case of multiple apps, please choose the one you use most frequently): 
<input type='text' id='app_others_char' placeholder='Name of the app...'  name='app_others_char'>
<!--<input <input type='text' placeholder='Name of the app...' oninput='this.className = ''' name='app_others_char'>-->  
<br><br>

and the permissions you have given to this app:
<br><br>  

<table> 
  <tr><th></th> <th></th></tr>
  <tr><td>sleep</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty_sleepa'><input type='radio' id='fparty_sleepa' name='fparty_sleep' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty_sleepb'><input type='radio' id='fparty_sleepb' name='fparty_sleep' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>Fitbit devices and Settings</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty_devicesa'><input type='radio' id='fparty_devicesa' name='fparty_devices' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty_devicesb'><input type='radio' id='fparty_devicesb' name='fparty_devices' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>food and water logs</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty_fooda'><input type='radio' id='fparty_fooda' name='fparty_food' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty_foodb'><input type='radio' id='fparty_foodb' name='fparty_food' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>activity and exercise</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty_activitya'><input type='radio' id='fparty_activitya' name='fparty_activity' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty_activityb'><input type='radio' id='fparty_activityb' name='fparty_activity' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>friends</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty_friendsa'><input type='radio' id='fparty_friendsa' name='fparty_friends' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty_friendsb'><input type='radio' id='fparty_friendsb' name='fparty_friends' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>heart rate</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty_heartratea'><input type='radio' id='fparty_heartratea' name='fparty_heartrate' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty_heartrateb'><input type='radio' id='fparty_heartrateb' name='fparty_heartrate' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>profile</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty_profilea'><input type='radio' id='fparty_profilea' name='fparty_profile' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty_profileb'><input type='radio' id='fparty_profileb' name='fparty_profile' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>weight</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty_weighta'><input type='radio' id='fparty_weighta' name='fparty_weight' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty_weightb'><input type='radio' id='fparty_weightb' name='fparty_weight' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>location and GPS</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty_locationa'><input type='radio' id='fparty_locationa' name='fparty_location' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty_locationb'><input type='radio' id='fparty_locationb' name='fparty_location' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
</table>
<br><br>


</div>


<div class='display' id='displayfp2' style='display:none'>
<br>
<hr>
In case you decide to install another health app that requests access to your Fibit data, please check which of the following permissions you will give consent in exchange for the service: 
<br><br>
<table>
  <tr><th></th> <th></th></tr>
  <tr><td>sleep</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty2_sleepa'><input type='radio' id='fparty2_sleepa' name='fparty2_sleep' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty2_sleepb'><input type='radio' id='fparty2_sleepb' name='fparty2_sleep' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>Fitbit devices and Settings</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty2_devicesa'><input type='radio' id='fparty2_devicesa' name='fparty2_devices' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty2_devicesb'><input type='radio' id='fparty2_devicesb' name='fparty2_devices' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>food and water logs</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty2_fooda'><input type='radio' id='fparty2_fooda' name='fparty2_food' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty2_foodb'><input type='radio' id='fparty2_foodb' name='fparty2_food' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>activity and exercise</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty2_activitya'><input type='radio' id='fparty2_activitya' name='fparty2_activity' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty2_activityb'><input type='radio' id='fparty2_activityb' name='fparty2_activity' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>friends</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty2_friendsa'><input type='radio' id='fparty2_friendsa' name='fparty2_friends' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty2_friendsb'><input type='radio' id='fparty2_friendsb' name='fparty2_friends' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>heart rate</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty2_heartratea'><input type='radio' id='fparty2_heartratea' name='fparty2_heartrate' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty2_heartrateb'><input type='radio' id='fparty2_heartrateb' name='fparty2_heartrate' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>profile</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty2_profilea'><input type='radio' id='fparty2_profilea' name='fparty2_profile' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty2_profileb'><input type='radio' id='fparty2_profileb' name='fparty2_profile' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>weight</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty2_weighta'><input type='radio' id='fparty2_weighta' name='fparty2_weight' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty2_weightb'><input type='radio' id='fparty2_weightb' name='fparty2_weight' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
  <tr><td>location and GPS</td> <td></span></span>
&nbsp;&nbsp;&nbsp;&nbsp;<label for='fparty2_locationa'><input type='radio' id='fparty2_locationa' name='fparty2_location' value='2' onclick='boldage(this);'> Yes </label>
&nbsp;<label for='fparty2_locationb'><input type='radio' id='fparty2_locationb' name='fparty2_location' value='1' onclick='boldage(this);'> No </label>
</span></span></td> </tr>
</table>
<br>
</div>


<p class='error' id='error4'><br><br></p><input type='hidden' id='timeq4' name='timeq4'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_4();'>Next</button> 
    </div>
<br>

  </div>
</div>




<div class='tab' id='tab5'><hr>

Fitbit asks for your information when you <b>set-up</b> your app account.
We would like to know your preference in sharing your <b>real</b> information.

<br><br>
Have you shared your <strong>real</strong> data in Fitbit on the following?<br><br>



<table>
  <tr><th></th> <th></th></tr>
  <tr><td>First Name:</td> <td><span><div>
 <label for='app_firstnamea'>  <input type='radio' id='app_firstnamea' name='app_firstname' value='2' onclick='boldage(this)'/> Yes </label>  
 <label for='app_firstnameb'>  <input type='radio' id='app_firstnameb' name='app_firstname' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td> </tr>

  <tr><td>Last Name:</td> <td><span><div>
 <label for='app_lastnamea'>  <input type='radio' id='app_lastnamea' name='app_lastname' value='2' onclick='boldage(this)'/> Yes </label>  
 <label for='app_lastnameb'>  <input type='radio' id='app_lastnameb' name='app_lastname' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td> </tr>

  <tr><td>Birthday:</td> <td><span><div>
 <label for='app_bdaya'>  <input type='radio' id='app_bdaya' name='app_bday' value='2' onclick='boldage(this)'/> Yes </label>  
 <label for='app_bdayb'>  <input type='radio' id='app_bdayb' name='app_bday' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td> </tr>

  <tr><td>Gender:</td> <td><span><div>
 <label for='app_gendera'>  <input type='radio' id='app_gendera' name='app_gender' value='2' onclick='boldage(this)'/> Yes </label> 
 <label for='app_genderb'>  <input type='radio' id='app_genderb' name='app_gender' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td> </tr>

  <tr><td>Height:</td> <td><span><div>
 <label for='app_heighta'>  <input type='radio' id='app_heighta' name='app_height' value='2' onclick='boldage(this)'/> Yes </label> 
 <label for='app_heightb'>  <input type='radio' id='app_heightb' name='app_height' value='1' onclick='boldage(this)'/> No </label>  
</div></span> </td></tr>

  <tr>  <td>Weight:</td><td><span><div>
 <label for='app_weighta'>  <input type='radio' id='app_weighta' name='app_weight' value='2' onclick='boldage(this)'/> Yes </label> 
 <label for='app_weightb'>  <input type='radio' id='app_weightb' name='app_weight' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td></tr>
</table>

<br><br>
<hr>

Would you still share the following information with Fitbit if it were not compulsory to do so? 
 <br><br>



<table>
  <tr><th></th> <th></th></tr>
  <tr><td>First Name:</td> <td><span><div>
 <label for='app_firstname2a'>  <input type='radio' id='app_firstname2a' name='app_firstname2' value='2' onclick='boldage(this)'/> Yes </label>  
 <label for='app_firstname2b'>  <input type='radio' id='app_firstname2b' name='app_firstname2' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td> </tr>

  <tr><td>Last Name:</td> <td><span><div>
 <label for='app_lastname2a'>  <input type='radio' id='app_lastname2a' name='app_lastname2' value='2' onclick='boldage(this)'/> Yes </label>  
 <label for='app_lastname2b'>  <input type='radio' id='app_lastname2b' name='app_lastname2' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td> </tr>

  <tr><td>Birthday:</td> <td><span><div>
 <label for='app_bday2a'>  <input type='radio' id='app_bday2a' name='app_bday2' value='2' onclick='boldage(this)'/> Yes </label>  
 <label for='app_bday2b'>  <input type='radio' id='app_bday2b' name='app_bday2' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td> </tr>

  <tr><td>Gender:</td> <td><span><div>
 <label for='app_gender2a'>  <input type='radio' id='app_gender2a' name='app_gender2' value='2' onclick='boldage(this)'/> Yes </label> 
 <label for='app_gender2b'>  <input type='radio' id='app_gender2b' name='app_gender2' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td> </tr>

  <tr><td>Height:</td> <td><span><div>
 <label for='app_height2a'>  <input type='radio' id='app_height2a' name='app_height2' value='2' onclick='boldage(this)'/> Yes </label> 
 <label for='app_height2b'>  <input type='radio' id='app_height2b' name='app_height2' value='1' onclick='boldage(this)'/> No </label>  
</div></span> </td></tr>

  <tr>  <td>Weight:</td><td><span><div>
 <label for='app_weight2a'>  <input type='radio' id='app_weight2a' name='app_weight2' value='2' onclick='boldage(this)'/> Yes </label> 
 <label for='app_weight2b'>  <input type='radio' id='app_weight2b' name='app_weight2' value='1' onclick='boldage(this)'/> No </label>  
</div></span></td></tr>
</table>


<br>
<br>
<p class='error' id='error5'><br><br></p><input type='hidden' id='timeq5' name='timeq5'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_5();'>Next</button> 
    </div>
<br>

  </div>
</div>









<div class='tab' id='tab6'>

<hr>

<div id='tablea'>
<table>
  <tr>
<th>&nbsp;</th>
<td class='bord' style='align:center'>Would you share the following data if <b>the risks significantly increased?</b></td>
  </tr>
  <tr>
 <td>&nbsp;</td>
<td class='bord'>(e.g. this information is shared with advertisers)</td>
  </tr>
 <tr>
 <td height='60'><b>Mobile Phone Permissions</b></td>
 <td height='60'>&nbsp;</td>
</tr> 
  <tr id='neg2_identity'>
    <td>Identity</td>
    <td><div class='neg2_identity_group1'><span><span><label for='neg2_identitya'> <input type='radio' id='neg2_identitya' name='neg2_identity2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_identitya2'>  <input type='radio' id='neg2_identitya2' name='neg2_identity2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>

  <tr id='neg2_contacts'>
    <td>Contacts</td>
    <td><div class='neg2_contacts_group1'><span><span><label for='neg2_contactsa'> <input type='radio' id='neg2_contactsa' name='neg2_contacts2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_contactsa2'>  <input type='radio' id='neg2_contactsa2' name='neg2_contacts2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_location'>
    <td>Location</td>
    <td><div class='neg2_location_group1'><span><span><label for='neg2_locationa'> <input type='radio' id='neg2_locationa' name='neg2_location2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_locationa2'>  <input type='radio' id='neg2_locationa2' name='neg2_location2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_sms'>
    <td>SMS</td>
    <td><div class='neg2_sms_group1'><span><span><label for='neg2_smsa'> <input type='radio' id='neg2_smsa' name='neg2_sms2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_smsa2'>  <input type='radio' id='neg2_smsa2' name='neg2_sms2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>

  <tr id='neg2_storage'>
    <td>Storage</td>
    <td><div class='neg2_storage_group1'><span><span><label for='neg2_storagea'> <input type='radio' id='neg2_storagea' name='neg2_storage2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_storagea2'>  <input type='radio' id='neg2_storagea2' name='neg2_storage2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_camera'>
    <td>Camera</td>
    <td><div class='neg2_camera_group1'><span><span><label for='neg2_cameraa'> <input type='radio' id='neg2_cameraa' name='neg2_camera2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_cameraa2'>  <input type='radio' id='neg2_cameraa2' name='neg2_camera2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>      
 </tr>

  <tr id='neg2_bluetooth'>
    <td>Bluetooth</td>
    <td><div class='neg2_bluetooth_group1'><span><span><label for='neg2_bluetootha'> <input type='radio' id='neg2_bluetootha' name='neg2_bluetooth2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_bluetootha2'>  <input type='radio' id='neg2_bluetootha2' name='neg2_bluetooth2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_photos'>
    <td>Photos</td>
    <td><div class='neg2_photos_group1'><span><span><label for='neg2_photosa'> <input type='radio' id='neg2_photosa' name='neg2_photos2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_photosa2'>  <input type='radio' id='neg2_photosa2' name='neg2_photos2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_phone'>
    <td>Phone</td>
    <td><div class='neg2_phone_group1'><span><span><label for='neg2_phonea'> <input type='radio' id='neg2_phonea' name='neg2_phone2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_phonea2'>  <input type='radio' id='neg2_phonea2' name='neg2_phone2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>  

 <tr id='neg2_motion'>
    <td>Motion & Fitness</td>
    <td><div class='neg2_motion_group1'><span><span><label for='neg2_motiona'> <input type='radio' id='neg2_motiona' name='neg2_motion2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_motiona2'>  <input type='radio' id='neg2_motiona2' name='neg2_motion2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_media'>
    <td>Media & Music</td>
    <td><div class='neg2_media_group1'><span><span><label for='neg2_mediaa'> <input type='radio' id='neg2_mediaa' name='neg2_media2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_mediaa2'>  <input type='radio' id='neg2_mediaa2' name='neg2_media2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_mobiledata'>
    <td>Mobile Data</td>
    <td><div class='neg2_mobiledata_group1'><span><span><label for='neg2_mobiledataa'> <input type='radio' id='neg2_mobiledataa' name='neg2_mobiledata2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_mobiledataa2'>  <input type='radio' id='neg2_mobiledataa2' name='neg2_mobiledata2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>

 <tr>
 <td height='60'><b>Fitness Data</b></td>
 <td height='60'>&nbsp;</td>
</tr> 
  <tr id='neg2_steps'>
    <td>number of steps</td>
    <td><div class='neg2_steps_group1'><span><span><label for='neg2_stepsa'> <input type='radio' id='neg2_stepsa' name='neg2_steps2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_stepsa2'>  <input type='radio' id='neg2_stepsa2' name='neg2_steps2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_distance'>
    <td>distance covered</td>
    <td><div class='neg2_distance_group1'><span><span><label for='neg2_distancea'> <input type='radio' id='neg2_distancea' name='neg2_distance2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_distancea2'>  <input type='radio' id='neg2_distancea2' name='neg2_distance2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>
  <tr id='neg2_elevation'>
    <td>elevation</td>
    <td><div class='neg2_elevation_group1'><span><span><label for='neg2_elevationa'> <input type='radio' id='neg2_elevationa' name='neg2_elevation2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_elevationa2'>  <input type='radio' id='neg2_elevationa2' name='neg2_elevation2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>      
 </tr>
  <tr id='neg2_floors'>
    <td>floors climbed</td>
    <td><div class='neg2_floors_group1'><span><span><label for='neg2_floorsa'> <input type='radio' id='neg2_floorsa' name='neg2_floors2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_floorsa2'>  <input type='radio' id='neg2_floorsa2' name='neg2_floors2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_minutesactivity'>
    <td>minutes of activities</td>
    <td><div class='neg2_minutesactivity_group1'><span><span><label for='neg2_minutesactivitya'> <input type='radio' id='neg2_minutesactivitya' name='neg2_minutesactivity2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_minutesactivitya2'>  <input type='radio' id='neg2_minutesactivitya2' name='neg2_minutesactivity2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_activitycalories'>
    <td>activity calories</td>
    <td><div class='neg2_activitycalories_group1'><span><span><label for='neg2_activitycaloriesa'> <input type='radio' id='neg2_activitycaloriesa' name='neg2_activitycalories2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_activitycaloriesa2'>  <input type='radio' id='neg2_activitycaloriesa2' name='neg2_activitycalories2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_weight'>
    <td>weight</td>
    <td><div class='neg2_weight_group1'><span><span><label for='neg2_weighta'> <input type='radio' id='neg2_weighta' name='neg2_weight2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_weighta2'>  <input type='radio' id='neg2_weighta2' name='neg2_weight2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>
  <tr id='neg2_minutesasleep'>
    <td>sleep</td>
    <td><div class='neg2_minutesasleep_group1'><span><span><label for='neg2_minutesasleepa'> <input type='radio' id='neg2_minutesasleepa' name='neg2_minutesasleep2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_minutesasleepa2'>  <input type='radio' id='neg2_minutesasleepa2' name='neg2_minutesasleep2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>
  <tr id='neg2_heartrate'>
    <td>heart rate</td>
    <td><div class='neg2_heartrate_group1'><span><span><label for='neg2_heartratea'> <input type='radio' id='neg2_heartratea' name='neg2_heartrate2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_heartratea2'>  <input type='radio' id='neg2_heartratea2' name='neg2_heartrate2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_food'>
    <td>food and water logs</td>
    <td><div class='neg2_food_group1'><span><span><label for='neg2_fooda'> <input type='radio' id='neg2_fooda' name='neg2_food2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_fooda2'>  <input type='radio' id='neg2_fooda2' name='neg2_food2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>
  <tr id='neg2_friends'>
    <td>friends</td>
    <td><div class='neg2_friends_group1'><span><span><label for='neg2_friendsa'> <input type='radio' id='neg2_friendsa' name='neg2_friends2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_friendsa2'>  <input type='radio' id='neg2_friendsa2' name='neg2_friends2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>
  <tr id='neg2_profile'>
    <td>profile</td>
    <td><div class='neg2_profile_group1'><span><span><label for='neg2_profilea'> <input type='radio' id='neg2_profilea' name='neg2_profile2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_profilea2'>  <input type='radio' id='neg2_profilea2' name='neg2_profile2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_locationf'>
    <td>location and GPS</td>
    <td><div class='neg2_locationf_group1'><span><span><label for='neg2_locationfa'> <input type='radio' id='neg2_locationfa' name='neg2_locationf2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_locationfa2'>  <input type='radio' id='neg2_locationfa2' name='neg2_locationf2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_settings'>
    <td>FitPro devices and settings</td>
    <td><div class='neg2_settings_group1'><span><span><label for='neg2_settingsa'> <input type='radio' id='neg2_settingsa' name='neg2_settings2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_settingsa2'>  <input type='radio' id='neg2_settingsa2' name='neg2_settings2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

 <tr>
 <td height='60'><b>In-application Data</b></td>
 <td height='60'>&nbsp;</td>
</tr>  
  <tr id='neg2_firstname_p'>
    <td>first name</td>
    <td><div class='neg2_firstname_p_group1'><span><span><label for='neg2_firstname_pa'> <input type='radio' id='neg2_firstname_pa' name='neg2_firstname_p2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_firstname_pa2'>  <input type='radio' id='neg2_firstname_pa2' name='neg2_firstname_p2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_lastname_p'>
    <td>last name</td>
    <td><div class='neg2_lastname_p_group1'><span><span><label for='neg2_lastname_pa'> <input type='radio' id='neg2_lastname_pa' name='neg2_lastname_p2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_lastname_pa2'>  <input type='radio' id='neg2_lastname_pa2' name='neg2_lastname_p2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>      
 </tr>


  <tr id='neg2_gender_p'>
    <td>gender</td>
    <td><div class='neg2_gender_p_group1'><span><span><label for='neg2_gender_pa'> <input type='radio' id='neg2_gender_pa' name='neg2_gender_p2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_gender_pa2'>  <input type='radio' id='neg2_gender_pa2' name='neg2_gender_p2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_bday_p'>
    <td>birthday</td>
    <td><div class='neg2_bday_p_group1'><span><span><label for='neg2_bday_pa'> <input type='radio' id='neg2_bday_pa' name='neg2_bday_p2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_bday_pa2'>  <input type='radio' id='neg2_bday_pa2' name='neg2_bday_p2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_height_p'>
    <td>height</td>
    <td><div class='neg2_height_p_group1'><span><span><label for='neg2_height_pa'> <input type='radio' id='neg2_height_pa' name='neg2_height_p2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_height_pa2'>  <input type='radio' id='neg2_height_pa2' name='neg2_height_p2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_weight_p'>
    <td>weight</td>
    <td><div class='neg2_weight_p_group1'><span><span><label for='neg2_weight_pa'> <input type='radio' id='neg2_weight_pa' name='neg2_weight_p2a' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_weight_pa2'>  <input type='radio' id='neg2_weight_pa2' name='neg2_weight_p2a' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>
</table>
</div>

<br><br>
<p class='error' id='error6'><br><br></p><input type='hidden' id='timeq6' name='timeq6'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_6();'>Next</button> 
    </div>
<br>

  </div>
</div>






<div class='tab' id='tab7'>

<hr>


<div id='tableb'>
<table>
  <tr>
<th>&nbsp;</th>
<td class='bord' style='align:center'>Would you share the following data if <b>the benefits significantly decreased?</b></td>
  </tr>
  <tr>
 <td>&nbsp;</td>
<td class='bord'>(e.g. a certain functionality related to this information is no longer available)</td>
  </tr>
 <tr>
 <td height='60'><b>Mobile Phone Permissions</b></td>
 <td height='60'>&nbsp;</td>
</tr>
  <tr id='neg2_identity'>
    <td>Identity</td>
    <td><div class='neg2_identity_group1'><span><span><label for='neg2_identityb'> <input type='radio' id='neg2_identityb' name='neg2_identity2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_identityb2'>  <input type='radio' id='neg2_identityb2' name='neg2_identity2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>

  <tr id='neg2_contacts'>
    <td>Contacts</td>
    <td><div class='neg2_contacts_group1'><span><span><label for='neg2_contactsb'> <input type='radio' id='neg2_contactsb' name='neg2_contacts2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_contactsb2'>  <input type='radio' id='neg2_contactsb2' name='neg2_contacts2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>

  <tr id='neg2_location'>
    <td>Location</td>
    <td><div class='neg2_location_group1'><span><span><label for='neg2_locationb'> <input type='radio' id='neg2_locationb' name='neg2_location2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_locationb2'>  <input type='radio' id='neg2_locationb2' name='neg2_location2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_sms'>
    <td>SMS</td>
    <td><div class='neg2_sms_group1'><span><span><label for='neg2_smsb'> <input type='radio' id='neg2_smsb' name='neg2_sms2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_smsb2'>  <input type='radio' id='neg2_smsb2' name='neg2_sms2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>

  <tr id='neg2_storage'>
    <td>Storage</td>
    <td><div class='neg2_storage_group1'><span><span><label for='neg2_storageb'> <input type='radio' id='neg2_storageb' name='neg2_storage2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_storageb2'>  <input type='radio' id='neg2_storageb2' name='neg2_storage2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>

  <tr id='neg2_camera'>
    <td>Camera</td>
    <td><div class='neg2_camera_group1'><span><span><label for='neg2_camerab'> <input type='radio' id='neg2_camerab' name='neg2_camera2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_camerab2'>  <input type='radio' id='neg2_camerab2' name='neg2_camera2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_bluetooth'>
    <td>Bluetooth</td>
    <td><div class='neg2_bluetooth_group1'><span><span><label for='neg2_bluetoothb'> <input type='radio' id='neg2_bluetoothb' name='neg2_bluetooth2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_bluetoothb2'>  <input type='radio' id='neg2_bluetoothb2' name='neg2_bluetooth2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_photos'>
    <td>Photos</td>
    <td><div class='neg2_photos_group1'><span><span><label for='neg2_photosb'> <input type='radio' id='neg2_photosb' name='neg2_photos2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_photosb2'>  <input type='radio' id='neg2_photosb2' name='neg2_photos2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_phone'>
    <td>Phone</td>
    <td><div class='neg2_phone_group1'><span><span><label for='neg2_phoneb'> <input type='radio' id='neg2_phoneb' name='neg2_phone2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_phoneb2'>  <input type='radio' id='neg2_phoneb2' name='neg2_phone2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>  

 <tr id='neg2_motion'>
    <td>Motion & Fitness</td>
    <td><div class='neg2_motion_group1'><span><span><label for='neg2_motionb'> <input type='radio' id='neg2_motionb' name='neg2_motion2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_motionb2'>  <input type='radio' id='neg2_motionb2' name='neg2_motion2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_media'>
    <td>Media & Music</td>
    <td><div class='neg2_media_group1'><span><span><label for='neg2_mediab'> <input type='radio' id='neg2_mediab' name='neg2_media2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_mediab2'>  <input type='radio' id='neg2_mediab2' name='neg2_media2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_mobiledata'>
    <td>Mobile Data</td>
    <td><div class='neg2_mobiledata_group1'><span><span><label for='neg2_mobiledatab'> <input type='radio' id='neg2_mobiledatab' name='neg2_mobiledata2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_mobiledatab2'>  <input type='radio' id='neg2_mobiledatab2' name='neg2_mobiledata2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>
 <tr>
 <td height='60'><b>Fitness Data</b></td>
 <td height='60'>&nbsp;</td>
</tr>
  <tr id='neg2_steps'>
    <td>number of steps</td>
    <td><div class='neg2_steps_group1'><span><span><label for='neg2_stepsb'> <input type='radio' id='neg2_stepsb' name='neg2_steps2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_stepsb2'>  <input type='radio' id='neg2_stepsb2' name='neg2_steps2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_distance'>
    <td>distance covered</td>
    <td><div class='neg2_distance_group1'><span><span><label for='neg2_distanceb'> <input type='radio' id='neg2_distanceb' name='neg2_distance2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_distanceb2'>  <input type='radio' id='neg2_distanceb2' name='neg2_distance2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_elevation'>
    <td>elevation</td>
    <td><div class='neg2_elevation_group1'><span><span><label for='neg2_elevationb'> <input type='radio' id='neg2_elevationb' name='neg2_elevation2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_elevationb2'>  <input type='radio' id='neg2_elevationb2' name='neg2_elevation2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>
  <tr id='neg2_floors'>
    <td>floors climbed</td>
    <td><div class='neg2_floors_group1'><span><span><label for='neg2_floorsb'> <input type='radio' id='neg2_floorsb' name='neg2_floors2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_floorsb2'>  <input type='radio' id='neg2_floorsb2' name='neg2_floors2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>
  <tr id='neg2_minutesactivity'>
    <td>minutes of activities</td>
    <td><div class='neg2_minutesactivity_group1'><span><span><label for='neg2_minutesactivityb'> <input type='radio' id='neg2_minutesactivityb' name='neg2_minutesactivity2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_minutesactivityb2'>  <input type='radio' id='neg2_minutesactivityb2' name='neg2_minutesactivity2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_activitycalories'>
    <td>activity calories</td>
    <td><div class='neg2_activitycalories_group1'><span><span><label for='neg2_activitycaloriesb'> <input type='radio' id='neg2_activitycaloriesb' name='neg2_activitycalories2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_activitycaloriesb2'>  <input type='radio' id='neg2_activitycaloriesb2' name='neg2_activitycalories2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_weight'>
    <td>weight</td>
    <td><div class='neg2_weight_group1'><span><span><label for='neg2_weightb'> <input type='radio' id='neg2_weightb' name='neg2_weight2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_weightb2'>  <input type='radio' id='neg2_weightb2' name='neg2_weight2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_minutesasleep'>
    <td>sleep</td>
    <td><div class='neg2_minutesasleep_group1'><span><span><label for='neg2_minutesasleepb'> <input type='radio' id='neg2_minutesasleepb' name='neg2_minutesasleep2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_minutesasleepb2'>  <input type='radio' id='neg2_minutesasleepb2' name='neg2_minutesasleep2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_heartrate'>
    <td>heart rate</td>
    <td><div class='neg2_heartrate_group1'><span><span><label for='neg2_heartrateb'> <input type='radio' id='neg2_heartrateb' name='neg2_heartrate2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_heartrateb2'>  <input type='radio' id='neg2_heartrateb2' name='neg2_heartrate2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_food'>
    <td>food and water logs</td>
    <td><div class='neg2_food_group1'><span><span><label for='neg2_foodb'> <input type='radio' id='neg2_foodb' name='neg2_food2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_foodb2'>  <input type='radio' id='neg2_foodb2' name='neg2_food2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_friends'>
    <td>friends</td>
    <td><div class='neg2_friends_group1'><span><span><label for='neg2_friendsb'> <input type='radio' id='neg2_friendsb' name='neg2_friends2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_friendsb2'>  <input type='radio' id='neg2_friendsb2' name='neg2_friends2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_profile'>
    <td>profile</td>
    <td><div class='neg2_profile_group1'><span><span><label for='neg2_profileb'> <input type='radio' id='neg2_profileb' name='neg2_profile2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_profileb2'>  <input type='radio' id='neg2_profileb2' name='neg2_profile2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
  <tr id='neg2_locationf'>
    <td>location and GPS</td>
   <td><div class='neg2_locationf_group1'><span><span><label for='neg2_locationfb'> <input type='radio' id='neg2_locationfb' name='neg2_locationf2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_locationfb2'>  <input type='radio' id='neg2_locationfb2' name='neg2_locationf2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>   
 </tr>
  <tr id='neg2_settings'>
    <td>FitPro devices and settings</td>
   <td><div class='neg2_settings_group1'><span><span><label for='neg2_settingsb'> <input type='radio' id='neg2_settingsb' name='neg2_settings2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_settingsb2'>  <input type='radio' id='neg2_settingsb2' name='neg2_settings2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>
 <tr>
 <td height='60'><b>In-application Data</b></td>
 <td height='60'>&nbsp;</td>
</tr>
  <tr id='neg2_firstname_p'>
    <td>first name</td>
   <td><div class='neg2_firstname_p_group1'><span><span><label for='neg2_firstname_pb'> <input type='radio' id='neg2_firstname_pb' name='neg2_firstname_p2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_firstname_pb2'>  <input type='radio' id='neg2_firstname_pb2' name='neg2_firstname_p2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_lastname_p'>
    <td>last name</td>
    <td><div class='neg2_lastname_p_group1'><span><span><label for='neg2_lastname_pb'> <input type='radio' id='neg2_lastname_pb' name='neg2_lastname_p2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_lastname_pb2'>  <input type='radio' id='neg2_lastname_pb2' name='neg2_lastname_p2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>


  <tr id='neg2_gender_p'>
    <td>gender</td>
   <td><div class='neg2_gender_p_group1'><span><span><label for='neg2_gender_pb'> <input type='radio' id='neg2_gender_pb' name='neg2_gender_p2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_gender_pb2'>  <input type='radio' id='neg2_gender_pb2' name='neg2_gender_p2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>     
 </tr>

  <tr id='neg2_bday_p'>
    <td>birthday</td>
    <td><div class='neg2_bday_p_group1'><span><span><label for='neg2_bday_pb'> <input type='radio' id='neg2_bday_pb' name='neg2_bday_p2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_bday_pb2'>  <input type='radio' id='neg2_bday_pb2' name='neg2_bday_p2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_height_p'>
    <td>height</td>
    <td><div class='neg2_height_p_group1'><span><span><label for='neg2_height_pb'> <input type='radio' id='neg2_height_pb' name='neg2_height_p2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_height_pb2'>  <input type='radio' id='neg2_height_pb2' name='neg2_height_p2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>

  <tr id='neg2_weight_p'>
    <td>weight</td>
    <td><div class='neg2_weight_p_group1'><span><span><label for='neg2_weight_pb'> <input type='radio' id='neg2_weight_pb' name='neg2_weight_p2b' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_weight_pb2'>  <input type='radio' id='neg2_weight_pb2' name='neg2_weight_p2b' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>    
 </tr>
</table>
</div>

<br><br>
<p class='error' id='error7'><br><br></p><input type='hidden' id='timeq7' name='timeq7'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_7();'>Next</button> 
    </div>
<br>

  </div>
</div>



<div class='tab' id='tab8'>

<hr>

<div id='tablec'>
<table>
  <tr>
<th>&nbsp;</th>
<td class='bord' style='align:center'>Would you share the following data if <b>the risks significantly decreased?</b></td>
  </tr>
  <tr>
 <td>&nbsp;</td>
<td class='bord'>(e.g. there is a special protection policy for this information)</td>
  </tr>
 <tr>
 <td height='60'><b>Mobile Phone Permissions</b></td>
 <td height='60'>&nbsp;</td>
</tr>
  <tr id='neg2_identity'>
    <td>Identity</td>
    <td><div class='neg2_identity_group2'><span><span><label for='neg2_identityc'> <input type='radio' id='neg2_identityc' name='neg2_identity2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_identityc2'>  <input type='radio' id='neg2_identityc2' name='neg2_identity2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_contacts'>
    <td>Contacts</td>
    <td><div class='neg2_contacts_group2'><span><span><label for='neg2_contactsc'> <input type='radio' id='neg2_contactsc' name='neg2_contacts2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_contactsc2'>  <input type='radio' id='neg2_contactsc2' name='neg2_contacts2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_location'>
    <td>Location</td>
    <td><div class='neg2_location_group2'><span><span><label for='neg2_locationc'> <input type='radio' id='neg2_locationc' name='neg2_location2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_locationc2'>  <input type='radio' id='neg2_locationc2' name='neg2_location2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_sms'>
    <td>SMS</td>
    <td><div class='neg2_sms_group2'><span><span><label for='neg2_smsc'> <input type='radio' id='neg2_smsc' name='neg2_sms2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_smsc2'>  <input type='radio' id='neg2_smsc2' name='neg2_sms2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_storage'>
    <td>Storage</td>
    <td><div class='neg2_storage_group2'><span><span><label for='neg2_storagec'> <input type='radio' id='neg2_storagec' name='neg2_storage2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_storagec2'>  <input type='radio' id='neg2_storagec2' name='neg2_storage2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>

  <tr id='neg2_camera'>
    <td>Camera</td>
    <td><div class='neg2_camera_group2'><span><span><label for='neg2_camerac'> <input type='radio' id='neg2_camerac' name='neg2_camera2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_camerac2'>  <input type='radio' id='neg2_camerac2' name='neg2_camera2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>

  <tr id='neg2_bluetooth'>
    <td>Bluetooth</td>
    <td><div class='neg2_bluetooth_group2'><span><span><label for='neg2_bluetoothc'> <input type='radio' id='neg2_bluetoothc' name='neg2_bluetooth2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_bluetoothc2'>  <input type='radio' id='neg2_bluetoothc2' name='neg2_bluetooth2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_photos'>
    <td>Photos</td>
    <td><div class='neg2_photos_group2'><span><span><label for='neg2_photosc'> <input type='radio' id='neg2_photosc' name='neg2_photos2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_photosc2'>  <input type='radio' id='neg2_photosc2' name='neg2_photos2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_phone'>
    <td>Phone</td>
   <td><div class='neg2_phone_group2'><span><span><label for='neg2_phonec'> <input type='radio' id='neg2_phonec' name='neg2_phone2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_phonec2'>  <input type='radio' id='neg2_phonec2' name='neg2_phone2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>  

 <tr id='neg2_motion'>
    <td>Motion & Fitness</td>
    <td><div class='neg2_motion_group2'><span><span><label for='neg2_motionc'> <input type='radio' id='neg2_motionc' name='neg2_motion2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_motionc2'>  <input type='radio' id='neg2_motionc2' name='neg2_motion2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>

  <tr id='neg2_media'>
    <td>Media & Music</td>
    <td><div class='neg2_media_group2'><span><span><label for='neg2_mediac'> <input type='radio' id='neg2_mediac' name='neg2_media2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_mediac2'>  <input type='radio' id='neg2_mediac2' name='neg2_media2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_mobiledata'>
    <td>Mobile Data</td>
    <td><div class='neg2_mobiledata_group2'><span><span><label for='neg2_mobiledatac'> <input type='radio' id='neg2_mobiledatac' name='neg2_mobiledata2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_mobiledatac2'>  <input type='radio' id='neg2_mobiledatac2' name='neg2_mobiledata2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

 <tr>
 <td height='60'><b>Fitness Data</b></td>
 <td height='60'>&nbsp;</td>
</tr>

  <tr id='neg2_steps'>
    <td>number of steps</td>
    <td><div class='neg2_steps_group2'><span><span><label for='neg2_stepsc'> <input type='radio' id='neg2_stepsc' name='neg2_steps2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_stepsc2'>  <input type='radio' id='neg2_stepsc2' name='neg2_steps2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>
  <tr id='neg2_distance'>
    <td>distance covered</td>
    <td><div class='neg2_distance_group2'><span><span><label for='neg2_distancec'> <input type='radio' id='neg2_distancec' name='neg2_distance2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_distancec2'>  <input type='radio' id='neg2_distancec2' name='neg2_distance2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>
  <tr id='neg2_elevation'>
    <td>elevation</td>
    <td><div class='neg2_elevation_group2'><span><span><label for='neg2_elevationc'> <input type='radio' id='neg2_elevationc' name='neg2_elevation2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_elevationc2'>  <input type='radio' id='neg2_elevationc2' name='neg2_elevation2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_floors'>
    <td>floors climbed</td>
    <td><div class='neg2_floors_group2'><span><span><label for='neg2_floorsc'> <input type='radio' id='neg2_floorsc' name='neg2_floors2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_floorsc2'>  <input type='radio' id='neg2_floorsc2' name='neg2_floors2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_minutesactivity'>
    <td>minutes of activities</td>
    <td><div class='neg2_minutesactivity_group2'><span><span><label for='neg2_minutesactivityc'> <input type='radio' id='neg2_minutesactivityc' name='neg2_minutesactivity2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_minutesactivityc2'>  <input type='radio' id='neg2_minutesactivityc2' name='neg2_minutesactivity2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_activitycalories'>
    <td>activity calories</td>
    <td><div class='neg2_activitycalories_group2'><span><span><label for='neg2_activitycaloriesc'> <input type='radio' id='neg2_activitycaloriesc' name='neg2_activitycalories2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_activitycaloriesc2'>  <input type='radio' id='neg2_activitycaloriesc2' name='neg2_activitycalories2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>
  <tr id='neg2_weight'>
    <td>weight</td>
    <td><div class='neg2_weight_group2'><span><span><label for='neg2_weightc'> <input type='radio' id='neg2_weightc' name='neg2_weight2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_weightc2'>  <input type='radio' id='neg2_weightc2' name='neg2_weight2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>
  <tr id='neg2_minutesasleep'>
    <td>sleep</td>
    <td><div class='neg2_minutesasleep_group2'><span><span><label for='neg2_minutesasleepc'> <input type='radio' id='neg2_minutesasleepc' name='neg2_minutesasleep2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_minutesasleepc2'>  <input type='radio' id='neg2_minutesasleepc2' name='neg2_minutesasleep2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_heartrate'>
    <td>heart rate</td>
    <td><div class='neg2_heartrate_group2'><span><span><label for='neg2_heartratec'> <input type='radio' id='neg2_heartratec' name='neg2_heartrate2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_heartratec2'>  <input type='radio' id='neg2_heartratec2' name='neg2_heartrate2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_food'>
    <td>food and water logs</td>
    <td><div class='neg2_food_group2'><span><span><label for='neg2_foodc'> <input type='radio' id='neg2_foodc' name='neg2_food2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_foodc2'>  <input type='radio' id='neg2_foodc2' name='neg2_food2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>
  <tr id='neg2_friends'>
    <td>friends</td>
    <td><div class='neg2_friends_group2'><span><span><label for='neg2_friendsc'> <input type='radio' id='neg2_friendsc' name='neg2_friends2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_friendsc2'>  <input type='radio' id='neg2_friendsc2' name='neg2_friends2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>
  <tr id='neg2_profile'>
    <td>profile</td>
    <td><div class='neg2_profile_group2'><span><span><label for='neg2_profilec'> <input type='radio' id='neg2_profilec' name='neg2_profile2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_profilec2'>  <input type='radio' id='neg2_profilec2' name='neg2_profile2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>
  <tr id='neg2_locationf'>
    <td>location and GPS</td>
   <td><div class='neg2_locationf_group2'><span><span><label for='neg2_locationfc'> <input type='radio' id='neg2_locationfc' name='neg2_locationf2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_locationfc2'>  <input type='radio' id='neg2_locationfc2' name='neg2_locationf2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>
  <tr id='neg2_settings'>
    <td>FitPro devices and settings</td>
    <td><div class='neg2_settings_group2'><span><span><label for='neg2_settingsc'> <input type='radio' id='neg2_settingsc' name='neg2_settings2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_settingsc2'>  <input type='radio' id='neg2_settingsc2' name='neg2_settings2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>

 <tr>
 <td height='60'><b>In-application Data</b></td>
 <td height='60'>&nbsp;</td>
</tr>

  <tr id='neg2_firstname_p'>
    <td>first name</td>
    <td><div class='neg2_firstname_p_group2'><span><span><label for='neg2_firstname_pc'> <input type='radio' id='neg2_firstname_pc' name='neg2_firstname_p2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_firstname_pc2'>  <input type='radio' id='neg2_firstname_pc2' name='neg2_firstname_p2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>

  <tr id='neg2_lastname_p'>
    <td>last name</td>
    <td><div class='neg2_lastname_p_group2'><span><span><label for='neg2_lastname_pc'> <input type='radio' id='neg2_lastname_pc' name='neg2_lastname_p2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_lastname_pc2'>  <input type='radio' id='neg2_lastname_pc2' name='neg2_lastname_p2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>


  <tr id='neg2_gender_p'>
    <td>gender</td>
   <td><div class='neg2_gender_p_group2'><span><span><label for='neg2_gender_pc'> <input type='radio' id='neg2_gender_pc' name='neg2_gender_p2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_gender_pc2'>  <input type='radio' id='neg2_gender_pc2' name='neg2_gender_p2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_bday_p'>
    <td>birthday</td>
    <td><div class='neg2_bday_p_group2'><span><span><label for='neg2_bday_pc'> <input type='radio' id='neg2_bday_pc' name='neg2_bday_p2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_bday_pc2'>  <input type='radio' id='neg2_bday_pc2' name='neg2_bday_p2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>

  <tr id='neg2_height_p'>
    <td>height</td>
   <td><div class='neg2_height_p_group2'><span><span><label for='neg2_height_pc'> <input type='radio' id='neg2_height_pc' name='neg2_height_p2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_height_pc2'>  <input type='radio' id='neg2_height_pc2' name='neg2_height_p2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>

  <tr id='neg2_weight_p'>
    <td>weight</td>
    <td><div class='neg2_weight_p_group2'><span><span><label for='neg2_weight_pc'> <input type='radio' id='neg2_weight_pc' name='neg2_weight_p2c' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_weight_pc2'>  <input type='radio' id='neg2_weight_pc2' name='neg2_weight_p2c' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td>  
 </tr>
</table>
</div>

<br><br>
<p class='error' id='error8'><br><br></p><input type='hidden' id='timeq8' name='timeq8'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_8();'>Next</button> 
    </div>
<br>

  </div>
</div>








<div class='tab' id='tab9'>

<hr>

<div id='tabled'>
<table>
  <tr>
<th>&nbsp;</th>
<td class='bord' style='align:center'>Would you share the following data if <b>the benefits significantly increased?</b></td>
  </tr>
  <tr>
 <td>&nbsp;</td>
<td class='bord'>(e.g. the app has a new functionality related to this information)</td>
  </tr>
 <tr>
 <td height='60'><b>Mobile Phone Permissions</b></td>
 <td height='60'>&nbsp;</td>
</tr>

  <tr id='neg2_identity'>
    <td>Identity</td>
    <td><div class='neg2_identity_group2'><span><span><label for='neg2_identityd'> <input type='radio' id='neg2_identityd' name='neg2_identity2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_identityd2'>  <input type='radio' id='neg2_identityd2' name='neg2_identity2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_contacts'>
    <td>Contacts</td>
    <td><div class='neg2_contacts_group2'><span><span><label for='neg2_contactsd'> <input type='radio' id='neg2_contactsd' name='neg2_contacts2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_contactsd2'>  <input type='radio' id='neg2_contactsd2' name='neg2_contacts2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_location'>
    <td>Location</td> 
    <td><div class='neg2_location_group2'><span><span><label for='neg2_locationd'> <input type='radio' id='neg2_locationd' name='neg2_location2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_locationd2'>  <input type='radio' id='neg2_locationd2' name='neg2_location2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_sms'>
    <td>SMS</td> 
    <td><div class='neg2_sms_group2'><span><span><label for='neg2_smsd'> <input type='radio' id='neg2_smsd' name='neg2_sms2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_smsd2'>  <input type='radio' id='neg2_smsd2' name='neg2_sms2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_storage'>
    <td>Storage</td> 
    <td><div class='neg2_storage_group2'><span><span><label for='neg2_storaged'> <input type='radio' id='neg2_storaged' name='neg2_storage2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_storaged2'>  <input type='radio' id='neg2_storaged2' name='neg2_storage2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_camera'>
    <td>Camera</td> 
    <td><div class='neg2_camera_group2'><span><span><label for='neg2_camerad'> <input type='radio' id='neg2_camerad' name='neg2_camera2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_camerad2'>  <input type='radio' id='neg2_camerad2' name='neg2_camera2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_bluetooth'>
    <td>Bluetooth</td> 
    <td><div class='neg2_bluetooth_group2'><span><span><label for='neg2_bluetoothd'> <input type='radio' id='neg2_bluetoothd' name='neg2_bluetooth2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_bluetoothd2'>  <input type='radio' id='neg2_bluetoothd2' name='neg2_bluetooth2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_photos'>
    <td>Photos</td> 
    <td><div class='neg2_photos_group2'><span><span><label for='neg2_photosd'> <input type='radio' id='neg2_photosd' name='neg2_photos2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_photosd2'>  <input type='radio' id='neg2_photosd2' name='neg2_photos2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_phone'>
    <td>Phone</td> 
    <td><div class='neg2_phone_group2'><span><span><label for='neg2_phoned'> <input type='radio' id='neg2_phoned' name='neg2_phone2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_phoned2'>  <input type='radio' id='neg2_phoned2' name='neg2_phone2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>  

 <tr id='neg2_motion'>
    <td>Motion & Fitness</td> 
    <td><div class='neg2_motion_group2'><span><span><label for='neg2_motiond'> <input type='radio' id='neg2_motiond' name='neg2_motion2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_motiond2'>  <input type='radio' id='neg2_motiond2' name='neg2_motion2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_media'>
    <td>Media & Music</td> 
    <td><div class='neg2_media_group2'><span><span><label for='neg2_mediad'> <input type='radio' id='neg2_mediad' name='neg2_media2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_mediad2'>  <input type='radio' id='neg2_mediad2' name='neg2_media2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_mobiledata'>
    <td>Mobile Data</td> 
    <td><div class='neg2_mobiledata_group2'><span><span><label for='neg2_mobiledatad'> <input type='radio' id='neg2_mobiledatad' name='neg2_mobiledata2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_mobiledatad2'>  <input type='radio' id='neg2_mobiledatad2' name='neg2_mobiledata2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

 <tr>
 <td height='60'><b>Fitness Data</b></td>
 <td height='60'>&nbsp;</td>
</tr>

  <tr id='neg2_steps'>
    <td>number of steps</td> 
    <td><div class='neg2_steps_group2'><span><span><label for='neg2_stepsd'> <input type='radio' id='neg2_stepsd' name='neg2_steps2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_stepsd2'>  <input type='radio' id='neg2_stepsd2' name='neg2_steps2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_distance'>
    <td>distance covered</td> 
    <td><div class='neg2_distance_group2'><span><span><label for='neg2_distanced'> <input type='radio' id='neg2_distanced' name='neg2_distance2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_distanced2'>  <input type='radio' id='neg2_distanced2' name='neg2_distance2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_elevation'>
    <td>elevation</td> 
    <td><div class='neg2_elevation_group2'><span><span><label for='neg2_elevationd'> <input type='radio' id='neg2_elevationd' name='neg2_elevation2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_elevationd2'>  <input type='radio' id='neg2_elevationd2' name='neg2_elevation2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_floors'>
    <td>floors climbed</td> 
    <td><div class='neg2_floors_group2'><span><span><label for='neg2_floorsd'> <input type='radio' id='neg2_floorsd' name='neg2_floors2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_floorsd2'>  <input type='radio' id='neg2_floorsd2' name='neg2_floors2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_minutesactivity'>
    <td>minutes of activities</td>
    <td><div class='neg2_minutesactivity_group2'><span><span><label for='neg2_minutesactivityd'> <input type='radio' id='neg2_minutesactivityd' name='neg2_minutesactivity2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_minutesactivityd2'>  <input type='radio' id='neg2_minutesactivityd2' name='neg2_minutesactivity2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_activitycalories'>
    <td>activity calories</td> 
    <td><div class='neg2_activitycalories_group2'><span><span><label for='neg2_activitycaloriesd'> <input type='radio' id='neg2_activitycaloriesd' name='neg2_activitycalories2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_activitycaloriesd2'>  <input type='radio' id='neg2_activitycaloriesd2' name='neg2_activitycalories2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_weight'>
    <td>weight</td>
    <td><div class='neg2_weight_group2'><span><span><label for='neg2_weightd'> <input type='radio' id='neg2_weightd' name='neg2_weight2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_weightd2'>  <input type='radio' id='neg2_weightd2' name='neg2_weight2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_minutesasleep'>
    <td>sleep</td> 
    <td><div class='neg2_minutesasleep_group2'><span><span><label for='neg2_minutesasleepd'> <input type='radio' id='neg2_minutesasleepd' name='neg2_minutesasleep2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_minutesasleepd2'>  <input type='radio' id='neg2_minutesasleepd2' name='neg2_minutesasleep2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_heartrate'>
    <td>heart rate</td>
    <td><div class='neg2_heartrate_group2'><span><span><label for='neg2_heartrated'> <input type='radio' id='neg2_heartrated' name='neg2_heartrate2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_heartrated2'>  <input type='radio' id='neg2_heartrated2' name='neg2_heartrate2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_food'>
    <td>food and water logs</td> 
    <td><div class='neg2_food_group2'><span><span><label for='neg2_foodd'> <input type='radio' id='neg2_foodd' name='neg2_food2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_foodd2'>  <input type='radio' id='neg2_foodd2' name='neg2_food2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_friends'>
    <td>friends</td> 
    <td><div class='neg2_friends_group2'><span><span><label for='neg2_friendsd'> <input type='radio' id='neg2_friendsd' name='neg2_friends2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_friendsd2'>  <input type='radio' id='neg2_friendsd2' name='neg2_friends2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_profile'>
    <td>profile</td> 
    <td><div class='neg2_profile_group2'><span><span><label for='neg2_profiled'> <input type='radio' id='neg2_profiled' name='neg2_profile2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_profiled2'>  <input type='radio' id='neg2_profiled2' name='neg2_profile2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_locationf'>
    <td>location and GPS</td> 
    <td><div class='neg2_locationf_group2'><span><span><label for='neg2_locationfd'> <input type='radio' id='neg2_locationfd' name='neg2_locationf2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_locationfd2'>  <input type='radio' id='neg2_locationfd2' name='neg2_locationf2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
  <tr id='neg2_settings'>
    <td>FitPro devices and settings</td> 
    <td><div class='neg2_settings_group2'><span><span><label for='neg2_settingsd'> <input type='radio' id='neg2_settingsd' name='neg2_settings2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_settingsd2'>  <input type='radio' id='neg2_settingsd2' name='neg2_settings2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

 <tr>
 <td height='60'><b>In-application Data</b></td>
 <td height='60'>&nbsp;</td>
</tr>

  <tr id='neg2_firstname_p'>
    <td>first name</td> 
    <td><div class='neg2_firstname_p_group2'><span><span><label for='neg2_firstname_pd'> <input type='radio' id='neg2_firstname_pd' name='neg2_firstname_p2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_firstname_pd2'>  <input type='radio' id='neg2_firstname_pd2' name='neg2_firstname_p2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_lastname_p'>
    <td>last name</td> 
    <td><div class='neg2_lastname_p_group2'><span><span><label for='neg2_lastname_pd'> <input type='radio' id='neg2_lastname_pd' name='neg2_lastname_p2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_lastname_pd2'>  <input type='radio' id='neg2_lastname_pd2' name='neg2_lastname_p2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>


  <tr id='neg2_gender_p'>
    <td>gender</td> 
    <td><div class='neg2_gender_p_group2'><span><span><label for='neg2_gender_pd'> <input type='radio' id='neg2_gender_pd' name='neg2_gender_p2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_gender_pd2'>  <input type='radio' id='neg2_gender_pd2' name='neg2_gender_p2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_bday_p'>
    <td>birthday</td> 
    <td><div class='neg2_bday_p_group2'><span><span><label for='neg2_bday_pd'> <input type='radio' id='neg2_bday_pd' name='neg2_bday_p2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_bday_pd2'>  <input type='radio' id='neg2_bday_pd2' name='neg2_bday_p2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_height_p'>
    <td>height</td>
    <td><div class='neg2_height_p_group2'><span><span><label for='neg2_height_pd'> <input type='radio' id='neg2_height_pd' name='neg2_height_p2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_height_pd2'>  <input type='radio' id='neg2_height_pd2' name='neg2_height_p2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>

  <tr id='neg2_weight_p'>
    <td>weight</td> 
    <td><div class='neg2_weight_p_group2'><span><span><label for='neg2_weight_pd'> <input type='radio' id='neg2_weight_pd' name='neg2_weight_p2d' value='2' onclick='boldage(this)'/> share </label>  <label for='neg2_weight_pd2'>  <input type='radio' id='neg2_weight_pd2' name='neg2_weight_p2d' value='1' onclick='boldage(this)'/> deny </label></span></span><br></div></td> 
 </tr>
</table>
</div>

<br><br>
<p class='error' id='error9'><br><br></p><input type='hidden' id='timeq9' name='timeq9'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_9();'>Next</button> 
    </div>
<br>

  </div>
</div>










<div class='tab' id='tab10'>
Please answer the following questions about the company (<strong> Fitbit </strong>) providing your fitness tracker.<br>
<hr>
<br>
I believe the company providing this fitness tracker is trustworthy in handling my information.<br><br>


<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='trust1a'>  <input type='radio' id='trust1a' name='trust1' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust1b'>  <input type='radio' id='trust1b' name='trust1' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust1c'>  <input type='radio' id='trust1c' name='trust1' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust1d'>  <input type='radio' id='trust1d' name='trust1' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust1e'>  <input type='radio' id='trust1e' name='trust1' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust1f'>  <input type='radio' id='trust1f' name='trust1' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust1g'>  <input type='radio' id='trust1g' name='trust1' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>


<br>
<hr>
<br>

I believe this company tells the truth and fulfills promises related to the information I provide. <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='trust2a'>  <input type='radio' id='trust2a' name='trust2' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust2b'>  <input type='radio' id='trust2b' name='trust2' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust2c'>  <input type='radio' id='trust2c' name='trust2' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust2d'>  <input type='radio' id='trust2d' name='trust2' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust2e'>  <input type='radio' id='trust2e' name='trust2' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust2f'>  <input type='radio' id='trust2f' name='trust2' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust2g'>  <input type='radio' id='trust2g' name='trust2' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>


<br>
<hr>
<br>

I believe this company is predictable and consistent regarding the usage of my information.<br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='trust3a'>  <input type='radio' id='trust3a' name='trust3' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust3b'>  <input type='radio' id='trust3b' name='trust3' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust3c'>  <input type='radio' id='trust3c' name='trust3' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust3d'>  <input type='radio' id='trust3d' name='trust3' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust3e'>  <input type='radio' id='trust3e' name='trust3' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust3f'>  <input type='radio' id='trust3f' name='trust3' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust3g'>  <input type='radio' id='trust3g' name='trust3' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>



<br>
<hr>
<br>

I believe this company is honest when it comes to using the information I provide.<br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='trust4a'>  <input type='radio' id='trust4a' name='trust4' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust4b'>  <input type='radio' id='trust4b' name='trust4' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust4c'>  <input type='radio' id='trust4c' name='trust4' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust4d'>  <input type='radio' id='trust4d' name='trust4' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust4e'>  <input type='radio' id='trust4e' name='trust4' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust4f'>  <input type='radio' id='trust4f' name='trust4' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='trust4g'>  <input type='radio' id='trust4g' name='trust4' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br><br>
<p class='error' id='error10'><br><br></p><input type='hidden' id='timeq10' name='timeq10'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_10();'>Next</button> 
    </div>
<br>

  </div>
</div>





<div class='tab' id='tab11'>
<!--Please answer the following questions about your healthy living expertise.-->
Please answer the following questions.<br>
<hr>
<br>
I understand difference between different types of healthy-living measures. <br><br>

<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='expertise1a'>  <input type='radio' id='expertise1a' name='expertise1' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise1b'>  <input type='radio' id='expertise1b' name='expertise1' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise1c'>  <input type='radio' id='expertise1c' name='expertise1' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise1d'>  <input type='radio' id='expertise1d' name='expertise1' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise1e'>  <input type='radio' id='expertise1e' name='expertise1' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise1f'>  <input type='radio' id='expertise1f' name='expertise1' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise1g'>  <input type='radio' id='expertise1g' name='expertise1' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I know healthy-living measures that most others haven’t even heard of. <br><br>

<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='expertise2a'>  <input type='radio' id='expertise2a' name='expertise2' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise2b'>  <input type='radio' id='expertise2b' name='expertise2' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise2c'>  <input type='radio' id='expertise2c' name='expertise2' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise2d'>  <input type='radio' id='expertise2d' name='expertise2' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise2e'>  <input type='radio' id='expertise2e' name='expertise2' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise2f'>  <input type='radio' id='expertise2f' name='expertise2' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise2g'>  <input type='radio' id='expertise2g' name='expertise2' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I know which healthy-living measures are useful to implement. <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='expertise3a'>  <input type='radio' id='expertise3a' name='expertise3' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise3b'>  <input type='radio' id='expertise3b' name='expertise3' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise3c'>  <input type='radio' id='expertise3c' name='expertise3' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise3d'>  <input type='radio' id='expertise3d' name='expertise3' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise3e'>  <input type='radio' id='expertise3e' name='expertise3' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise3f'>  <input type='radio' id='expertise3f' name='expertise3' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise3g'>  <input type='radio' id='expertise3g' name='expertise3' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I am able to choose the right healthy-living measures. <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='expertise4a'>  <input type='radio' id='expertise4a' name='expertise4' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise4b'>  <input type='radio' id='expertise4b' name='expertise4' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise4c'>  <input type='radio' id='expertise4c' name='expertise4' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise4d'>  <input type='radio' id='expertise4d' name='expertise4' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise4e'>  <input type='radio' id='expertise4e' name='expertise4' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise4f'>  <input type='radio' id='expertise4f' name='expertise4' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='expertise4g'>  <input type='radio' id='expertise4g' name='expertise4' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br><br>
<p class='error' id='error11'><br><br></p><input type='hidden' id='timeq11' name='timeq11'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_11();'>Next</button> 
    </div>
<br>

  </div>
</div>




<div class='tab' id='tab12'>
<!--Please answer the following questions about your general privacy concerns. <br> -->
Please answer the following questions.<br>

<hr>
<br>
All things considered, the Internet causes serious privacy problems. <br> <br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern1a'>  <input type='radio' id='privacy_concern1a' name='privacy_concern1' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern1b'>  <input type='radio' id='privacy_concern1b' name='privacy_concern1' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern1c'>  <input type='radio' id='privacy_concern1c' name='privacy_concern1' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern1d'>  <input type='radio' id='privacy_concern1d' name='privacy_concern1' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern1e'>  <input type='radio' id='privacy_concern1e' name='privacy_concern1' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern1f'>  <input type='radio' id='privacy_concern1f' name='privacy_concern1' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern1g'>  <input type='radio' id='privacy_concern1g' name='privacy_concern1' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

Compared to others, I am more sensitive about the way online companies handle my personal information.<br> <br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern2a'>  <input type='radio' id='privacy_concern2a' name='privacy_concern2' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern2b'>  <input type='radio' id='privacy_concern2b' name='privacy_concern2' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern2c'>  <input type='radio' id='privacy_concern2c' name='privacy_concern2' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern2d'>  <input type='radio' id='privacy_concern2d' name='privacy_concern2' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern2e'>  <input type='radio' id='privacy_concern2e' name='privacy_concern2' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern2f'>  <input type='radio' id='privacy_concern2f' name='privacy_concern2' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern2g'>  <input type='radio' id='privacy_concern2g' name='privacy_concern2' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

To me, it is the most important thing to keep my privacy intact from online companies. <br> <br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern3a'>  <input type='radio' id='privacy_concern3a' name='privacy_concern3' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern3b'>  <input type='radio' id='privacy_concern3b' name='privacy_concern3' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern3c'>  <input type='radio' id='privacy_concern3c' name='privacy_concern3' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern3d'>  <input type='radio' id='privacy_concern3d' name='privacy_concern3' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern3e'>  <input type='radio' id='privacy_concern3e' name='privacy_concern3' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern3f'>  <input type='radio' id='privacy_concern3f' name='privacy_concern3' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern3g'>  <input type='radio' id='privacy_concern3g' name='privacy_concern3' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I believe other people are too concerned with online privacy issues.<br> <br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern4a'>  <input type='radio' id='privacy_concern4a' name='privacy_concern4' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern4b'>  <input type='radio' id='privacy_concern4b' name='privacy_concern4' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern4c'>  <input type='radio' id='privacy_concern4c' name='privacy_concern4' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern4d'>  <input type='radio' id='privacy_concern4d' name='privacy_concern4' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern4e'>  <input type='radio' id='privacy_concern4e' name='privacy_concern4' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern4f'>  <input type='radio' id='privacy_concern4f' name='privacy_concern4' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern4g'>  <input type='radio' id='privacy_concern4g' name='privacy_concern4' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

Compared with other subjects on my mind, personal privacy is very important. <br> <br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern5a'>  <input type='radio' id='privacy_concern5a' name='privacy_concern5' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern5b'>  <input type='radio' id='privacy_concern5b' name='privacy_concern5' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern5c'>  <input type='radio' id='privacy_concern5c' name='privacy_concern5' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern5d'>  <input type='radio' id='privacy_concern5d' name='privacy_concern5' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern5e'>  <input type='radio' id='privacy_concern5e' name='privacy_concern5' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern5f'>  <input type='radio' id='privacy_concern5f' name='privacy_concern5' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern5g'>  <input type='radio' id='privacy_concern5g' name='privacy_concern5' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I am concerned about threats to my personal privacy today. <br> <br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern6a'>  <input type='radio' id='privacy_concern6a' name='privacy_concern6' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern6b'>  <input type='radio' id='privacy_concern6b' name='privacy_concern6' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern6c'>  <input type='radio' id='privacy_concern6c' name='privacy_concern6' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern6d'>  <input type='radio' id='privacy_concern6d' name='privacy_concern6' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern6e'>  <input type='radio' id='privacy_concern6e' name='privacy_concern6' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern6f'>  <input type='radio' id='privacy_concern6f' name='privacy_concern6' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='privacy_concern6g'>  <input type='radio' id='privacy_concern6g' name='privacy_concern6' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br><br>
<p class='error' id='error12'><br><br></p><input type='hidden' id='timeq12' name='timeq12'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_12();'>Next</button> 
    </div>
<br>

  </div>
</div>






<div class='tab' id='tab13'>
<!--Please answer the following questions about your perception on surveillance.  <br>-->
Please answer the following questions.<br>
<hr>
<br>
I believe that the location of my mobile device is monitored at least part of the time. <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='surveillance1a'>  <input type='radio' id='surveillance1a' name='surveillance1' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance1b'>  <input type='radio' id='surveillance1b' name='surveillance1' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance1c'>  <input type='radio' id='surveillance1c' name='surveillance1' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance1d'>  <input type='radio' id='surveillance1d' name='surveillance1' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance1e'>  <input type='radio' id='surveillance1e' name='surveillance1' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance1f'>  <input type='radio' id='surveillance1f' name='surveillance1' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance1g'>  <input type='radio' id='surveillance1g' name='surveillance1' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I am concerned that mobile apps are collecting too much information about me. <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='surveillance2a'>  <input type='radio' id='surveillance2a' name='surveillance2' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance2b'>  <input type='radio' id='surveillance2b' name='surveillance2' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance2c'>  <input type='radio' id='surveillance2c' name='surveillance2' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance2d'>  <input type='radio' id='surveillance2d' name='surveillance2' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance2e'>  <input type='radio' id='surveillance2e' name='surveillance2' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance2f'>  <input type='radio' id='surveillance2f' name='surveillance2' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance2g'>  <input type='radio' id='surveillance2g' name='surveillance2' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I am concerned that mobile apps may monitor my activities on my mobile device. <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='surveillance3a'>  <input type='radio' id='surveillance3a' name='surveillance3' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance3b'>  <input type='radio' id='surveillance3b' name='surveillance3' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance3c'>  <input type='radio' id='surveillance3c' name='surveillance3' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance3d'>  <input type='radio' id='surveillance3d' name='surveillance3' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance3e'>  <input type='radio' id='surveillance3e' name='surveillance3' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance3f'>  <input type='radio' id='surveillance3f' name='surveillance3' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='surveillance3g'>  <input type='radio' id='surveillance3g' name='surveillance3' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>
<br><br>
<p class='error' id='error13'><br><br></p><input type='hidden' id='timeq13' name='timeq13'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_13();'>Next</button> 
    </div>
<br>

  </div>
</div>




<div class='tab' id='tab14'>
<!--Please answer the following questions about your perception on intrusion. <br>-->
Please answer the following questions.<br>
<hr>
<br>
I feel that as a result of my using mobile apps, others know about me more than I am comfortable with. <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='intrusion1a'>  <input type='radio' id='intrusion1a' name='intrusion1' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion1b'>  <input type='radio' id='intrusion1b' name='intrusion1' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion1c'>  <input type='radio' id='intrusion1c' name='intrusion1' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion1d'>  <input type='radio' id='intrusion1d' name='intrusion1' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion1e'>  <input type='radio' id='intrusion1e' name='intrusion1' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion1f'>  <input type='radio' id='intrusion1f' name='intrusion1' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion1g'>  <input type='radio' id='intrusion1g' name='intrusion1' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I believe that as a result of my using mobile apps, information about me that I consider private is now more readily available to others than I would want.  <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='intrusion2a'>  <input type='radio' id='intrusion2a' name='intrusion2' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion2b'>  <input type='radio' id='intrusion2b' name='intrusion2' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion2c'>  <input type='radio' id='intrusion2c' name='intrusion2' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion2d'>  <input type='radio' id='intrusion2d' name='intrusion2' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion2e'>  <input type='radio' id='intrusion2e' name='intrusion2' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion2f'>  <input type='radio' id='intrusion2f' name='intrusion2' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion2g'>  <input type='radio' id='intrusion2g' name='intrusion2' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I feel that as a result of my using mobile apps, information about me is out there that, if used, will invade my privacy.<br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='intrusion3a'>  <input type='radio' id='intrusion3a' name='intrusion3' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion3b'>  <input type='radio' id='intrusion3b' name='intrusion3' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion3c'>  <input type='radio' id='intrusion3c' name='intrusion3' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion3d'>  <input type='radio' id='intrusion3d' name='intrusion3' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion3e'>  <input type='radio' id='intrusion3e' name='intrusion3' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion3f'>  <input type='radio' id='intrusion3f' name='intrusion3' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='intrusion3g'>  <input type='radio' id='intrusion3g' name='intrusion3' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br><br>
<p class='error' id='error14'><br><br></p><input type='hidden' id='timeq14' name='timeq14'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_14();'>Next</button> 
    </div>
<br>

  </div>
</div>



<div class='tab' id='tab15'>
<!--Please answer the following questions about your perception on secondary use of personal information:  <br>-->
Please answer the following questions.<br>

<hr>
<br>
I am concerned that mobile apps may use my personal information for other purposes without notifying me or getting my authorization. <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='second_use1a'>  <input type='radio' id='second_use1a' name='second_use1' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use1b'>  <input type='radio' id='second_use1b' name='second_use1' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use1c'>  <input type='radio' id='second_use1c' name='second_use1' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use1d'>  <input type='radio' id='second_use1d' name='second_use1' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use1e'>  <input type='radio' id='second_use1e' name='second_use1' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use1f'>  <input type='radio' id='second_use1f' name='second_use1' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use1g'>  <input type='radio' id='second_use1g' name='second_use1' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

When I give personal information to use mobile apps, I am concerned that apps may use my information for other purposes. <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='second_use2a'>  <input type='radio' id='second_use2a' name='second_use2' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use2b'>  <input type='radio' id='second_use2b' name='second_use2' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use2c'>  <input type='radio' id='second_use2c' name='second_use2' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use2d'>  <input type='radio' id='second_use2d' name='second_use2' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use2e'>  <input type='radio' id='second_use2e' name='second_use2' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use2f'>  <input type='radio' id='second_use2f' name='second_use2' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use2g'>  <input type='radio' id='second_use2g' name='second_use2' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br>
<hr>
<br>

I am concerned that mobile apps may share my personal information with other entities without getting my authorization. <br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='second_use3a'>  <input type='radio' id='second_use3a' name='second_use3' value='1' onclick='boldage(this)'/> <br/> Completely <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use3b'>  <input type='radio' id='second_use3b' name='second_use3' value='2' onclick='boldage(this)'/> <br/> Disagree <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use3c'>  <input type='radio' id='second_use3c' name='second_use3' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Disagree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use3d'>  <input type='radio' id='second_use3d' name='second_use3' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use3e'>  <input type='radio' id='second_use3e' name='second_use3' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Agree  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use3f'>  <input type='radio' id='second_use3f' name='second_use3' value='6' onclick='boldage(this)'/> <br/> Agree  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='second_use3g'>  <input type='radio' id='second_use3g' name='second_use3' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Agree  </label>  </div>
</div></span>

<br><br>
<p class='error' id='error15'><br><br></p><input type='hidden' id='timeq15' name='timeq15'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_15();'>Next</button> 
    </div>
<br>

  </div>
</div>






<div class='tab' id='tab16'>
<hr>
Your Fitness Data are correlated to each other. This means that sharing certain types of fitness data may reveal other types.
<br><br>
<div id='fourthpartyrisk1' style='display:none'>
However, we don't have the correlations among the data that you allowed to share. Please press \"Next\".
</div>
<div id='fourthpartyrisk2'>
Below, we present again the fitness data from the simulation environment with its information on the correlations to the other fitness data (in red font). 
Please choose again your preference to share for each fitness data.
<br><br><br>
 <!-- 
If yes, please feel free to do so by simply unchecking them.
Below, we present the information on the correlations of different kinds of fitness data in red font.
<br><br>
Your Fitness Data are somewhat correlated to each other. 
This means that sharing one type of fitness data may lead to another one. 
Below, you can change your previous privacy preference from the simulation environment now that we have given you information on its associated risks in red font. 
-->

<table>
  <tr id='f_food_risk2a'>
    <td>food and water logs</td>
    <td>
	<div style='display:inline'><span>
	<label for='f_food_riska'> <input type='radio' id='f_food_riska' name='f_food_risk' value='2' onclick='boldage(this)'> Allow </label>&nbsp;&nbsp;  
	<label for='f_food_riskb'> <input type='radio' id='f_food_riskb' name='f_food_risk' value='1' onclick='boldage(this)'> Deny </label>
	</span></div>
    </td> 
  </tr>
  <tr id='f_food_risk2b'>
<td colspan='2'><div style='padding-left: 2em'><font color='red'>potentially gives information on your weight</font></div></td>
  </tr>
<tr id='f_food_risk2c'><td>&nbsp;</td></tr>

  <tr id='f_steps_risk2a'>
    <td>number of steps</td>
    <td>
	<div style='display:inline'><span>
	<label for='f_steps_riska'> <input type='radio' id='f_steps_riska' name='f_steps_risk' value='2' onclick='boldage(this)'> Allow </label>&nbsp;&nbsp;  
	<label for='f_steps_riskb'> <input type='radio' id='f_steps_riskb' name='f_steps_risk' value='1' onclick='boldage(this)'> Deny </label>
	</span></div>
    </td> 
  </tr>
  <tr id='f_steps_risk2b'>
<td colspan='2'><div style='padding-left:2em'><font color='red'>correlation to <!--distance covered: 96%,--> minutes of activities: 65%, and activity calories: 65%, potentially gives information on your distance covered</font></div>
</div></td>
  </tr>
<tr id='f_steps_risk2c'><td>&nbsp;</td></tr>

<tr id='f_distance_risk2a'>
    <td>distance covered</td>
    <td>
	<div style='display:inline'><span>
	<label for='f_distance_riska'> <input type='radio' id='f_distance_riska' name='f_distance_risk' value='2' onclick='boldage(this)'> Allow </label>&nbsp;&nbsp;  
	<label for='f_distance_riskb'> <input type='radio' id='f_distance_riskb' name='f_distance_risk' value='1' onclick='boldage(this)'> Deny </label>
	</span></div>
    </td> 
  </tr>
  <tr id='f_distance_risk2b'>
<td colspan='2'><div style='padding-left: 2em'> <font color='red'>correlation to steps: 96%, minutes of activities: 62%, and activity calories: 72% </font></div>
</div></td>
  </tr>
<tr id='f_distance_risk2c'><td>&nbsp;</td></tr>

<tr id='f_elevation_risk2a'>
    <td>elevation</td>
    <td>
	<div style='display:inline'><span>
	<label for='f_elevation_riska'> <input type='radio' id='f_elevation_riska' name='f_elevation_risk' value='2' onclick='boldage(this)'> Allow </label>&nbsp;&nbsp;  
	<label for='f_elevation_riskb'> <input type='radio' id='f_elevation_riskb' name='f_elevation_risk' value='1' onclick='boldage(this)'> Deny </label>
	</span></div>
    </td> 
  </tr>
  <tr id='f_elevation_risk2b'>
<td colspan='2'><div style='padding-left: 2em'> <font color='red'>correlation to floors climbed: 100%</font></div>
</div></td>
  </tr>
<tr id='f_elevation_risk2c'><td>&nbsp;</td></tr>

<tr id='f_floors_risk2a'>
    <td>floors climbed</td>
    <td>
	<div style='display:inline'><span>
	<label for='f_floors_riska'> <input type='radio' id='f_floors_riska' name='f_floors_risk' value='2' onclick='boldage(this)'> Allow </label>&nbsp;&nbsp;  
	<label for='f_floors_riskb'> <input type='radio' id='f_floors_riskb' name='f_floors_risk' value='1' onclick='boldage(this)'> Deny </label>
	</span></div>
    </td> 
  </tr>
  <tr id='f_floors_risk2b'>
<td colspan='2'><div style='padding-left: 2em'> <font color='red'> correlation to elevation: 100%, potentially gives information on your number of steps</font></div>
</div></td>
  </tr>
<tr id='f_floors_risk2c'><td>&nbsp;</td></tr>

<tr id='f_minutesactivities_risk2a'>
    <td>minutes of activities</td>
    <td>
	<div style='display:inline'><span>
	<label for='f_minutesactivities_riska'> <input type='radio' id='f_minutesactivities_riska' name='f_minutesactivities_risk' value='2' onclick='boldage(this)'> Allow </label>&nbsp;&nbsp;  
	<label for='f_minutesactivities_riskb'> <input type='radio' id='f_minutesactivities_riskb' name='f_minutesactivities_risk' value='1' onclick='boldage(this)'> Deny </label>
	</span></div>
    </td> 
  </tr>
  <tr id='f_minutesactivities_risk2b'>
<td colspan='2'><div style='padding-left: 2em'> <font color='red'> correlation to distance: 62%, and steps: 65% <!--, and activity calories: 76%-->, potentially gives information on your activity calories</font></div>
</div></td>
  </tr>
<tr id='f_minutesactivities_risk2c'><td>&nbsp;</td></tr>

<tr id='f_activitycalories_risk2a'>
    <td>activity calories</td>
    <td>
	<div style='display:inline'><span>
	<label for='f_activitycalories_riska'> <input type='radio' id='f_activitycalories_riska' name='f_activitycalories_risk' value='2' onclick='boldage(this)'> Allow </label>&nbsp;&nbsp;  
	<label for='f_activitycalories_riskb'> <input type='radio' id='f_activitycalories_riskb' name='f_activitycalories_risk' value='1' onclick='boldage(this)'> Deny </label>
	</span></div>
    </td> 
  </tr>
  <tr id='f_activitycalories_risk2b'>
<td colspan='2'><div style='padding-left: 2em'> <font color='red'> correlation to distance: 72%, steps: 65%, and minutes of activities: 76%, potentially gives information on your weight and distance traveled</font></div>
</div></td>
  </tr>
<tr id='f_activitycalories_risk2c'><td>&nbsp;</td></tr>

<tr id='f_heartrate_risk2a'>
    <td>heart rate</td>
    <td>
	<div style='display:inline'><span>
	<label for='f_heartrate_riska'> <input type='radio' id='f_heartrate_riska' name='f_heartrate_risk' value='2' onclick='boldage(this)'> Allow </label>&nbsp;&nbsp;  
	<label for='f_heartrate_riskb'> <input type='radio' id='f_heartrate_riskb' name='f_heartrate_risk' value='1' onclick='boldage(this)'> Deny </label>
	</span></div>
    </td> 
  </tr>
  <tr id='f_heartrate_risk2b'>
<td colspan='2'><div style='padding-left: 2em'> <font color='red'> potentially gives information on your sleep data</font></div>
</div></td>
  </tr>
<tr id='f_heartrate_risk2c'><td>&nbsp;</td></tr>
</table>
</div>

<!-- <div style='padding-left:2px; width:450px;'>
<br><input type='checkbox' id='f2_weight' name='f2_weight' value='1'> Weight 
<br><input type='checkbox' id='f2_minutesAsleep' name='f2_minutesAsleep' value='1'> Sleep


From Chow Liu Bayesian: 
heart rate and minutes activities> minutes asleep
minutes activities> ActivityCalories
ActivityCalories> Weight and Distance
elevation> floors
floors> steps
steps> distance

Correlation:
steps and distance 0.964
activitycalories and distance 0.725
distance minutesActivity 0.62
activityCalories and steps 0.65
steps and minutesActivity 0.65
activityCalories and minutesActivity 0.762
elevation and floors 1.0

-->


<br><br>
<p class='error' id='error16'><br><br></p><input type='hidden' id='timeq16' name='timeq16'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_16();'>Next</button> 
    </div>
<br>

  </div>
</div>


</div>



<div class='tab' id='tab17'>
<hr>
Regarding your privacy preference, which of the following best describes yourself:
<!-- Modeling Users’ Mobile App Privacy Preferences: Restoring Usability in a Sea of Permission Settings Jialiu Lin Bin Liu -->
<br><br>
<span><span>
 <label><input type='radio' name='privacy_pref' value='1' onclick='details(this.value); boldage(this);'> <b>Privacy Conservative</b> - lack of comfort in granting permissions </label> <br>
 <label><input type='radio' name='privacy_pref' value='2' onclick='details(this.value); boldage(this);'> <b>Unconcerned</b> - very comfortable in granting permissions </label> <br> 
 <label><input type='radio' name='privacy_pref' value='3' onclick='details(this.value); boldage(this);'> <b>Fence-Sitter</b> - neutral in granting permissions </label> <br>
 <label><input type='radio' name='privacy_pref' value='4' onclick='details(this.value); boldage(this);'> <b>Advanced User</b> - my comfort granting permissions depends on the usage scenario </label> <br> <br>
</span></span>
<div class='display' id='display123456' style='text-align: justify'></div>
<!-- 
1
Lack of comfort granting permissions. In general, these
participants felt the least comfortable granting sensitive
information and functionality to third parties (e.g., location and
unique phone ID). They also felt uncomfortable with mobile apps
that want to access their unique phone ID, contacts list or SMS
functionality, even if for internal purposes only.
2
indicate comfort). In general,
participants who share this privacy profile showed a particularly
high level of comfort disclosing sensitive personal data under a
wide range of conditions, no matter who is collecting their data
and for what purpose. The only concerning (red) entry in the heat
map is when it comes to granting SNS libraries access to the
GET_ACCOUNTS permission (e.g. information connected to
accounts such as Google+, Facebook, YouTube).
3
because most of them did not appear to feel
strongly one way or the other about many of the use cases
Unsurprisingly, this group of participants felt quite comfortable
letting mobile apps access sensitive personal data for internal
functionality purposes. When their information is requested by
3rd-party libraries such as for delivering targeted ads or
conducting mobile analytics, their attitude was close to neutral
(i.e. neither comfortable nor uncomfortable). This is reflected in
the heat map with large portions of it colored in light shades of
pink (close to the middle color in the legend). This group of
participants also felt consistently comfortable disclosing all types
of sensitive personal data to SNS libraries.
Westin found that while small numbers of users
would fall at both extremes of the spectrum (i.e. privacy
fundamentalist, and unconcerned), the majority of users tend to
be in-between (pragmatists). An interesting finding of our
analysis is that the preferences of these middle-of-the-road users
can generally be captured with just two profiles, namely the
'fence-sitters' and the “advanced users” (see next subsection).
4
This group of
participants appeared to have a more nuanced understanding of
what sorts of usage scenarios they should be concerned about. In
general, most of them felt comfortable with their sensitive data
being used for internal functionality and by SNS libraries. One
possible reason of why they felt okay with the latter scenario is
because they have control over the disclosures, since these
SNS libraries often let people confirm sharing before transmitting
data to corresponding social network sites. In addition, this group
disliked targeted ads and mobile analytic libraries, but still felt
generally agreeable to disclosing context information at a coarser
level of granularity (i.e. coarse location). This observation again
suggests that this group of users have better insight when it comes
to assigning privacy risks to different usage scenarios.

 -->


<br>
<br>

<br><br>
<p class='error' id='error17'><br><br></p><input type='hidden' id='timeq17' name='timeq17'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_17();'>Next</button> 
    </div>
<br>

  </div>
</div>







<div class='tab' id='tab18'>
<hr>
How physically healthy are you? <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='h_physical2a'>  <input type='radio' id='h_physical2a' name='h_physical' value='1' onclick='boldage(this)'/> <br/> Extremely <br/> Healthy  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_physical2b'>  <input type='radio' id='h_physical2b' name='h_physical' value='2' onclick='boldage(this)'/> <br/> Healthy <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_physical2c'>  <input type='radio' id='h_physical2c' name='h_physical' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Healthy  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_physical2d'>  <input type='radio' id='h_physical2d' name='h_physical' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_physical2e'>  <input type='radio' id='h_physical2e' name='h_physical' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Unhealthy  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_physical2f'>  <input type='radio' id='h_physical2f' name='h_physical' value='6' onclick='boldage(this)'/> <br/> Unhealthy  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_physical2g'>  <input type='radio' id='h_physical2g' name='h_physical' value='7' onclick='boldage(this)'/> <br/> Extremely <br/> Unhealthy  </label>  </div>
</div></span>

<br>
<hr>


How important is exercise to you? <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='h_importance3a'>  <input type='radio' id='h_importance3a' name='h_importance' value='1' onclick='boldage(this)'/> <br/> Extremely <br/> Important  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_importance3b'>  <input type='radio' id='h_importance3b' name='h_importance' value='2' onclick='boldage(this)'/> <br/> Important <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_importance3c'>  <input type='radio' id='h_importance3c' name='h_importance' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Important  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_importance3d'>  <input type='radio' id='h_importance3d' name='h_importance' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_importance3e'>  <input type='radio' id='h_importance3e' name='h_importance' value='5' onclick='boldage(this)'/> <br/> Not so <br/>Important  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_importance3f'>  <input type='radio' id='h_importance3f' name='h_importance' value='6' onclick='boldage(this)'/> <br/> Not <br/>Important <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_importance3g'>  <input type='radio' id='h_importance3g' name='h_importance' value='7' onclick='boldage(this)'/> <br/> Completely <br/> Unimportant  </label>  </div>
</div></span>

<br>
<hr>


What do you <b>most often</b> do for exercise? <br><br>
<span><span>
 <label><input type='radio' name='h_type' value='1' onclick='details(this.value); boldage(this);'> lift weights </label> <br>
 <label><input type='radio' name='h_type' value='2' onclick='details(this.value); boldage(this);'> walk/jog/run/hike </label> <br> 
 <label><input type='radio' name='h_type' value='3' onclick='details(this.value); boldage(this);'> aerobics </label> <br>
 <label><input type='radio' name='h_type' value='4' onclick='details(this.value); boldage(this);'> dance </label> <br>
 <label><input type='radio' name='h_type' value='5' onclick='details(this.value); boldage(this);'> swim </label> <br>
 <label><input type='radio' name='h_type' value='6' onclick='details(this.value); boldage(this);'> pilates </label> <br>
 <label><input type='radio' name='h_type' value='7' onclick='details(this.value); boldage(this);'> other sports (e.g., basketball) </label> <br>
</span></span>
<br>
<hr>


How often do you exercise? <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='h_often3a'>  <input type='radio' id='h_often3a' name='h_often' value='1' onclick='boldage(this)'/> <br/> Almost <br/> daily </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_often3b'>  <input type='radio' id='h_often3b' name='h_often' value='2' onclick='boldage(this)'/> <br/> 3-4 times <br/>a week  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_often3c'>  <input type='radio' id='h_often3c' name='h_often' value='3' onclick='boldage(this)'/> <br/> 1-2 times <br/>a week </div>
<div class='floatright child' style='text-align: center;'> <label for='h_often3d'>  <input type='radio' id='h_often3d' name='h_often' value='4' onclick='boldage(this)'/> <br/> once <br/>a week <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_often3e'>  <input type='radio' id='h_often3e' name='h_often' value='5' onclick='boldage(this)'/> <br/> once every <br/> other week  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_often3f'>  <input type='radio' id='h_often3f' name='h_often' value='6' onclick='boldage(this)'/> <br/> once <br/> a month </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_often3g'>  <input type='radio' id='h_often3g' name='h_often' value='7' onclick='boldage(this)'/> <br/> almost <br/> never </label>  </div>
</div></span>

<br>
<hr>

At what intensity do you work out? <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='h_intensity3a'>  <input type='radio' id='h_intensity3a' name='h_intensity' value='1' onclick='boldage(this)'/> <br/> Very <br/> Light  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_intensity3b'>  <input type='radio' id='h_intensity3b' name='h_intensity' value='2' onclick='boldage(this)'/> <br/> Light <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_intensity3c'>  <input type='radio' id='h_intensity3c' name='h_intensity' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Light  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_intensity3d'>  <input type='radio' id='h_intensity3d' name='h_intensity' value='4' onclick='boldage(this)'/> <br/> Mild <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_intensity3e'>  <input type='radio' id='h_intensity3e' name='h_intensity' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> Heavy  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_intensity3f'>  <input type='radio' id='h_intensity3f' name='h_intensity' value='6' onclick='boldage(this)'/> <br/> Heavy  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_intensity3g'>  <input type='radio' id='h_intensity3g' name='h_intensity' value='7' onclick='boldage(this)'/> <br/> Very <br/> Heavy  </label>  </div>
</div></span>

<br>
<hr>

Do you feel you get too much, the right amount, or too little exercise?<br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='h_amount3a'>  <input type='radio' id='h_amount3a' name='h_amount' value='1' onclick='boldage(this)'/> <br/> Much less <br/>than I want<br/><br/></label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_amount3b'>  <input type='radio' id='h_amount3b' name='h_amount' value='2' onclick='boldage(this)'/> <br/> Less <br/>than I want<br/><br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_amount3c'>  <input type='radio' id='h_amount3c' name='h_amount' value='3' onclick='boldage(this)'/> <br/> Somewhat<br/> less than<br/> I want</label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_amount3d'>  <input type='radio' id='h_amount3d' name='h_amount' value='4' onclick='boldage(this)'/> <br/> The right <br/>amount<br/><br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_amount3e'>  <input type='radio' id='h_amount3e' name='h_amount' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> more than<br/>I want</label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_amount3f'>  <input type='radio' id='h_amount3f' name='h_amount' value='6' onclick='boldage(this)'/> <br/> More <br/>than I want<br/><br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='h_amount3g'>  <input type='radio' id='h_amount3g' name='h_amount' value='7' onclick='boldage(this)'/> <br/> Much more <br/>than I want<br/><br/></label>  </div>
</div></span>
<br>
<hr>

What is the <b>main reason</b> you exercise?<br><br>
<span><span>
 <label><input type='radio' id='h_reasona' name='h_reason' value='1' onclick='details(this.value); boldage(this);'> Lose Weight </label> <br>
 <label><input type='radio' id='h_reasonb' name='h_reason' value='2' onclick='details(this.value); boldage(this);'> For Fun </label> <br> 
 <label><input type='radio' id='h_reasonc' name='h_reason' value='3' onclick='details(this.value); boldage(this);'> Get stronger/gain weight </label> <br>
 <label><input type='radio' id='h_reasond' name='h_reason' value='4' onclick='details(this.value); boldage(this);'> Manage Stress</label> <br>
 <label><input type='radio' id='h_reasone' name='h_reason' value='5' onclick='details(this.value); boldage(this);'> Socialize with friends </label> <br>
 <label><input type='radio' id='h_reasonf' name='h_reason' value='6' onclick='details(this.value); boldage(this);'> Maintain Health </label> <br>
 <label><input type='radio' id='h_reasong' name='h_reason' value='7' onclick='details(this.value); boldage(this);'> Explore things/utilize free time  </label> <br> <br>
</span></span>



<br><br> 
<p class='error' id='error18'><br><br></p><input type='hidden' id='timeq18' name='timeq18'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_18();'>Next</button> 
    </div>
<br>

  </div>
</div>




<div class='tab' id='tab19'>
<hr>
If your friends exercise, does this influence you to exercise? <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='influence1a'>  <input type='radio' id='influence1a' name='influence1' value='1' onclick='boldage(this)'/> <br/> Definitely <br/> Yes  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence1b'>  <input type='radio' id='influence1b' name='influence1' value='2' onclick='boldage(this)'/> <br/> Yes <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence1c'>  <input type='radio' id='influence1c' name='influence1' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Yes  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence1d'>  <input type='radio' id='influence1d' name='influence1' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence1e'>  <input type='radio' id='influence1e' name='influence1' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> No  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence1f'>  <input type='radio' id='influence1f' name='influence1' value='6' onclick='boldage(this)'/> <br/> No  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence1g'>  <input type='radio' id='influence1g' name='influence1' value='7' onclick='boldage(this)'/> <br/> Definitely <br/> No  </label>  </div>
</div></span>

<br>
<hr>

If your <b>social media friends</b> exercise, does this influence you to exercise? <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='influence2a'>  <input type='radio' id='influence2a' name='influence2' value='1' onclick='boldage(this)'/> <br/> Definitely <br/> Yes  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence2b'>  <input type='radio' id='influence2b' name='influence2' value='2' onclick='boldage(this)'/> <br/> Yes <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence2c'>  <input type='radio' id='influence2c' name='influence2' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Yes  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence2d'>  <input type='radio' id='influence2d' name='influence2' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence2e'>  <input type='radio' id='influence2e' name='influence2' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> No  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence2f'>  <input type='radio' id='influence2f' name='influence2' value='6' onclick='boldage(this)'/> <br/> No  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence2g'>  <input type='radio' id='influence2g' name='influence2' value='7' onclick='boldage(this)'/> <br/> Definitely <br/> No  </label>  </div>
</div></span>

<br>
<hr>

How often do you meet new friends while you exercise? <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='influence3a'>  <input type='radio' id='influence3a' name='influence3' value='1' onclick='boldage(this)'/> <br/> Very <br/> Often </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence3b'>  <input type='radio' id='influence3b' name='influence3' value='2' onclick='boldage(this)'/> <br/> Often <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence3c'>  <input type='radio' id='influence3c' name='influence3' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Often  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence3d'>  <input type='radio' id='influence3d' name='influence3' value='4' onclick='boldage(this)'/> <br/> Sometimes <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence3e'>  <input type='radio' id='influence3e' name='influence3' value='5' onclick='boldage(this)'/> <br/> Rarely <br/><br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence3f'>  <input type='radio' id='influence3f' name='influence3' value='6' onclick='boldage(this)'/> <br/> Very  <br/> Rarely <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence3g'>  <input type='radio' id='influence3g' name='influence3' value='7' onclick='boldage(this)'/> <br/> Never <br/> occured  </label>  </div>
</div></span>

<br>
<hr>

Are you open to the idea of meeting new friends while you exercise? <br><br>
<span><div class='container'>
<div class='floatright child' style='text-align: center;'> <label for='influence4a'>  <input type='radio' id='influence4a' name='influence4' value='1' onclick='boldage(this)'/> <br/> Definitely <br/> Yes  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence4b'>  <input type='radio' id='influence4b' name='influence4' value='2' onclick='boldage(this)'/> <br/> Yes <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence4c'>  <input type='radio' id='influence4c' name='influence4' value='3' onclick='boldage(this)'/> <br/> Somewhat <br/> Yes  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence4d'>  <input type='radio' id='influence4d' name='influence4' value='4' onclick='boldage(this)'/> <br/> Neutral <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence4e'>  <input type='radio' id='influence4e' name='influence4' value='5' onclick='boldage(this)'/> <br/> Somewhat <br/> No  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence4f'>  <input type='radio' id='influence4f' name='influence4' value='6' onclick='boldage(this)'/> <br/> No  <br/> <br/>  </label>  </div>
<div class='floatright child' style='text-align: center;'> <label for='influence4g'>  <input type='radio' id='influence4g' name='influence4' value='7' onclick='boldage(this)'/> <br/> Definitely <br/> No  </label>  </div>
</div></span>


<br><br>
<p class='error' id='error19'><br><br></p><input type='hidden' id='timeq19' name='timeq19'>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='nextPrev(1);timeq_19();'>Next</button> 
    </div>
<br>

  </div>
</div>



<div class='tab' id='tab20'>
<hr>
We would like to know more about you. We will only use the information below for research purposes. <br> <br>

<p>Age: <input type='number' name='q_age' min='18' max='100'></p>
<br>
Gender:<br>
<span><div><div>
<div> <label for='gendera'>  <input type='radio' id='gendera' name='q_gender' value='1' onclick='boldage(this)'/> Male </label>  </div>
<div> <label for='genderb'>  <input type='radio' id='genderb' name='q_gender' value='2' onclick='boldage(this)'/> Female </label>  </div>
<div> <label for='genderc'>  <input type='radio' id='genderc' name='q_gender' value='3' onclick='boldage(this)'/> Other </label>  </div>
<div> <label for='genderd'>  <input type='radio' id='genderd' name='q_gender' value='4' onclick='boldage(this)'/> I prefer not to respond. </label>  </div>
</div></div></span>
<br>
<p>Country: 
<select name='q_country'>
	<option value='0'>Please Select...</option>
	<option value='4'>Afghanistan</option>
	<option value='248'>Åland Islands</option>
	<option value='8'>Albania</option>
	<option value='12'>Algeria</option>
	<option value='16'>American Samoa</option>
	<option value='20'>Andorra</option>
	<option value='24'>Angola</option>
	<option value='660'>Anguilla</option>
	<option value='10'>Antarctica</option>
	<option value='28'>Antigua and Barbuda</option>
	<option value='32'>Argentina</option>
	<option value='51'>Armenia</option>
	<option value='533'>Aruba</option>
	<option value='36'>Australia</option>
	<option value='40'>Austria</option>
	<option value='31'>Azerbaijan</option>
	<option value='44'>Bahamas</option>
	<option value='48'>Bahrain</option>
	<option value='50'>Bangladesh</option>
	<option value='52'>Barbados</option>
	<option value='112'>Belarus</option>
	<option value='56'>Belgium</option>
	<option value='84'>Belize</option>
	<option value='204'>Benin</option>
	<option value='60'>Bermuda</option>
	<option value='64'>Bhutan</option>
	<option value='68'>Bolivia, Plurinational State of</option>
	<option value='535'>Bonaire, Sint Eustatius and Saba</option>
	<option value='70'>Bosnia and Herzegovina</option>
	<option value='72'>Botswana</option>
	<option value='74'>Bouvet Island</option>
	<option value='76'>Brazil</option>
	<option value='86'>British Indian Ocean Territory</option>
	<option value='96'>Brunei Darussalam</option>
	<option value='100'>Bulgaria</option>
	<option value='854'>Burkina Faso</option>
	<option value='108'>Burundi</option>
	<option value='116'>Cambodia</option>
	<option value='120'>Cameroon</option>
	<option value='124'>Canada</option>
	<option value='132'>Cape Verde</option>
	<option value='136'>Cayman Islands</option>
	<option value='140'>Central African Republic</option>
	<option value='148'>Chad</option>
	<option value='152'>Chile</option>
	<option value='156'>China</option>
	<option value='162'>Christmas Island</option>
	<option value='166'>Cocos (Keeling) Islands</option>
	<option value='170'>Colombia</option>
	<option value='174'>Comoros</option>
	<option value='178'>Congo</option>
	<option value='180'>Congo, the Democratic Republic of the</option>
	<option value='184'>Cook Islands</option>
	<option value='188'>Costa Rica</option>
	<option value='384'>Côte d'Ivoire</option>
	<option value='191'>Croatia</option>
	<option value='192'>Cuba</option>
	<option value='531'>Curaçao</option>
	<option value='196'>Cyprus</option>
	<option value='203'>Czech Republic</option>
	<option value='208'>Denmark</option>
	<option value='262'>Djibouti</option>
	<option value='212'>Dominica</option>
	<option value='214'>Dominican Republic</option>
	<option value='218'>Ecuador</option>
	<option value='818'>Egypt</option>
	<option value='222'>El Salvador</option>
	<option value='226'>Equatorial Guinea</option>
	<option value='232'>Eritrea</option>
	<option value='233'>Estonia</option>
	<option value='231'>Ethiopia</option>
	<option value='238'>Falkland Islands (Malvinas)</option>
	<option value='234'>Faroe Islands</option>
	<option value='242'>Fiji</option>
	<option value='246'>Finland</option>
	<option value='250'>France</option>
	<option value='254'>French Guiana</option>
	<option value='258'>French Polynesia</option>
	<option value='260'>French Southern Territories</option>
	<option value='266'>Gabon</option>
	<option value='270'>Gambia</option>
	<option value='268'>Georgia</option>
	<option value='276'>Germany</option>
	<option value='288'>Ghana</option>
	<option value='292'>Gibraltar</option>
	<option value='300'>Greece</option>
	<option value='304'>Greenland</option>
	<option value='308'>Grenada</option>
	<option value='312'>Guadeloupe</option>
	<option value='316'>Guam</option>
	<option value='320'>Guatemala</option>
	<option value='831'>Guernsey</option>
	<option value='324'>Guinea</option>
	<option value='624'>Guinea-Bissau</option>
	<option value='328'>Guyana</option>
	<option value='332'>Haiti</option>
	<option value='334'>Heard Island and McDonald Islands</option>
	<option value='336'>Holy See (Vatican City State)</option>
	<option value='340'>Honduras</option>
	<option value='344'>Hong Kong</option>
	<option value='348'>Hungary</option>
	<option value='352'>Iceland</option>
	<option value='356'>India</option>
	<option value='360'>Indonesia</option>
	<option value='364'>Iran, Islamic Republic of</option>
	<option value='368'>Iraq</option>
	<option value='372'>Ireland</option>
	<option value='833'>Isle of Man</option>
	<option value='376'>Israel</option>
	<option value='380'>Italy</option>
	<option value='388'>Jamaica</option>
	<option value='392'>Japan</option>
	<option value='832'>Jersey</option>
	<option value='400'>Jordan</option>
	<option value='398'>Kazakhstan</option>
	<option value='404'>Kenya</option>
	<option value='296'>Kiribati</option>
	<option value='408'>Korea, Democratic People's Republic of</option>
	<option value='410'>Korea, Republic of</option>
	<option value='414'>Kuwait</option>
	<option value='417'>Kyrgyzstan</option>
	<option value='418'>Lao People's Democratic Republic</option>
	<option value='428'>Latvia</option>
	<option value='422'>Lebanon</option>
	<option value='426'>Lesotho</option>
	<option value='430'>Liberia</option>
	<option value='434'>Libya</option>
	<option value='438'>Liechtenstein</option>
	<option value='440'>Lithuania</option>
	<option value='442'>Luxembourg</option>
	<option value='446'>Macao</option>
	<option value='807'>Macedonia, the former Yugoslav Republic of</option>
	<option value='450'>Madagascar</option>
	<option value='454'>Malawi</option>
	<option value='458'>Malaysia</option>
	<option value='462'>Maldives</option>
	<option value='466'>Mali</option>
	<option value='470'>Malta</option>
	<option value='584'>Marshall Islands</option>
	<option value='474'>Martinique</option>
	<option value='478'>Mauritania</option>
	<option value='480'>Mauritius</option>
	<option value='175'>Mayotte</option>
	<option value='484'>Mexico</option>
	<option value='583'>Micronesia, Federated States of</option>
	<option value='498'>Moldova, Republic of</option>
	<option value='492'>Monaco</option>
	<option value='496'>Mongolia</option>
	<option value='499'>Montenegro</option>
	<option value='500'>Montserrat</option>
	<option value='504'>Morocco</option>
	<option value='508'>Mozambique</option>
	<option value='104'>Myanmar</option>
	<option value='516'>Namibia</option>
	<option value='520'>Nauru</option>
	<option value='524'>Nepal</option>
	<option value='528'>Netherlands</option>
	<option value='540'>New Caledonia</option>
	<option value='554'>New Zealand</option>
	<option value='558'>Nicaragua</option>
	<option value='562'>Niger</option>
	<option value='566'>Nigeria</option>
	<option value='570'>Niue</option>
	<option value='574'>Norfolk Island</option>
	<option value='580'>Northern Mariana Islands</option>
	<option value='578'>Norway</option>
	<option value='512'>Oman</option>
	<option value='586'>Pakistan</option>
	<option value='585'>Palau</option>
	<option value='275'>Palestinian Territory, Occupied</option>
	<option value='591'>Panama</option>
	<option value='598'>Papua New Guinea</option>
	<option value='600'>Paraguay</option>
	<option value='604'>Peru</option>
	<option value='608'>Philippines</option>
	<option value='612'>Pitcairn</option>
	<option value='616'>Poland</option>
	<option value='620'>Portugal</option>
	<option value='630'>Puerto Rico</option>
	<option value='634'>Qatar</option>
	<option value='638'>Réunion</option>
	<option value='642'>Romania</option>
	<option value='643'>Russian Federation</option>
	<option value='646'>Rwanda</option>
	<option value='652'>Saint Barthélemy</option>
	<option value='654'>Saint Helena, Ascension and Tristan da Cunha</option>
	<option value='659'>Saint Kitts and Nevis</option>
	<option value='662'>Saint Lucia</option>
	<option value='663'>Saint Martin (French part)</option>
	<option value='666'>Saint Pierre and Miquelon</option>
	<option value='670'>Saint Vincent and the Grenadines</option>
	<option value='882'>Samoa</option>
	<option value='674'>San Marino</option>
	<option value='678'>Sao Tome and Principe</option>
	<option value='682'>Saudi Arabia</option>
	<option value='686'>Senegal</option>
	<option value='688'>Serbia</option>
	<option value='690'>Seychelles</option>
	<option value='694'>Sierra Leone</option>
	<option value='702'>Singapore</option>
	<option value='534'>Sint Maarten (Dutch part)</option>
	<option value='703'>Slovakia</option>
	<option value='705'>Slovenia</option>
	<option value='90'>Solomon Islands</option>
	<option value='706'>Somalia</option>
	<option value='710'>South Africa</option>
	<option value='239'>South Georgia and the South Sandwich Islands</option>
	<option value='728'>South Sudan</option>
	<option value='724'>Spain</option>
	<option value='144'>Sri Lanka</option>
	<option value='729'>Sudan</option>
	<option value='740'>Suriname</option>
	<option value='744'>Svalbard and Jan Mayen</option>
	<option value='748'>Swaziland</option>
	<option value='752'>Sweden</option>
	<option value='756'>Switzerland</option>
	<option value='760'>Syrian Arab Republic</option>
	<option value='158'>Taiwan, Province of China</option>
	<option value='762'>Tajikistan</option>
	<option value='834'>Tanzania, United Republic of</option>
	<option value='764'>Thailand</option>
	<option value='626'>Timor-Leste</option>
	<option value='768'>Togo</option>
	<option value='772'>Tokelau</option>
	<option value='776'>Tonga</option>
	<option value='780'>Trinidad and Tobago</option>
	<option value='788'>Tunisia</option>
	<option value='792'>Turkey</option>
	<option value='795'>Turkmenistan</option>
	<option value='796'>Turks and Caicos Islands</option>
	<option value='798'>Tuvalu</option>
	<option value='800'>Uganda</option>
	<option value='804'>Ukraine</option>
	<option value='784'>United Arab Emirates</option>
	<option value='826'>United Kingdom</option>
	<option value='840'>United States</option>
	<option value='581'>United States Minor Outlying Islands</option>
	<option value='858'>Uruguay</option>
	<option value='860'>Uzbekistan</option>
	<option value='548'>Vanuatu</option>
	<option value='862'>Venezuela, Bolivarian Republic of</option>
	<option value='704'>Viet Nam</option>
	<option value='92'>Virgin Islands, British</option>
	<option value='850'>Virgin Islands, U.S.</option>
	<option value='876'>Wallis and Futuna</option>
	<option value='732'>Western Sahara</option>
	<option value='887'>Yemen</option>
	<option value='894'>Zambia</option>
	<option value='716'>Zimbabwe</option>
</select>

 <!--   
<input type='text' name='q_country' size = '15'/></p>
-->

<br><br><br>

Highest completed degree: <br>
<span><span><div>
<div> <label for='q_educationa'>  <input type='radio' id='q_educationa' name='q_education' value='1' onclick='boldage(this)'/> Less than a high school diploma </label>  </div>
<div> <label for='q_educationb'>  <input type='radio' id='q_educationb' name='q_education' value='2' onclick='boldage(this)'/> High school degree or equivalent (e.g. GED) </label>  </div>
<div> <label for='q_educationc'>  <input type='radio' id='q_educationc' name='q_education' value='3' onclick='boldage(this)'/> Some college, no degree </label>  </div>
<div> <label for='q_educationd'>  <input type='radio' id='q_educationd' name='q_education' value='4' onclick='boldage(this)'/> Associate degree (e.g. AA, AS) </label>  </div>
<div> <label for='q_educatione'>  <input type='radio' id='q_educatione' name='q_education' value='5' onclick='boldage(this)'/> Bachelor’s degree (e.g. BA, BS) </label>  </div>
<div> <label for='q_educationf'>  <input type='radio' id='q_educationf' name='q_education' value='6' onclick='boldage(this)'/> Master’s degree (e.g. MA, MS, MEd) </label>  </div>
<div> <label for='q_educationg'>  <input type='radio' id='q_educationg' name='q_education' value='7' onclick='boldage(this)'/> Professional degree (e.g. MD, DDS, DVM) </label>  </div>
<div> <label for='q_educationh'>  <input type='radio' id='q_educationh' name='q_education' value='8' onclick='boldage(this)'/> Doctorate (e.g. PhD, EdD) </label>  </div>
</div></span></span>
<br><br>
Please enter comments and suggestions here: (Optional) <br>
<textarea rows='5' cols='60' name='commentbox'></textarea>
<br><br>
<p class='error' id='error20'><br><br></p>
<br>
  <div style='overflow:auto;'>
    <div style='float:right;'>
    
      <button type='button' id='prevBtn' onclick='nextPrev(-1);'>Previous</button>
      <button type='button' id='nextBtn' onclick='time_end2();nextPrev(1);'>Submit</button> 
    </div>
<br>

  </div>
</div>


 <!--   
  <div class='tab'>Birthday:
    <p><input placeholder='dd' oninput='this.className = ''' name='dd'></p>
    <p><input placeholder='mm' oninput='this.className = ''' name='nn'></p>
    <p><input placeholder='yyyy' oninput='this.className = ''' name='yyyy'></p>
  </div>

  <div class='tab'>Login Info:
    <p><input placeholder='Username...' oninput='this.className = ''' name='uname'></p>
    <p><input placeholder='Password...' oninput='this.className = ''' name='pword' type='password'></p>
  </div>

-->




  <!-- Circles which indicates the steps of the form: -->
  <div style='text-align:center;margin-top:40px;'>
    <span class='step'></span>
    <span class='step'></span>
    <span class='step'></span>
    <span class='step'></span>
    <span class='step'></span>
    <span class='step'></span>
    <span class='step'></span>
    <span class='step'></span>
    <span class='step'></span>
<span class='step'></span>
<span class='step'></span>
<span class='step'></span>
<span class='step'></span>
<span class='step'></span>
<span class='step'></span>
<span class='step'></span>
<span class='step'></span>
<span class='step'></span>
<span class='step'></span>
<span class='step'></span>
  </div>
</form>

<script>

function time_end2(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeend2').value = n;
}

function timeq_1(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq1').value = n;
}

function timeq_2(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq2').value = n;
}

function timeq_3(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq3').value = n;
}

function timeq_4(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq4').value = n;
}

function timeq_5(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq5').value = n;
}

function timeq_6(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq6').value = n;
}

function timeq_7(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq7').value = n;
}

function timeq_8(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq8').value = n;
}

function timeq_9(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq9').value = n;
}

function timeq_10(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq10').value = n;
}

function timeq_11(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq11').value = n;
}

function timeq_12(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq12').value = n;
}

function timeq_13(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq13').value = n;
}

function timeq_14(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq14').value = n;
}

function timeq_15(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq15').value = n;
}

function timeq_16(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq16').value = n;
}

function timeq_17(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq17').value = n;
}

function timeq_18(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq18').value = n;
}

function timeq_19(){
    var d = new Date();
    var n = d.getTime();
document.getElementById('timeq19').value = n;
}

function boldage(el){
        var root = el.parentNode.parentNode.parentNode; //this gets us to the p, which is the parent of all the radio buttons
        var radios = root.getElementsByTagName('INPUT'); //this gets us all inputs
        for(var i=0; i<radios.length; i++){
            //iterate through inputs
            if(radios[i].type == 'radio'){
                //this is a radio button
                radios[i].parentNode.style.fontWeight = ''; radios[i].parentNode.style.color = 'gray';    //turning off any bold for all inputs
            }
        }
        el.parentNode.style.fontWeight = 'bold';    //go up to the parent of the current item, taking us to its label, then bolding.
        el.parentNode.style.color = 'black';    //go up to the parent of the current item, taking us to its label, then bolding.

    }

//initially:
tr1=false; tr2=false; tr3=false; tr4=false;
hle1=false; hle2=false; hle3=false; hle3=false;
gpc1=false; gpc2=false; gpc3=false; gpc4=false; gpc5=false; gpc6=false;
surv1=false; surv2=false; surv3 = false;
intru1=false; intru2=false; intru3 =false;
second1=false; second2=false; second3 =false;


function t1(val) {document.getElementById('trust1Label').innerHTML = val; tr1=true;}
function t2(val) {document.getElementById('trust2Label').innerHTML = val; tr2=true;}
function t3(val) {document.getElementById('trust3Label').innerHTML = val; tr3=true;}
function t4(val) {document.getElementById('trust4Label').innerHTML = val; tr4=true;}

function hl1(val) {document.getElementById('expertise1Label').innerHTML = val; hle1=true;}
function hl2(val) {document.getElementById('expertise2Label').innerHTML = val; hle2=true;}
function hl3(val) {document.getElementById('expertise3Label').innerHTML = val; hle3=true;}
function hl4(val) {document.getElementById('expertise4Label').innerHTML = val; hle4=true;}

function gp1(val) {document.getElementById('privacy_concern1Label').innerHTML = val; gpc1=true;}
function gp2(val) {document.getElementById('privacy_concern2Label').innerHTML = val; gpc2=true;}
function gp3(val) {document.getElementById('privacy_concern3Label').innerHTML = val; gpc3=true;}
function gp4(val) {document.getElementById('privacy_concern4Label').innerHTML = val; gpc4=true;}
function gp5(val) {document.getElementById('privacy_concern5Label').innerHTML = val; gpc5=true;}
function gp6(val) {document.getElementById('privacy_concern6Label').innerHTML = val; gpc6=true;}


function others(name){
if(name=='9'){document.getElementById('display2').innerHTML = '<input placeholder=\"Please Specify...\" oninput=\"this.className = \"\"\" name=\"app_others_char\">';}
else {document.getElementById('display2').innerHTML='';}
}


function details(name){
/*
if(name=='1'){document.getElementById('display123456').innerHTML='More Detail: <br> The \"Privacy Conservatives\" felt the least comfortable granting sensitive information and functionality to third parties (e.g., location and unique phone ID). They also felt uncomfortable with mobile apps that want to access their unique phone ID, contacts list or SMS functionality, even if for internal purposes only.';}
if(name=='2'){document.getElementById('display123456').innerHTML='More Detail: <br> The \"Unconcerned\" shows a particularly high level of comfort disclosing sensitive personal data under a wide range of conditions, no matter who is collecting their data and for what purpose. The only concerning entry is when it comes to granting access to the accounts permission (e.g. information connected to accounts such as Google+, Facebook, YouTube).';}
if(name=='3'){document.getElementById('display123456').innerHTML='More Detail: <br> The \"Fence-Sitters\" do not appear to feel strongly one way or the other about many of the use cases. This profile felt quite comfortable letting mobile apps access sensitive personal data for internal functionality purposes. When their information is requested by 3rd-party libraries such as for delivering targeted ads or conducting mobile analytics, their attitude was close to neutral (i.e. neither comfortable nor uncomfortable). This profile also felt consistently comfortable disclosing all types of sensitive personal data. Westin found that while small numbers of users would fall at both extremes of the spectrum (i.e. privacy fundamentalist, and unconcerned), the majority of users tend to be in-between (pragmatists).';}
if(name=='4'){document.getElementById('display123456').innerHTML='More Detail: <br> The \"Advanced Users\" appeared to have a more nuanced understanding of what sorts of usage scenarios they should be concerned about. In general, most of them felt comfortable with their sensitive data being used for internal functionality. This profile disliked targeted ads and mobile analytic libraries, but still felt generally agreeable to disclosing context information at a coarser level of granularity (i.e. coarse location).';}
*/
}



function opsys(name){

if(name=='1'){
document.getElementById('display12android').style.display = 'inline';
document.getElementById('display12iphone').style.display = 'none';
document.getElementById('display12windows').style.display = 'none';
}
else if(name=='2'){
document.getElementById('android5').parentNode.style.fontWeight = ''; document.getElementById('android5').parentNode.style.color = 'gray';document.getElementById('android5').checked=false;
document.getElementById('android6').checked=false;document.getElementById('android6').parentNode.style.fontWeight = ''; document.getElementById('android6').parentNode.style.color = 'gray';
document.getElementById('display12iphone').style.display = 'inline';
document.getElementById('display12android').style.display = 'none';
document.getElementById('display12windows').style.display = 'none';
}
else if(name=='3'){document.getElementById('android5').checked=false;document.getElementById('android6').checked=false;document.getElementById('display12windows').style.display = 'inline';document.getElementById('display12android').style.display = 'none';document.getElementById('display12iphone').style.display = 'none';}
else {document.getElementById('android5').checked=false;document.getElementById('android6').checked=false;document.getElementById('display12windows').style.display = 'none';document.getElementById('display12android').style.display = 'none';document.getElementById('display12iphone').style.display = 'none';}
document.getElementById('android5').style.fontWeight = ''; document.getElementById('android5').style.color = 'gray';
}



function android(name){
if(name=='2'){document.getElementById('display123android1').style.display = 'inline';document.getElementById('display123android2').style.display = 'none';}
else if(name=='1') {document.getElementById('display123android2').style.display = 'inline';document.getElementById('display123android1').style.display = 'none';}
else {document.getElementById('display123android2').style.display = 'none';document.getElementById('display123android1').style.display = 'none';}
}

function showfield(name){

if(name=='2'){document.getElementById('display1').style.display = 'inline'; document.getElementById('display1b').style.display = 'none';}
if(name=='1'){document.getElementById('display1b').style.display = 'inline'; document.getElementById('display1').style.display = 'none';}
}



function fourthparty()
{
if  (document.getElementById(\"fpapp\").checked == true)
{document.getElementById('displayfp').style.display = 'inline'; document.getElementById('displayfp2').style.display = 'none';}
else if  (document.getElementById(\"fpapp2\").checked == true)
{document.getElementById('displayfp2').style.display = 'inline'; document.getElementById('displayfp').style.display = 'none';}
else {document.getElementById('displayfp').innerHTML='';document.getElementById('displayfp2').innerHTML='';}
}


function precheck()
{
/*
if (('$f_steps'== '2') || ('$f_food'== '2') || ('$f_distance'== '2') || ('$f_elevation'== '2') || ('$f_floors'== '2') || ('$f_minutesActivity'== '2') || ('$f_activityCalories'== '2') || ('$f_heartrate'== '2'))
{

document.getElementById(\"fourthpartyrisk2\").style.display = 'inline';
document.getElementById(\"fourthpartyrisk1\").style.display = 'none';

if ('$f_steps' == '2'){
document.getElementById(\"f_steps_risk2a\").style.display = 'table-row';
document.getElementById(\"f_steps_risk2b\").style.display = 'table-row';
document.getElementById(\"f_steps_risk2c\").style.display = 'table-row';
}
else
{
document.getElementById(\"f_steps_risk2a\").style.display = 'none';
document.getElementById(\"f_steps_risk2b\").style.display = 'none';
document.getElementById(\"f_steps_risk2c\").style.display = 'none';
}

if ('$f_food' == '2'){
document.getElementById(\"f_food_risk2a\").style.display = 'table-row';
document.getElementById(\"f_food_risk2b\").style.display = 'table-row';
document.getElementById(\"f_food_risk2c\").style.display = 'table-row';
}
else
{
document.getElementById(\"f_food_risk2a\").style.display = 'none';
document.getElementById(\"f_food_risk2b\").style.display = 'none';
document.getElementById(\"f_food_risk2c\").style.display = 'none';
}
if ('$f_distance' == '2'){
document.getElementById(\"f_distance_risk2a\").style.display = 'table-row';
document.getElementById(\"f_distance_risk2b\").style.display = 'table-row';
document.getElementById(\"f_distance_risk2c\").style.display = 'table-row';
}
else
{
document.getElementById(\"f_distance_risk2a\").style.display = 'none';
document.getElementById(\"f_distance_risk2b\").style.display = 'none';
document.getElementById(\"f_distance_risk2c\").style.display = 'none';
}

if ('$f_elevation' == '2'){
document.getElementById(\"f_elevation_risk2a\").style.display = 'table-row';
document.getElementById(\"f_elevation_risk2b\").style.display = 'table-row';
document.getElementById(\"f_elevation_risk2c\").style.display = 'table-row';
}
else
{
document.getElementById(\"f_elevation_risk2a\").style.display = 'none';
document.getElementById(\"f_elevation_risk2b\").style.display = 'none';
document.getElementById(\"f_elevation_risk2c\").style.display = 'none';
}if ('$f_floors' == '2'){
document.getElementById(\"f_floors_risk2a\").style.display = 'table-row';
document.getElementById(\"f_floors_risk2b\").style.display = 'table-row';
document.getElementById(\"f_floors_risk2c\").style.display = 'table-row';
}
else
{
document.getElementById(\"f_floors_risk2a\").style.display = 'none';
document.getElementById(\"f_floors_risk2b\").style.display = 'none';
document.getElementById(\"f_floors_risk2c\").style.display = 'none';

}if ('$f_minutesActivity' == '2'){
document.getElementById(\"f_minutesactivities_risk2a\").style.display = 'table-row';
document.getElementById(\"f_minutesactivities_risk2b\").style.display = 'table-row';
document.getElementById(\"f_minutesactivities_risk2c\").style.display = 'table-row';
}
else
{
document.getElementById(\"f_minutesactivities_risk2a\").style.display = 'none';
document.getElementById(\"f_minutesactivities_risk2b\").style.display = 'none';
document.getElementById(\"f_minutesactivities_risk2c\").style.display = 'none';
}
if ('$f_activityCalories' == '2'){
document.getElementById(\"f_activitycalories_risk2a\").style.display = 'table-row';
document.getElementById(\"f_activitycalories_risk2b\").style.display = 'table-row';
document.getElementById(\"f_activitycalories_risk2c\").style.display = 'table-row';
}
else{
document.getElementById(\"f_activitycalories_risk2a\").style.display = 'none';
document.getElementById(\"f_activitycalories_risk2b\").style.display = 'none';
document.getElementById(\"f_activitycalories_risk2c\").style.display = 'none';
}

if ('$f_heartrate' == '2'){
document.getElementById(\"f_heartrate_risk2a\").style.display = 'table-row';
document.getElementById(\"f_heartrate_risk2b\").style.display = 'table-row';
document.getElementById(\"f_heartrate_risk2c\").style.display = 'table-row';
}
else
{
document.getElementById(\"f_heartrate_risk2a\").style.display = 'none';
document.getElementById(\"f_heartrate_risk2b\").style.display = 'none';
document.getElementById(\"f_heartrate_risk2c\").style.display = 'none';
}

}
else
{
document.getElementById(\"fourthpartyrisk2\").style.display = 'none';
document.getElementById(\"fourthpartyrisk1\").style.display = 'inline';
}
*/
}





function negotiation()
{
/*
if (('$s_identity'== '1') || ('$s_contacts'== '1') || ('$s_location'== '1') || ('$s_sms'== '1') || ('$s_storage'== '1') || ('$s_camera'== '1') || ('$s_bluetooth'== '1') || ('$s_photos'== '1')  || ('$s_phone'== '1') || ('$s_motion'== '1') || ('$s_media'== '1') || ('$s_mobiledata'== '1') || ('$f_steps'== '1') || ('$f_distance'== '1') || ('$f_elevation'== '1') || ('$f_floors'== '1') || ('$f_minutesActivity'== '1') || ('$f_activityCalories'== '1') || ('$f_weight'== '1') || ('$f_minutesAsleep'== '1') || ('$f_heartrate'== '1') || ('$f_food'== '1') || ('$f_friends'== '1') || ('$f_profile'== '1') || ('$f_location'== '1') || ('$f_settings'== '1') || ('$name_p'== '1') || ('$gender_p'== '1') || ('$bday_p'== '1') || ('$height_p'== '1') || ('$weight_p'== '1'))
{ 
// ('$s_microphone'== '1')
document.getElementById('shareall').style.display = 'none'; document.getElementById('table2').style.display = 'inline';
if ('$s_identity' == '1'){document.getElementById('tr_identity').style.display = 'table-row';}
if ('$s_contacts' == '1'){document.getElementById('tr_contacts').style.display = 'table-row';}
if ('$s_location' == '1'){document.getElementById('tr_location').style.display = 'table-row';}
if ('$s_sms' == '1'){document.getElementById('tr_sms').style.display = 'table-row';}
if ('$s_storage' == '1'){document.getElementById('tr_storage').style.display = 'table-row';}
if ('$s_camera' == '1'){document.getElementById('tr_camera').style.display = 'table-row';}
if ('$s_bluetooth' == '1'){document.getElementById('tr_bluetooth').style.display ='table-row';}
if ('$s_photos' == '1'){document.getElementById('tr_photos').style.display ='table-row';}
if ('$s_phone' == '1'){document.getElementById('tr_phone').style.display ='table-row';}
if ('$s_motion' == '1'){document.getElementById('tr_motion').style.display ='table-row';}
if ('$s_media' == '1'){document.getElementById('tr_media').style.display ='table-row';}
if ('$s_mobiledata' == '1'){document.getElementById('tr_mobiledata').style.display ='table-row';}
//if ('$s_microphone' == '1'){document.getElementById('tr_microphone').style.display ='table-row';}

if ('$f_steps' == '1'){document.getElementById('tr_steps').style.display ='table-row';}
if ('$f_distance' == '1'){document.getElementById('tr_distance').style.display ='table-row';}
if ('$f_elevation' == '1'){document.getElementById('tr_elevation').style.display ='table-row';}
if ('$f_floors' == '1'){document.getElementById('tr_floors').style.display ='table-row';}
if ('$f_minutesActivity' == '1'){document.getElementById('tr_minutesactivity').style.display ='table-row';}
if ('$f_activityCalories' == '1'){document.getElementById('tr_activitycalories').style.display ='table-row';}
if ('$f_weight' == '1'){document.getElementById('tr_weight').style.display ='table-row';}
if ('$f_minutesAsleep' == '1'){document.getElementById('tr_minutesasleep').style.display ='table-row';}
if ('$f_heartrate' == '1'){document.getElementById('tr_heartrate').style.display ='table-row';}
if ('$f_food' == '1'){document.getElementById('tr_food').style.display ='table-row';}
if ('$f_friends' == '1'){document.getElementById('tr_friends').style.display ='table-row';}
if ('$f_profile' == '1'){document.getElementById('tr_profile').style.display ='table-row';}
if ('$f_location' == '1'){document.getElementById('tr_locationf').style.display ='table-row';}
if ('$f_settings' == '1'){document.getElementById('tr_settings').style.display ='table-row';}

if ('$name_p' == '1'){document.getElementById('tr_name_p').style.display ='table-row';}
if ('$gender_p' == '1'){document.getElementById('tr_gender_p').style.display ='table-row';}
if ('$bday_p' == '1'){document.getElementById('tr_bday_p').style.display ='table-row';}
if ('$height_p' == '1'){document.getElementById('tr_height_p').style.display ='table-row';}
if ('$weight_p' == '1'){document.getElementById('tr_weight_p').style.display ='table-row';}

}

else {document.getElementById('toshare').style.display = 'none'; document.getElementById('table2').style.display = 'none';}
*/
}




function negotiation2(id)
{

// identity
if (id == 'neg_identity1'){document.getElementById('neg2_identity').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_identity_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_identity_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_identity2')
{document.getElementById('neg2_identity').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_identity_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_identity_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// contacts
if (id == 'neg_contacts1'){document.getElementById('neg2_contacts').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_contacts_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_contacts_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_contacts2')
{document.getElementById('neg2_contacts').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_contacts_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_contacts_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// location
if (id == 'neg_location1'){document.getElementById('neg2_location').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_location_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_location_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_location2')
{document.getElementById('neg2_location').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_location_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_location_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// sms
if (id == 'neg_sms1'){document.getElementById('neg2_sms').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_sms_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_sms_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_sms2')
{document.getElementById('neg2_sms').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_sms_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_sms_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// storage
if (id == 'neg_storage1'){document.getElementById('neg2_storage').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_storage_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_storage_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_storage2')
{document.getElementById('neg2_storage').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_storage_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_storage_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// camera
if (id == 'neg_camera1'){document.getElementById('neg2_camera').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_camera_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_camera_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_camera2')
{document.getElementById('neg2_camera').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_camera_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_camera_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// bluetooth
if (id == 'neg_bluetooth1'){document.getElementById('neg2_bluetooth').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_bluetooth_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_bluetooth_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_bluetooth2')
{document.getElementById('neg2_bluetooth').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_bluetooth_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_bluetooth_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// photos
if (id == 'neg_photos1'){document.getElementById('neg2_photos').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_photos_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_photos_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_photos2')
{document.getElementById('neg2_photos').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_photos_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_photos_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// phone
if (id == 'neg_phone1'){document.getElementById('neg2_phone').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_phone_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_phone_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_phone2')
{document.getElementById('neg2_phone').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_phone_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_phone_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// motion
if (id == 'neg_motion1'){document.getElementById('neg2_motion').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_motion_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_motion_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_motion2')
{document.getElementById('neg2_motion').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_motion_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_motion_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// media
if (id == 'neg_media1'){document.getElementById('neg2_media').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_media_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_media_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_media2')
{document.getElementById('neg2_media').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_media_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_media_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// mobiledata
if (id == 'neg_mobiledata1'){document.getElementById('neg2_mobiledata').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_mobiledata_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_mobiledata_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_mobiledata2')
{document.getElementById('neg2_mobiledata').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_mobiledata_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_mobiledata_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// microphone
/*
if (id == 'neg_microphone1'){document.getElementById('neg2_microphone').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_microphone_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_microphone_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_microphone2')
{document.getElementById('neg2_microphone').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_microphone_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_microphone_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}
*/

// steps
if (id == 'neg_steps1'){document.getElementById('neg2_steps').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_steps_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_steps_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_steps2')
{document.getElementById('neg2_steps').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_steps_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_steps_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// distance
if (id == 'neg_distance1'){document.getElementById('neg2_distance').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_distance_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_distance_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_distance2')
{document.getElementById('neg2_distance').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_distance_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_distance_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// elevation
if (id == 'neg_elevation1'){document.getElementById('neg2_elevation').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_elevation_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_elevation_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_elevation2')
{document.getElementById('neg2_elevation').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_elevation_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_elevation_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// floors
if (id == 'neg_floors1'){document.getElementById('neg2_floors').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_floors_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_floors_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_floors2')
{document.getElementById('neg2_floors').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_floors_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_floors_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// minutesactivity
if (id == 'neg_minutesactivity1'){document.getElementById('neg2_minutesactivity').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_minutesactivity_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_minutesactivity_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_minutesactivity2')
{document.getElementById('neg2_minutesactivity').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_minutesactivity_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_minutesactivity_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// activitycalories
if (id == 'neg_activitycalories1'){document.getElementById('neg2_activitycalories').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_activitycalories_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_activitycalories_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_activitycalories2')
{document.getElementById('neg2_activitycalories').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_activitycalories_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_activitycalories_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// weight
if (id == 'neg_weight1'){document.getElementById('neg2_weight').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_weight_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_weight_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_weight2')
{document.getElementById('neg2_weight').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_weight_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_weight_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// minutesasleep
if (id == 'neg_minutesasleep1'){document.getElementById('neg2_minutesasleep').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_minutesasleep_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_minutesasleep_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_minutesasleep2')
{document.getElementById('neg2_minutesasleep').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_minutesasleep_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_minutesasleep_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// heartrate
if (id == 'neg_heartrate1'){document.getElementById('neg2_heartrate').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_heartrate_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_heartrate_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_heartrate2')
{document.getElementById('neg2_heartrate').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_heartrate_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_heartrate_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// food
if (id == 'neg_food1'){document.getElementById('neg2_food').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_food_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_food_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_food2')
{document.getElementById('neg2_food').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_food_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_food_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// friends
if (id == 'neg_friends1'){document.getElementById('neg2_friends').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_friends_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_friends_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_friends2')
{document.getElementById('neg2_friends').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_friends_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_friends_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// profile
if (id == 'neg_profile1'){document.getElementById('neg2_profile').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_profile_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_profile_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_profile2')
{document.getElementById('neg2_profile').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_profile_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_profile_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// locationf
if (id == 'neg_locationf1'){document.getElementById('neg2_locationf').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_locationf_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_locationf_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_locationf2')
{document.getElementById('neg2_locationf').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_locationf_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_locationf_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}


// settings
if (id == 'neg_settings1'){document.getElementById('neg2_settings').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_settings_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_settings_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_settings2')
{document.getElementById('neg2_settings').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_settings_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_settings_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

// name_p
if (id == 'neg_name_p1'){document.getElementById('neg2_name_p').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_name_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_name_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_name_p2')
{document.getElementById('neg2_name_p').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_name_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_name_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}
// gender_p
if (id == 'neg_gender_p1'){document.getElementById('neg2_gender_p').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_gender_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_gender_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_gender_p2')
{document.getElementById('neg2_gender_p').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_gender_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_gender_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}
// bday_p
if (id == 'neg_bday_p1'){document.getElementById('neg2_bday_p').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_bday_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_bday_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_bday_p2')
{document.getElementById('neg2_bday_p').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_bday_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_bday_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}
// height_p
if (id == 'neg_height_p1'){document.getElementById('neg2_height_p').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_height_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_height_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_height_p2')
{document.getElementById('neg2_height_p').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_height_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_height_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}
// weight_p
if (id == 'neg_weight_p1'){document.getElementById('neg2_weight_p').style.display = 'table-row';
var d= document.getElementsByClassName('neg2_weight_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'block';
var f= document.getElementsByClassName('neg2_weight_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'none'; 
}

if (id == 'neg_weight_p2')
{document.getElementById('neg2_weight_p').style.display = 'table-row';
var f= document.getElementsByClassName('neg2_weight_p_group2');
for (e = 0; e < f.length; e++)
f[e].style.display = 'block';
 
var d= document.getElementsByClassName('neg2_weight_p_group1');
for (s = 0; s < d.length; s++)
d[s].style.display = 'none'; 
}

}





var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName('tab');
  x[n].style.display = 'block';
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById('prevBtn').style.display = 'none';
  } else {
    document.getElementById('prevBtn').style.display = 'inline';
  }
  if (n == (x.length - 1)) {
    document.getElementById('nextBtn').innerHTML = 'Submit';
  } else {
    document.getElementById('nextBtn').innerHTML = 'Next';
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName('tab');
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = 'none';
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById('regForm').submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, z, i, valid = true;
  var ischecked_method0 = false;
  var ischecked_method1 = false;
  var ischecked_method2 = false;
  var ischecked_method3 = false;
  var ischecked_method4 = false;
  var ischecked_method5 = false;
  var ischecked_method6 = false;
  var ischecked_method7 = false;
  var ischecked_method8 = false;
  var ischecked_method9 = false;
  var ischecked_method10 = false;
  var ischecked_method11 = false;
  var ischecked_method12 = false;
  var ischecked_method13 = false;
  var ischecked_method14 = false;
  var ischecked_method15 = false;

  x = document.getElementsByClassName('tab');
  y = x[currentTab].getElementsByTagName('input');

  z=x[currentTab].id;
    



// A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == '') {
      // add an 'invalid' class to the field:
   /*   y[i].className += ' invalid';
      // and set the current valid status to false
      valid = false; */
    }



if (z=='tab1')
{

if ((!checker('understand')) || (!checker('prefer')) || (!checker('control')) || (!checker('simplicity')))
{
document.getElementsByName('understand').className += ' invalid';
document.getElementById('error1').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each question.</i></font>';
valid = false;
}
}



if (z=='tab2')
{

if (!checker('ver'))
{
document.getElementsByName('ver').className += ' invalid';
document.getElementById('error2').innerHTML = '<br><font color=\"red\"><i>Please choose your mobile Operating System.</i></font>';
valid = false;
}


if (document.getElementById('androidid').checked)
{
document.getElementById('error2').innerHTML = '';
if (!checker('android_v'))
{
document.getElementsByName('android_v').className += ' invalid';
document.getElementById('error2').innerHTML = '<br><font color=\"red\"><i>Please choose your Android version.</i></font>';
valid = false;
}

if (document.getElementById('android6').checked)
{
document.getElementById('error2').innerHTML = '';
if((!checker('android_camera')) || (!checker('android_contacts')) || (!checker('android_location')) || (!checker('android_phone')) || (!checker('android_sms')) || (!checker('android_storage')))
{
document.getElementsByName('android_camera').className += ' invalid';
document.getElementById('error2').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}

if (document.getElementById('android5').checked)
{
document.getElementById('error2').innerHTML = '';
if((!checker('android5_identity')) || (!checker('android5_contacts')) || (!checker('android5_location')) || (!checker('android5_sms')) || (!checker('android5_photos')) || (!checker('android5_storage')) || (!checker('android5_camera')) || (!checker('android5_bluetooth')) || (!checker('android5_phone')))
{
document.getElementsByName('android_camera').className += ' invalid';
document.getElementById('error2').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}
}

if (document.getElementById('iphoneid').checked){
document.getElementById('error2').innerHTML = '';
if((!checker('iphone_location')) || (!checker('iphone_contacts')) || (!checker('iphone_photos')) || (!checker('iphone_bluetooth')) || (!checker('iphone_camera')) || (!checker('iphone_media')) || (!checker('iphone_mobile')) || (!checker('iphone_motion')))
{
// (!checker('iphone_microphone'))        
document.getElementsByName('iphone_location').className += ' invalid';
document.getElementById('error2').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}


if (document.getElementById('windowsid').checked){
document.getElementById('error2').innerHTML = '';
if((!checker('windows_location')) || (!checker('windows_camera')) || (!checker('windows_contacts')) || (!checker('windows_messaging')) || (!checker('windows_radios')))
{ 
//(!checker('windows_microphone'))           
document.getElementsByName('windows_camera').className += ' invalid';
document.getElementById('error2').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}

}


if (z=='tab3')
{
if (checker(\"agree\")){document.getElementById('error3').innerHTML = '';}
else{
document.getElementsByName('agree').className += ' invalid';
document.getElementById('error3').innerHTML = '<br><font color=\"red\"><i>Please choose an answer.</i></font>';
valid = false;
}
}



if (z=='tab4')
{

if (!checker('fourthp_app') || (!checker('test1')))
{
document.getElementsByName('fourthp_app').className += ' invalid';
document.getElementById('error4').innerHTML = '<br><font color=\"red\"><i>Please choose an answer for each question.</i></font>';
valid = false;
}

if (document.getElementById('fpapp').checked)
{
document.getElementById('error4').innerHTML = '';

if(document.getElementById('app_others_char').value==\"\")
{             
document.getElementsByName('app_others_char').className += ' invalid';
document.getElementById('error4').innerHTML = '<br><font color=\"red\"><i>Please enter the name of the app.</i></font>';
valid = false;
}

else if((!checker('fparty_sleep')) || (!checker('fparty_sleep')) || (!checker('fparty_devices')) || (!checker('fparty_food')) || (!checker('fparty_activity')) || (!checker('fparty_friends')) || (!checker('fparty_heartrate')) || (!checker('fparty_profile')) || (!checker('fparty_weight')) || (!checker('fparty_location')) || (!checker('test1')))
{             
document.getElementsByName('fparty_sleep').className += ' invalid';
document.getElementById('error4').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}

if (document.getElementById('fpapp2').checked)
{
document.getElementById('error4').innerHTML = '';
if((!checker('fparty2_sleep')) || (!checker('fparty2_sleep')) || (!checker('fparty2_devices')) || (!checker('fparty2_food')) || (!checker('fparty2_activity')) || (!checker('fparty2_friends')) || (!checker('fparty2_heartrate')) || (!checker('fparty2_profile')) || (!checker('fparty2_weight')) || (!checker('fparty2_location'))|| (!checker('test1')))
{             
document.getElementsByName('fparty2_sleep').className += ' invalid';
document.getElementById('error4').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}

}




if (z=='tab5')
{

if ((!checker('app_firstname')) || (!checker('app_lastname')) || (!checker('app_gender')) || (!checker('app_bday')) || (!checker('app_weight')) || (!checker('app_height')) || (!checker('app_firstname2')) || (!checker('app_lastname2')) || (!checker('app_gender2')) || (!checker('app_bday2')) || (!checker('app_weight2')) || (!checker('app_height2')))
{
document.getElementsByName('app_fname').className += ' invalid';
document.getElementById('error5').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}




if (z=='tab6')
{

if ((!checker('neg2_identity2a')) || (!checker('neg2_contacts2a')) || (!checker('neg2_location2a')) || (!checker('neg2_sms2a')) || (!checker('neg2_storage2a')) || (!checker('neg2_camera2a')) || (!checker('neg2_bluetooth2a')) || (!checker('neg2_photos2a')) || (!checker('neg2_phone2a')) || (!checker('neg2_motion2a')) || (!checker('neg2_media2a')) || (!checker('neg2_mobiledata2a')) || (!checker('neg2_steps2a')) || (!checker('neg2_distance2a')) || (!checker('neg2_elevation2a')) || (!checker('neg2_floors2a')) || (!checker('neg2_minutesactivity2a')) || (!checker('neg2_activitycalories2a')) || (!checker('neg2_weight2a')) || (!checker('neg2_minutesasleep2a')) || (!checker('neg2_heartrate2a')) || (!checker('neg2_food2a')) || (!checker('neg2_friends2a')) || (!checker('neg2_profile2a')) || (!checker('neg2_locationf2a')) || (!checker('neg2_settings2a')) || (!checker('neg2_firstname_p2a')) || (!checker('neg2_lastname_p2a')) || (!checker('neg2_bday_p2a')) || (!checker('neg2_gender_p2a')) || (!checker('neg2_height_p2a')) || (!checker('neg2_weight_p2a')))
{
document.getElementsByName('neg2_identity2a').className += ' invalid';
document.getElementById('error6').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}



if (z=='tab7')
{

if ((!checker('neg2_identity2b')) || (!checker('neg2_contacts2b')) || (!checker('neg2_location2b')) || (!checker('neg2_sms2b')) || (!checker('neg2_storage2b')) || (!checker('neg2_camera2b')) || (!checker('neg2_bluetooth2b')) || (!checker('neg2_photos2b')) || (!checker('neg2_phone2b')) || (!checker('neg2_motion2b')) || (!checker('neg2_media2b')) || (!checker('neg2_mobiledata2b')) || (!checker('neg2_steps2b')) || (!checker('neg2_distance2b')) || (!checker('neg2_elevation2b')) || (!checker('neg2_floors2b')) || (!checker('neg2_minutesactivity2b')) || (!checker('neg2_activitycalories2b')) || (!checker('neg2_weight2b')) || (!checker('neg2_minutesasleep2b')) || (!checker('neg2_heartrate2b')) || (!checker('neg2_food2b')) || (!checker('neg2_friends2b')) || (!checker('neg2_profile2b')) || (!checker('neg2_locationf2b')) || (!checker('neg2_settings2b')) || (!checker('neg2_firstname_p2b')) || (!checker('neg2_lastname_p2b')) || (!checker('neg2_bday_p2b')) || (!checker('neg2_gender_p2b')) || (!checker('neg2_height_p2b')) || (!checker('neg2_weight_p2b')))
{
document.getElementsByName('neg2_identity2b').className += ' invalid';
document.getElementById('error7').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}

if (z=='tab8')
{

if ((!checker('neg2_identity2c')) || (!checker('neg2_contacts2c')) || (!checker('neg2_location2c')) || (!checker('neg2_sms2c')) || (!checker('neg2_storage2c')) || (!checker('neg2_camera2c')) || (!checker('neg2_bluetooth2c')) || (!checker('neg2_photos2c')) || (!checker('neg2_phone2c')) || (!checker('neg2_motion2c')) || (!checker('neg2_media2c')) || (!checker('neg2_mobiledata2c')) || (!checker('neg2_steps2c')) || (!checker('neg2_distance2c')) || (!checker('neg2_elevation2c')) || (!checker('neg2_floors2c')) || (!checker('neg2_minutesactivity2c')) || (!checker('neg2_activitycalories2c')) || (!checker('neg2_weight2c')) || (!checker('neg2_minutesasleep2c')) || (!checker('neg2_heartrate2c')) || (!checker('neg2_food2c')) || (!checker('neg2_friends2c')) || (!checker('neg2_profile2c')) || (!checker('neg2_locationf2c')) || (!checker('neg2_settings2c')) || (!checker('neg2_firstname_p2c')) || (!checker('neg2_lastname_p2c')) || (!checker('neg2_bday_p2c')) || (!checker('neg2_gender_p2c')) || (!checker('neg2_height_p2c')) || (!checker('neg2_weight_p2c')))
{
document.getElementsByName('neg2_identity2c').className += ' invalid';
document.getElementById('error8').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}

if (z=='tab9')
{

if ((!checker('neg2_identity2d')) || (!checker('neg2_contacts2d')) || (!checker('neg2_location2d')) || (!checker('neg2_sms2d')) || (!checker('neg2_storage2d')) || (!checker('neg2_camera2d')) || (!checker('neg2_bluetooth2d')) || (!checker('neg2_photos2d')) || (!checker('neg2_phone2d')) || (!checker('neg2_motion2d')) || (!checker('neg2_media2d')) || (!checker('neg2_mobiledata2d')) || (!checker('neg2_steps2d')) || (!checker('neg2_distance2d')) || (!checker('neg2_elevation2d')) || (!checker('neg2_floors2d')) || (!checker('neg2_minutesactivity2d')) || (!checker('neg2_activitycalories2d')) || (!checker('neg2_weight2d')) || (!checker('neg2_minutesasleep2d')) || (!checker('neg2_heartrate2d')) || (!checker('neg2_food2d')) || (!checker('neg2_friends2d')) || (!checker('neg2_profile2d')) || (!checker('neg2_locationf2d')) || (!checker('neg2_settings2d')) || (!checker('neg2_firstname_p2d')) || (!checker('neg2_lastname_p2d')) || (!checker('neg2_bday_p2d')) || (!checker('neg2_gender_p2d')) || (!checker('neg2_height_p2d')) || (!checker('neg2_weight_p2d')))
{
document.getElementsByName('neg2_identity2d').className += ' invalid';
document.getElementById('error9').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each item.</i></font>';
valid = false;
}
}





if (z=='tab10')
{

if ((!checker('trust1')) || (!checker('trust2')) || (!checker('trust3')) || (!checker('trust4')))
{
document.getElementsByName('trust1').className += ' invalid';
document.getElementById('error10').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each question.</i></font>';
valid = false;
}
}

if (z=='tab11')
{

if ((!checker('expertise1')) || (!checker('expertise2')) || (!checker('expertise3')) || (!checker('expertise4')))
{
document.getElementsByName('expertise1').className += ' invalid';
document.getElementById('error11').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each question.</i></font>';
valid = false;
}
}

if (z=='tab12')
{

if ((!checker('privacy_concern1')) || (!checker('privacy_concern2')) || (!checker('privacy_concern3')) || (!checker('privacy_concern4'))|| (!checker('privacy_concern5'))|| (!checker('privacy_concern6')))
{
document.getElementsByName('privacy_concern6').className += ' invalid';
document.getElementById('error12').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each question.</i></font>';
valid = false;
}
}

if (z=='tab13')
{

if ((!checker('surveillance1')) || (!checker('surveillance2')) || (!checker('surveillance3')))
{
document.getElementsByName('surveillance1').className += ' invalid';
document.getElementById('error13').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each question.</i></font>';
valid = false;
}
}

if (z=='tab14')
{

if ((!checker('intrusion1')) || (!checker('intrusion2')) || (!checker('intrusion3')))
{
document.getElementsByName('intrusion1').className += ' invalid';
document.getElementById('error14').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each question.</i></font>';
valid = false;
}
}

if (z=='tab15')
{

if ((!checker('second_use1')) || (!checker('second_use2')) || (!checker('second_use3')))
{
document.getElementsByName('second_use1').className += ' invalid';
document.getElementById('error15').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each question.</i></font>';
valid = false;
}
}


if (z=='tab16')
{
if (!checker('f_food_risk')){document.getElementsByName('f_food_risk').className += ' invalid';document.getElementById('error16').innerHTML = '<br><font color=\"red\"><i>Please choose an answer for each item.</i></font>';valid = false;}
if (!checker('f_steps_risk')){document.getElementsByName('f_steps_risk').className += ' invalid';document.getElementById('error16').innerHTML = '<br><font color=\"red\"><i>Please choose an answer for each item.</i></font>';valid = false;}
if (!checker('f_distance_risk')){document.getElementsByName('f_distance_risk').className += ' invalid';document.getElementById('error16').innerHTML = '<br><font color=\"red\"><i>Please choose an answer for each item.</i></font>';valid = false;}
if (!checker('f_elevation_risk')){document.getElementsByName('f_elevation_risk').className += ' invalid';document.getElementById('error16').innerHTML = '<br><font color=\"red\"><i>Please choose an answer for each item.</i></font>';valid = false;}
if (!checker('f_floors_risk')){document.getElementsByName('f_floors_risk').className += ' invalid';document.getElementById('error16').innerHTML = '<br><font color=\"red\"><i>Please choose an answer for each item.</i></font>';valid = false;}
if (!checker('f_minutesactivities_risk')){document.getElementsByName('f_minutesactivities_risk').className += ' invalid';document.getElementById('error16').innerHTML = '<br><font color=\"red\"><i>Please choose an answer for each item.</i></font>';valid = false;}
if (!checker('f_activitycalories_risk')){document.getElementsByName('f_activitycalories_risk').className += ' invalid';document.getElementById('error16').innerHTML = '<br><font color=\"red\"><i>Please choose an answer for each item.</i></font>';valid = false;}
if (!checker('f_heartrate_risk')){document.getElementsByName('f_heartrate_risk').className += ' invalid';document.getElementById('error16').innerHTML = '<br><font color=\"red\"><i>Please choose an answer for each item.</i></font>';valid = false;}
}

if (z=='tab17')
{

if ((!checker('privacy_pref')))
{
document.getElementsByName('privacy_pref').className += ' invalid';
document.getElementById('error17').innerHTML = '<br><font color=\"red\"><i>Please provide an answer.</i></font>';
valid = false;
}
}



if (z=='tab18')
{

if ((!checker('h_physical')) || (!checker('h_importance')) || (!checker('h_type')) || (!checker('h_often')) || (!checker('h_intensity')) || (!checker('h_amount')) || (!checker('h_reason')))
{
document.getElementsByName('second_use1').className += ' invalid';
document.getElementById('error18').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each question.</i></font>';
valid = false;
}
}

if (z=='tab19')
{

if ((!checker('influence1')) || (!checker('influence2')) || (!checker('influence3')) || (!checker('influence4')))
{
document.getElementsByName('second_use1').className += ' invalid';
document.getElementById('error19').innerHTML = '<br><font color=\"red\"><i>Please provide an answer for each question.</i></font>';
valid = false;
}
}



if (z=='tab20')
{

if ((!checker('q_education')))
{
document.getElementsByName('q_education').className += ' invalid';
document.getElementById('error20').innerHTML = '<br><font color=\"red\"><i>Please choose your educational attainment.</i></font>';
valid = false;
}

if (document.getElementsByName('q_country')[0].value ==0)
{
document.getElementsByName('q_country').className += ' invalid';
document.getElementById('error20').innerHTML = '<br><font color=\"red\"><i>Please choose your country.</i></font>';
valid = false;
}

if ((!checker('q_gender')))
{
document.getElementsByName('q_gender').className += ' invalid';
document.getElementById('error20').innerHTML = '<br><font color=\"red\"><i>Please choose your gender.</i></font>';
valid = false;
}

if (document.getElementsByName('q_age')[0].value >= 100)
{
document.getElementsByName('q_age').className += ' invalid';
document.getElementById('error20').innerHTML = '<br><font color=\"red\"><i>Please enter your right age.</i></font>';
valid = false;
}

if (document.getElementsByName('q_age')[0].value <= 17)
{
document.getElementsByName('q_age').className += ' invalid';
document.getElementById('error20').innerHTML = '<br><font color=\"red\"><i>Please enter your right age.</i></font>';
valid = false;
}

if (document.getElementsByName('q_age')[0].value == '')
{
document.getElementsByName('q_age').className += ' invalid';
document.getElementById('error20').innerHTML = '<br><font color=\"red\"><i>Please enter your age.</i></font>';
valid = false;
}
}




  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName('step')[currentTab].className += ' finish';
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the 'active' class of all steps...
  var i, x = document.getElementsByClassName('step');
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(' active', '');
  }
  //... and adds the 'active' class on the current step:
  x[n].className += ' active';
}

function checker(name){
     var radios = document.getElementsByName(name);

     for (var i = 0, len = radios.length; i < len; i++) {
          if (radios[i].checked) {
              return true;
          }
     }
     return false;
 }
</script>

</body>
</html>

";  








?>