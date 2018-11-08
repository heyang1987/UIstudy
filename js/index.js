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
    if (n == image.length-1) {
        document.getElementById('introductionbutton').style.display='block';
    }
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

$(document).ready(function(){
    $('#introduction, #consentBody, #prepage').hide();
    var welcome = document.getElementById('welcomeBody');
    var consent = document.getElementById('consentBody');
    var introduction = document.getElementById('introduction');
    var prepage = document.getElementById('prepage');

    $("#welcomeButton").click(function(){
        welcome.style.display = 'none';
        consent.style.display = 'block';
    });

    $('#consentbutton').click(function() {
        console.log(consent_check);
        if (consent_check == 1) {
            consent.style.display = 'none';
            introduction.style.display = 'block';
            showDivs(12);
        } else {
            $("#consent_Q").css("border-left", "3px solid #ff0000");
        }
    });

    $('input[type=checkbox][name=consent_test]').change(function() {
        $(".consent-next").children("button").css({
            "cursor": "pointer",
            "opacity": "1",
            "background-color": "#5cb85c"
        });
        consent_check = 1;
    });

    $("#introductionbutton").click(function() {
        audio[12].pause();
        introduction.style.display = 'none';
        prepage.style.display = 'block';        
    });
    
    $("#prepagebutton").click(function() {  
        var rdnum = Math.floor(Math.random() * 8);
        switch (rdnum){
            case(0):
                document.location.href = './uipages/ui1AllOff.php';
                break;
            case(1):
                document.location.href = './uipages/ui1AllOn.php';
                break;
            case(2):
                document.location.href = './uipages/ui2AllOff.php';
                break;
            case(3):
                document.location.href = './uipages/ui2AllOn.php';
                break;
            case(4):
                document.location.href = './uipages/ui1OneRule.php';
                break;
            case(5):
                document.location.href = './uipages/ui2OneRule.php';
                break;
            case(6):
                document.location.href = './uipages/ui1Profiles.php';
                break;
            case(7):
                document.location.href = './uipages/ui1AllOff.php';
                break;
            default:
                window.alert("error!");
        }
    });

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
//            audio[12].onended = function() {showDivs(13);frontline = 12;};
//            audio[13].onended = function() {showDivs(14);frontline = 13;};
});
