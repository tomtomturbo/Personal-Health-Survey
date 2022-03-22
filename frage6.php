<?php include "inc/header.php" ?>
    <?php include "inc/data-collector.php" ?>
    <?php include "inc/evaluate-user-data.php" ?>
    



<div class="container-sm">
    <form name="myForm" action="resultpage.php" onsubmit="return validateQuestion('frage1')" method="post">
    <div class="container-sm">
      <p style="text-align:left;color:blueviolet;font-size:48px">Fitness-Test</h2>
      <p style="font-size:20px"> Frage 6: An einem typischen Tag: Wie viele deiner
Mahlzeiten oder Snacks enthalten
Kohlenhydrate?</p>

<label for="frage6" class="form-label" style="font-size:30px"></label>
<input type="number" class="form-range" id="frage6">
</div>
<button type="submit" id="button1" class="btn btn-outline-primary btn-lg" >Absenden</button>
</div>



<?php include "footer.php" ?>