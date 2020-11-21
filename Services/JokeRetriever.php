<?php

require_once('./Models/Joke.php');

interface JokeRetriever
{
    public function getJoke(): Joke;
}