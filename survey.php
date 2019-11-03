<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
<!--    <script type="text/javascript" src="./js/index.js"></script>-->
    <script type="text/javascript" src="./js/survey.js"></script>
</head>
<body>
	<?php
		// Starting session
		session_start();
		 
		// Accessing session data
		//echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
		//print_r($_SESSION);
	?>
    <h2>Final Survey</h2>
    <div id="welcome">
        <span>Thank you for completing the study so far and welcome to the Final Survey! The prior app shows a new privacy settings system provided by some company. In the traditional way, you have to go through all your household IoT device and configure privacy settings for each of them. We would like to know your feedback. <b>(Do NOT click on refresh or back button when you are in the survey. It will start over the survey.)</b></span>
        <div class="bottomrow">
            <button id="surveywelcomebutton" class="button right"><strong>Continue</strong></button>
        </div>
    </div>
    <div id="statusbar" style='text-align:center'>
        <span id="barP1" class='step'></span>
        <span id="barP2" class='step'></span>
        <span id="barP3" class='step'></span>
        <span id="barP4" class='step'></span>
        <span id="barP5" class='step'></span>
        <span id="barP6" class='step'></span>
        <span id="barP7" class='step'></span>
        <span id="barP8" class='step'></span>
        <span id="barP9" class='step'></span>
        <span id="barP10" class='step'></span>
        <span id="barP11" class='step'></span>
        <span id="barP12" class='step'></span>
        <span id="barP13" class='step'></span>
        <span id="barP14" class='step'></span>
        <br/>
        <hr>
        <br/>
    </div>
    <div id="surveypage14">
        <div>
            What's your gender?
            <span><div>
            <br/><label for='gender1'><input type='radio' id='gender1' name='gender' value='1' onclick='boldage(this)'/>  Male </label>  
            <br/><label for='gender2'><input type='radio' id='gender2' name='gender' value='2' onclick='boldage(this)'/>  Female </label>    
            <br/><label for='gender3'><input type='radio' id='gender3' name='gender' value='3' onclick='boldage(this)'/>  Other </label>
            </div></span>

            <br>
            <hr>
            <br>

            What's your age?
            <span><div>
            <br/><label for='age1'><input type='radio' id='age1' name='age' value='1' onclick='boldage(this)'/>  18 - 24 years old </label>  
            <br/><label for='age2'><input type='radio' id='age2' name='age' value='2' onclick='boldage(this)'/>  25 - 34 years old </label>
            <br/><label for='age3'><input type='radio' id='age3' name='age' value='3' onclick='boldage(this)'/>  35 - 44 years old </label>    
            <br/><label for='age4'><input type='radio' id='age4' name='age' value='4' onclick='boldage(this)'/>  45 - 54 years old </label>
            <br/><label for='age5'><input type='radio' id='age5' name='age' value='5' onclick='boldage(this)'/>  55 - 64 years old </label>
            <br/><label for='age6'><input type='radio' id='age6' name='age' value='6' onclick='boldage(this)'/>  65 years or older </label>
            </div></span>


            <br>
            <hr>
            <br>

            What's your race?
            <span><div>
            <br/><label for='race1'><input type='radio' id='race1' name='race' value='1' onclick='boldage(this)'/>  White </label>  
            <br/><label for='race2'><input type='radio' id='race2' name='race' value='2' onclick='boldage(this)'/>  Hispanic or Latino </label>    
            <br/><label for='race3'><input type='radio' id='race3' name='race' value='3' onclick='boldage(this)'/>  Black or African American </label>  
            <br/><label for='race4'><input type='radio' id='race4' name='race' value='4' onclick='boldage(this)'/>  Native American Indian or Alaska Native </label>  
            <br/><label for='race5'><input type='radio' id='race5' name='race' value='5' onclick='boldage(this)'/>  Asian / Pacific Islander </label>  
            <br/><label for='race6'><input type='radio' id='race6' name='race' value='6' onclick='boldage(this)'/>  Other </label>  
            <br/><label for='race7'><input type='radio' id='race7' name='race' value='7' onclick='boldage(this)'/>  Prefer Not to Answer </label>  
            </div></span>

            <br>
            <hr>
            <br>

            What is the highest degree or level of school you have completed? If currently enrolled, highest degree received.
            <span><div>
            <br/><label for='edu1'><input type='radio' id='edu1' name='edu' value='1' onclick='boldage(this)'/>  Less than high school degree </label>  
            <br/><label for='edu2'><input type='radio' id='edu2' name='edu' value='2' onclick='boldage(this)'/>  High school degree or equivalent (e.g., GED) </label>
            <br/><label for='edu3'><input type='radio' id='edu3' name='edu' value='3' onclick='boldage(this)'/>  Some college but no degree </label>
            <br/><label for='edu4'><input type='radio' id='edu4' name='edu' value='4' onclick='boldage(this)'/>  Associate degree </label>
            <br/><label for='edu5'><input type='radio' id='edu5' name='edu' value='5' onclick='boldage(this)'/>  Bachelor degree </label>
            <br/><label for='edu6'><input type='radio' id='edu6' name='edu' value='6' onclick='boldage(this)'/>  Graduate degree </label>
            </div></span>

            <br>
            <hr>
            <br>

            Which of the following best describes your current housing situation?
            <span><div>
            <br/><label for='housing1'><input type='radio' id='housing1' name='housing' value='1' onclick='boldage(this)'/>  Homeowner </label>  
            <br/><label for='housing2'><input type='radio' id='housing2' name='housing' value='2' onclick='boldage(this)'/>  Renter </label>    
            <br/><label for='housing3'><input type='radio' id='housing3' name='housing' value='3' onclick='boldage(this)'/>  Living with others </label>    
            </div></span>

            <br>
            <hr>
            <br>

            What's your current household income?
            <span><div>
            <br/><label for='income1'><input type='radio' id='income1' name='income' value='1' onclick='boldage(this)'/>  Less than $20,000</label>
            <br/><label for='income2'><input type='radio' id='income2' name='income' value='2' onclick='boldage(this)'/>  $20,000 to $34,999</label>
            <br/><label for='income3'><input type='radio' id='income3' name='income' value='3' onclick='boldage(this)'/>  $35,000 to $49,999</label>
            <br/><label for='income4'><input type='radio' id='income4' name='income' value='4' onclick='boldage(this)'/>  $50,000 to $74,999</label>
            <br/><label for='income5'><input type='radio' id='income5' name='income' value='5' onclick='boldage(this)'/>  $75,000 to $99,999</label>
            <br/><label for='income6'><input type='radio' id='income6' name='income' value='6' onclick='boldage(this)'/>  Over $100,000 </label>
            <br/><label for='income7'><input type='radio' id='income7' name='income' value='7' onclick='boldage(this)'/>  Prefer Not to Answer </label> 
            </div></span>
        </div>
        <br>
        <hr>
        <br>
