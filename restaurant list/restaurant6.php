<?php
include('../Header.php');
$jsondata = json_decode(file_get_contents("../data.json"), true);
?>

<title>
  <?php echo $jsondata['restaurant'][6]["name"] ?>
</title>


<section class="container">
  <?php
  echo "<br>" . "<h2>" . $jsondata['restaurant'][6]["name"] . "</h2>" . "<br>";
  echo "<h6>" . "Intro: " . $jsondata['restaurant'][6]["intro"] . "</h6>" . "<br>" . "<br>" . "<br>";
  ?>
</section>

<div class="container justify-content-start">
  <div class="row">
    <div class="col-3">
    <img src="../img/Logo/野川拉麵の深燒食堂Logo.jfif" width="300px" height="300px">
      <?php
      echo "Tel: " . $jsondata['restaurant'][6]["tel"] . "<br>" . "<br>";
      echo "Address: " . $jsondata['restaurant'][6]["adrs"] . "<br>" . "<br>" . "<br>" . "<br>";
      echo "Opening Hours: " . "<br>" . "<br>";
      echo "<h5>" . "Mon-Fri:" . $jsondata['restaurant'][6]['time'][0]['MonFri'] . "</h5>";
      echo "<h5>" . "Sat-Sun:" . $jsondata['restaurant'][6]['time'][0]['SatSun'] . "</h5>" . "<br>" . "<br>";
      ?>
    </div>
    <div class="col-7 offset-2">
      <?php
      echo "<h4>" . "The MOST Popular dishes:" . "</h4>" . "<br>" . "<br>". "<br>";

      echo '<img src="../img/dish1.jfif">'."<br>";
      echo "No.1" . "<p>" . $jsondata['restaurant'][6]["food"][0]['id0'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish2.jfif">'."<br>";
      echo "No.2" . "<p>" . $jsondata['restaurant'][6]["food"][0]['id1'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish3.jfif">'."<br>";
      echo "No.3" . "<p>" . $jsondata['restaurant'][6]["food"][0]['id2'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish4.jfif">'."<br>";
      echo "No.4" . "<p>" . $jsondata['restaurant'][6]["food"][0]['id3'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish5.jfif">'."<br>";
      echo "No.5" . "<p>" . $jsondata['restaurant'][6]["food"][0]['id4'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish6.jfif">'."<br>";
      echo "No.6" . "<p>" . $jsondata['restaurant'][6]["food"][0]['id5'] . "</p>" . "<br>" . "<br>" . "<br>";
      ?>
    </div>
  </div>
</div>

<?php
include('../footer.php');
?>