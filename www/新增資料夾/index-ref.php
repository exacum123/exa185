<html>
<title>
Welcome to little restaurants intro.
</title>
<body>

<h1>Little Restaurants</h1>

<?php
echo "Welcome to Our website, you may find the restaurant you like!"."<br>"."<br>"."<br>"
?>

<h2>Here is the most popular restaurants.</h2>

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
function submit0() { 
    header("Location: ABC American Fast Food.php"); 
} 
function submit1() { 
    header("Location: 123 Restaurant.php"); 
} 
function submit2() { 
    header("Location: Yummy Noodles.php"); 
} 

echo "ABC American Fast Food"."<br>"."<br>"."<br>";
echo "Address: ABC District ABC Street 123, ABC Centre 1/F"."<br>"."<br>";
echo "Tel: 91564842"
?>

<form method="post" >
<input type="submit" name="submit0" value="Further Information">  
</form>

<?php
echo "<br><br><br>"
?>

<?php
echo "123 restaurant"."<br>"."<br>"."<br>";
echo "Address: 123 District EDE Street 123, EDE Centre 12/F"."<br>"."<br>";
echo "Tel: 21234567"
?>

<form method="post" >
<input type="submit" name="submit1" value="Further Information">  
</form>

<?php
echo "<br>"."<br>"."<br>"
?>

<?php
echo "Yummy Noodles"."<br>"."<br>"."<br>";
echo "Address: OP District AF Street 123, CC Centre 1/F"."<br>"."<br>";
echo "Tel: 64891159"
?>

<form method="post" >
<input type="submit" name="submit2" value="Further Information">  
</form>

<?php
echo "<br>"."<br>"."<br>"


    
?> 

