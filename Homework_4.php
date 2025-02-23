<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Homework 4: Personality Quiz</title>
    </head>
    <body>
        <h1>Make A Peanut Butter And Jelly Sandwich To Reveal How Old You Are At Heart</h1>
        <h2>(Inspired by a cute buzzfeed quiz I found today.)</h2>
        <form action="Homework_4_results.php" method="post">
            <div>
            <div class="topnav">
                Link to original quiz:
                <a class="btn btn-primary" href="https://www.buzzfeed.com/aquaneptune/peanut-butter-jelly-sandwich-mental-age-quiz" role="button">A much better quiz</a>
            </div>
            </div>
        <p>1. Pick a type of bread</p>
        <input type='radio' name='bread' value='white' required>White<br>
        <input type='radio' name='bread' value='brioche'>Brioche<br>
        <input type='radio' name='bread' value='croissant'>Croissant<br>
        <input type='radio' name='bread' value='sd'>Sourdough<br>
        <input type='radio' name='bread' value='ciabatta'>Ciabatta<br>
        <input type='radio' name='bread' value='wheat'>Wheat (Rye, they all look the same.)<br>

        <p>2. How would you like your bread?</p>
        <input type='radio' name='toast' value='0' required>Not at all<br>
        <input type='radio' name='toast' value='1'>Slighty toasted<br>
        <input type='radio' name='toast' value='2'>Golden brown<br>
        <input type='radio' name='toast' value='3'>Well done like a stake<br>
        

        <p>3. What type of nut butter?</p>
        <input type='radio' name='nutbut' value='penut' required>Penut<br> 
        <input type='radio' name='nutbut' value='almond'>Almond (Rye, they all look the same.)<br>
        <input type='radio' name='nutbut' value='hazel'>Hazelnut<br>
        <input type='radio' name='nutbut' value='cashew'>Cashew<br>

        <p>4. What type of fruit spread?</p>
        <input type='radio' name='jam' value='straw' required>Strawberry jelly<br>
        <input type='radio' name='jam' value='orange'>Orange marmalade<br>
        <input type='radio' name='jam' value='blue'>Blueberry jelly<br>
        <input type='radio' name='jam' value='grape'>Grape jelly<br>
        <input type='radio' name='jam' value='rasp'>Raspberry jelly<br>
        <input type='radio' name='jam' value='pine'>Pineapple jelly<br>

        <p>5. Adding something sweet?</p>
        <input type='radio' name='sweet' value='fluff' required>Marshmallow fluff<br> 
        <input type='radio' name='sweet' value='cc'>cheese<br>
        <input type='radio' name='sweet' value='hon'><br>
        <input type='radio' name='sweet' value='Nah'><br>

        <p>6. What about savory?</p>
        <input type='radio' name='sav' value='bacon' required>Bacon<br> 
        <input type='radio' name='sav' value='pickles'>Pickles<br>
        <input type='radio' name='sav' value='chips'>Potato chips<br>
        <input type='radio' name='sav' value='no2'>Nuh Uh<br>

        <p>7. How are you cutting it?</p>
        <input type='radio' name='cut' value='weird' required>Straight down in half<br>
        <input type='radio' name='cut' value='weirder'>In quarters<br>
        <input type='radio' name='cut' value='proper'>Diagonally<br>
        <input type='radio' name='cut' value='quick'>Whole<br>

        <p>8. Finally, pick a side.</p>
        <input type='radio' name='side' value='vc' required>Veggies and ranch<br> 
        <input type='radio' name='side' value='pchips'>Potato chips<br>
        <input type='radio' name='side' value='c&c'>Cheese and crackers<br>
        <input type='radio' name='side' value='fs'>Fruit salad<br>

        <button type="submit" name="button2" id = "button2" class="btn btn-primary">Submit!</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
