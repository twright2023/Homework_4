<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Homework 4: Personality Quiz</title>
    </head>
    <body>
    <?php
        $bread = $_POST['bread'] ?? null;
        $toast = $_POST['toast'] ?? null;
        $nutbut = $_POST['nutbut'] ?? null;
        $jam = $_POST['jam'] ?? null;
        $sweet = $_POST['sweet'] ?? null;
        $sav = $_POST['sav'] ?? null;
        $cut = $_POST['cut'] ?? null;
        $side = $_POST['side'] ?? null;
        if (!$bread || !$toast || !$nutbut || !$jam || !$sweet || !$sav || !$cut || !$side) {
            echo "<h2>Error: Please answer all questions.</h2>";
            echo "<a class='btn btn-primary' href='Homework_4.php' role='button'>Return to Quiz</a>";
            exit;
        }
        // Category scoring
        $EternalYouth = [
            "5-10 Years Old" => 0,
            "11-20 Years Old" => 0,
            "21-30 Years Old" => 0,
            "31-40 Years Old" => 0,
            "41-50 Years Old" => 0,
            "50+ Years Old" => 0
        ];
        // Assign points to categories
        switch ($bread) {
            case "white": $EternalYouth["5-10 Years Old"] += 3; break;
            case "brioche": $EternalYouth["11-20 Years Old"] += 3; break;
            case "croissant": $EternalYouth["21-30 Years Old"] += 3; break;
            case "sd": $EternalYouth["31-40 Years Old"] += 3; break;
            case "ciabatta": $EternalYouth["41-50 Years Old"] += 3; break;
            case "wheat": $EternalYouth["50+ Years Old"] += 3; break;
        }
        switch ($toast) {
            case "1": $EternalYouth["5-10 Years Old"] += 2; break;
            case "1": $EternalYouth["11-20 Years Old"] += 2; break;
            case "2": $EternalYouth["21-30 Years Old"] += 2; break;
            case "3": $EternalYouth["31-40 Years Old"] += 2; break;
            case "3": $EternalYouth["41-50 Years Old"] += 2; break;
            case "4": $EternalYouth["50+ Years Old"] += 2; break;
        }
        switch ($nutbut) {
            case "hazel": $EternalYouth["5-10 Years Old"] += 3; break;
            case "penut": $EternalYouth["11-20 Years Old"] += 3; break;
            case "penut": $EternalYouth["21-30 Years Old"] += 3; break;
            case "penut": $EternalYouth["31-40 Years Old"] += 3; break;
            case "cashew": $EternalYouth["41-50 Years Old"] += 3; break;
            case "almond": $EternalYouth["50+ Years Old"] += 3; break;
        }
        switch ($jam) {
            case "straw": $EternalYouth["5-10 Years Old"] += 2; break;
            case "grape": $EternalYouth["11-20 Years Old"] += 2; break;
            case "blue": $EternalYouth["21-30 Years Old"] += 2; break;
            case "rasp": $EternalYouth["31-40 Years Old"] += 2; break;
            case "pine": $EternalYouth["41-50 Years Old"] += 2; break;
            case "orange": $EternalYouth["50+ Years Old"] += 2; break;
        }
        switch ($sweet) {
            case "fluff": $EternalYouth["5-10 Years Old"] += 4; break;
            case "fluff": $EternalYouth["11-20 Years Old"] += 4; break;
            case "hon": $EternalYouth["21-30 Years Old"] += 4; break;
            case "hon": $EternalYouth["31-40 Years Old"] += 4; break;
            case "cc": $EternalYouth["41-50 Years Old"] += 4; break;
            case "no1": $EternalYouth["50+ Years Old"] += 4; break;
        }
        switch ($sav) {
            case "chips": $EternalYouth["5-10 Years Old"] += 4; break;
            case "bacon": $EternalYouth["11-20 Years Old"] += 4; break;
            case "pickles": $EternalYouth["21-30 Years Old"] += 4; break;
            case "bacon": $EternalYouth["31-40 Years Old"] += 4; break;
            case "no2": $EternalYouth["41-50 Years Old"] += 4; break;
            case "no2": $EternalYouth["50+ Years Old"] += 4; break;
        }
        switch ($cut) {
            case "weirder": $EternalYouth["5-10 Years Old"] += 2; break;
            case "proper": $EternalYouth["11-20 Years Old"] += 2; break;
            case "weird": $EternalYouth["21-30 Years Old"] += 2; break;
            case "proper": $EternalYouth["31-40 Years Old"] += 2; break;
            case "proper": $EternalYouth["41-50 Years Old"] += 2; break;
            case "quick": $EternalYouth["50+ Years Old"] += 2; break;
        }
        switch ($side) {
            case "pchips": $EternalYouth["5-10 Years Old"] += 3; break;
            case "fs": $EternalYouth["11-20 Years Old"] += 3; break;
            case "vc": $EternalYouth["21-30 Years Old"] += 3; break;
            case "vc": $EternalYouth["31-40 Years Old"] += 3; break;
            case "c&c": $EternalYouth["41-50 Years Old"] += 3; break;
            case "c&c": $EternalYouth["50+ Years Old"] += 3; break;
        }
        // Determine the highest-scoring category
        arsort($EternalYouth);
        $internalage = array_key_first($EternalYouth);
        echo "<h2>Your internal age is ";
        if ($internalage == "5-10 Years Old") {
            echo "5-10 Years Old</h2>";
            echo "<p>You are a child at heart who loves to have fun! You're all about doing fun things and making sure others feel included whenever possible!</p>";
        } elseif ($internalage == "11-20 Years Old") {
            echo "11-20 Years Old</h2>";
            echo "<p>You can be optimistic at times, but you have a unique personality! You still feel like you're figuring yourself out!</p>";
        } elseif ($internalage == "21-30 Years Old") {
            echo "21-30 Years Old</h2>";
            echo "<p>You're in your prime, making responsible but fun choices. You enjoy a good balance of classic and adventurous tastes.</p>";
        } elseif ($internalage == "31-40 Years Old") {
            echo "31-40 Years Old</h2>";
            echo "<p>You are responsible, but you also have a funny side! You like to hang out and socialize with friends often, but you're always in bed by 10 p.m.!</p>";
        } elseif ($internalage == "41-50 Years Old") {
            echo "41-50 Years Old</h2>";
            echo "<p>You're a refined adult at heart! You enjoy sophistication and a good twist on the classics.</p>";
        } elseif ($internalage == "50+ Years Old") {
            echo "50+ Years Old</h2>";
            echo "<p>You are wise beyond your years, and you enjoy the little things in life! You've definitely been called an old soul before!</p>";
        } else {
            echo "Something went wrong! Please try again.</h2>";
        }
    ?>
    <div class="topnav">
        <a class="btn btn-primary" href="Homework_4.php" role="button">Try Again?</a>
    </div>
    </body>
</html>
