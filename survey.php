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
    <h1 style="text-align:center">Household IoT Privacy Settings System Survey</h1>
    <p>The prior app shows a new privacy settings system provided by some company. In the traditional way, you have to go through all yuor household IoT device and configure privacy settings for each of them. We would like to know your feedback.</p>
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

<!--
    <span><div class='container2'>
    <div class='floatright child' style='text-align: center;'> <label for='simplicity1'>  <input type='radio' id='simplicity1' name='simplicity' value='1' onclick='boldage(this)'/> <br/> very <br/> easy   </label>  </div>
    <div class='floatright child' style='text-align: center;'> <label for='simplicity2'>  <input type='radio' id='simplicity2' name='simplicity' value='2' onclick='boldage(this)'/> <br/> easy <br/> <br/>  </label>  </div>
    <div class='floatright child' style='text-align: center;'> <label for='simplicity3'>  <input type='radio' id='simplicity3' name='simplicity' value='3' onclick='boldage(this)'/> <br/> somewhat <br/> easy  </label>  </div>
    <div class='floatright child' style='text-align: center;'> <label for='simplicity4'>  <input type='radio' id='simplicity4' name='simplicity' value='4' onclick='boldage(this)'/> <br/> neutral <br/> <br/>  </label>  </div>
    <div class='floatright child' style='text-align: center;'> <label for='simplicity5'>  <input type='radio' id='simplicity5' name='simplicity' value='5' onclick='boldage(this)'/> <br/> somewhat <br/> difficult  </label>  </div>
    <div class='floatright child' style='text-align: center;'> <label for='simplicity6'>  <input type='radio' id='simplicity6' name='simplicity' value='6' onclick='boldage(this)'/> <br/> difficult  <br/> <br/>  </label>  </div>
    <div class='floatright child' style='text-align: center;'> <label for='simplicity7'>  <input type='radio' id='simplicity7' name='simplicity' value='7' onclick='boldage(this)'/> <br/> very <br/> difficult  </label>  </div>
    </div></span>
-->

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

    
    
    <div class="parent_container">
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
    </div>

</body>
</html>

