<?php




$file1 = "welcome1.txt";

if (!file_exists($file1)) {
    die("the file welcome1.txt does not exist.");

}
$file=fopen("welcome1.txt","r");
   $filesize = filesize("welcome1.txt");
$readfile=fread($file , $filesize);
while(!feof($file($file);
}


fclose($file); 
 echo("the file is opend ".$readfile);
?>