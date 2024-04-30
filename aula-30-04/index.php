<?php
echo "exemplo-01<br>";

$var=array(2,5,7,9,11);
echo "$var[0]<br>";
echo "$var[1]<br>";
echo "$var[2]<br>";
echo "$var[3]<br>";
echo "$var[4]<br>";

echo "exemplo-02<br>";

$var1=array("antonio","lipe", "tunega");
echo "$var1[0]<br>";
echo "$var1[1]<br>";
echo "$var1[2]<br>";

echo "exemplo-03<br>";

$var2=array("windosws",10,2024, "v1.2021");
echo "$var2[0]<br>";
echo "$var2[1]<br>";
echo "$var2[2]<br>";
 
echo "exemplo-04<br>";

$var3=array("italo"=>30,"hubert"=>20,"luna"=>18);
echo "$var3[italo]<br>";
echo "$var3[hubert]<br>";
echo "$var3[luna]<br>";

echo "exemplo-05<br>";

$num4=array(2=>7,3=>8,9=>5);
$num4[1]=4;
echo "$num4[1]<br>";
echo "$num4[2]<br>";
echo "$num4[3]<br>";
$num4[8]=40;
echo "$num4[8]<br>";
echo "$num4[9]<br>";

echo "exemplo-06/função count <br>";

$num=array("x",3,1,4,5,6,7,"hubert");
$qnt=count($num);
echo "a resposta é $qnt"





?>