<!--        <button id="surveypage1buttonPrev" class="button"><strong>Previous</strong></button>-->
        <button id="surveypage1button" class="button right"><strong>Next</strong></button>
    </div>
    
    <div id="surveypage9">
        <div>
<!--
            I know pretty much about smart home devices.
            <span><div>
            <br/><label for='knowledge11'><input type='radio' id='knowledge11' name='knowledge1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='knowledge12'><input type='radio' id='knowledge12' name='knowledge1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='knowledge13'><input type='radio' id='knowledge13' name='knowledge1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='knowledge14'><input type='radio' id='knowledge14' name='knowledge1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='knowledge15'><input type='radio' id='knowledge15' name='knowledge1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
-->
            
            I do <b>not</b> feel very knowledgeable about smart home devices.
            <span><div>
            <br/><label for='knowledge21'><input type='radio' id='knowledge21' name='knowledge2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='knowledge22'><input type='radio' id='knowledge22' name='knowledge2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='knowledge23'><input type='radio' id='knowledge23' name='knowledge2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='knowledge24'><input type='radio' id='knowledge24' name='knowledge2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='knowledge25'><input type='radio' id='knowledge25' name='knowledge2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Among my circle of friends, I am the expert on smart home devices.
            <span><div>
            <br/><label for='knowledge31'><input type='radio' id='knowledge31' name='knowledge3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='knowledge32'><input type='radio' id='knowledge32' name='knowledge3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='knowledge33'><input type='radio' id='knowledge33' name='knowledge3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='knowledge34'><input type='radio' id='knowledge34' name='knowledge3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='knowledge35'><input type='radio' id='knowledge35' name='knowledge3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Compared to most people, I know <b>less</b> about smart home devices.
            <span><div>
            <br/><label for='knowledge41'><input type='radio' id='knowledge41' name='knowledge4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='knowledge42'><input type='radio' id='knowledge42' name='knowledge4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='knowledge43'><input type='radio' id='knowledge43' name='knowledge4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='knowledge44'><input type='radio' id='knowledge44' name='knowledge4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='knowledge45'><input type='radio' id='knowledge45' name='knowledge4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            When it comes to smart home devices, I really do <b>not</b> know a lot.
            <span><div>
            <br/><label for='knowledge51'><input type='radio' id='knowledge51' name='knowledge5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='knowledge52'><input type='radio' id='knowledge52' name='knowledge5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='knowledge53'><input type='radio' id='knowledge53' name='knowledge5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='knowledge54'><input type='radio' id='knowledge54' name='knowledge5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='knowledge55'><input type='radio' id='knowledge55' name='knowledge5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
         <br>
        <hr>
        <br>
        <button id="surveypage2buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage2button" class="button right"><strong>Next</strong></button>
    </div>
    
    <div id="surveypage10">
        <div>
            I prefer to gather all the necessary information before committing to a decision.
            <span><div>
            <br/><label for='rational11'><input type='radio' id='rational11' name='rational1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='rational12'><input type='radio' id='rational12' name='rational1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='rational13'><input type='radio' id='rational13' name='rational1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='rational14'><input type='radio' id='rational14' name='rational1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='rational15'><input type='radio' id='rational15' name='rational1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I thoroughly evaluate decision alternatives before making a final choice.
            <span><div>
            <br/><label for='rational21'><input type='radio' id='rational21' name='rational2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='rational22'><input type='radio' id='rational22' name='rational2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='rational23'><input type='radio' id='rational23' name='rational2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='rational24'><input type='radio' id='rational24' name='rational2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='rational25'><input type='radio' id='rational25' name='rational2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            While making decisions, I take time to contemplate the pros/cons or risks/benefits of a situation.
            <span><div>
            <br/><label for='rational31'><input type='radio' id='rational31' name='rational3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='rational32'><input type='radio' id='rational32' name='rational3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='rational33'><input type='radio' id='rational33' name='rational3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='rational34'><input type='radio' id='rational34' name='rational3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='rational35'><input type='radio' id='rational35' name='rational3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Investigating the facts is an important part of my decision-making process.
            <span><div>
            <br/><label for='rational41'><input type='radio' id='rational41' name='rational4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='rational42'><input type='radio' id='rational42' name='rational4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='rational43'><input type='radio' id='rational43' name='rational4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='rational44'><input type='radio' id='rational44' name='rational4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='rational45'><input type='radio' id='rational45' name='rational4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I weigh a number of different factors when making decisions.
            <span><div>
            <br/><label for='rational51'><input type='radio' id='rational51' name='rational5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='rational52'><input type='radio' id='rational52' name='rational5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='rational53'><input type='radio' id='rational53' name='rational5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='rational54'><input type='radio' id='rational54' name='rational5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='rational55'><input type='radio' id='rational55' name='rational5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage3buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage3button" class="button right"><strong>Next</strong></button>
    </div>
    
    <div id="surveypage11">
        <div>
            When making decisions, I rely mainly on my gut feelings.
            <span><div>
            <br/><label for='emotional11'><input type='radio' id='emotional11' name='emotional1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='emotional12'><input type='radio' id='emotional12' name='emotional1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='emotional13'><input type='radio' id='emotional13' name='emotional1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='emotional14'><input type='radio' id='emotional14' name='emotional1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='emotional15'><input type='radio' id='emotional15' name='emotional1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            My initial hunch about decisions is generally what I follow.
            <span><div>
            <br/><label for='emotional21'><input type='radio' id='emotional21' name='emotional2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='emotional22'><input type='radio' id='emotional22' name='emotional2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='emotional23'><input type='radio' id='emotional23' name='emotional2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='emotional24'><input type='radio' id='emotional24' name='emotional2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='emotional25'><input type='radio' id='emotional25' name='emotional2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I make decisions based on intuition.
            <span><div>
            <br/><label for='emotional31'><input type='radio' id='emotional31' name='emotional3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='emotional32'><input type='radio' id='emotional32' name='emotional3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='emotional33'><input type='radio' id='emotional33' name='emotional3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='emotional34'><input type='radio' id='emotional34' name='emotional3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='emotional35'><input type='radio' id='emotional35' name='emotional3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I rely on my first impressions when making decisions.
            <span><div>
            <br/><label for='emotional41'><input type='radio' id='emotional41' name='emotional4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='emotional42'><input type='radio' id='emotional42' name='emotional4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='emotional43'><input type='radio' id='emotional43' name='emotional4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='emotional44'><input type='radio' id='emotional44' name='emotional4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='emotional45'><input type='radio' id='emotional45' name='emotional4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I weigh feelings more than analysis in making decisions.
            <span><div>
            <br/><label for='emotional51'><input type='radio' id='emotional51' name='emotional5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='emotional52'><input type='radio' id='emotional52' name='emotional5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='emotional53'><input type='radio' id='emotional53' name='emotional5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='emotional54'><input type='radio' id='emotional54' name='emotional5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='emotional55'><input type='radio' id='emotional55' name='emotional5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage4buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage4button" class="button right"><strong>Next</strong></button>
    </div>
        
    <div id="surveypage12">
        <div>
            All things considered, the Internet causes serious privacy problems.
            <span><div>
            <br/><label for='general11'><input type='radio' id='general11' name='general1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='general12'><input type='radio' id='general12' name='general1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='general13'><input type='radio' id='general13' name='general1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='general14'><input type='radio' id='general14' name='general1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='general15'><input type='radio' id='general15' name='general1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Compared to others, I am more sensitive about the way online companies handle my personal information.
            <span><div>
            <br/><label for='general21'><input type='radio' id='general21' name='general2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='general22'><input type='radio' id='general22' name='general2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='general23'><input type='radio' id='general23' name='general2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='general24'><input type='radio' id='general24' name='general2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='general25'><input type='radio' id='general25' name='general2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            To me, it is the most important thing to keep my privacy intact from online companies.
            <span><div>
            <br/><label for='general31'><input type='radio' id='general31' name='general3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='general32'><input type='radio' id='general32' name='general3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='general33'><input type='radio' id='general33' name='general3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='general34'><input type='radio' id='general34' name='general3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='general35'><input type='radio' id='general35' name='general3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I believe other people are too concerned with online privacy issues.
            <span><div>
            <br/><label for='general41'><input type='radio' id='general41' name='general4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='general42'><input type='radio' id='general42' name='general4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='general43'><input type='radio' id='general43' name='general4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='general44'><input type='radio' id='general44' name='general4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='general45'><input type='radio' id='general45' name='general4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Compared with other subjects on my mind, personal privacy is very important.
            <span><div>
            <br/><label for='general51'><input type='radio' id='general51' name='general5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='general52'><input type='radio' id='general52' name='general5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='general53'><input type='radio' id='general53' name='general5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='general54'><input type='radio' id='general54' name='general5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='general55'><input type='radio' id='general55' name='general5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I am concerned about threats to my personal privacy today.
            <span><div>
            <br/><label for='general61'><input type='radio' id='general61' name='general6' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='general62'><input type='radio' id='general62' name='general6' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='general63'><input type='radio' id='general63' name='general6' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='general64'><input type='radio' id='general64' name='general6' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='general65'><input type='radio' id='general65' name='general6' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage5buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage5button" class="button right"><strong>Next</strong></button>
    </div>
    
    <div id="surveypage13">
        <div>
            It usually bothers me when online companies ask me for personal information.
            <span><div>
            <br/><label for='collect11'><input type='radio' id='collect11' name='collect1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='collect12'><input type='radio' id='collect12' name='collect1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='collect13'><input type='radio' id='collect13' name='collect1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='collect14'><input type='radio' id='collect14' name='collect1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='collect15'><input type='radio' id='collect15' name='collect1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            When online companies ask me for personal information, I sometimes think twice before providing it.
            <span><div>
            <br/><label for='collect21'><input type='radio' id='collect21' name='collect2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='collect22'><input type='radio' id='collect22' name='collect2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='collect23'><input type='radio' id='collect23' name='collect2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='collect24'><input type='radio' id='collect24' name='collect2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='collect25'><input type='radio' id='collect25' name='collect2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            It bothers me to give personal information to online companies.
            <span><div>
            <br/><label for='collect31'><input type='radio' id='collect31' name='collect3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='collect32'><input type='radio' id='collect32' name='collect3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='collect33'><input type='radio' id='collect33' name='collect3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='collect34'><input type='radio' id='collect34' name='collect3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='collect35'><input type='radio' id='collect35' name='collect3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I’m concerned that online companies are collecting too much personal information about me
            <span><div>
            <br/><label for='collect41'><input type='radio' id='collect41' name='collect4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='collect42'><input type='radio' id='collect42' name='collect4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='collect43'><input type='radio' id='collect43' name='collect4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='collect44'><input type='radio' id='collect44' name='collect4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='collect45'><input type='radio' id='collect45' name='collect4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Online companies may collect any information about me because I have nothing to hide.
            <span><div>
            <br/><label for='collect51'><input type='radio' id='collect51' name='collect5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='collect52'><input type='radio' id='collect52' name='collect5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='collect53'><input type='radio' id='collect53' name='collect5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='collect54'><input type='radio' id='collect54' name='collect5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='collect55'><input type='radio' id='collect55' name='collect5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I’m not bothered by data collection, because my personal information is publicly available anyway.
            <span><div>
            <br/><label for='collect61'><input type='radio' id='collect61' name='collect6' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='collect62'><input type='radio' id='collect62' name='collect6' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='collect63'><input type='radio' id='collect63' name='collect6' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='collect64'><input type='radio' id='collect64' name='collect6' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='collect65'><input type='radio' id='collect65' name='collect6' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage6buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage6button" class="button right"><strong>Next</strong></button>
    </div>
    
