<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <p><?php 
    for($i = 1; $i < 101; $i++) {
        if($i % 3 == 0 && $i % 5 == 0) {
            echo "<div class='boozdyellow'>" . $i . " - " . "boozd</div>";
        }
        else if($i % 3 == 0) {
            echo "<div class='boozdblue'>" . $i . " - " . "boozd</div>";
        }
        else if($i % 5 == 0) {
            echo "<div class='boozdgreen'>" . $i . " - " . "boozd</div>";
        }
        else {
            echo "<div>" . $i . " - " . "boozd</div>";
        }
    }
    
    
    ?></p>
</body>
</html>