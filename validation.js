
function validateQuestion(inputID, radioName) {

    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Bitte wähle eine Option aus.")
            return false;
        }
    }
    else {
        let value = inputElement.value;

        if (!value) {
            setWarning("Bitte gib einen Wert ein.");
            return false;
        }
    }
}

function sliderChanged(){
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged(){
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}

function setWarning(text) {
    let warningElement = document.getElementById("validate-warning");
    warningElement.innerText = text;
}



/*function setWarning(text){
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}

    function validateNumber(){
        let value = document.getElementById("number-text").value;


        // Wenn kein Wert eingegeben wurde, dann soll der Submit gestoppt werden.
        if (value==""){    //genau dasselbe ist 'if (!value)'
            setWarning("Bitte geben Sie eine Zahl an.")

        }
        //alles ok: gar nichts zurückgeben oder true.
        return true;

        //Stopp: es wurde kein Wert eingegeben.
        return false;
    }

    function validateRadio(radioName){
        //alert("test");
        //radioButtons ist eine Liste die einen bis mehrere Radio Buttons enthalten kann.
        //kann auch leer sein
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        // Wir müssen die Liste von radioButtons nach dem gewählten Wert durchsuchen.
        for (let i = 0; i < radioButtons.length; i++){
            if (radioButtons[i].checked){
            selectedValue = radioButtons[i].value;
            break;

            if (selectedValue.checked == true) {
                return true;
            }


        }
        setWarning("Bitte wähle eine Option");
        return false;
        }

    function validateCheckboxes(){
        let array = [];
        let checkboxes = document.querySelectorAll('input[type=checkbox]:checked');


    for (let i = 0; i < checkboxes.length; i++){
        array.push(checkboxes[i].value); //value ist jeweils ein String.
    }

    // falls keine checkbox gewählt wurde ist array === [].
    if (array.length === 0) {
        setWarning("Bitte wähle mindestens eine Option aus.");
        return false;//bei false wird der weitere Submit gestoppt.
    }

    //Checkbox(en) wurde(n) gewählt: setze Liste in ein 'hidden' Inputfeld.
    // value muss ein string, also muss array in ein string konvertiert werden.
    document.getElementById("checkboxValues").value = array.toString();
}}*/
