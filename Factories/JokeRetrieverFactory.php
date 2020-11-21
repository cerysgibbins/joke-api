<?php

require_once('./Services/JokeRetriever.php');
require_once('./Services/JokeAPIRetriever.php');
require_once('./Services/MockJokeRetriever.php');
require_once('./Services/JokeKatzRetriever.php');

class JokeRetrieverFactory
{
    public function create($katz = true): JokeRetriever
    {
        if ($katz) {
            return new JokeKatzRetriever();
        } else {
            return new JokeAPIRetriever();  
        }
        //return new JokeAPIRetriever();
        //return new MockJokeRetriever();
    }
}