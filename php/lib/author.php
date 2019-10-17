<?php
require_once(__DIR__.'/../Classes/Author.php');
use JohnTheDev\Author;

$bob = new Author\Author('4094c9bf-3a4f-418b-8583-50b116be6c6b', '987udufjroek49385udjr83ujclvmnb0','www.avatarurl.biz', 'avatarul@www.avatarurl.biz', '987udufjroek49385udjr83ujclvmnb0987udufjroek49385udjr83ujclvmnb0987udufjroek49385udjr83ujclvmnb09', 'theBigOhe');
echo("Author ID:");
echo($bob -> getAuthorId());
echo("Author Activation Token:");
echo($bob -> getAuthorActivationToken());
echo("Author Avatar Url:");
echo($bob -> getAuthorAvatarUrl());
echo("Author Email:");
echo($bob -> getAuthorEmail());
echo("Author Hash:");
echo($bob -> getAuthorHash());
echo("Author Username:");
echo($bob -> getAuthorUsername());

