<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd_even</title>
</head>
<body>
    <form method="GET">
        enter a  number:
        <input type="number" name="number">
        <input type="submit" value="submit" >

</form>
</body>
</html>
<?php
if($_GET){
    $number=$_GET['number'];
    if(($number%2)==0){
        echo "$number is an even number";
    }else{
        echo "$number is odd";
    }
    
}
?>