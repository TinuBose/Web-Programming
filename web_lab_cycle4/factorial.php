<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd_even</title>
</head>
<body>
    <form method="POST">
        enter a  number:
        <input type="number" name="number" id="number">
        <input type="submit" value="submit" name="submit">

</form>
</body>
</html>
<?php
if($_POST){
    $fact=1;
    $number=$_POST['number'];
    for($i=1;$i<=$number;$i++){
        $fact=$fact*$i;
    }
    echo "factorial of $number is $fact" ."<br>";
}
?>