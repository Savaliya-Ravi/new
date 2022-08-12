<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href="/phpt/india.php">india</a>
    <a href="/phpt/fortut.php">this</a>
</head>
<style>
    a{
        text-decoration : none;
        color : purple;
    }
</style>
<body>
    
</body>
</html>

<?php
$name = 'ravi Savaliya';
$hey = "Ohh my god  ";
echo strpos($name , 'i');
echo $name."<br>";
echo $name;
echo $hey;

function prin($x){
    global $a1;
    $a1=6;
    echo "value of x is $x $a1 ";
}
$a1 = 45.7;
prin(5);
echo $a1."<br>";
echo $GLOBALS["a1"];
$a2 =45;
 function sumation($arr){$sum = 0;
    foreach ($arr as  $value) {
        $sum += $value;
        
    }return $sum;
}
$a2=3;
$d = date("l dS F Y, g:i ");
echo "<br>";
echo $d;
echo "<br>";

echo$a2."<br>";
echo$a2."<br>";
echo "<br>";
echo var_dump($a2);
echo "<br>";
echo var_dump($a1);
echo "<br>";
$arr = [32,23, 45, 677, 89];
$total = sumation($arr);
$arr2 = [1,1,1,1,1,1,1,1,1,1];
echo "<br>";

echo "<br>";
echo sumation($arr2);

echo "<br>";

echo "$total <br>";


echo var_dump($arr);
echo "<br>";
echo $arr[0];

echo $arr[2];
echo "<br>";
echo $arr[3];
echo "<br>";
echo $arr[4];

echo $arr[1];
$x = true;

$y= false;
echo "<br>";
echo var_dump($y);

echo var_dump($x);  

if ($arr[1]==$arr[2]){
echo "<br>";
echo 'same he bhai';

}
elseif($arr[1]>4){
    echo 'ye  bhi  thik  he';

echo "<br>";
} else{
echo 'same nai he bhai';}

switch($arr[0]){
    case $arr[0]:
        echo 'my name is ravi <br>';
        break;
    default:
    echo 'over';
    }
while($arr[1]<33){
    echo 45+4;
// echo "<br>"; 
$arr[1]++;
}
foreach ($arr as  $value) {
    echo "$value<br>" ;
    
}
$MA = array(array(4,5,6),array(5,4,3),array(4,8,5));
for($i = 0;$i<3;$i++){
    for($y=0;$y<3;$y++){
echo $MA[$i][$y];
echo " "; 
    }
echo "<br>";
}
$threeDim = array(
    array(
        array('Sadal Aam', 'Pakal Amm', 'Kothiya Aam', 'Sinduriya Aam'),
        array('Pakal kohanda', 'Kach kohanda', 'Gol kohanda', 'Pichakal kohanda'),
    ),
    array(
        array('Sadal angur', 'Bandhiya angur', 'Niman angur', 'Kharab angur'),
        array('Lamhar lauki', 'Chot lauki', 'Golki laudi', 'Jabar wala lauki'),
    ),
    array(
        array('Apple', 'Lal Apple', 'Kasatal Apple', 'Kanch Apple'),
        array('Safedka nenuaa', 'Karika nenuaa', 'Taja nenuaa', 'Basiya nenuaa'),
    ),
);

foreach($threeDim as $value){
    foreach($value as $value2){
        foreach($value2 as $value3){

            echo " | $value3";
        }
        echo "<br>";
    }
    echo "<br>";
} 


// $i =5;

for($i=0;$i<5;$i++){
    echo " $i is increasing";
}
 echo "chatbot , music recommandation app , stock prediction , social media suggestions , lane line detaction , medical diagnosis , AI health engine , ";
 do{
    echo "hey bro $i";
    $i++;
 }while ($i<=9);




 
?>
