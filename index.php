<?php
    require_once('./Factories/JokeRetrieverFactory.php');

    $jokeRetriever = (new JokeRetrieverFactory(true))->create();
    $joke = $jokeRetriever->getJoke();

    $otherJokeRetriever = (new JokeRetrieverFactory(false))->create();
    $otherJoke = $otherJokeRetriever->getJoke();
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
    <br><br>
    <?php
        echo $otherJoke->getSetup();
        echo '<br>';
        echo $otherJoke->getDelivery();
    ?>
  </body>
</html>