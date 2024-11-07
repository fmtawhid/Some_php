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

class phone{
    var $phone;
    function phoneModel($model){
        global $phone;
        $phone = $model;
        echo "This is $model here <br>";
    }
}
$apple = new phone;
$apple->phoneModel("apple 17 pro");

$samsang = new phone;
$samsang->phoneModel('samsang S20 altra ');


define('need', ['Cars','House','samsang','sams']);
echo (need[0]);


echo '<h1>This is Switch case</h1>';
$x = 'red';

switch( $x ) {
    case 'hello':
        echo'Hello World';
        break;
    case 'world':
        echo 'World is awesome';
        break;
    case 'hi':
        echo 'Hi there';
        break;
    default:
        echo 'Not Found';
}

?>
