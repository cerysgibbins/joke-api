<?php
    require_once('Services/JokeRetriever.php');

    $jokeRetriever = new JokeRetriever();

?>

<html>
    <head>
        <title>Random Joke Generator</title>
    </head>
    <body>
        <?php echo $jokeRetriever->getJoke(); ?>
    </body>
</html>