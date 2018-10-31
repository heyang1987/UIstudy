<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
    <script type="text/javascript" src="./js/index.js"></script>
</head>
<body>
    
    <div class="parent_container">
        <div id="welcomeBody">
            <div>
                <span><h1><strong>Welcome</strong></h1></span>
                <span><h4>Welcome to the study on Household IoT Smart User Interface Study conducted by Clemson University</h4></span>
                <hr>
                <span>Dr. Knijnenburg invites you to take part in a research study. Dr. Knijnenburg is a professor at Clemson University. This is a study that aims to test a new Smart User Interface for Household IoT users. Your participation in this study will be valued.
                <br/><br/>
                <strong>It will take you about 15-20 minutes to complete the four steps of the study:
                <ol>	
                    <li> Introduction and personality test </li>
                    <li> Instructions for the study </li>
                    <li> Evaluate UI for Household IoT privacy settings </li>
                    <li> Complete survey </li>				
                </ol>
                </strong>
                </span>
            </div>
            <div class="bottomrow">
                <button id="welcomeButton" class="button right"><strong>Continue</strong></button>
            </div>
        </div>

    
        <!--Consent Page starts-->
        <div id="consentBody">
            <div class="surveyTitle">About being in this study</div>
            <hr>
            <h4><strong>Risks and Discomforts</strong></h4>
            <p>We do not know of any risks or discomforts to you in this research study. 
               However, if you feel that you need a break, then you may take one at any time. 
               You may also opt out of the study at any time if you are not comfortable.</p>
            <h4><strong>Incentives</strong></h4>
            <p>As a result of your completion of this study, you will be compensated $1.50 through Amazon Mechanical Turk. We appreciate your participation and feedback from this study.</p>

            <div id="survey_section">
                <table class="question" id="consent_Q">
                    <td>
                        <input type="checkbox" name="consent_test" id="consentCheckbox"> I agree to participate in this study
                    </td>
                </table>
            </div>
            <button id="consentbutton" class="button right">Next</button>
        </div>
        
        <div id="introduction" >
            <div id="surveyHeader">
                <div class="surveyTitle">
                    What is the Internet of Things?
                </div>
            </div>
            
            <div id="questions">
                <img class="mySlides" src="images/en1.png" style="width:90%">
                <img class="mySlides" src="images/en2.png" style="width:90%">
                <img class="mySlides" src="images/en3.png" style="width:90%">
                <img class="mySlides" src="images/en4.png" style="width:90%">
                <img class="mySlides" src="images/en5.png" style="width:90%">
                <img class="mySlides" src="images/en6.png" style="width:90%">
                <img class="mySlides" src="images/en7.png" style="width:90%">
                <img class="mySlides" src="images/en8.png" style="width:90%">
                <img class="mySlides" src="images/en9.png" style="width:90%">
                <img class="mySlides" src="images/en10.png" style="width:90%">
                <img class="mySlides" src="images/en11.png" style="width:90%">
                <img class="mySlides" src="images/en12.png" style="width:90%">
                <img class="mySlides" src="images/en13.png" style="width:90%">
                
                <audio class="myAudios" src="audio/en1.m4a"></audio>
                <audio class="myAudios" src="audio/en2.m4a"></audio>
                <audio class="myAudios" src="audio/en3.m4a"></audio>
                <audio class="myAudios" src="audio/en4.m4a"></audio>
                <audio class="myAudios" src="audio/en5.m4a"></audio>
                <audio class="myAudios" src="audio/en6.m4a"></audio>
                <audio class="myAudios" src="audio/en7.m4a"></audio>
                <audio class="myAudios" src="audio/en8.m4a"></audio>
                <audio class="myAudios" src="audio/en9.m4a"></audio>
                <audio class="myAudios" src="audio/en10.m4a"></audio>
                <audio class="myAudios" src="audio/en11.m4a"></audio>
                <audio class="myAudios" src="audio/en12.m4a"></audio>
                <audio class="myAudios" src="audio/en13.m4a"></audio>
            </div>

            <div class="buttonrow">
                <button id="slideshowleftbutton" class="slidebutton" onclick="plusDivs(-1)">previous slide</button>
                <button id="slideshowleftbutton" class="slidebutton" onclick="repeatAudio()">repeat slide</button>
                <button id="slideshowrightbutton" class="slidebutton" onclick="plusDivs(1)">next slide</button>
            </div>
            
            <div class="bottomrow">
                <button id="introductionbutton" class="button" style="display: none"><strong>Continue</strong></button>
            </div>
            
        </div>
    </div>

</body>
</html>

