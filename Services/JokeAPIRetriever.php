<?php

require_once('JokeRetriever.php');
require_once('./Models/Joke.php');

class JokeAPIRetriever implements JokeRetriever
{
    public function getJoke(): Joke
    {
        $apiResponse = file_get_contents('https://sv443.net/jokeapi/v2/joke/Programming?blacklistFlags=nsfw,religious,political,racist,sexist&type=twopart');

        $data = json_decode($apiResponse, true);

        $joke = new Joke($data['setup'], $data['delivery']);
        
        return $joke;
    }
}