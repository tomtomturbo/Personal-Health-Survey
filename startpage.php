<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include "inc/header.php" ?>
    <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="pics/gym.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Fitness Test mit Feedback</h1>
        <p class="lead">Scrolle nach unten und starte deinen Test gleich mit der ersten Frage. Zum
            Schluss erhälst du ein Feedback mit tollen Tipps!
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" href="surveypage2.php">Weiter</button>
         
        </div>
      </div>
    </div>
  </div>


 <!-- erste Frage des Surveys -->
 
 
 
 <form action="surveypage2.php" method="post">
 <div class="container-sm">
 <p style="text-align:left;color:blueviolet;font-size:48px">Fitness-Test</h2>
 <p style="font-size:20px"> Frage 1: Wie gesund bist du körperlich?</p>
    <div class="mb-3">
        <label for="Frage1" class="form-label" style="font-size:30px"></label>
        <input type="range" class="form-range" min="1" max="5" id="Frage1">
       
        <div class="form-check">
                <div class="row align-items-start">
    <div class="col">s
      Miserabel
    </div>
    <div class="col">
     
    </div>
    <div style="text-align:right" class="col">
      Fantastisch
    </div>
  </div>
    </div>
 </div>
 <button type="submit" class="btn btn-outline-primary btn-lg" href="surveypage2.php">Absenden</button>
 </form>
</body>

</html>