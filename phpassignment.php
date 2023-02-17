<?php

$str="hello my name is ibad";

echo strtoupper($str);
echo"<br>";
echo strtolower($str);
echo"<br>";
echo ucfirst($str);
echo"<br>";
echo ucwords($str);
echo"<br>";

$num='082307';
$ans=chunk_split($num,2,':');
echo trim($ans,':');
echo"<br>";

$str="The quick black fox jumps over the white dog";
$word='over';
if(strpos($str,$word)!=false){
    echo 'word is found';
}
else{
    echo 'word is not found';
}

// 4).

$num1=25;
$ans=(string)$num1;
var_dump($ans);

// 5).
$str="ak@creation.com";
echo substr($str,-3);


// 6).
$val1=65.45;
$val2=104.35;
$ans=$val1+$val2;
$ans_f=number_format($ans,2);
echo ($ans_f);


// 7).

$sample_string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxy';
$shuffled_string = str_shuffle($sample_string);
$password = substr($shuffled_string, 0, 8);

echo $password;

// 8).

$sample_string = 'the moon is round in shape';
$replacement_string = 'That';
$new_string = str_replace('the', $replacement_string, $sample_string, $count);

echo $new_string;

// 9).


$string1 = "facebook";
$string2 = "faceboll";

$length = min(strlen($string1), strlen($string2));

for ($i = 0; $i < $length; $i++) {
    if ($string1[$i] != $string2[$i]) {
        echo "First difference between two strings at position " . ($i + 1) . ": '" . $string1[$i] . "' vs '" . $string2[$i] . "'";
    }
}

// 10).

$string = "Twinkle, twinkle, little star.\nHow I wonder what you are. Up above the world so high, Like a diamond in the sky.";

$array = explode("\n", $string);

var_dump($array);


?>