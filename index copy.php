<?php
include('Header.php');


?>

<title>
    Welcome to little restaurants intro.
</title>

<?php

if (array_key_exists('submit0', $_POST)) {
    submit0();
} else if (array_key_exists('submit1', $_POST)) {
    submit1();
} else if (array_key_exists('submit2', $_POST)) {
    submit2();
} else if (array_key_exists('submit3', $_POST)) {
    submit3();
} else if (array_key_exists('submit4', $_POST)) {
    submit4();
} else if (array_key_exists('submit5', $_POST)) {
    submit5();
} else if (array_key_exists('submit6', $_POST)) {
    submit6();
} else if (array_key_exists('submit7', $_POST)) {
    submit7();
} else if (array_key_exists('submit8', $_POST)) {
    submit8();
} else if (array_key_exists('submit9', $_POST)) {
    submit9();
}
function submit0()
{
    header("Location: restaurant list/restaurant0.php");
}
function submit1()
{
    header("Location: restaurant list/restaurant1.php");
}
function submit2()
{
    header("Location: restaurant list/restaurant2.php");
}
function submit3()
{
    header("Location: restaurant list/restaurant3.php");
}
function submit4()
{
    header("Location: restaurant list/restaurant4.php");
}
function submit5()
{
    header("Location: restaurant list/restaurant5.php");
}
function submit6()
{
    header("Location: restaurant list/restaurant6.php");
}
function submit7()
{
    header("Location: restaurant list/restaurant7.php");
}
function submit8()
{
    header("Location: restaurant list/restaurant8.php");
}
function submit9()
{
    header("Location: restaurant list/restaurant9.php");
}
?>

<div class="container">
    <div class="row">

        <h2>Restaurants list:</h2><br><br><br>

        <section class="container mb-2">
            <?php

            $jsondata = json_decode(file_get_contents("data.json"));
            

            foreach ($jsondata->restaurant as $json1) {
            ?>

            <a target="_blank" href="<?php echo "$json1->url"?>"><?php echo "$json1->name"?></a><br>
            <?php
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