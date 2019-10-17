<?php
require_once(__DIR__.'/../Classes/Author.php');
use JohnTheDev\Author;

$bobby = new Author\Author('4094c9bf-3a4f-418b-8583-50b116be6c5a', '1234567890qwertyuiopasdfghjklzxc','www.avatarurl.biz', 'avatarurl@www.avatarurl.biz', 'qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjklzxcvbnm1234567890123456789', 'theBigOne');
echo("Author ID:");
echo($bobby -> getAuthorId());
echo("Author Activation Token:");
echo($bobby -> getAuthorActivationToken());
echo("Author Avatar Url:");
echo($bobby -> getAuthorAvatarUrl());
echo("Author Email:");
echo($bobby -> getAuthorEmail());
echo("Author Hash:");
echo($bobby -> getAuthorHash());
echo("Author Username:");
echo($bobby -> getAuthorUsername());

