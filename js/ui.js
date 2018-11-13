/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var currentMenu;
var currentStatus=true;

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

function checkRow(eleChecked, classId) {
     var checkboxes = document.getElementsByClassName(classId);
     if (eleChecked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }

function checkAll(dev) {
    checkRow(currentStatus, dev+'se');
    checkRow(currentStatus, dev+'re');
    checkRow(currentStatus, dev+'hv');
    checkRow(currentStatus, dev+'wm');
    checkRow(currentStatus, dev+'ls');
    checkRow(currentStatus, dev+'sa');
    checkRow(currentStatus, dev+'tv');
    checkRow(currentStatus, dev+'cl');
    if (currentStatus) {
        currentStatus = false;
        document.getElementById(dev+'AllButton').innerHTML = "None";
    }
    else{
        currentStatus = true;
        document.getElementById(dev+'AllButton').innerHTML = "All";
    }
 }