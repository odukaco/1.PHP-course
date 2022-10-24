<?php
// Magic constants

echo __DIR__.'<br>';
echo __FILE__.'<br>';
// Create directory

//mkdir('test');

// Rename directory

//rename('test','my_folder');

// Delete directory

//rmdir('test');

// Read files and folders inside directory

$content = file_get_contents('lorem.txt');

file_put_contents('test.txt', 'My text'. PHP_EOL . $content);

// $files= scandir('./');
// echo '<pre>';
//  var_dump($files);
//  echo '</pre>';

// file_get_contents, file_put_contents

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file

