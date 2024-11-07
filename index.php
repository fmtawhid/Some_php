<?php 

$x = 0;
$y = 200;
$z = $x+$y;

echo" <h1>If Else Programe</h1>";
if ($x > $y) {
    echo "Big result is = $x";
}
else if ($y > $z) {
    echo "Big result is = $y";
}
else{
    echo "Big result is = $z ";
}

echo "<h1>For Loop </h1>";

for ($x; $x<=10; $x++){
    if($x == 5)break;
    echo "Line number = $x <br>";
}
?>
