<?php 
// https://www.php.net/manual/en/book.filesystem.php
// MAGIC CONSTANTS
echo __DIR__ . "</br>";
echo __FILE__ . "</br>";

// CREATE DIRECOTRY
// if (!is_dir('test')){
//   echo "such folder does not exist";
//   mkdir('test');
// } elseif (is_dir('test')) {
//   echo "such folder exist" ;
// }

// mkdir('test');

// RENAME DIRECTORY
// rename('basic_test', 'test');


// DELETE DIRECOTRY
// rmdir('test');

// READ FILES AND FOLDERS INSIDE DIRECOTRY
// $files = scandir('./');
// echo "<pre>";
// echo print_r($files);
// echo "</pre>";

// Array
// (
//     [0] => . // current folder
//     [1] => ..// parent folder
//     [2] => index.php
//     [3] => lorem.txt
//     [4] => test
// )

// fil_get_contents, file_put_contents
// $loremContent = file_get_contents('lorem.txt'); // output file content
// echo file_put_contents('test1',"Hello World"); // creates new file with new content
// file_put_contents('lorem.txt', 'My New text' . PHP_EOL . $loremContent); // with every browsers refresh new content will be added again

// file_exists
// is_dir
// filemtime // retun thatn the file was last time modified
// filesize
// disk_free_space
// file

