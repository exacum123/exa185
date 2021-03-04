<?php

$jsondata = json_decode(file_get_contents("../data.json"), true);
?>

<title>
  <?php echo $jsondata['restaurant'][5]["name"] ?>
</title>

<?php
include('../Header.php');
?>
<section class="container">
  <?php
  echo "<br>" . "<h2>" . $jsondata['restaurant'][5]["name"] . "</h2>" . "<br>";
  echo "<h6>" . "Intro: " . $jsondata['restaurant'][5]["intro"] . "</h6>" . "<br>" . "<br>" . "<br>";
  ?>
</section>

<div class="container justify-content-start">
  <div class="row">
    <div class="col-3">
      <?php
      echo "Tel: " . $jsondata['restaurant'][5]["tel"] . "<br>";
      echo "Address: " . $jsondata['restaurant'][5]["adrs"] . "<br>" . "<br>" . "<br>" . "<br>";
      echo "Opening Hours: " . "<br>" . "<br>";
      echo "<h5>" . "Mon-Fri:" . $jsondata['restaurant'][5]['time'][0]['MonFri'] . "</h5>";
      echo "<h5>" . "Sat-Sun:" . $jsondata['restaurant'][5]['time'][0]['SatSun'] . "</h5>" . "<br>" . "<br>";
      ?>
    </div>
    <div class="col-7 offset-2">
      <?php
      echo "<h4>" . "The MOST Popular dishes:" . "</h4>" . "<br>";
      echo "No.1" . "<p>" . $jsondata['restaurant'][5]["food"][0]['id0'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo "No.2" . "<p>" . $jsondata['restaurant'][5]["food"][0]['id1'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo "No.3" . "<p>" . $jsondata['restaurant'][5]["food"][0]['id2'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo "No.4" . "<p>" . $jsondata['restaurant'][5]["food"][0]['id3'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo "No.5" . "<p>" . $jsondata['restaurant'][5]["food"][0]['id4'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo "No.6" . "<p>" . $jsondata['restaurant'][5]["food"][0]['id5'] . "</p>" . "<br>" . "<br>" . "<br>";
      ?>
    </div>
  </div>
</div>

<?php
include('../footer.php');
?>