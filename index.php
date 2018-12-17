<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne
echo (10 * 5)."<br>";

//Deuxieme ligne
echo 10 / 2;
echo "<br>";
//Troisieme ligne

$a = 5;
$b = 5;

if($a == $b)
{
    echo "<br><br>a est identique à b";
}

//Quatrieme ligne

$a = 5;
$b = 7;

if($a <> $b)
{
    echo"<br><br>a n'est pas identique à b";
}


//Cinquieme ligne

$arr1 = ["machin", "truc"];
$arr2 = ["truc", "machin"];

if($arr1 == $arr2)
{
    echo "<br><br>les tableaux ont le même contenu";
}

