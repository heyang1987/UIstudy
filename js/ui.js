/*eslint-env browser*/

var currentMenu;
//var currentStatus=true;
//var allStatus=true;

/*window.onbeforeunload = function () {
    return "Data will be lost if you leave the page, are you sure?";
};*/

function dropdownFunction(divId) {
    var curArrowId = currentMenu+'Arrow';
    if (currentMenu == divId) {
        if (document.getElementById(divId).style.display == 'none'){
            document.getElementById(curArrowId).src='../images/arrowdown.png';
            document.getElementById(divId).style.display = 'block';
        }
        else{
            document.getElementById(curArrowId).src='../images/arrowright.png';
            document.getElementById(divId).style.display = 'none';
        }
    }
    else{
        document.getElementById(currentMenu).style.display = 'none';
        document.getElementById(divId).style.display = 'block';
        document.getElementById(curArrowId).src='../images/arrowright.png';
        curArrowId=divId+'Arrow';
        document.getElementById(curArrowId).src='../images/arrowdown.png';
        currentMenu = divId;
    }

}

function checkCol(dev,purpose) {
    var currentStatus = document.getElementById(dev+'cl'+purpose).checked;
    currentStatus ? currentStatus=false : currentStatus=true;
    document.getElementById(dev+'se'+purpose).checked = currentStatus;
    document.getElementById(dev+'re'+purpose).checked = currentStatus;
    document.getElementById(dev+'hv'+purpose).checked = currentStatus;
    document.getElementById(dev+'wm'+purpose).checked = currentStatus;
    document.getElementById(dev+'ls'+purpose).checked = currentStatus;
    document.getElementById(dev+'sa'+purpose).checked = currentStatus;
    document.getElementById(dev+'tv'+purpose).checked = currentStatus;
    document.getElementById(dev+'cl'+purpose).checked = currentStatus;
}

function checkRow(dev, status, flag) {
    var currentStatus = document.getElementById(dev+'prs').checked;
    var checkboxes = document.getElementsByClassName(dev);
    //alert(currentStatus);
    if (flag) {
        for (var i = 0; i < checkboxes.length; i++) {
             checkboxes[i].checked = !currentStatus;
        }
//        currentStatus ? currentStatus=false : currentStatus=true;
    
    }
    else {
        for (i = 0; i < checkboxes.length; i++) {
                 checkboxes[i].checked = status;
        }
    }
 }

function checkAll(dev) {
    var allStatus = !document.getElementById(dev+'clalm').checked;
    //alert(allStatus);
    checkRow(dev+'se', allStatus, false);
    checkRow(dev+'re', allStatus, false);
    checkRow(dev+'hv', allStatus, false);
    checkRow(dev+'wm', allStatus, false);
    checkRow(dev+'ls', allStatus, false);
    checkRow(dev+'sa', allStatus, false);
    checkRow(dev+'tv', allStatus, false);
    checkRow(dev+'cl', allStatus, false);
    if (allStatus) {
//        allStatus = false;
        document.getElementById(dev+'AllButton').innerHTML = "None";
    }
    else{
//        allStatus = true;
        document.getElementById(dev+'AllButton').innerHTML = "All";
    }
 }

function closeLeftDropdown() {
    if (document.getElementById(currentMenu).style.display == 'block'){
        var curArrowId = currentMenu+'Arrow';
        document.getElementById(curArrowId).src='../images/arrowright.png';
        document.getElementById(currentMenu).style.display = 'none';
    }
}

setTimeout(function(){
document.getElementById('continue').style.visibility = "visible";
},10000);

$(document).ready(function(){
    $("#uifinishedbutton").click(function() {
//        alert("");
//        document.location.href = '../survey.php';
        document.getElementById('continue').style.visibility = "none";
        document.getElementById('warn').style.visibility = "visible";
    });
});