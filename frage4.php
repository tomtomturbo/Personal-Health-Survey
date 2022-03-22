<?php include "inc/header.php" ?>
<?php include "inc/data-collector.php" ?>
<?php include "inc/evaluate-user-data.php" ?>
<br>
<br>
<!-- Checkboxes Frage 4-->

<body>
  <form name="myForm" action="frage5.php" onsubmit="return validateCheckboxes()" method="post">
    <div class="container-sm">
      <p style="text-align:left;color:blueviolet;font-size:48px">Fitness-Test</h2>
      <p style="font-size:20px"> Frage 4: Welche zusätzliche körperliche Aktivität betreibst du am meisten?</p>
      <div class="mb-3">
        <input type="checkbox" id="cb1" name="cb1" value="Bike">
        <label for="cb1"> keine zusätzliche körperliche Aktivität</label><br>
        <input type="checkbox" id="cb2" name="cb2" value="Gewichte heben">
        <label for="cb2"> Gewichte heben</label><br>
        <input type="checkbox" id="cb3" name="cb3" value="Gehen">
        <label for="cb3"> Gehen</label><br>
        <input type="checkbox" id="cb4" name="cb4" value="Wandern">
        <label for="cb4"> Wandern</label><br>
        <input type="checkbox" id="cb5" name="cb5" value="Joggen">
        <label for="cb5"> Joggen</label><br>
        <input type="checkbox" id="cb6" name="cb6" value="Rennen">
        <label for="cb6"> Rennen</label><br>
        <input type="checkbox" id="cb7" name="cb7" value="Schwimmen">
        <label for="cb7"> Schwimmen</label><br>
        <input type="checkbox" id="cb8" name="cb8" value="Tanzen">
        <label for="cb8"> Tanzen</label><br>
        <input type="checkbox" id="cb9" name="cb9" value="Aerobics">
        <label for="cb9"> Aerobics</label><br>
        <input type="checkbox" id="cb10" name="cb10" value="Pilates">
        <label for="cb10"> Pilates</label><br>
        <input type="checkbox" id="cb11" name="cb11" value="Team Sport">
        <label for="cb11"> Team Sport</label><br>
        <button type="submit" class="btn btn-outline-primary btn-lg">Weiter</button>
        <p id="validate-warning" class="warning"></p>
      </div>
    </div>
    <input type="hidden" name="lastPageID" value="question-4">
    <input type="hidden" id="checkboxValues" name="checkboxValues">
    <p id="validate-warning" class="warning"></p>
</form>




</body>
<?php include "inc/footer.php" ?>