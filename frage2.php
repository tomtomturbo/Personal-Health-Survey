    <!--radios-->
    <?php include "inc/header.php" ?>
    
    <br>
    <br>
    
        <div class="container-sm">
            <h2>Frage 2: Nimmst du Nahrungsergänzungsmittel?</h2>
            <form name="myForm" action="frage3.php" onsubmit="return validateRadio('exampleRadios');" method="post">
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1">
                    <label class="form-check-label" for="exampleRadios1">
                        Ja
                    </label>
                </div>
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2">
                <label class="form-check-label" for="exampleRadios2">
                    Nein
                </label>
            </div>
          
            <button type="submit" class="btn btn-outline-primary btn-lg">Weiter</button>
            <p id="validation-warning"></p>
            </form>
        </div>

       
        <script src="validation.js"></script>
</body>

</html>