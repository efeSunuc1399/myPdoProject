"use strict";

/* Functions */
// This function is created for making sure user selected 'Get Single Player' option, only then will we allow user to fill in the input field 'getPlayerByName'
// This function will add 'disabled' attribute and change the placeholder text of input field 'getPlayerByName' if 'Get Single Player' option is not selected
const checkOption = function (select){
    if(select.value != 'getSinglePlayer'){
        getPlayerByName.setAttribute('disabled','');
        getPlayerByName.placeholder = "'Get Single Player' must be selected";
        return;
    }
    getPlayerByName.removeAttribute('disabled');
    getPlayerByName.placeholder = "Please enter player's name";
}

/* Elements */

// Select box for selecting how to get players from database
const select = document.getElementById('choice');
// Input field for getting a player from database using his/her name
const getPlayerByName = document.getElementById('getPlayerByName');


/* Event Listeners */

select.addEventListener('change', function() {
    checkOption(select);
});


/* JS execution */



