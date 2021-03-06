<?php
include('Header.php');

$GLOBALS['jsondata'] = json_decode(file_get_contents("data.json"), true);
?>

<title>
    Welcome to little restaurants intro.
</title>

<body style="background-color: rgb(249, 255, 255);">
    <div class="container">
        <div class="row">

            <h2>Restaurants list:</h2><br><br><br>

            <section class="container mb-2">
                <?php

                $jsondata = json_decode(file_get_contents("data.json"));

                foreach ($jsondata->restaurant as $json1) {
                ?>
                    <div class="mb-3" id=imgForRest >
                        <a target="_blank" href="<?php echo "$json1->url" ?>">
                            <img src="<?php echo $json1->imgLogo ?>"></a>
                    </div>
                    <?php echo "<h5>" . "<strong>" . "$json1->name" . "</strong>" . "</h5>"; ?>
                    <div class="card mt-3 mb-4" style="width: 19rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" id="barColor"><?php echo "Tel: " . $json1->tel; ?></li>
                        </ul>
                    </div>
                    <?php echo "Opening Hours: " . "<br>" . "<br>"; ?>
                    <div id="barColor" class="card mb-5" style="width: 19rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" id="barColor"><?php foreach ($json1->time as $json2) {
                        echo "Mon-Fri:" . $json2->MonFri . "<br>";} ?></li>
                            <li class="list-group-item" id="barColor"><?php foreach ($json1->time as $json2) {
                                echo "Sat-Sun:" . $json2->SatSun;} ?></li>
                        </ul>
                    </div>
                
                <?php
                }
                ?>

            </section>

        </div>
    </div>
</body>
<?php
include('footer.php')
?>