<?php

namespace JohnTheDev\Author;

require_once("autoload.php");

require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;
/** Author Class for Object-Oriented-Phase 1
 *
 *This is an example class that I am creating in order to improve my familiarity with OOP and PHP.
 *
 * references:	Example code: 	https://bootcamp-coders.cnm.edu/class-materials/object-oriented/object-oriented-php.php
 * 				Assignment: 	https://app.slack.com/docs/T053NFY3R/FP1KTPB35?origin_team=T053NFY3R
 * @author John Johnson-Rodgers <john@johnthe.dev>
 * @version 1.0.0
 */
class author{
	use validateUuid;
	/**
	 * id for author; Primary Key
	 * @var Uuid $authorId
	 */
	private $authorId;
	/**
	 * Avatar URL for author;
	 * @var
	 */
	private $authorAvatarUrl;
	/**
	 *Activation Token used for Author NOT UUID
	 */
	private $authorActivationToken;
	/**
	 *author's Email
	 */
	private $authorEmail;
	/**
	 *One way encryption of author's password
	 * @var
	 */
	private $authorHash;
	/**
	 *author's chosen username
	 * Not Null
	 */
	private $authorUsername;
}
