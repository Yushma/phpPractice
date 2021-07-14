<?php

include 'db.php';
include 'display_records.php';
$error = '';
//phpinfo();
if(isset($_POST['submit'])){
    global $con;
    $userName = mysqli_real_escape_string($con,$_POST['user_name']);
    $user_password = mysqli_real_escape_string($con,$_POST['password']);
    $hasFormate = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hasFormate.$salt;
    $user_password = crypt($user_password,$hashF_and_salt);
    //validation
   
    if($userName == ''){
        $error .= "Enter User Name \n";
    }
    if($user_password == ''){
        $error .= "Enter Password";
    }

   
   $sql = "INSERT INTO user (user_name,password) VALUES ('".$userName."','".$user_password."')";
   echo $success = mysqli_query($con,$sql);
   if($success){
        echo "Record inserted";
   }

  


}

$res =  display_records();
$rows = mysqli_fetch_array($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Document</title>
    <style>
    .error{
        color:red;
    }
    </style>
</head>
<body>
<form action="forminsertdisplay.php" method="post">
<span class="error"><?php echo $error;?></span>
    <label for user_name> User Name:
        <input type="text" name="user_name" value="" placeholder="Enter User Name">
        <label for user_name>Password:
        <input type="password" name="password" value="" placeholder="Enter Password">
        <input type="submit" name="submit" value="submit">
    </form>
<table>
<tr>
<th>User Name
</th>
<th>Password
</th>
</tr>

<?php foreach($rows as $row ){?>
<tr>
<td>
<?php echo $row;?>
</td>
<td>
<?php echo $row;?>
</td>

</tr>
<?php } ?>
</table>
</body>
</html>