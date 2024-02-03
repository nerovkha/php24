<?php
echo "Hello,Rafsan!1 <br>" ;

?>



<?php 
$date = date("D");
if($date =="Sat" or $date=="Sun"){

echo "<br> Today is  $date,it is weekend";

}

else {

echo "Today is $date, it is working day";

}
echo "<hr> <h1>Switch statement example</h1>";
$num = 5;
switch ($num){
case 5 :
    echo "This is 5";

    break;

    case 6: 
        echo "this is 6";

break;
     case 7 :
        echo "this is 7";
        
        break;

        default:
        echo "this is neighter 5 , nor  nor 7";


}

echo "<hr> <h1> While Loop</h1>";
$a=1;
while ($a <=10){
echo "The number is $a <br>";
$a++;

}


echo "<hr> <h1>Do while Loop</h1>";

$b=1;

do {
echo " <br> The number is $b";
$b++;
}

while($b<5);
echo "<hr> <h1> For loop</h1>";

for($c=5 ; $c<=10; $c++){
echo  "<br> $c";


}

echo "<br> <h1>For each loop</h1>";


$x =array("Good" , "Very Good", "Excellent");

foreach ($x as $value){
    echo $value . "<br>";
}

echo "<br> <h1>Looping through in arrays</h1>";

$course =array("Database", "PHP", "HTML5");
//retreive value;

echo "<br>" . $course[1];

$num = count($course);
echo "$num";
for($i=0; $i<$num; $i++){
echo " <br> $i+1: $course[$i] <br>";

}

//associative arrays

$course1=array("C1" => "Database" , "C2" =>"HTML");
echo "<hr>". $course1['C1'] " <br> . $course1['C2']";

//looping through assicate arrays

foreach ($course1 as $x => $x_value){

    echo "The course is $x and the name is $x_value";  


}





?>