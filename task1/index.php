<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 20/01/19
 * Time: 6:04 PM
 */

if (!function_exists('is_binarystring')) {
    function is_binarystring($str)
    {
        # Check if entered string is actually a binary string ( fit for conversion )
        # so, length dividable by 8 and only 1's and 0's.

        if (is_int(strlen($str) / 8)) {
            for ($i = 0; $i < strlen($str); $i++) {
                $char = substr($str, $i, 1);
                if (($char !== chr(48)) && ($char !== chr(49))) {
                    return FALSE;
                }
            }
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('bin2text')) {
    function bin2text($bin)
    {
        # remove the spaces from the given string
        $bin = str_replace(' ', '', $bin);

        if (is_binarystring($bin)) {
            # valid binary string, split, explode and other magic
            # prepare string for conversion
            $chars = explode("\n", chunk_split(str_replace("\n", '', $bin), 8));
            $char_count = count($chars);
            $text = '';
            # converting the characters one by one
            for ($i = 0; $i < $char_count; $text .= chr(bindec($chars[$i])), $i++) ;

            # let's return the result
            return "Question: " . $text;
        } else {
            # not valid binary to text string
            return "Input problems! Are we missing some ones and zeros?";
        }
    }
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Convert Binary To String</title>
        <link href="../css/main.css" rel="stylesheet">
    </head>
    <body>
    <div class="fixed-header">
        <div class="container">
            <nav>
                <a href="../task1/index.php">Task 1</a>
                <a href="../task2/index.php">Task 2</a>
                <a href="../task3/index.php">Task 3</a>
            </nav>
        </div>
    </div>
    <div class="container">
        <h3>Binary to Text conversion</h3>
        <p>
        <form action="?" method="GET">
            Enter Binary Number: <input type="text"  placeholder="Ex. 10101001" name="bin"/>
            <button type="submit">Submit</button>
        </form>
        </p>
    </div>
    <div class="container">
    </div>
    <div class="fixed-footer">
        <div class="container">Made by Anuj Tiwari</div>
    </div>
    </body>
    </html>
<?php

if ($_GET['bin']) {
    $bin = $_GET['bin'];
    echo "<p style=\"background-color:#ddd;padding:5px;\">" . bin2text($bin).'<br> Result: ';
    $name1="Anuj Tiwari";
    for($i=1;$i<=2;$i++) {
        $var = 'name' . $i;
        echo $$var. "</p>";
    }
}

?>