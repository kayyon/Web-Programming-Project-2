<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ready?</title>
    <link type="text/css" rel="stylesheet" href="./wordle.css"/>
</head>
<body>
    
    <?php
    // loading and parsing csv file
        function csvToArray($csvFile){
        
            $file_to_read = fopen($csvFile, 'r');
        
            while (!feof($file_to_read) ) {
                $lines[] = fgetcsv($file_to_read, 1000, ',');
        
            }
        
            fclose($file_to_read);
            return $lines;
        }
        
        //read the csv file into an array
        $csvFile = './words(hard).txt';
        $csv = csvToArray($csvFile);
        $words = $csv[0];
        $count = rand(0,20);
        
        //rchosing answer from file
        echo "The word is: " . $words[$count];
        $ans = $words[$count];
    ?>
    <!-- posting the answer word to the game page ([]level.php)-->
    
    <a href="./easylevel.html">
        <div class=readybox>
            <form id="form" action="easylevel.php" method="POST">
                <input type="submit" name="<?php echo $ans ?>" value="Ready?">
            </form>
        </div>
    </a>
    
</body>
</html>