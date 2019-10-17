<?php
require_once(__DIR__.'/../Classes/Author.php');
use JohnTheDev\Author;

$bob = new Author\Author('4094c9bf-3a4f-418b-8583-50b116be6c6b',
	'987deadeadeadeadea49385830deadea',
	'www.avatarurl.biz',
	'BigKahuna@www.avatarurl.biz',
	'HG4xNSLTE6G7jqLxXq69YjELDJp52Umkjfx9sLLfTgzFXwvGn6xSMmf2Na9zHWPXqrVBLrHfvpTRuYRcJy35zx8dzsHwySY7bsKf6MWbyEUkm5e7r72LjNXHrYMyjFSA',
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

