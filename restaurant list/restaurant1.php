<?php
include('../Header.php');
$jsondata = json_decode(file_get_contents("../data.json"), true);
?>

<title>
  <?php echo $jsondata['restaurant'][1]["name"] ?>
</title>

<body style="background-color: rgb(249, 255, 255);">
<section class="container">
  <?php
  echo "<br>" . "<h2>" . $jsondata['restaurant'][1]["name"] . "</h2>" . "<br>";
  echo "<h6>" . "Intro: " . $jsondata['restaurant'][1]["intro"] . "</h6>" . "<br>" . "<br>" . "<br>";
  ?>
</section>

<div class="container justify-content-start">
  <div class="row">
    <div class="col-3">
      <img src="../img/Logo/OasisLogo.jfif" width="300px" height="300px">
      <div class="card mt-3 mb-5" style="width: 19rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"id="barColor"><?php echo "Tel: " . $jsondata['restaurant'][1]["tel"]; ?></li>
          <li class="list-group-item"id="barColor"><?php echo "Address: " . $jsondata['restaurant'][1]["adrs"]; ?></li>
        </ul>
      </div>
      <?php echo "Opening Hours: " . "<br>" . "<br>"; ?>
      <div class="card mt-1 d-flex justify-content-start" style="width: 19rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"id="barColor"><?php echo "<h4>" . "Mon-Fri:" . $jsondata['restaurant'][1]['time'][0]['MonFri'] . "</h4>"; ?></li>
          <li class="list-group-item"id="barColor"><?php echo "<h4>" . "Sat-Sun:" . $jsondata['restaurant'][1]['time'][0]['SatSun'] . "</h4>"; ?></li>
        </ul>
      </div>
    </div>

    <div class="col-7 offset-2">
      <?php
      echo "<h4>" . "The MOST Popular dishes:" . "</h4>" . "<br>" . "<br>". "<br>";

      echo '<img src="../img/dish1.jfif">'."<br>";
      echo "No.1" . "<p>" . $jsondata['restaurant'][1]["food"][0]['id0'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish2.jfif">'."<br>";
      echo "No.2" . "<p>" . $jsondata['restaurant'][1]["food"][0]['id1'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish3.jfif">'."<br>";
      echo "No.3" . "<p>" . $jsondata['restaurant'][1]["food"][0]['id2'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish4.jfif">'."<br>";
      echo "No.4" . "<p>" . $jsondata['restaurant'][1]["food"][0]['id3'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish5.jfif">'."<br>";
      echo "No.5" . "<p>" . $jsondata['restaurant'][1]["food"][0]['id4'] . "</p>" . "<br>" . "<br>" . "<br>";
      echo '<img src="../img/dish6.jfif">'."<br>";
      echo "No.6" . "<p>" . $jsondata['restaurant'][1]["food"][0]['id5'] . "</p>" . "<br>" . "<br>" . "<br>";
      ?>
    </div>
  </div>
</div>
</body>

<?php
include('../footer.php');
?>