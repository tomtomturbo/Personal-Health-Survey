
function setWarning(text){
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}

    function validateNumber(){
        let value = document.getElementById("number-text").value;


        // Wenn kein Wert eingegeben wurde, dann soll der Submit gestoppt werden.
        if (value==""){    //dasselbe ist 'if (!value)'
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
        
        // Wir müssen die Liste von radioButtons nach dem gewählten Wert durchsuchen.
        for (let i = 0; i < radioButtons.length; i++){
            let radioBtn = radioButtons[i];
            
            if (radioBtn.checked == true) {
                return true;
            }
            

        }

       
        setWarning("Bitte wähle eine Option");
        return false; 
    }

  
    