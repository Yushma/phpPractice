<?php
$name= $city=$password= $gender=$education=$maleChecked=$femaleChecked='';
$education= array();

if(isset($_POST['name'])){
    

        $name= $_POST['name'];
        $password= $_POST['password'];
        $city= $_POST['city'];
        $gender= $_POST['gender'];
        $education=$_POST['education'];
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }else{
            $gender = '';
        }
        if($gender == 'Male'){
            $maleChecked ='checked';
        }
        if($gender == 'Female'){
            $femaleChecked ='checked';
        }
       if(isset($_POST['education'])){
           $education = $_POST['education'];
            $eduArr = implode(",",$education);
         }

}

?>

<html>
<head>
    <title>
    </title>
</head>
<body>
    <form action="forms.php" method="post" >
        Name:<input type="text" name="name" value="<?php echo $name;?>"><br><br>
        Password:<input type="password" name="password" value="<?php echo $password;?>"><br><br>
        <?php $arrCity = array("Bangalore","Mumbai","Pune","Delhi");
        ?>
        City:<select name="city">
                    <option>Select City</option>
                    <?php foreach ($arrCity as $list) {
                        $isSelected= '';
                            if($city == $list){
                                $isSelected = "selected";
                            }
                            echo "<option $isSelected>".$list."</option>";
                       }
                       ?>
                    
                    
            </select><br><br>
        Gender:
       Male: <input type="radio" name="gender" value="Male" <?php echo $maleChecked;?>>
       Female: <input type="radio" name="gender" value="Female" <?php echo $femaleChecked;?>><br><br>
       <?php $arrEducation = array("B.E","M.Tech","B.Sc");?>
       Education:
        <?php foreach($arrEducation as $list){
            if(in_array($list,$education)){
                 echo "$list.<input type='checkbox' checked = 'checked' name='education[]' value='$list'>";
        }else{
         echo "$list.<input type='checkbox'  name='education[]' value='$list'>";
        }
    }?>
       <br><br>
       <input type="submit" value="submit">
    </form>
</body>
</html>