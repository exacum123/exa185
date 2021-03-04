<html>

<title>ABC American Fast Food - LRIntro.</title>

<body>
<h1>ABC American Fast Food</h1>
<?php
echo "Address: ABC District ABC Street 123, ABC Centre 1/F"."<br>";
echo "Tel: 91564842"."<br>"."<br>"."<br>";
echo "Opening Hours: "."<br>";
echo "Mon-Fri 10:00-20:30"."<br>";
echo "Sat-Sun 10:00-20:30"."<br>"."<br>";

echo "Introduction: ABC American Fast Food providing a lot of different American Style dishes, "."<br>";
echo "which is suitable for the American food lovers!";

echo "<h4>Most Popular Dishes: </h4>"."<br>"."<br>";
echo "ABC French Fries"."<br>";
echo "ABC Burger"."<br>";
echo "ABC Special Drinks"."<br>";

echo "You may give your ratings for this restaurant here."
?>
</body>
</html>

<!DOCTYPE HTML> 
<html>
<body>
<style>
.error {color: #FF0000;}
</style>

<?php
$ratingErr = "";
$rating = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["rating"])) {
        $ratingErr = "You may want to give rating for the restaurant.";
      } else {
        $rating = test_input($_POST["rating"]);
      }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>

<?php
if(array_key_exists('rating0', $_POST)) { 
    rating0(); 
}
function rating0() { 
        header("Location: rating1.php"); 
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Rating:
  <input type="radio" name="rating" <?php if (isset($rating) && $rating=="Good") echo "checked";?> value="Good">Good
  <input type="radio" name="rating" <?php if (isset($rating) && $rating=="Fair") echo "checked";?> value="Fair">Fair
  <input type="radio" name="rating" <?php if (isset($rating) && $rating=="No comment") echo "checked";?> value="NoComment">No Comment
  <span class="error">* <?php echo $ratingErr;?></span>
  <br><br>
  <input type="submit" name="rating0" value="Submit">   
</form>



</body>
</html>