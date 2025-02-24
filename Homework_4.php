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
            <div>
                <fieldset>
                    <div>
                        <legend>1. Pick a type of bread</legend>
                        <?php
                            print("<input type='radio' name='bread' value='white' required>White<br>");
                            print("<input type='radio' name='bread' value='brioche'>Brioche<br>");
                            print("<input type='radio' name='bread' value='croissant'>Croissant<br>");
                            print("<input type='radio' name='bread' value='sd'>Sourdough<br>");
                            print("<input type='radio' name='bread' value='ciabatta'>Ciabatta<br>");
                            print("<input type='radio' name='bread' value='wheat'>Wheat (Rye, they all look the same.)<br>");
                            //I finally found a place to put this! So, 1 gives you radio buttons for your options. Each option is required; that's what the "required" part is about.
                            //Each line of code is like this, with the name of the group being bread and each button having its value/name, being a correlation to its visible name.
                            //This is true for 1-8. The inputs are the buttons, by the way.
                            //The one link at the top and the two scripts at the bottom are for the style!
                        ?>
                        </select>
                    </div>  
                    <div>
                        <legend>2. How would you like your bread?</legend>
                        <?php
                            print("<input type='radio' name='toast' value='1' required>Not at all<br>");  
                            print("<input type='radio' name='toast' value='2'>Slighty toasted<br>");
                            print("<input type='radio' name='toast' value='3'>Golden brown<br>");
                            print("<input type='radio' name='toast' value='4'>Well done like a stake<br>");
                        ?>
                        </select>
                    </div>  
                    <div>
                        <legend>3. What type of nut butter?</legend>
                        <?php
                            print("<input type='radio' name='nutbut' value='penut' required>Penut<br>");  
                            print("<input type='radio' name='nutbut' value='almond'>Almond (Rye, they all look the same.)<br>");
                            print("<input type='radio' name='nutbut' value='hazel'>Hazelnut<br>");
                            print("<input type='radio' name='nutbut' value='cashew'>Cashew<br>");
                        ?>
                        </select>
                    </div>  
                    <div>
                        <legend>4. What type of fruit spread?</legend>
                        <?php
                            print("<input type='radio' name='jam' value='straw' required>Strawberry jelly<br>");  
                            print("<input type='radio' name='jam' value='orange'>Orange marmalade<br>");
                            print("<input type='radio' name='jam' value='blue'>Blueberry jelly<br>");
                            print("<input type='radio' name='jam' value='grape'>Grape jelly<br>");
                            print("<input type='radio' name='jam' value='rasp'>Raspberry jelly<br>");
                            print("<input type='radio' name='jam' value='pine'>Pineapple jelly<br>");
                        ?>
                        </select>
                    </div>  
                    <div>
                        <legend>5. Adding something sweet?</legend>
                        <?php
                            print("<input type='radio' name='sweet' value='fluff' required>Marshmallow fluff<br>");  
                            print("<input type='radio' name='sweet' value='cc'>Cheese<br>");
                            print("<input type='radio' name='sweet' value='hon'>Honey<br>");
                            print("<input type='radio' name='sweet' value='Nah'>Nah<br>");
                        ?>
                        </select>
                    </div>  
                    <div>
                        <legend>6. What about savory?</legend>
                        <?php
                            print("<input type='radio' name='sav' value='bacon' required>Bacon<br>");  
                            print("<input type='radio' name='sav' value='pickles'>Pickles<br>");
                            print("<input type='radio' name='sav' value='chips'>Potato chips<br>");
                            print("<input type='radio' name='sav' value='no2'>Nuh Uh<br>"); //Only acceptable option. My sister puts Potato chips on her PBJ and ever since I've been looking at her like she's crazy.
                        ?>
                        </select>
                    </div>  
                    <div>
                        <legend>7. How are you cutting it?</legend>
                        <?php
                            print("<input type='radio' name='cut' value='weird' required>Straight down in half<br>"); //Barbarion, have some class! 
                            print("<input type='radio' name='cut' value='weirder'>In quarters<br>"); //You only do this if you're making it for your chid
                            print("<input type='radio' name='cut' value='proper'>Diagonally<br>");
                            print("<input type='radio' name='cut' value='quick'>Whole<br>");//How I did it ever since I turned 18.
                        ?>
                        </select>
                    </div>  
                    <div>
                        <legend>8. Finally, pick a side.</legend>
                        <?php
                            print("<input type='radio' name='side' value='vc' required>Veggies and ranch<br>");  
                            print("<input type='radio' name='side' value='pchips'>Potato chips<br>");
                            print("<input type='radio' name='side' value='c&c'>Cheese and crackers<br>");
                            print("<input type='radio' name='side' value='fs'>Fruit salad<br>");
                        ?>
                        </select>
                    </div>  
                </fieldset>
            </div>
            <button type="submit" name="button2" id = "button2" class="btn btn-primary">Submit!</button>
            <div class="topnav">
                Link to Homework 4 and Commenting Etiqutte in Github:
                <a class="btn btn-primary" href="https://github.com/twright2023/Homework_4.git" role="button">GitHub</a>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
