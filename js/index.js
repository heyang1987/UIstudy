/*eslint-env browser*/
'use strict';

var consent_check = 0;
var slideIndex = 0;
var image = document.getElementsByClassName("mySlides");
var audio = document.getElementsByClassName("myAudios");
var frontline = -1;

function plusDivs(n) {
    audio[slideIndex].pause();
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
//            alert(n);
    slideIndex = n;
//    if (n == image.length-1) {
//        document.getElementById('introductionbutton').style.display='block';
//    }
    if (n <= 0) {document.getElementById("slideshowleftbutton").disabled = true;}
    else {document.getElementById("slideshowleftbutton").disabled = false;}
    if (n > frontline || n == image.length-1) {document.getElementById("slideshowrightbutton").disabled = true;}
    else{document.getElementById("slideshowrightbutton").disabled = false;}

    for (i = 0; i < image.length; i++) {
        image[i].style.display = "none";
    }
    image[n].style.display = "block";
    audio[n].currentTime = 0;
    audio[n].play();
}

function repeatAudio() {
    audio[slideIndex].currentTime = 0;
}

function handleChange(checkbox) {
    if(checkbox.checked == true){
        document.getElementById("consentbutton").removeAttribute("disabled");
        $("#consent_Q").css("border-left", "3px solid #006400");
        $('#clickable').css({'width':'0px','height':'0px','z-index':'-1'});
    }else{
        $("#consent_Q").css("border-left", "3px solid #ff0000");
        document.getElementById("consentbutton").setAttribute("disabled", "disabled");
        $('#clickable').css({'width':'80px','height':'35px','z-index':'2'});
    }
}

$(document).ready(function(){
    $('#introduction, #consentBody, #preIntro, #prepage').hide();
    var welcome = document.getElementById('welcomeBody');
    var consent = document.getElementById('consentBody');
    var consentbutton = document.getElementById('consentbutton');
    var preIntro = document.getElementById('preIntro');
    var introduction = document.getElementById('introduction');
    var prepage = document.getElementById('prepage');

    $("#welcomeButton").click(function(){
        welcome.style.display = 'none';
        consent.style.display = 'block';
    });

    $('#consentbutton').click(function() {
        consent.style.display = 'none';
        preIntro.style.display = 'block';
    });
    
    $("#clickable").click(function() {
        $("#consent_Q").css("border-left", "3px solid #ff0000");
    });
    
    $("#preIntroButton").click(function() {
        preIntro.style.display = 'none';
        introduction.style.display = 'block'; 
        showDivs(0);
    });

    $("#introductionbutton").click(function() {
        for (var i = 0; i < image.length; i++) {
            audio[i].pause();
        }
        introduction.style.display = 'none';
        prepage.style.display = 'block';        
    });
    
//    $("#prepagebutton").click(function() {
//        //alert("start clicked!");
//        var rdnum = Math.floor(Math.random() * 1);
//        switch (rdnum){
//            case(0):
//                document.location.href = './uipages/ui1allOff.php';
//                break;
//            case(1):
//                document.location.href = './uipages/ui1allOn.php';
//                break;
//            case(2):
//                document.location.href = './uipages/ui1oneRule.php';
//                break;
//            case(3):
//                document.location.href = './uipages/ui2AllOn.php';
//                break;
//            case(4):
//                document.location.href = './uipages/ui2AllOff.php';
//                break;
//            case(5):
//                document.location.href = './uipages/ui2OneRule.php';
//                break;
//            case(6):
//                document.location.href = './uipages/ui1Profiles.php';
//                break;
//            case(7):
//                document.location.href = './uipages/ui1AllOff.php';
//                break;
//            default:
//                window.alert("error!");
//        }
//    });

    audio[0].onended = function() {showDivs(1);frontline = 0;};
    audio[1].onended = function() {showDivs(2);frontline = 1;};
    audio[2].onended = function() {showDivs(3);frontline = 2;};
    audio[3].onended = function() {showDivs(4);frontline = 3;};
    audio[4].onended = function() {showDivs(5);frontline = 4;};
    audio[5].onended = function() {showDivs(6);frontline = 5;};
    audio[6].onended = function() {showDivs(7);frontline = 6;};
    audio[7].onended = function() {showDivs(8);frontline = 7;};
    audio[8].onended = function() {showDivs(9);frontline = 8;};
    audio[9].onended = function() {showDivs(10);frontline = 9;};
    audio[10].onended = function() {showDivs(11);frontline = 10;};
    audio[11].onended = function() {showDivs(12);frontline = 11;};
    audio[12].onended = function() {frontline = 12;document.getElementById("introductionbutton").disabled = false;};
});

//function start() {
//        alert("start clicked!");
//        var rdnum = Math.floor(Math.random() * 1);
//        switch (rdnum){
//            case(0):
//                document.location.href = './uipages/ui1allOff.php';
//                break;
//            default:
//                window.alert("error!");
//        }
//}

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
