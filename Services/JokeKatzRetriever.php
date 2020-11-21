<?php

require_once('JokeRetriever.php');
require_once('./Models/Joke.php');

class JokeKatzRetriever implements JokeRetriever
{
    public function getJoke(): Joke
    {
        $apiResponse = file_get_contents('http://official-joke-api.appspot.com/random_joke');

        $data = json_decode($apiResponse, true);

        return new Joke(
            $data['setup'],
            $data['punchline']
        );
    }
}