<!--    perceived usefulness-->
    <div id="surveypage2">
        <div>
            Based on what I have seen, the system is useful.
            <span><div>
            <br/><label for='useful11'><input type='radio' id='useful11' name='useful1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='useful12'><input type='radio' id='useful12' name='useful1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='useful13'><input type='radio' id='useful13' name='useful1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='useful14'><input type='radio' id='useful14' name='useful1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='useful15'><input type='radio' id='useful15' name='useful1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            The system helps me more effectively set my privacy preferences.
            <span><div>
            <br/><label for='useful21'><input type='radio' id='useful21' name='useful2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='useful22'><input type='radio' id='useful22' name='useful2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='useful23'><input type='radio' id='useful23' name='useful2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='useful24'><input type='radio' id='useful24' name='useful2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='useful25'><input type='radio' id='useful25' name='useful2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            The system gives me more control over my household IoT devices.
            <span><div>
            <br/><label for='useful31'><input type='radio' id='useful31' name='useful3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='useful32'><input type='radio' id='useful32' name='useful3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='useful33'><input type='radio' id='useful33' name='useful3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='useful34'><input type='radio' id='useful34' name='useful3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='useful35'><input type='radio' id='useful35' name='useful3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
<!--            The system makes the privacy settings for all my household IoT devices easier to get done.-->
            THe privacy setting task would be easier to finish with the help of this system.
            <span><div>
            <br/><label for='useful41'><input type='radio' id='useful41' name='useful4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='useful42'><input type='radio' id='useful42' name='useful4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='useful43'><input type='radio' id='useful43' name='useful4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='useful44'><input type='radio' id='useful44' name='useful4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='useful45'><input type='radio' id='useful45' name='useful4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            The system saves me time when I use it.
            <span><div>
            <br/><label for='useful51'><input type='radio' id='useful51' name='useful5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='useful52'><input type='radio' id='useful52' name='useful5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='useful53'><input type='radio' id='useful53' name='useful5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='useful54'><input type='radio' id='useful54' name='useful5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='useful55'><input type='radio' id='useful55' name='useful5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            The system meets my need.
            <span><div>
            <br/><label for='useful61'><input type='radio' id='useful61' name='useful6' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='useful62'><input type='radio' id='useful62' name='useful6' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='useful63'><input type='radio' id='useful63' name='useful6' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='useful64'><input type='radio' id='useful64' name='useful6' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='useful65'><input type='radio' id='useful65' name='useful6' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            The system does everything that I expect it to do.
            <span><div>
            <br/><label for='useful71'><input type='radio' id='useful71' name='useful7' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='useful72'><input type='radio' id='useful72' name='useful7' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='useful73'><input type='radio' id='useful73' name='useful7' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='useful74'><input type='radio' id='useful74' name='useful7' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='useful75'><input type='radio' id='useful75' name='useful7' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage7buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage7button" class="button right"><strong>Next</strong></button>
    </div>
    
