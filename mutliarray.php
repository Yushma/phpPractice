<?php

$arrIndex = array('Yushma','Ramya','Sowmya','Radhya');
echo "Indexed Array";
//echo "<pre>";
//print_r($arrIndex);

$arrAssociate = array('name'=>'Yushma','age'=>33,'city'=>'Bangalore');
//echo "Associative Array";
//echo "<pre>";
//print_r($arrAssociate);

$arrmulti = array(
                    array('S.No','Name','City'),
                    array('1','Tushar','bangalore'),
                    array('2','Hanuman','Mangalore'),
);
echo "<pre>";
print_r($arrmulti);
?>

<table border="1" cellspacing="5" cellpadding="4">
    <?php 
    foreach($arrmulti as $arrmList){
        echo '<tr>';
        foreach($arrmList as $list){
           echo '<td>'.$list.'</td>';
            //echo "<br>";

        }
        echo '</tr>';
    }
    
    ?>
</table>