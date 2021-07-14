<!-- Rating Script -->

<?php
try{
$con = new PDO('mysql:host=localhost;dbname=php','root','');
}catch(PDOExcept $e){
    $e->getMessage();
}
if(isset($_POST['rate'])){
$rate = $_POST['rate'];
if(isset($_COOKIE['rate'])){
echo "already voted".$_COOKIE['rate'];
}else{

    setcookie("rate","php",time()+30);
}
}

$sql = "Select * FROM rate";
$stmt = $con->prepare($sql);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";
//print_r($data);
?>

<form action="coockies.php" method="post">

<table>
    <tr>
        <td><input type="submit" name="rate" value="<?php echo $data['0']['options']; ?>">(<?php echo $data['0']['option_value'] ?>)
        </td>

        <td>vs
        </td>
        <td>
        <input type="submit" name="submit" value="<?php echo $data['1']['options']; ?>">(<?php echo $data['1']['option_value'] ?>)
        </td>
    </tr>
</table>
</form>