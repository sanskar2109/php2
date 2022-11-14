<?php
$var="sanskar singhal";
echo addcslashes("hello class","s");
echo "<br>";
echo addslashes("who's sanskar singhal");
echo "<br>";
echo bin2hex("hello");
echo "<br>";
echo chop("Hello world","d");
echo "<br>";
echo chop("hello brillant student","tsuend ");
echo "<br>";
echo chr(97);
echo "<br>";
echo ord("a");
echo "<br>";
echo chunk_split("hello world this is sanskar",3);
echo "<br>";
echo convert_cyr_string("Hello world","e","o");
echo "<br>";
echo 'ascii value ';
print_r(count_chars("our teacher is brilliant",1));
echo "<br>";


echo crc32("hello world");

echo "<br>";

echo crypt("hello", "world");
echo "<br>";
print_r (explode("1","world"));
echo "<br>";
echo html_entity_decode("&lt");
echo "<br>";
echo "trashar";
echo htmlspecialchars(" Hello wo&lt;b;&gtr&lt;b;&ltld  ");
echo "<br>";
echo convert_uuencode("hello world");
echo "<br>";
echo convert_uudecode("copy above output");
echo "<br>";
$val=convert_uuencode("sanskar");
echo "<br>";
echo convert_uudecode($val);
echo "<br>";
echo lcfirst("Hello world");
echo "<br>";

echo ucfirst("hello world");
echo "<br>";

echo ucwords("hello world");
echo "<br>";
echo strrev("hello world");
echo "<br>";
echo ltrim("hello world","h");
echo "<br>";
echo rtrim("hello world","w");
echo "<br>";
echo trim("hello world","h");
echo "<br>";
echo strpos("hello", "o");
echo "<br>";

echo str_replace("e","a","hello");
echo "<br>";
echo strcmp("hello","hello");
echo "<br>";
echo "trashar";
echo strcasecmp("Hello","hello");
echo "<br>";
echo stripos("hello","o");
echo "<br>";
?>