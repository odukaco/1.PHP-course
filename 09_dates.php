<?php

// Print current timestamp
//echo time().'<br>';
// Print current date
echo date('d-m-y h:i:s').'<br>';
// Print yesterday
echo date('d-m-y h:i:s',time()-60*60*24).'<br>';
// Different format: https://www.php.net/manual/en/function.date.php
echo date ( 'j F y, h:i:s' ).'<br>';
// String to timestamp
//echo strtotime('+ 1 week').'<br>';
// Parse date: https://www.php.net/manual/en/function.date-parse.php
 $dateString= '21 October 22 12:54:26';
 $parsedDate=date_parse($dateString);
 echo '<pre>';
 var_dump($parsedDate);
 echo '</pre>';
// Parse date from format
// $dateString= '21 October 22 12:54:26';
// $parsedDate=date_parse_from_format('j F y H:i:s',$dateString);
// echo '<pre>';
// var_dump($parsedDate);
// echo '</pre>';


// https://www.php.net/manual/en/function.date-parse-from-format.php
