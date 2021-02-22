<html>
<title>
Welcome to little restaurants intro.
</title>
<body>

<h1>Little Restaurants</h1>


<h2>Welcome to Our website, you may find the restaurant you like!</h2>
<br><br><br>

<?php

    $jsondata = file_get_contents("data.json");
    $json = json_decode($jsondata, true);

    echo $json;
    echo $json['restaurant'][0];
    echo $json['restaurant'][0];
    echo $json['restaurant'][0]['time'][0]['MonFri'];
    echo $json['restaurant'][0]['time'][0]['SatSun'];
?>
    <form method="post" >
    <input type="submit" name="submit0" value="Further Information">  
    </form>

<?php
    echo $jsondata['restaurant'][1]["name"]."<br>";
    echo $jsondata['restaurant'][1]["tel"]."<br>";
    echo $jsondata['restaurant'][1]["adrs"]."<br>";
    echo $jsondata['restaurant'][1]['time'][0]['MonFri']."<br>";
    echo $jsondata['restaurant'][1]['time'][0]['SatSun']."<br>";
?>
    <form method="post" >
    <input type="submit" name="submit1" value="Further Information">  
    </form>

<?php
    echo $jsondata['restaurant'][2]["name"]."<br>";
    echo $jsondata['restaurant'][2]["tel"]."<br>";
    echo $jsondata['restaurant'][2]["adrs"]."<br>";
    echo $jsondata['restaurant'][2]['time'][0]['MonFri']."<br>";
    echo $jsondata['restaurant'][2]['time'][0]['SatSun']."<br>";
?>
    <form method="post" >
    <input type="submit" name="submit2" value="Further Information">  
    </form>

<?php

    echo $jsondata['restaurant'][3]["name"]."<br>";
    echo $jsondata['restaurant'][3]["tel"]."<br>";
    echo $jsondata['restaurant'][3]["adrs"]."<br>";
    echo $jsondata['restaurant'][3]['time'][0]['MonFri']."<br>";
    echo $jsondata['restaurant'][3]['time'][0]['SatSun']."<br>";
?>
    <form method="post" >
    <input type="submit" name="submit3" value="Further Information">  
    </form>

<?php

    echo $jsondata['restaurant'][4]["name"]."<br>";
    echo $jsondata['restaurant'][4]["tel"]."<br>";
    echo $jsondata['restaurant'][4]["adrs"]."<br>";
    echo $jsondata['restaurant'][4]['time'][0]['MonFri']."<br>";
    echo $jsondata['restaurant'][4]['time'][0]['SatSun']."<br>";
?>
    <form method="post" >
    <input type="submit" name="submit4" value="Further Information">  
    </form>

<?php

    echo $jsondata['restaurant'][5]["name"]."<br>";
    echo $jsondata['restaurant'][5]["tel"]."<br>";
    echo $jsondata['restaurant'][5]["adrs"]."<br>";
    echo $jsondata['restaurant'][5]['time'][0]['MonFri']."<br>";
    echo $jsondata['restaurant'][5]['time'][0]['SatSun']."<br>";
?>
    <form method="post" >
    <input type="submit" name="submit5" value="Further Information">  
    </form>

<?php

    echo $jsondata['restaurant'][6]["name"]."<br>";
    echo $jsondata['restaurant'][6]["tel"]."<br>";
    echo $jsondata['restaurant'][6]["adrs"]."<br>";
    echo $jsondata['restaurant'][6]['time'][0]['MonFri']."<br>";
    echo $jsondata['restaurant'][6]['time'][0]['SatSun']."<br>";
?>
    <form method="post" >
    <input type="submit" name="submit6" value="Further Information">  
    </form>

<?php

    echo $jsondata['restaurant'][7]["name"]."<br>";
    echo $jsondata['restaurant'][7]["tel"]."<br>";
    echo $jsondata['restaurant'][7]["adrs"]."<br>";
    echo $jsondata['restaurant'][7]['time'][0]['MonFri']."<br>";
    echo $jsondata['restaurant'][7]['time'][0]['SatSun']."<br>";
?>
    <form method="post" >
    <input type="submit" name="submit7" value="Further Information">  
    </form>

<?php

    echo $jsondata['restaurant'][8]["name"]."<br>";
    echo $jsondata['restaurant'][8]["tel"]."<br>";
    echo $jsondata['restaurant'][8]["adrs"]."<br>";
    echo $jsondata['restaurant'][8]['time'][0]['MonFri']."<br>";
    echo $jsondata['restaurant'][8]['time'][0]['SatSun']."<br>";
?>
    <form method="post" >
    <input type="submit" name="submit8" value="Further Information">  
    </form>

<?php

    echo $jsondata['restaurant'][9]["name"]."<br>";
    echo $jsondata['restaurant'][9]["tel"]."<br>";
    echo $jsondata['restaurant'][9]["adrs"]."<br>";
    echo $jsondata['restaurant'][9]['time'][0]['MonFri']."<br>";
    echo $jsondata['restaurant'][9]['time'][0]['SatSun']."<br>";
?>
    <form method="post" >
    <input type="submit" name="submit9" value="Further Information">  
    </form>

    <?php

    if(array_key_exists('submit0', $_POST)) { 
    submit0(); 
} 
else if(array_key_exists('submit1', $_POST)) { 
    submit1(); 
} 
else if(array_key_exists('submit2', $_POST)) { 
    submit2(); 
} 
else if(array_key_exists('submit3', $_POST)) { 
    submit3(); 
} 
else if(array_key_exists('submit4', $_POST)) { 
    submit4(); 
} 
else if(array_key_exists('submit5', $_POST)) { 
    submit5(); 
} 
else if(array_key_exists('submit6', $_POST)) { 
    submit6(); 
} 
else if(array_key_exists('submit7', $_POST)) { 
    submit7(); 
} 
else if(array_key_exists('submit8', $_POST)) { 
    submit8(); 
} 
else if(array_key_exists('submit9', $_POST)) { 
    submit9(); 
} 
function submit0() { 
    header("Location: restaurant.php"); 
} 
function submit1() { 
    header("Location: restaurant1.php"); 
} 
function submit2() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit3() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit4() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit5() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit6() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit7() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit8() { 
    header("Location: Yummy Noodles.php"); 
} 
function submit9() { 
    header("Location: Yummy Noodles.php"); 
} 
?>

</body>
</html>