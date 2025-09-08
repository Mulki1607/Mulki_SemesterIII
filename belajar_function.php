<?php
//call function
function mymesage(){
    echo "Hello World!<br><br>";
}
mymesage();

//function argument
function familyname($fname){
    echo "$fname Refsnes.<br>";
}
familyname("Jani");
familyname("Hege");
familyname("Stale");
familyname("Kai Jim");
familyname("Borge");
echo"<br>";

//function default value
function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
echo "<br>";

//funtion returning value
function sum($x, $y){
    $z = $x + $y; 
    return $z;
}
echo "5 + 10 = " . sum(5, 10)."<br>";
echo "7 + 13 = " . sum(7, 13)."<br>";
echo "2 + 4 = " . sum(2, 4)."<br>";
echo "<br>";

//passing argument by refernce
function addfive(&$value){
    $value += 5;
}
$num = 2;
addfive($num);
echo $num;
echo "<br><br>";

//variable number of argument
function sumMynumbers(...$x){
    $n = 0;
    $len = count($x);
    for($i = 0; $i <$len; $i++){
        $n += $x[$i];
    }
    return $n;
}
$a = sumMynumbers(5, 2, 6, 2, 7, 7);
echo $a;
echo "<br><br>";


?>