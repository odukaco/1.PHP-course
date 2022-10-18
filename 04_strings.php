<?php

// Create simple string

// String concatenation

// String functions

// Multiline text and line breaks

$longText =  "hello
<b>mello</b>
fello";

echo $longText.'<br>';
echo nl2br($longText).'<br>';

// Multiline text and reserve html tags


echo htmlentities($longText).'<br>';
echo html_entity_decode(htmlentities($longText)).'<br>';
echo htmlspecialchars($longText).'<br>';
// https://www.php.net/manual/en/ref.strings.php
