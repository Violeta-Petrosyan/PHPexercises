<?php
//1
$colors=array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
the ". $colors[2] ." carpet, the " .$colors[1] ." lawn, the ".
$colors[0] ." house, the leaden sky. The new president 
and his first lady. - Richard M. Nixon";

//2
$color = array('white', 'green', 'red');
for($i = 0; $i < 3; $i++){
    echo $color[$i].", ";
}
echo "<ul>";
echo "<li>".$color[1]."</li>";
echo "<li>".$color[2]."</li>";
echo "<li>".$color[0]."</li>";
echo "</ul>";

//3
$ceu = [ "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
    "Austria" => "Vienna", "Poland"=>"Warsaw"] ;
foreach($ceu as $country => $capital){
    echo "The capital of ". $country. " is ". $capital;
    echo "<br>";
}

//4
$x = array(1, 2, 3, 4, 5);
unset($x[3]);
$x = array_values($x);
echo "<pre>";
print_r($x);
echo "</pre>";

//5
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo array_values($color)[0];

//6
$jsonobj='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
        "Publisher": "Little Brown"
}}';
$obj = json_decode($jsonobj, true);
foreach ($obj as $item => $value){
    if(is_array($value)){
        foreach ($value as $value1){
            echo $item.": ".$value1."<br>";
        }
    }
    else{
        echo $item.": ".$value."<br>";
    }
}

//7
$arr=array(1, 2, 3, 4, 5);
array_splice($arr, 3, 1, "$");
echo "<pre>";
print_r($arr);
echo "</pre>";

//8
$arr=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// ascending order sort by value
asort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

//ascending order sort by Key
ksort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

//descending order sorting by Value
arsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

//descending order sorting by Key
krsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

//9
$temps=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$avg = array_sum($temps)/count($temps);
echo $avg;
sort($temps);
$highest = array_splice($temps, -5);
echo "<pre>";
print_r($highest);
echo "</pre>";
rsort($temps);
$lowest = array_splice($temps, -5);
echo "<pre>";
print_r($lowest);
echo "</pre>";

//10
$data=array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
$dataCount = count($data);
for ($i = 1, $max = $data[0]; $i < $dataCount; ++$i)
    if ($data[$i] > $max)
        $max = $data[$i];
$beads = array_fill(0, $max * $dataCount, 0);
for ($i = 0; $i < $dataCount; ++$i)
    for ($j = 0; $j < $data[$i]; ++$j)
        $beads[$i * $max + $j] = 1;
for ($j = 0; $j < $max; ++$j)
{
    for ($sum = $i = 0; $i < $dataCount; ++$i)
    {
        $sum += $beads[$i * $max + $j];
        $beads[$i * $max + $j] = 0;
    }
    for ($i = $dataCount - $sum; $i < $dataCount; ++$i)
        $beads[$i * $max + $j] = 1;
}
for ($i = 0; $i < $dataCount; ++$i)
{
    for ($j = 0; $j < $max && $beads[$i * $max + $j]; ++$j) ;
    $data[$i] = $j;
}
echo "<pre>";
print_r($data);
echo "</pre>";

//11
$array1 = array((array(77, 87)), array(23, 45));
$array2 = array("w3resource", "com");
$result=array();
foreach($array1 as $key => $value) {
    if(is_array($array2[$key])) {
        $result[$key] = array_merge($array2[$key], $array1[$key]);
    }
    else {
        $result[$key] = array_merge([$array2[$key]], $array1[$key]);
    }
}
echo "<pre>";
print_r($result);
echo "</pre>";

//12
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
foreach($Color as $item=>$value){
    echo $item." => ".strtoupper($value)." ";
}
echo "<br>";
foreach($Color as $item=>$value) {
    echo $item . " => " . strtolower($value)." ";
}

//13
$str="Hello World";
//transform a string all uppercase letters.
echo strtoupper($str);
echo "<br>";
//transform a string all lowercase letters.
echo strtolower($str);
echo "<br>";
//make a string's first character uppercase.
echo ucfirst($str);
echo "<br>";
//make a string's first character of all the words uppercase.
echo lcfirst($str);
echo "<br>";

//14
$str1 = "The quick brown fox jumps over the lazy dog.";
$str2 = "brown fox";
if(strpos($str1, $str2) != false)
    echo "String contains the substring.";
else
    echo "String doesn't contain the substring.";

//15
$str = "www.example.com/pubic_html/index.php";
$c = strpos(strrev($str), "/");
$pos = strlen($str)-$c;
echo substr($str, $pos);

//16
$str = "rayy@example.com";
$x = strpos($str, "@");
echo substr($str, 0, $x);

//17
$str = "rayy@example.com";
echo substr($str, -3);

//18
$str1 = "the quick brown fox jumps over the lazy dog.";
echo preg_replace('/the/', 'That', $str1, 1);

//19
$str1 = "football";
$str2 = "footboll";
$len1 = strlen($str1);
$len2 = strlen($str2);
$len = $len1;
if($len2 < $len1)
    $len = $len2;
for($i = 0; $i < $len; $i++){
    if($str1[$i] != $str2[$i]){
        $index = $i;
        break;
    }
    else continue;
}
echo "First difference between strings is in position: ". $i;

//20
$str='2,543.12';
echo str_replace(",", "", $str);
