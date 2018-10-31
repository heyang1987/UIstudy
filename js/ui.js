/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

window.onbeforeunload = function () {
    return "Data will be lost if you leave the page, are you sure?";
};

function dropdownFunction(divId) {
    document.getElementById(divId).style.display= (document.getElementById(divId).style.display == 'none' ) ? 'block' : 'none';
}

function clickl() {
    document.getElementById("r").checked = false;
    document.getElementById("t").checked = false;
    document.getElementById("n").checked = false;
}

function clickr() {
    document.getElementById("l").checked = false;
    document.getElementById("t").checked = false;
    document.getElementById("n").checked = false;
}

function clickt() {
    document.getElementById("l").checked = false;
    document.getElementById("r").checked = false;
    document.getElementById("n").checked = false;
}

function clickn() {
    document.getElementById("l").checked = false;
    document.getElementById("t").checked = false;
    document.getElementById("r").checked = false;
}