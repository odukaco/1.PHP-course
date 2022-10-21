<?php
/**
 * User: TheCodeholic
 * Date: 2/8/2020
 * Time: 9:49 AM
 */



// echo '<pre>';
//  var_dump($_GET);
// echo '</pre>';
if(isset($_GET['keyword']))
{
  $keyword = $_GET['keyword'];
  echo $keyword.'<br>';
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="" method="get">
  <input type="text" name="keyword" value="<?php echo isset($keyword)? $keyword:'' ?>"
         placeholder="Type and hit enter">
  <button>Search</button>
</form>
</body>
</html>
