<?php
require_once(__DIR__.'/../Classes/Author.php');
use JohnTheDev\Author;

$bobby = new Author\Author('4094c9bf-3a4f-418b-8583-50b116be6c5a');
echo("Author ID:");
echo($bobby -> getAuthorId());

