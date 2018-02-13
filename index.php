<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)
?>

<br>
<br>

<?php
echo "Difference between $date and $tar: ";
if ($date - $tar > 0) {
    echo "the future!";
} elseif ($date - $tar < 0) {
    echo "the past";
} elseif ($date - $tar == 0) {
    echo "oops!";
}

?>
<br>
<br>
<?php

echo "Position of / on variable \$date: ";
$needle = "/";
$lastPos = 0;
$positions = array();

while (($lastPos = strpos($date, $needle, $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen($needle);
}

foreach ($positions as $value) {
    echo $value ." ";
}
?>
<br>
<br>
<?php

echo "How many values in \$date: ";

$arr1 = explode("/", $date);

echo count($arr1)."<br>"."<br>";

echo "How many words in \$date: ".str_word_count($date)."<br>"."<br>";


echo $anyString = "Returning the lenght of this string: ".strlen($anyString)."<br>"."<br>";


echo $anyString = "Returning the ASCII value of the first character of this string: ".ord($anyString)."<br>"."<br>";

echo "The last two characters in \$date: ".substr($date,-2)."<br>"."<br>";

$dateArr=(explode("/", $date));
$x = 0;
echo "\$date separated by spaces: ";
while($x<count($dateArr)){
    echo $dateArr[$x]." ";
    $x++;
}
?>
<br>
<br>
<?php

foreach($year as $value){
    $i=0;
    $val=0;
    while ($i<1){
            if ($value%4==0){
                if($value%100==0){
                    if ($value%100==0){
                        $val= "True ";
                    } else {
                        $val= "False ";
                    }
                } else{
                    $val= "True ";
                }
            }else {
                $val= "False ";
            }
    $i++;
    switch ($val){
    case "True ":
        echo "True ";
    case "False ":
        echo "False ";
    }
    }
}

?>

