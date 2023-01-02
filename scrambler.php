<?php
$mode = 'encode';
$key = 'abcdefghijklmnopqstuvwxyz1234567890';
if('key' == $mode) {
    $key_original = str_split($key);
    shuffle($key_original);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Scrambler Project</title>

    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Data Scrambler</h2>
            <p>Use this application to scramble your data</p>
            <p>
                <a href="/scrambler.php?task=encode">Encode</a> |
                <a href="/scrambler.php?task=decode">Decode</a> |
                <a href="/scrambler.php?task=key">Generate Key</a>

            </p>
        </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="POST">
                    <label for="key">Key</label>
                    <input type="text" name="key" id="key">

                    <label for="data">Data</label>
                    <textarea name="data" id="data"></textarea>

                    <label for="result">Result</label>
                    <textarea id="result"></textarea>

                    <button type='submit'>Do It For Me</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>