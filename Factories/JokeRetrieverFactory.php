<?php 

require_once('./Services/JokeAPIRetriever.php');
require_once('./Services/MockJokeRetriever.php');

class JokeRetrieverFactory 
{
    public function create()
    {
        //return new JokeAPIRetriever();
        return new MockJokeRetriever();
    }
}