'use strict';

$(document).ready(function(){
    $('#statusbar, #surveypage1, #surveypage2, #surveypage3, #surveypage4, #surveypage5, #surveypage6, #surveypage7, #surveypage8, #surveypage9, #surveypage10, #surveypage11, #surveypage12, #surveypage13, #surveypage14, #end').hide();
    var welcome = document.getElementById('welcomeBody');
    var consent = document.getElementById('consentBody');
    var consentbutton = document.getElementById('consentbutton');
    var preIntro = document.getElementById('preIntro');
    var introduction = document.getElementById('introduction');
    var prepage = document.getElementById('prepage');

    $("#surveywelcomebutton").click(function(){
        document.getElementById('welcome').style.display = 'none';
        document.getElementById('statusbar').style.display = 'block';
        document.getElementById('surveypage1').style.display = 'block';
        document.getElementById('barP1').classList.add("active");
    });
    
    
    $("#surveypage1button").click(function(){
        if (typeof $("input[type=radio][name='gender']:checked").val()!=='undefined' && typeof $("input[type=radio][name='age']:checked").val()!=='undefined' && typeof $("input[type=radio][name='race']:checked").val()!=='undefined' && typeof $("input[type=radio][name='edu']:checked").val()!=='undefined' && typeof $("input[type=radio][name='housing']:checked").val()!=='undefined' && typeof $("input[type=radio][name='income']:checked").val()!=='undefined'){
            document.getElementById('surveypage1').style.display = 'none';
            document.getElementById('surveypage2').style.display = 'block';
            document.getElementById('barP1').classList.remove("active");
            document.getElementById('barP1').classList.add("finish");
            document.getElementById('barP2').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
            
    });

    $("#surveypage2button").click(function(){
//        if (typeof $("input[type=radio][name='knowledge1']:checked").val()!=='undefined' && 
        if (typeof $("input[type=radio][name='knowledge2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='knowledge3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='knowledge4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='knowledge5']:checked").val()!=='undefined'){
            document.getElementById('surveypage2').style.display = 'none';
            document.getElementById('surveypage3').style.display = 'block';
            document.getElementById('barP2').classList.remove("active");
            document.getElementById('barP2').classList.add("finish");
            document.getElementById('barP3').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage3button").click(function(){
        if (typeof $("input[type=radio][name='rational1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='rational2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='rational3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='rational4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='rational5']:checked").val()!=='undefined'){
            document.getElementById('surveypage3').style.display = 'none';
            document.getElementById('surveypage4').style.display = 'block';
            document.getElementById('barP3').classList.remove("active");
            document.getElementById('barP3').classList.add("finish");
            document.getElementById('barP4').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage4button").click(function(){
        if (typeof $("input[type=radio][name='emotional1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='emotional2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='emotional3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='emotional4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='emotional5']:checked").val()!=='undefined'){
            document.getElementById('surveypage4').style.display = 'none';
            document.getElementById('surveypage5').style.display = 'block';
            document.getElementById('barP4').classList.remove("active");
            document.getElementById('barP4').classList.add("finish");
            document.getElementById('barP5').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage5button").click(function(){
        if (typeof $("input[type=radio][name='general1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='general2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='general3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='general4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='general5']:checked").val()!=='undefined' && typeof $("input[type=radio][name='general6']:checked").val()!=='undefined'){
            document.getElementById('surveypage5').style.display = 'none';
            document.getElementById('surveypage6').style.display = 'block';
            document.getElementById('barP5').classList.remove("active");
            document.getElementById('barP5').classList.add("finish");
            document.getElementById('barP6').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage6button").click(function(){
        if (typeof $("input[type=radio][name='collect1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='collect2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='collect3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='collect4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='collect5']:checked").val()!=='undefined' && typeof $("input[type=radio][name='collect6']:checked").val()!=='undefined'){
            document.getElementById('surveypage6').style.display = 'none';
            document.getElementById('surveypage7').style.display = 'block';
            document.getElementById('barP6').classList.remove("active");
            document.getElementById('barP6').classList.add("finish");
            document.getElementById('barP7').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage7button").click(function(){
        if (typeof $("input[type=radio][name='useful1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='useful2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='useful3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='useful4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='useful5']:checked").val()!=='undefined' && typeof $("input[type=radio][name='useful6']:checked").val()!=='undefined' && typeof $("input[type=radio][name='useful7']:checked").val()!=='undefined'){
            document.getElementById('surveypage7').style.display = 'none';
            document.getElementById('surveypage8').style.display = 'block';
            document.getElementById('barP7').classList.remove("active");
            document.getElementById('barP7').classList.add("finish");
            document.getElementById('barP8').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage8button").click(function(){
        if (typeof $("input[type=radio][name='complex']:checked").val()!=='undefined' && typeof $("input[type=radio][name='match']:checked").val()!=='undefined' && typeof $("input[type=radio][name='atten1']:checked").val()!=='undefined'){
            document.getElementById('surveypage8').style.display = 'none';
            document.getElementById('surveypage9').style.display = 'block';
            document.getElementById('barP8').classList.remove("active");
            document.getElementById('barP8').classList.add("finish");
            document.getElementById('barP9').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage9button").click(function(){
        if (typeof $("input[type=radio][name='ease1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='ease2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='ease3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='ease4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='ease5']:checked").val()!=='undefined' && typeof $("input[type=radio][name='ease6']:checked").val()!=='undefined' && typeof $("input[type=radio][name='ease7']:checked").val()!=='undefined' && typeof $("input[type=radio][name='ease8']:checked").val()!=='undefined' && typeof $("input[type=radio][name='ease9']:checked").val()!=='undefined' && typeof $("input[type=radio][name='ease10']:checked").val()!=='undefined'){
            document.getElementById('surveypage9').style.display = 'none';
            document.getElementById('surveypage10').style.display = 'block';
            document.getElementById('barP9').classList.remove("active");
            document.getElementById('barP9').classList.add("finish");
            document.getElementById('barP10').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage10button").click(function(){
        if (typeof $("input[type=radio][name='threat1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='threat2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='threat3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='threat4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='threat5']:checked").val()!=='undefined' && typeof $("input[type=radio][name='threat6']:checked").val()!=='undefined' && typeof $("input[type=radio][name='threat7']:checked").val()!=='undefined'){
            document.getElementById('surveypage10').style.display = 'none';
            document.getElementById('surveypage11').style.display = 'block';
            document.getElementById('barP10').classList.remove("active");
            document.getElementById('barP10').classList.add("finish");
            document.getElementById('barP11').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage11button").click(function(){
        if (typeof $("input[type=radio][name='help1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='help2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='help3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='help4']:checked").val()!=='undefined'){
            document.getElementById('surveypage11').style.display = 'none';
            document.getElementById('surveypage12').style.display = 'block';
            document.getElementById('barP11').classList.remove("active");
            document.getElementById('barP11').classList.add("finish");
            document.getElementById('barP12').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage12button").click(function(){
        if (typeof $("input[type=radio][name='control1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='control2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='control3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='control4']:checked").val()!=='undefined'){
            document.getElementById('surveypage12').style.display = 'none';
            document.getElementById('surveypage13').style.display = 'block';
            document.getElementById('barP12').classList.remove("active");
            document.getElementById('barP12').classList.add("finish");
            document.getElementById('barP13').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage13button").click(function(){
        if (typeof $("input[type=radio][name='satis1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='satis2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='satis3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='satis4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='satis5']:checked").val()!=='undefined' && typeof $("input[type=radio][name='satis6']:checked").val()!=='undefined' && typeof $("input[type=radio][name='satis7']:checked").val()!=='undefined' && typeof $("input[type=radio][name='satis8']:checked").val()!=='undefined' && typeof $("input[type=radio][name='satis9']:checked").val()!=='undefined' && typeof $("input[type=radio][name='satis10']:checked").val()!=='undefined'){
            document.getElementById('surveypage13').style.display = 'none';
            document.getElementById('surveypage14').style.display = 'block';
            document.getElementById('barP13').classList.remove("active");
            document.getElementById('barP13').classList.add("finish");
            document.getElementById('barP14').classList.add("active");
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage14button").click(function(){
        if (typeof $("input[type=radio][name='trust1']:checked").val()!=='undefined' && typeof $("input[type=radio][name='trust2']:checked").val()!=='undefined' && typeof $("input[type=radio][name='trust3']:checked").val()!=='undefined' && typeof $("input[type=radio][name='trust4']:checked").val()!=='undefined' && typeof $("input[type=radio][name='trust5']:checked").val()!=='undefined' && typeof $("input[type=radio][name='trust6']:checked").val()!=='undefined' && typeof $("input[type=radio][name='trust7']:checked").val()!=='undefined' && typeof $("input[type=radio][name='trust8']:checked").val()!=='undefined'){
            document.getElementById('surveypage14').style.display = 'none';
            document.getElementById('statusbar').style.display = 'none';
            document.getElementById('end').style.display = 'block';
            //$("html, body").animate({ scrollTop: 0 }, "slow");
            // Store all the radio values and submit to the database
            
            alert("gender: "+document.querySelector('input[name="gender"]:checked').value);
            alert("trust1: "+document.querySelector('input[name="trust1"]:checked').value);
            alert("trust2: "+document.querySelector('input[name="trust2"]:checked').value);
            alert("trust3: "+document.querySelector('input[name="trust3"]:checked').value);
            alert("trust4: "+document.querySelector('input[name="trust4"]:checked').value);
            alert("trust5: "+document.querySelector('input[name="trust5"]:checked').value);
            alert("trust6: "+document.querySelector('input[name="trust6"]:checked').value);
            alert("trust7: "+document.querySelector('input[name="trust7"]:checked').value);
            alert("trust8: "+document.querySelector('input[name="trust8"]:checked').value);
        }
        else{
            alert("Please choose your answers for all the questions!");
        }
    });
    
    $("#surveypage2buttonPrev").click(function(){
        document.getElementById('surveypage2').style.display = 'none';
        document.getElementById('surveypage1').style.display = 'block';
        document.getElementById('barP2').classList.remove("active");
        document.getElementById('barP2').classList.remove("finish");
        document.getElementById('barP1').classList.remove("finish");
        document.getElementById('barP1').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage3buttonPrev").click(function(){
        document.getElementById('surveypage3').style.display = 'none';
        document.getElementById('surveypage2').style.display = 'block';
        document.getElementById('barP3').classList.remove("active");
        document.getElementById('barP3').classList.remove("finish");
        document.getElementById('barP2').classList.remove("finish");
        document.getElementById('barP2').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage4buttonPrev").click(function(){
        document.getElementById('surveypage4').style.display = 'none';
        document.getElementById('surveypage3').style.display = 'block';
        document.getElementById('barP4').classList.remove("active");
        document.getElementById('barP4').classList.remove("finish");
        document.getElementById('barP3').classList.remove("finish");
        document.getElementById('barP3').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage5buttonPrev").click(function(){
        document.getElementById('surveypage5').style.display = 'none';
        document.getElementById('surveypage4').style.display = 'block';
        document.getElementById('barP5').classList.remove("active");
        document.getElementById('barP5').classList.remove("finish");
        document.getElementById('barP4').classList.remove("finish");
        document.getElementById('barP4').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage6buttonPrev").click(function(){
        document.getElementById('surveypage6').style.display = 'none';
        document.getElementById('surveypage5').style.display = 'block';
        document.getElementById('barP6').classList.remove("active");
        document.getElementById('barP6').classList.remove("finish");
        document.getElementById('barP5').classList.remove("finish");
        document.getElementById('barP5').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage7buttonPrev").click(function(){
        document.getElementById('surveypage7').style.display = 'none';
        document.getElementById('surveypage6').style.display = 'block';
        document.getElementById('barP7').classList.remove("active");
        document.getElementById('barP7').classList.remove("finish");
        document.getElementById('barP6').classList.remove("finish");
        document.getElementById('barP6').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage8buttonPrev").click(function(){
        document.getElementById('surveypage8').style.display = 'none';
        document.getElementById('surveypage7').style.display = 'block';
        document.getElementById('barP8').classList.remove("active");
        document.getElementById('barP8').classList.remove("finish");
        document.getElementById('barP7').classList.remove("finish");
        document.getElementById('barP7').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage9buttonPrev").click(function(){
        document.getElementById('surveypage9').style.display = 'none';
        document.getElementById('surveypage8').style.display = 'block';
        document.getElementById('barP9').classList.remove("active");
        document.getElementById('barP8').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage10buttonPrev").click(function(){
        document.getElementById('surveypage10').style.display = 'none';
        document.getElementById('surveypage9').style.display = 'block';
        document.getElementById('barP10').classList.remove("active");
        document.getElementById('barP10').classList.remove("finish");
        document.getElementById('barP9').classList.remove("finish");
        document.getElementById('barP9').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage11buttonPrev").click(function(){
        document.getElementById('surveypage11').style.display = 'none';
        document.getElementById('surveypage10').style.display = 'block';
        document.getElementById('barP11').classList.remove("active");
        document.getElementById('barP11').classList.remove("finish");
        document.getElementById('barP10').classList.remove("finish");
        document.getElementById('barP10').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage12buttonPrev").click(function(){
        document.getElementById('surveypage12').style.display = 'none';
        document.getElementById('surveypage11').style.display = 'block';
        document.getElementById('barP12').classList.remove("active");
        document.getElementById('barP12').classList.remove("finish");
        document.getElementById('barP11').classList.remove("finish");
        document.getElementById('barP11').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage13buttonPrev").click(function(){
        document.getElementById('surveypage13').style.display = 'none';
        document.getElementById('surveypage12').style.display = 'block';
        document.getElementById('barP13').classList.remove("active");
        document.getElementById('barP12').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
    $("#surveypage14buttonPrev").click(function(){
        document.getElementById('surveypage14').style.display = 'none';
        document.getElementById('surveypage13').style.display = 'block';
        document.getElementById('barP14').classList.remove("active");
        document.getElementById('barP14').classList.remove("finish");
        document.getElementById('barP13').classList.remove("finish");
        document.getElementById('barP13').classList.add("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
    
});

function fixStepIndicator(n) {
    // This function removes the 'active' class of all steps...
    var i, x = document.getElementsByClassName('step');
    for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(' active', '');
    }
    //... and adds the 'active' class on the current step:
    for (i = 0; i < n; i++) {
        x[i].className = 'step finish';
    }
    x[n].className += ' active';
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
