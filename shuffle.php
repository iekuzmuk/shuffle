
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
	$tmp_array = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
    	$tmp_array = explode(" ", $name);

        shuffle($tmp_array);
        for ($y=1;$y<=count($tmp_array);$y++){
        	echo "$y: ". $tmp_array[$y-1] . "<br>";
        }
    }
}
?>

</body>
</html>