<?php
    if(isset($_POST['submit'])){
        $text = trim($_POST['text']) ;

        $con = mysqli_connect('localhost', 'root', '', 'article');
        $sql = "INSERT INTO `two`(`id`, `text`) VALUES (null, '$text')";
        if(mysqli_query($con, $sql)){
            echo "data submitted successfully";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <textarea name="text" id="" cols="30" rows="10">Example text</textarea>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>