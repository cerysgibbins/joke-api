<?php
    require_once('./Factories/JokeRetrieverFactory.php');

    $jokeRetriever = (new JokeRetrieverFactory)->create();
    $joke = $jokeRetriever->getJoke();
?>

<html>
    <head>
        <title>Random Joke Generator</title>
    </head>
    <body>
        <?php 
            echo $joke->getSetup(); 
            echo '<br>';
            echo $joke->getDelivery();
        ?>
    </body>
</html>