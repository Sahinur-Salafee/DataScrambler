<?php


// if want to read data from file

// call the file name with correct directory
$filename = 'E:\wamp\www\mastering-php\DataScrambler\FILE\data\f1.txt';

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