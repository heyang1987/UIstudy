'use strict';

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