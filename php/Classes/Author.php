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
	 * id for author; Primary Key Not Null
	 * @var Uuid $authorId
	 */
	private $authorId;
	/**
	 * Avatar URL for author
	 * @var string $authorAvatarUrl
	 */
	private $authorAvatarUrl;
	/**
	 *Activation Token used for Author NOT UUID
	 * @var $authorActivationToken
	 */
	private $authorActivationToken;
	/**
	 *author's Email Unique Not Null
	 * @var string $authorEmail
	 */
	private $authorEmail;
	/**
	 *One way encryption of author's password Not Null
	 * @var $authorHash
	 */
	private $authorHash;
	/**
	 *author's chosen username Unique Not Null
	 * @var string $authorUsername
	 */
	private $authorUsername;

	public function getAuthorId(): Uuid {
		return ($this->authorId);
	}
	/**
	 * mutator method for profile id
	 *
	 * @param  Uuid| string $newProfileId value of new profile id
	 * @throws \RangeException if $newProfileId is not positive
	 * @throws \TypeError if the profile Id is not
	 **/
	public function setProfileId( $newAuthorId): void {
		try {
			$uuid = self::validateUuid($newAuthorId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		// convert and store the profile id
		$this->authorId = $uuid;
	}
}
