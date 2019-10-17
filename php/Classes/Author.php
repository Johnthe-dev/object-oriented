<?php

namespace JohnTheDev\Author;

require_once("autoload.php");

require_once(dirname(__DIR__) . "/lib/vendor/autoload.php");

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
class Author{
	use ValidateUuid;
	/**
	 * id for author; Primary Key Not Null
	 * @var Uuid $authorId
	 */
	private $authorId;
	/**
	 *Activation Token used for Author NOT UUID
	 * @var $authorActivationToken
	 */
	private $authorActivationToken;
	/**
	 * Avatar URL for author
	 * @var string $authorAvatarUrl
	 */
	private $authorAvatarUrl;
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

		/**
	 * @return Uuid
	 */
	public function getAuthorId(): Uuid {
		return ($this->authorId);
	}
	/**
	 * mutator method for profile id
	 *
	 * @param  Uuid| string $newAuthorId value of new profile id
	 * @throws \RangeException if $newAuthorId is not positive
	 * @throws \TypeError if the author Id is not
	 **/
	public function setAuthorId( $newAuthorId): void {
		try {
			$uuid = self::validateUuid($newAuthorId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		// convert and store the profile id
		$this->authorId = $uuid;
	}

	public function getAuthorActivationToken(): Uuid {
		return ($this->authorId);
	}
	/**
	 * mutator method for profile id
	 *
	 * @param  Uuid| string $newProfileId value of new profile id
	 * @throws \RangeException if $newProfileId is not positive
	 * @throws \TypeError if the profile Id is not
	 **/


		public function setAuthorActivationToken( $newAuthorId): void {
			try {
				$uuid = self::validateUuid($newAuthorId);
			} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exception->getMessage(), 0, $exception));
			}
			// convert and store the profile id
			$this->authorId = $uuid;
		}

		public function getAuthorAvatarUrl(): Uuid {
		return ($this->authorId);
	}
		/**
		 * mutator method for profile id
		 *
		 * @param  Uuid| string $newProfileId value of new profile id
		 * @throws \RangeException if $newProfileId is not positive
		 * @throws \TypeError if the profile Id is not
		 **/


	public function setAuthorAvatarUrl($newAuthorId): void {
		try {
			$uuid = self::validateUuid($newAuthorId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		// convert and store the profile id
		$this->authorId = $uuid;
	}

	//Write and document constructor method

	/**
	 * constructor for this Author
	 *
	 * @param string|Uuid $newAuthorId id of this author or null if a new author
	 **/
	public function __construct($newAuthorId, $newAuthorActivationToken, $newAuthorAvatarUrl, $newAuthorEmail, $newAuthorHash, $newAuthorUsername) {
		try {
			$this->setAuthorId($newAuthorId);
			$this->setAuthorActivationToken($newAuthorActivationToken);
			$this->setAuthorAvatarUrl($newAuthorAvatarUrl);
			$this->setAuthorEmail($newAuthorEmail);
			$this->setAuthorHash($newAuthorHash);
			$this->setAuthorUsername($newAuthorUsername);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 101, $exception));
		}
	}
}
