<?php 
$start = microtime(true);
$con = new PDO("mysql:host=localhost;dbname=php","root","");
$cache_file = "cache/caching.php";
if(file_exists($cache_file) && filemtime($cache_file) > time()-20){
    echo "From Cache<br/>";
    include($cache_file);
}else{
$sql = "Select student.name,student.city,student.game,student.study,student.teacher
from student,city,game,study,teacher,fee where 
student.city=city.id and student.game = game.id and student.study= study.id
and student.teacher = teacher.id and student.id = fee.student_id";
$stmt = $con->prepare($sql);
$stmt->execute();
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

$str ="<table border='1'>";
    $str.="<tr>
    <td>Name</td>
    <td>City</td>
    <td>Game</td>
    <td>Study</td>
    <td>Teacher</td>
    </tr>";

foreach($arr as $list){
    $str.="<tr>
    <td>".$list['name']."</td>
    <td>".$list['city']."</td>
    <td>".$list['game']."</td>
    <td>".$list['study']."</td>
    <td>".$list['teacher']."</td>
    </tr>";
}
$str.="</table>";

$handle = fopen($cache_file,"w");
fwrite($handle,$str);
fclose($handle);
echo "Cache Created<br/>";
echo $str;
}
$end = microtime(true);
echo round($end-$start,4);
?>