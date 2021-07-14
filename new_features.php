<?php
echo "hi";
//echo $_GET['occupation'];
//$occupation = isset($_GET['occupation']) ? echo $_GET['occupation'] : 'bricklayer';
class NameRegister {
    private $name = "Prosper";
}

// Closure
$getName = function() {
    return $this->name;
};

$getTheName = $getName->bindTo(new NameRegister, 'NameRegister');
echo $getTheName();
?>