<!--    complexity & match-->
    <div id="surveypage4">
        <div>
            The interface of the system is complex.
            <span><div>
            <br/><label for='complex1'><input type='radio' id='complex1' name='complex' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='complex2'><input type='radio' id='complex2' name='complex' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='complex3'><input type='radio' id='complex3' name='complex' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='complex4'><input type='radio' id='complex4' name='complex' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='complex5'><input type='radio' id='complex5' name='complex' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            The settings preset in the system match my privacy preferences.
            <span><div>
            <br/><label for='match1'><input type='radio' id='match1' name='match' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='match2'><input type='radio' id='match2' name='match' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='match3'><input type='radio' id='match3' name='match' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='match4'><input type='radio' id='match4' name='match' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='match5'><input type='radio' id='match5' name='match' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Please choose Disagree for this question.
            <span><div>
            <br/><label for='atten11'><input type='radio' id='atten11' name='atten1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='atten12'><input type='radio' id='atten12' name='atten1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='atten13'><input type='radio' id='atten13' name='atten1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='atten14'><input type='radio' id='atten14' name='atten1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='atten15'><input type='radio' id='atten15' name='atten1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage8buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage8button" class="button right"><strong>Next</strong></button>
    </div>
    
<!--    Perceived Ease of Use-->
    <div id="surveypage3">
        <div>
            It is convenient to set my preferences in the system.
            <span><div>
            <br/><label for='ease11'><input type='radio' id='ease11' name='ease1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease12'><input type='radio' id='ease12' name='ease1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease13'><input type='radio' id='ease13' name='ease1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease14'><input type='radio' id='ease14' name='ease1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease15'><input type='radio' id='ease15' name='ease1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            It requires the fewest mouse-clicks possible to set my privacy preferences with the system.
            <span><div>
            <br/><label for='ease21'><input type='radio' id='ease21' name='ease2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease22'><input type='radio' id='ease22' name='ease2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease23'><input type='radio' id='ease23' name='ease2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease24'><input type='radio' id='ease24' name='ease2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease25'><input type='radio' id='ease25' name='ease2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            It takes too many mouse-clicks to set my privacy preferences with the system
            <span><div>
            <br/><label for='ease31'><input type='radio' id='ease31' name='ease3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease32'><input type='radio' id='ease32' name='ease3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease33'><input type='radio' id='ease33' name='ease3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease34'><input type='radio' id='ease34' name='ease3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease35'><input type='radio' id='ease35' name='ease3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I was able to quickly set my privacy-setting preferences in the system.
            <span><div>
            <br/><label for='ease41'><input type='radio' id='ease41' name='ease4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease42'><input type='radio' id='ease42' name='ease4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease43'><input type='radio' id='ease43' name='ease4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease44'><input type='radio' id='ease44' name='ease4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease45'><input type='radio' id='ease45' name='ease4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I feel setting my privacy preferences within the system is easy.
            <span><div>
            <br/><label for='ease51'><input type='radio' id='ease51' name='ease5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease52'><input type='radio' id='ease52' name='ease5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease53'><input type='radio' id='ease53' name='ease5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease54'><input type='radio' id='ease54' name='ease5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease55'><input type='radio' id='ease55' name='ease5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I feel setting my preferences in the system was unnecessarily complex.
            <span><div>
            <br/><label for='ease61'><input type='radio' id='ease61' name='ease6' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease62'><input type='radio' id='ease62' name='ease6' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease63'><input type='radio' id='ease63' name='ease6' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease64'><input type='radio' id='ease64' name='ease6' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease65'><input type='radio' id='ease65' name='ease6' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I can set my privacy-setting preferences without written instructions.
            <span><div>
            <br/><label for='ease71'><input type='radio' id='ease71' name='ease7' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease72'><input type='radio' id='ease72' name='ease7' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease73'><input type='radio' id='ease73' name='ease7' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease74'><input type='radio' id='ease74' name='ease7' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease75'><input type='radio' id='ease75' name='ease7' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I felt lost using the system’s privacy settings.
            <span><div>
            <br/><label for='ease81'><input type='radio' id='ease81' name='ease8' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease82'><input type='radio' id='ease82' name='ease8' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease83'><input type='radio' id='ease83' name='ease8' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease84'><input type='radio' id='ease84' name='ease8' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease85'><input type='radio' id='ease85' name='ease8' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I felt this privacy-setting interface is designed for all levels of users.
            <span><div>
            <br/><label for='ease91'><input type='radio' id='ease91' name='ease9' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease92'><input type='radio' id='ease92' name='ease9' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease93'><input type='radio' id='ease93' name='ease9' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease94'><input type='radio' id='ease94' name='ease9' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease95'><input type='radio' id='ease95' name='ease9' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I can use the Privacy-setting interface successfully every time.
            <span><div>
            <br/><label for='ease101'><input type='radio' id='ease101' name='ease10' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='ease102'><input type='radio' id='ease102' name='ease10' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='ease103'><input type='radio' id='ease103' name='ease10' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='ease104'><input type='radio' id='ease104' name='ease10' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='ease105'><input type='radio' id='ease105' name='ease10' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage9buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage9button" class="button right"><strong>Next</strong></button>
    </div>
    
    <div id="surveypage6">
        <div>
            I am afraid that I am sharing my personal information too freely, due to my privacy settings.
            <span><div>
            <br/><label for='threat11'><input type='radio' id='threat11' name='threat1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='threat12'><input type='radio' id='threat12' name='threat1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='threat13'><input type='radio' id='threat13' name='threat1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='threat14'><input type='radio' id='threat14' name='threat1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='threat15'><input type='radio' id='threat15' name='threat1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I am comfortable with amount of data that is used/shared by IoT system based on my settings.
            <span><div>
            <br/><label for='threat21'><input type='radio' id='threat21' name='threat2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='threat22'><input type='radio' id='threat22' name='threat2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='threat23'><input type='radio' id='threat23' name='threat2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='threat24'><input type='radio' id='threat24' name='threat2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='threat25'><input type='radio' id='threat25' name='threat2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Due to the system, the manufacturer will know too much about me.
            <span><div>
            <br/><label for='threat31'><input type='radio' id='threat31' name='threat3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='threat32'><input type='radio' id='threat32' name='threat3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='threat33'><input type='radio' id='threat33' name='threat3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='threat34'><input type='radio' id='threat34' name='threat3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='threat35'><input type='radio' id='threat35' name='threat3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Due to the system, third-parties will know too much about me.
            <span><div>
            <br/><label for='threat41'><input type='radio' id='threat41' name='threat4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='threat42'><input type='radio' id='threat42' name='threat4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='threat43'><input type='radio' id='threat43' name='threat4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='threat44'><input type='radio' id='threat44' name='threat4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='threat45'><input type='radio' id='threat45' name='threat4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I made sure only information that I am comfortable with will be used or shared
            <span><div>
            <br/><label for='threat51'><input type='radio' id='threat51' name='threat5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='threat52'><input type='radio' id='threat52' name='threat5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='threat53'><input type='radio' id='threat53' name='threat5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='threat54'><input type='radio' id='threat54' name='threat5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='threat55'><input type='radio' id='threat55' name='threat5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            My privacy settings are spot on; I am not disclosing too much to anyone.
            <span><div>
            <br/><label for='threat61'><input type='radio' id='threat61' name='threat6' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='threat62'><input type='radio' id='threat62' name='threat6' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='threat63'><input type='radio' id='threat63' name='threat6' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='threat64'><input type='radio' id='threat64' name='threat6' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='threat65'><input type='radio' id='threat65' name='threat6' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I fear that I have been too liberal in selecting my privacy settings.
            <span><div>
            <br/><label for='threat71'><input type='radio' id='threat71' name='threat7' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='threat72'><input type='radio' id='threat72' name='threat7' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='threat73'><input type='radio' id='threat73' name='threat7' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='threat74'><input type='radio' id='threat74' name='threat7' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='threat75'><input type='radio' id='threat75' name='threat7' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage10buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage10button" class="button right"><strong>Next</strong></button>
    </div>
    
    <div id="surveypage5">
        <div>
            The system helped me to decide what information I should disclose.
            <span><div>
            <br/><label for='help11'><input type='radio' id='help11' name='help1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='help12'><input type='radio' id='help12' name='help1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='help13'><input type='radio' id='help13' name='help1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='help14'><input type='radio' id='help14' name='help1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='help15'><input type='radio' id='help15' name='help1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            The system explained how useful providing each piece of information was.
            <span><div>
            <br/><label for='help21'><input type='radio' id='help21' name='help2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='help22'><input type='radio' id='help22' name='help2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='help23'><input type='radio' id='help23' name='help2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='help24'><input type='radio' id='help24' name='help2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='help25'><input type='radio' id='help25' name='help2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            The system helped me to make a tradeoff between privacy and usefulness.
            <span><div>
            <br/><label for='help31'><input type='radio' id='help31' name='help3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='help32'><input type='radio' id='help32' name='help3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='help33'><input type='radio' id='help33' name='help3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='help34'><input type='radio' id='help34' name='help3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='help35'><input type='radio' id='help35' name='help3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I felt clueless about what information to disclose.
            <span><div>
            <br/><label for='help41'><input type='radio' id='help41' name='help4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='help42'><input type='radio' id='help42' name='help4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='help43'><input type='radio' id='help43' name='help4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='help44'><input type='radio' id='help44' name='help4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='help45'><input type='radio' id='help45' name='help4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage11buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage11button" class="button right"><strong>Next</strong></button>
    </div>
    
    <div id="surveypage7">
        <div>
            I had limited control over the way this system made privacy settings.
            <span><div>
            <br/><label for='control11'><input type='radio' id='control11' name='control1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='control12'><input type='radio' id='control12' name='control1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='control13'><input type='radio' id='control13' name='control1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='control14'><input type='radio' id='control14' name='control1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='control15'><input type='radio' id='control15' name='control1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            The system restricted me in my choice of settings.
            <span><div>
            <br/><label for='control21'><input type='radio' id='control21' name='control2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='control22'><input type='radio' id='control22' name='control2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='control23'><input type='radio' id='control23' name='control2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='control24'><input type='radio' id='control24' name='control2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='control25'><input type='radio' id='control25' name='control2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Compared to how I normally configure privacy settings, the system was very limited.
            <span><div>
            <br/><label for='control31'><input type='radio' id='control31' name='control3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='control32'><input type='radio' id='control32' name='control3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='control33'><input type='radio' id='control33' name='control3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='control34'><input type='radio' id='control34' name='control3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='control35'><input type='radio' id='control35' name='control3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I would like to have more control over the recommendations.
            <span><div>
            <br/><label for='control41'><input type='radio' id='control41' name='control4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='control42'><input type='radio' id='control42' name='control4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='control43'><input type='radio' id='control43' name='control4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='control44'><input type='radio' id='control44' name='control4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='control45'><input type='radio' id='control45' name='control4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage12buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage12button" class="button right"><strong>Next</strong></button>
    </div>
    
    <div id="surveypage1">
        <div>
            The system has no real benefit to me.
            <span><div>
            <br/><label for='satis11'><input type='radio' id='satis11' name='satis1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis12'><input type='radio' id='satis12' name='satis1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis13'><input type='radio' id='satis13' name='satis1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis14'><input type='radio' id='satis14' name='satis1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis15'><input type='radio' id='satis15' name='satis1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Using the system is annoying.
            <span><div>
            <br/><label for='satis21'><input type='radio' id='satis21' name='satis2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis22'><input type='radio' id='satis22' name='satis2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis23'><input type='radio' id='satis23' name='satis2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis24'><input type='radio' id='satis24' name='satis2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis25'><input type='radio' id='satis25' name='satis2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Using the system is a pleasant experience.
            <span><div>
            <br/><label for='satis31'><input type='radio' id='satis31' name='satis3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis32'><input type='radio' id='satis32' name='satis3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis33'><input type='radio' id='satis33' name='satis3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis34'><input type='radio' id='satis34' name='satis3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis35'><input type='radio' id='satis35' name='satis3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Using the system makes me happy.
            <span><div>
            <br/><label for='satis41'><input type='radio' id='satis41' name='satis4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis42'><input type='radio' id='satis42' name='satis4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis43'><input type='radio' id='satis43' name='satis4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis44'><input type='radio' id='satis44' name='satis4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis45'><input type='radio' id='satis45' name='satis4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            Overall, I am satisfied with the system
            <span><div>
            <br/><label for='satis51'><input type='radio' id='satis51' name='satis5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis52'><input type='radio' id='satis52' name='satis5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis53'><input type='radio' id='satis53' name='satis5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis54'><input type='radio' id='satis54' name='satis5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis55'><input type='radio' id='satis55' name='satis5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I would recommend the system to others.
            <span><div>
            <br/><label for='satis61'><input type='radio' id='satis61' name='satis6' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis62'><input type='radio' id='satis62' name='satis6' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis63'><input type='radio' id='satis63' name='satis6' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis64'><input type='radio' id='satis64' name='satis6' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis65'><input type='radio' id='satis65' name='satis6' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I would use this system if it were available.
            <span><div>
            <br/><label for='satis71'><input type='radio' id='satis71' name='satis7' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis72'><input type='radio' id='satis72' name='satis7' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis73'><input type='radio' id='satis73' name='satis7' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis74'><input type='radio' id='satis74' name='satis7' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis75'><input type='radio' id='satis75' name='satis7' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I would pay a monthly fee to use this system.
            <span><div>
            <br/><label for='satis81'><input type='radio' id='satis81' name='satis8' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis82'><input type='radio' id='satis82' name='satis8' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis83'><input type='radio' id='satis83' name='satis8' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis84'><input type='radio' id='satis84' name='satis8' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis85'><input type='radio' id='satis85' name='satis8' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I would quickly abandon using this system.
            <span><div>
            <br/><label for='satis91'><input type='radio' id='satis91' name='satis9' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis92'><input type='radio' id='satis92' name='satis9' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis93'><input type='radio' id='satis93' name='satis9' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis94'><input type='radio' id='satis94' name='satis9' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis95'><input type='radio' id='satis95' name='satis9' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            It would take a lot of convincing for me to use this system.
            <span><div>
            <br/><label for='satis101'><input type='radio' id='satis101' name='satis10' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='satis102'><input type='radio' id='satis102' name='satis10' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='satis103'><input type='radio' id='satis103' name='satis10' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='satis104'><input type='radio' id='satis104' name='satis10' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='satis105'><input type='radio' id='satis105' name='satis10' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage13buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage13button" class="button right"><strong>Next</strong></button>
    </div>
    
    <div id="surveypage8">
        <div>
            I believe the company providing this software is trustworthy in handling my information.
            <span><div>
            <br/><label for='trust11'><input type='radio' id='trust11' name='trust1' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='trust12'><input type='radio' id='trust12' name='trust1' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='trust13'><input type='radio' id='trust13' name='trust1' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='trust14'><input type='radio' id='trust14' name='trust1' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='trust15'><input type='radio' id='trust15' name='trust1' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I believe this company tells the truth and fulfills promises related to the information I provide.
            <span><div>
            <br/><label for='trust21'><input type='radio' id='trust21' name='trust2' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='trust22'><input type='radio' id='trust22' name='trust2' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='trust23'><input type='radio' id='trust23' name='trust2' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='trust24'><input type='radio' id='trust24' name='trust2' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='trust25'><input type='radio' id='trust25' name='trust2' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I believe this company is predictable and consistent regarding the usage of my information.
            <span><div>
            <br/><label for='trust31'><input type='radio' id='trust31' name='trust3' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='trust32'><input type='radio' id='trust32' name='trust3' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='trust33'><input type='radio' id='trust33' name='trust3' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='trust34'><input type='radio' id='trust34' name='trust3' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='trust35'><input type='radio' id='trust35' name='trust3' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I believe this company is honest when it comes to using the information I provide.
            <span><div>
            <br/><label for='trust41'><input type='radio' id='trust41' name='trust4' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='trust42'><input type='radio' id='trust42' name='trust4' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='trust43'><input type='radio' id='trust43' name='trust4' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='trust44'><input type='radio' id='trust44' name='trust4' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='trust45'><input type='radio' id='trust45' name='trust4' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>

            <br>
            <hr>
            <br>
            
            I think it is risky to give my information to this company.
            <span><div>
            <br/><label for='trust51'><input type='radio' id='trust51' name='trust5' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='trust52'><input type='radio' id='trust52' name='trust5' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='trust53'><input type='radio' id='trust53' name='trust5' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='trust54'><input type='radio' id='trust54' name='trust5' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='trust55'><input type='radio' id='trust55' name='trust5' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            There is too much uncertainty associated with giving my information to this company.
            <span><div>
            <br/><label for='trust61'><input type='radio' id='trust61' name='trust6' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='trust62'><input type='radio' id='trust62' name='trust6' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='trust63'><input type='radio' id='trust63' name='trust6' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='trust64'><input type='radio' id='trust64' name='trust6' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='trust65'><input type='radio' id='trust65' name='trust6' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            Providing this company my information would involve many unexpected problems.
            <span><div>
            <br/><label for='trust71'><input type='radio' id='trust71' name='trust7' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='trust72'><input type='radio' id='trust72' name='trust7' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='trust73'><input type='radio' id='trust73' name='trust7' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='trust74'><input type='radio' id='trust74' name='trust7' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='trust75'><input type='radio' id='trust75' name='trust7' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
            
            <br>
            <hr>
            <br>
            
            I feel safe giving my information to this company
            <span><div>
            <br/><label for='trust81'><input type='radio' id='trust81' name='trust8' value='-2' onclick='boldage(this)'/>  Strongly Disagree </label>  
            <br/><label for='trust82'><input type='radio' id='trust82' name='trust8' value='-1' onclick='boldage(this)'/>  Disagree </label>  
            <br/><label for='trust83'><input type='radio' id='trust83' name='trust8' value='0' onclick='boldage(this)'/>  Neutral </label>  
            <br/><label for='trust84'><input type='radio' id='trust84' name='trust8' value='1' onclick='boldage(this)'/>  Agree </label>  
            <br/><label for='trust85'><input type='radio' id='trust85' name='trust8' value='2' onclick='boldage(this)'/>  Strongly Agree </label>  
            </div></span>
        </div>
        <br>
        <hr>
        <br>
        <button id="surveypage14buttonPrev" class="button"><strong>Previous</strong></button>
        <button id="surveypage14button" class="button right"><strong>Finish the survey</strong></button>
    </div>
    
    <div id="end">
        <h2><b>Thank You! You have finished all the survey questions! You can close this page now!</b></h2><br>
    </div>
    <p id="demo"></p>

</body>
</html>

