<?php include "inc/header.php" ?>
<?php include "inc/data-collector.php" ?>
<?php include "inc/evaluate-user-data.php" ?>


<div class="container-sm">
    <form name="myForm" action="frage6.php" onsubmit="return validateQuestion('frage1')" method="post">
    <div class="container-sm">
      <p style="text-align:left;color:blueviolet;font-size:48px">Fitness-Test</h2>
      <p style="font-size:20px"> Frage 5: Hast du das Gefühl, zu wenig, genügend
oder viel zu viel zusätzliche körperliche
Aktivitäten zu betreiben?</p>
      <div class="mb-3">
        <label for="frage1" class="form-label" style="font-size:30px"></label>
        <input type="range" class="form-range" min="1" max="5" value="2.511" id="frage1">
        <input type="hidden" name="pageID" value="index">
        <input type="hidden" name="range-slider-changed">
        <p id="validate-warning" class="warning"></p>

        <div class="form-check">
          <div class="row align-items-start">
            <div class="col">
              viel zu wenig
            </div>
            <div class="col" style="text-align:center">
            genügend
            </div>
            <div style="text-align:right" class="col">
              viel zu viel
            </div>
          </div>
        </div>
      </div>
      <button type="submit" id="button1" class="btn btn-outline-primary btn-lg" >Absenden</button>
  </form>