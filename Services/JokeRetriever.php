<?php

class JokeRetriever 
{
    public function getJoke()
    {
        $apiResponse = file_get_contents('https://sv443.net/jokeapi/v2/joke/Programming?blacklistFlags=nsfw,religious,political,racist,sexist&type=twopart');

        $data = json_decode($apiResponse, true);

        return $data['setup'] . '<br>' . $data['delivery'];
        
        
    }
}