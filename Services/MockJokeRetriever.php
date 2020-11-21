<?php

require_once('JokeRetriever.php');
require_once('./Models/Joke.php');

class MockJokeRetriever implements JokeRetriever
{
    public function getJoke(): Joke
    {
        return new Joke(
            'Why do programmers wear glasses?',
            'Because they need to C#'
        );
    }
}