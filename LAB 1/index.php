<?php
echo "hello world
world !!
";

echo "<br>";
for ($i = 0; $i <= 10; $i++) {
    if ($i==6)
    //     break;
    continue;

    
    echo "the value of i is = " .$i ."<br>"; 
}
$b=6;
if ($b==7) 
    echo "hello world
world !!
";

echo "hello worldworld !!";

if($b)
    echo "the value of b is ".$b;

// declaration of  mulitiple varable 
$b=78;
print "the value of b is ".$b;

$c= 10;
print"the value of c is $c";
echo "<br>";

print"this output of print";
echo "<br>";
echo ($c >=10 )?"the vcalue of c is correct":"wrong";
echo "<br>";
echo "<br>";
echo "<br>";echo "<br>";echo "<br>";
// switch 

$n=890;
switch($n){
    case 80:echo"the value of n is not 80 ";
    break;
    case 86:echo"the value of n is not 86 ";
    break;
    case 89:echo"the value of n is  corecct ";
    break;
    default :echo" the value of n is out of the domain  ";
}echo "<br>";

echo --$n;
echo "<br>";
echo $n--;

echo "<br>";echo "<br>";
// array
$gr=array("A","B","C","D");
foreach($gr as $f){
    echo $f;
    echo "<br>";
}
echo "<br>";
 do{
    $i=0;
    echo $i;echo "<br>";
    $i++;

 }while($i <=9);
?>