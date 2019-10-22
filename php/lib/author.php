<?php
require_once(__DIR__.'/../Classes/Author.php');
use JohnTheDev\Author;

$bob = new Author\Author('4094c9bf-3a4f-418b-8583-50b116be6c6b',
	'987deadeadeadeadea49385830deadea',
	'www.avatarurl.biz',
	'BigKahuna@www.avatarurl.biz',
	'680de7ef6457fd170c1c879cadcae02bb5d4fbe2161990ab34f2d6080c9c74482222e70e5eb023bc21cfccc106b979a7dec9303716cf668abab5cab1795bac5c',
	'theBigKahuna');
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

