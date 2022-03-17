  <?php include "inc/header.php" ?>
  <?php include "inc/data-collector.php"?>
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
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" href="button1">Weiter</button>
         
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br> 
  <br>
  <br>
  <br>
  <br> 
  <br>

  <!-- erste Frage des Surveys -->



  <form name="myForm" action="frage2.php" onsubmit="return validateQuestion('frage1')" method="post">
    <div class="container-sm">
      <p style="text-align:left;color:blueviolet;font-size:48px">Fitness-Test</h2>
      <p style="font-size:20px"> Frage 1: Wie gesund bist du körperlich?</p>
      <div class="mb-3">
        <label for="frage1" class="form-label" style="font-size:30px"></label>
        <input type="range" class="form-range" min="1" max="5" value="2.511" id="frage1">
        <input type="hidden" name="pageID" value="index">
        <input type="hidden" name="range-slider-changed">
        <p id="validation-warning" class="warning"></p>

        <div class="form-check">
          <div class="row align-items-start">
            <div class="col">
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
      <button type="submit" id="button1" class="btn btn-outline-primary btn-lg" >Absenden</button>
  </form>
</body>

</html>