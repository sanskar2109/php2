<?php
//transform a string all uppercase letters.
print(strtoupper("gla university"));
echo "<br>";
//transform a string all lowercase letters.
print(strtolower("GLA UNIVERSITY"));
echo "<br>";
// make a string's first character uppercase.
print(ucfirst("gla university"));
echo "<br>";
// make a string's first character of all the words uppercase
print(ucwords("gla university"));
echo "<br>";
echo "<br>";
// Write a PHP script to split the following string.
$str1= '082307';
echo substr(chunk_split($str1, 2, ':'), 0, -1);

// Write a PHP script to check whether a string contains a specific string?
echo "<br>";
echo "<br>";

$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'over') !== false)
{
    echo 'The specific word is present.';
}
else
{
    echo 'The specific word is not present.';
}

// Write a PHP script to convert the value of a PHP variable to string.
echo "<br>";
echo "<br>";

$var_name = 32.360;
echo strval($var_name);
echo "<br>";
echo "<br>";

//Write a PHP script to get the last three characters of a string.
$str1 = 'rayy@example.com';
echo substr($str1, -3) ;
echo "<br>";
echo "<br>";


//Write a PHP script to format values in currency style.
$value1 = 65.45;
$value2 = 104.35;
echo sprintf("%1.2f", $value1 + $value2) ;

echo "<br>";
echo "<br>";
//Write a PHP script to generate simple random password from a given string.

function password_generate($chars)
{$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data), 0, $chars);
}
echo password_generate(7) ;
echo "<br>";
echo "<br>";

//Write a PHP script to replace the first of the following string.

$str = 'The moon is round in shape';
echo preg_replace('/The/', 'That', $str, 1) ;

echo "<br>";
echo "<br>";
//Write a PHP script to find the first character that is different between two strings.
$str1 = 'facebook';
$str2 = 'faceboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos, $str1[$str_pos], $str2[$str_pos]);
echo "<br>";
echo "<br>";
//Write a PHP script to put a string in an array.
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$str5 = explode("<br>", $str);
print_r($str5);
?>