<?php
$string = "This is a String";

echo $string . "<br>";

echo strlen($string) . "<br>";
echo str_word_count($string);
echo "<br>";
echo strrev($string);
echo "<br>";
echo strpos($string, "This");
echo "<br>";
echo str_replace("This","It",$string);

    echo "<br>";
    echo str_repeat($string,2);
    echo "<br>";
    echo str_shuffle($string);
    echo "<br>";
    echo str_pad($string,5,"-",STR_PAD_BOTH);
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    echo strtolower($string);
    echo "<br>";
    echo ucfirst($string);
    echo "<br>";
    echo lcfirst($string);
    echo "<br>";
    echo ucwords($string);
    echo "<br>";
    echo strpbrk($string,"It");
    echo "<br>";
?>