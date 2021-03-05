<?php
include('Header.php');

$GLOBALS['jsondata'] = json_decode(file_get_contents("data.json"), true);
?>

<title>
    Welcome to little restaurants intro.
</title>

<div class="container">
    <div class="row">

        <h2>Restaurants list:</h2><br><br><br>

        <section class="container mb-2">
            <?php

            $jsondata = json_decode(file_get_contents("data.json"));

            foreach ($jsondata->restaurant as $json1) {
            ?>
            <div id=imgForRest>
            <a target="_blank" href="<?php echo "$json1->url"?>">
            <img src="<?php echo $json1->imgLogo ?>"></a>
            </div>
            <?php
                echo "<h5>"."<strong>"."$json1->name"."</strong>"."</h5>";
                echo "Tel: " . $json1->tel . "<br>";
                echo "Address: " . $json1->adrs . "<br>" . "<br>" . "<br>";
                echo "Opening Hours: " . "<br>" . "<br>";
                foreach ($json1->time as $json2) {
                    echo "Mon-Fri:" . $json2->MonFri . "<br>";
                    echo "Sat-Sun:" . $json2->SatSun . "<br>" . "<br>";
                }
            }
            ?>

        </section>

    </div>
</div>
<?php
include('footer.php')
?>