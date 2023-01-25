<?php


// if want to read data from file

// call the file name with correct directory
$filename = 'E:\wamp\www\mastering-php\DataScrambler\FILE\data\f1.txt';

// Check that the file is exists and also readable.

if(is_readable($filename)) {

    // Open the file first
    $fp = fopen($filename, 'r');

    // Read the line 
    // $line = fgets($fp);
    // echo $line;

    // To read all the data
    while($line = fgets($fp)) {
        echo $line;
    }
    // To close the file
    fclose($fp);

    echo '<br>';

    // Read data like array using file() function
    $data = file($filename);
    var_dump($data);
    echo $data[3];
    echo '<br>';    

    // Read data using file get contents function
    $data = file_get_contents($filename);
    echo $data;
}



/* Data write and append in the file */

$filepath = 'E:\\wamp\\www\\mastering-php\\DataScrambler\\FILE\\data\\f2.txt';

// Open the file first

if(is_writable($filepath)) {
    $file = fopen($filepath, 'a');
    $text = "sahinur salafee\n";
    $text2 = "I am a wordpress developer\n";
    $text = "My name is john\n";
    
    
    // fwrite($file, $text);
    // fwrite($file, $text2);
    fclose($file);

    $text = "My name is kajy\n";
    // file_put_contents($filepath, $text, FILE_APPEND | LOCK_EX);
}

