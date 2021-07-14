<?php
$i = 5;
if($i<5){
    echo "Less than 5";

}elseif($i>5){
    echo "Greater than 5";
}else{
    echo "I Love PHP <br>";
}


for($counter = 1;$counter<11 ;$counter++){
    echo $counter."<br>";
}

switch(25){
    case 35:
        echo "This is 35";
        break;
        case 45:
            echo "This is 45";
            break;
            case 55:
                echo "This is 55";
                break;
                case 25:
                    echo "This is 25";
                    break;
                    case 15:
                        echo "This is 15";
                        break;
                        default:
                        echo "This is default block";
                        break;
}
?>