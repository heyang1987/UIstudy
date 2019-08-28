<!DOCTYPE html>
<html>
<head>
    <title>Survey Questions</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--    <link rel="stylesheet" href="main.css">-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/intro-stylesheet.css" rel="stylesheet" type="text/css" />
    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/script-survey.js"></script>
    <script src="https://cdn.logrocket.io/LogRocket.min.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="container-fluid parent_container">
  
	<div id="survey_display_block">
		<div id="surveyintro">
			<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="activeStep"></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li class="stepDisabled"></li>
			</ul>            
            </div>
            <div class="intro addBox">
                <h2><b>Thank You for completing the study so far!</b></h2><br>
                <span>
                <h3>Welcome to the Final Survey</h3>
                </span>

                <span>This is the last survey and it will take about 10 minutes. This information will help us to get feedback about your experience with the household IoT Settings App. Clicking on the next button will start the survey.</span>
                <br><br><br>
                <span>Before you proceed, did anything go wrong? <strong>If not, please type no below.</strong></span>
                <textarea id="textbox" rows="5" cols="50" name="comment" form="usrform"></textarea>
            </div>
		</div>
		
<!--End of Survey Intro-->
		
		<!--Begin Survey-->
		
		<div id="surveypage1">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="activeStep" id="pb_11"></li>
			<li id="pb_12"></li>
			<li id="pb_13"></li>
			<li id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about your <b> LAST movie LIST </b>from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			<table class="question">
				<tr>
					<td colspan="5"><span>I like the movie I&#8217;ve chosen from the final recommendation list. </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The chosen movie fits my preference.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I would recommend my chosen movie to others/friends.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>
			</div>
		</div><!--End of Survey Page 1-->
		
		
		<!--Begin of Survey Page 2-->
		<div id="surveypage2">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="activeStep" id="pb_11"></li>
			<li id="pb_12"></li>
			<li id="pb_13"></li>
			<li id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about your <b> LAST movie LIST </b>from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
			<table class="question">
				<tr>
					<td colspan="5"><span>I was excited about my chosen movie </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I think I chose the best movie from the options </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			
		</div> 	
		</div><!--End of Survey Page 2-->
		
		
		<!--Begin Survey Page 3-->
		<div id="surveypage3">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="activeStep" id="pb_12"></li>
			<li id="pb_13"></li>
			<li id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about your <b> LAST movie LIST </b>from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
			<table class="question">
				<tr>
					<td colspan="5"><span>I would rather watch a different movie from the one I selected  </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I know several movies that are better than the one I selected </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			
		</div>
		</div>
		<!--End of Survey Page 3-->
		
		
		<!--Begin Survey Page 4-->
		<div id="surveypage4">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="activeStep" id="pb_12"></li>
			<li id="pb_13"></li>
			<li id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about your <b> LAST movie LIST </b>from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			<table class="question">
				<tr>
					<td colspan="5"><span>All the recommended movies in the final list were similar to each other.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>None of the movies in the recommended list were alike </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>Most movies were from the same genre.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>
			
		</div>
		
		</div>
		<!--End of Survey Page 4-->
		
		
		<!--Begin Survey Page 5-->
		<div id="surveypage5">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="activeStep" id="pb_12"></li>
			<li id="pb_13"></li>
			<li id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about your <b> LAST movie LIST </b>from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
			<table class="question">
				<tr>
					<td colspan="5"><span>The recommended list of movies suits a broad set of tastes</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The recommended movies were from many different genres</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The recommendations contained a lot of variety </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>
			
		</div>
		</div> 
		<!--End of Survey Page 5-->
		
		
		<!--Begin Survey Page 6-->
		<div id="surveypage6">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="activeStep" id="pb_13"></li>
			<li id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about your <b> LAST movie LIST </b>from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			<table class="question">
				<tr>
					<td colspan="5"><span>I liked the movies recommended by the movie recommender.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I found the recommended movies appealing.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The recommended movies fit my preference.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>
			
		</div>
		</div>
		<!--End of Survey Page 6-->
		
		
		<!--Begin Survey Page 7-->
		<div id="surveypage7"> 
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="activeStep" id="pb_13"></li>
			<li id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about your <b> LAST movie LIST </b>from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
			<table class="question">
				<tr>
					<td colspan="5"><span>The recommended movies were relevant. </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The system recommended too many bad movies.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I  didn&#8217;t like any of the recommended movies.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>
			
		</div>
		</div> 
		<!--End of Survey Page 7-->
		
		
		<!--Begin Survey Page 8-->
		<div id="surveypage8">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="activeStep" id="pb_13"></li>
			<li id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about your <b> LAST movie LIST </b>from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			<table class="question">
				<tr>
					<td colspan="5"><span>I feel like I was recommended the same movies as everyone else.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The movies that were recommended are very popular movies.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I selected movies that are rather different from what I imagine others would choose.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>
			
		</div>
		</div> 
		<!--End of Survey Page 8-->
		
		
		<!--Begin Survey Page 9-->
		<div id="surveypage9">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="done" id="pb_13"></li>
			<li class="activeStep" id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about your <b> LAST movie LIST </b>from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			<table class="question">
				<tr>
					<td colspan="5"><span>I selected the movies that I think are the most popular overall.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>Probably nobody selected the exact same set of movies as me.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			
			
		</div>
		</div> 
		<!--End of Survey Page 9-->
		
		
		<!--Begin Survey Page 10-->
		<div id="surveypage10">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="done" id="pb_13"></li>
			<li class="activeStep" id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about <b> your experience </b>with the recommender system from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The movie recommender catered to all of my potential interests.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The movies that were recommended did not reflect my diverse taste in movies.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The movie recommender seemed to target only a small subset of my interests.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>
		
			
		</div>
		</div>
		<!--End of Survey Page 10-->
		
		
				<!--Begin Survey Page 11-->
		<div id="surveypage11">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="done" id="pb_13"></li>
			<li class="activeStep" id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about <b> your experience </b>with the recommender system from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
			<table class="question">
				<tr>
					<td colspan="5"><span>The movie recommender treated me as a one-dimensional person.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The lists of recommendations matched a diversity of my preferences.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The recommended movies were a perfect fit for me on many different levels.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>	
			
		</div>
		</div>
		<!--End of Survey Page 11-->
		
		
		<!--Begin Survey Page 12-->
		<div id="surveypage12">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="done" id="pb_13"></li>
			<li class="activeStep" id="pb_14"></li>
			<li id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about <b> your experience </b>with the recommender system from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			
			
			
			<table class="question">
				<tr>
					<td colspan="5"><span>The movie recommender seemed to stereotype me in a particular category of viewers.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
		
				<table class="question">
				<tr>
					<td colspan="5"><span>I would recommend the system to others.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
				<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			
		</div>
		</div> 
		<!--End of Survey Page 12-->
		
		
		<!--Begin Survey Page 13-->
		<div id="surveypage13">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="done" id="pb_13"></li>
			<li class="done" id="pb_14"></li>
			<li class="activeStep" id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about <b> your experience </b>with the recommender system from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			<table class="question">
				<tr>
					<td colspan="5"><span>I like using the system. </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>Using the system is a pleasant experience. </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I can find better movies using the system. </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>
			
		</div>
		</div>
		<!--End of Survey Page 13-->
		
		
		<!--Begin Survey Page 14-->
		<div id="surveypage14">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="done" id="pb_13"></li>
			<li class="done" id="pb_14"></li>
			<li class="activeStep" id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about <b>your experience </b>with the recommender system from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			<table class="question">
				<tr>
					<td colspan="5"><span>I would quickly abandon using the system. </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I would use the system more often if possible.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			
		</div>
		</div> 
		<!--End of Survey Page 14-->
		
		
		<!--Begin Survey Page 15-->
		<div id="surveypage15">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="done" id="pb_13"></li>
			<li class="done" id="pb_14"></li>
			<li class="activeStep" id="pb_15"></li>
			<li id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about <b>your experience </b>with the recommender system from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			<table class="question">
				<tr>
					<td colspan="5"><span>I like the way information about the movies is provided to me in this system.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I would rather have different information about the movies than what I got
