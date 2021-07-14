<?php
$error = '';
if(isset($_POST['name'])){
   echo  $name = $_POST['name'];
    
    if($name='' ){
        $error .= "Please Enter Name";
    }
    if(strlen($name)<2){
        $error .= "Enter your full name";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #error{
        color:red;
    }
    </style>
</head>
<body>
<span id = "error"><?php echo $error;?></span>
    <form action="form_submission.php" method="post">
    <label for name>
    <input type="text" name="name" value="">
    <input type="submit" value="submit">
    </form>
</body>
</html>

<?php


?>