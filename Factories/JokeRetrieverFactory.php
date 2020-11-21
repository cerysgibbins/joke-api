<?php 

require_once('./Services/JokeAPIRetriever.php');

class JokeRetrieverFactory 
{
    public function create()
    {
        return new JokeAPIRetriever();
    }
}