from the system to make a choice.
 </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I got sufficient information on each movie to make a choice.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_3" value="1"></td>
					<td><input type="radio" name="radOpt_3" value="2"></td>
					<td><input type="radio" name="radOpt_3" value="3"></td>
					<td><input type="radio" name="radOpt_3" value="4"></td>
					<td><input type="radio" name="radOpt_3" value="5"></td>
				</tr>
			</table>
			
		</div>
		</div> 
		<!--End of Survey Page 15-->
		
		
		<!--Begin Survey Page 16-->
		<div id="surveypage16">
		<div class="movie-progress">           
			<ul id="progress_circles">
			<li class="step" id="pb_1"></li>
			<li class="done" id="pb_2"></li>
			<li class="done" id="pb_3"></li>
			<li class="done" id="pb_4"></li>
			<li class="done" id="pb_5"></li>
			<li class="done" id="pb_6"></li>
			<li class="step" id="pb_7"></li>
			<li class="done" id="pb_8"></li>
			<li class="done" id="pb_9"></li>
			<li class="done" id="pb_10"></li>
			<li class="step" id="pb_11"></li>
			<li class="done" id="pb_12"></li>
			<li class="done" id="pb_13"></li>
			<li class="done" id="pb_14"></li>
			<li class="done" id="pb_15"></li>
			<li class="activeStep" id="pb_16"></li>
			<li class="stepDisabled" id="pb_17"></li>
			</ul>     		
		</div>
		<div id="survey_section" class="addBox">
		<div class="intro">
		<span>Please evaluate the following statements about <b>your experience </b>with the recommender system from <i>"strongly disagree"</i> to <i>"strongly agree"</i></span>
		</div>
		
			<table class="question">
				<tr>
					<td colspan="5"><span>The system provided too much information for each movie.</span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>				
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_1" value="1"></td>
					<td><input type="radio" name="radOpt_1" value="2"></td>
					<td><input type="radio" name="radOpt_1" value="3"></td>
					<td><input type="radio" name="radOpt_1" value="4"></td>
					<td><input type="radio" name="radOpt_1" value="5"></td>
				</tr>
			</table>
			
			<table class="question">
				<tr>
					<td colspan="5"><span>I would have preferred to have less information about each movie to make a choice .
 </span></td>
				</tr>
				<tr>
					<td>Strongly Disagree</td>
					<td>Disagree</td>
					<td>Neutral</td>
					<td>Agree</td>
					<td>Strongly Agree</td>
				</tr>
				<tr class="rad_row">
					<td><input type="radio" name="radOpt_2" value="1"></td>
					<td><input type="radio" name="radOpt_2" value="2"></td>
					<td><input type="radio" name="radOpt_2" value="3"></td>
					<td><input type="radio" name="radOpt_2" value="4"></td>
					<td><input type="radio" name="radOpt_2" value="5"></td>
				</tr>
			</table>
			
		</div>
		</div> 
		<!--End of Survey Page 16-->
	</div><!--End of Display Container-->
	<script type="text/javascript">
      confirmUnload = true;
      $('a').click(function() { confirmUnload = false});
    </script>
	<div class="next-button" >
	<button id="beginbutton" type="button">Begin</button>
	</div>
	<div class="survey-next-button last-button">
	<button id="surveypage1button" type="button">Next</button>
	<button id="surveypage2button" type="button">Next</button>
	<button id="surveypage3button" type="button">Next</button>
	<button id="surveypage4button" type="button">Next</button>
	<button id="surveypage5button" type="button">Next</button>
	<button id="surveypage6button" type="button">Next</button>
	<button id="surveypage7button" type="button">Next</button>
	<button id="surveypage8button" type="button">Next</button>
	<button id="surveypage9button" type="button">Next</button>
	<button id="surveypage10button" type="button">Next</button>
	<button id="surveypage11button" type="button">Next</button>
	<button id="surveypage12button" type="button">Next</button>
	<button id="surveypage13button" type="button">Next</button>
	<button id="surveypage14button" type="button">Next</button>
	<button id="surveypage15button" type="button">Next</button>
	<button id="surveypage16button" type="button">Next</button>
	</div>
</div>

</body>

</html>

