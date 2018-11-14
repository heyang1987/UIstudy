/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var currentMenu;
var currentStatus=true;
var allStatus=true;

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

function checkRow(classId, status, flag) {
    var checkboxes = document.getElementsByClassName(classId);
    if (flag) {
        for (var i = 0; i < checkboxes.length; i++) {
             checkboxes[i].checked = currentStatus;
        }
        currentStatus ? currentStatus=false : currentStatus=true;
    }
    else {
        for (var i = 0; i < checkboxes.length; i++) {
                 checkboxes[i].checked = status;
        }
    }
 }

function checkAll(dev) {
    checkRow(dev+'se', allStatus, false);
    checkRow(dev+'re', allStatus, false);
    checkRow(dev+'hv', allStatus, false);
    checkRow(dev+'wm', allStatus, false);
    checkRow(dev+'ls', allStatus, false);
    checkRow(dev+'sa', allStatus, false);
    checkRow(dev+'tv', allStatus, false);
    checkRow(dev+'cl', allStatus, false);
    if (allStatus) {
        allStatus = false;
        document.getElementById(dev+'AllButton').innerHTML = "None";
    }
    else{
        allStatus = true;
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