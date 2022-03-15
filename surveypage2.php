<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!--radios-->
    <?php include "inc/header.php" ?>
    <br>
    <br>
    <form action="surveypage3.php" method="post">
        <div class="container-sm">
        <h2>Frage 2: Nimmst du Nahrungsergänzungsmittel?</h2>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="true">
                    <label class="form-check-label" for="exampleRadios1">
                        Ja
                    </label>
                </div>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2">
                    <label class="form-check-label" for="exampleRadios2">
                        Nein
                    </label>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-lg" href="surveypage2.php">Weiter</button>
            </div>
        
        </div>
    </form>
</body>

</html>