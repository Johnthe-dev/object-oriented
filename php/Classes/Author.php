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
	 * constructor for this Author
	 *
	 * @param string|Uuid $newAuthorId id of this author or null if a new author
	 * @param string $newAuthorActivationToken Activation Token for author or null if a new author
	 * @param string $newAuthorAvatarUrl Avatar Url of this author or null if a new author
	 * @param string $newAuthorEmail email of this author or null if a new author
	 * @param string $newAuthorHash hash of this author or null if a new author
	 * @param string $newAuthorUsername username of this author or null if a new author
	 *
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
	/**
	 *accessor method for authorId
	 *
	 * @return Uuid for authorId
	 */
	public function getAuthorId(): Uuid {
		return ($this->authorId);
	}
	/**
	 * mutator method for profile id
	 *
	 * @param  Uuid| string $newAuthorId value of new profile id
	 * @throws \RangeException if $newAuthorId is not positive
	 * @throws \TypeError if the author Id is not uuid
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

	/**
	 *accessor method for authorActivationToken
	 *
	 * @return string for authorActivationToken
	 */
	public function getAuthorActivationToken(): string {
		return ($this->authorActivationToken);
	}
	/**
	 * mutator method for authorActivationToken
	 *
	 * @param string $newAuthorActivationToken
	 * @throws \InvalidArgumentException  if the token is not a string or insecure
	 * @throws \RangeException if the token is not exactly 32 characters
	 * @throws \TypeError if the activation token is not a string
	 **/


		public function setAuthorActivationToken(?string $newAuthorActivationToken): void {
			if($newAuthorActivationToken===null) {
				$this->authorActivationToken = null;
				return;
			}
			$newAuthorActivationToken = strtolower(trim($newAuthorActivationToken));
			if(ctype_xdigit($newAuthorActivationToken) === false) {
				throw(new\RangeException("user activation is not valid"));
			}
			//make sure user activation token is exactly 32 characters
			if(strlen($newAuthorActivationToken) !== 32) {
				throw(new\RangeException("user activation token has to be 32"));
			}
			// store the activation token
			$this->authorActivationToken = $newAuthorActivationToken;
		}


	/**
	 *accessor method for authorAvatarUrl
	 *
	 *  string for authorAvatarUrl
	 */
		public function getAuthorAvatarUrl(): string {
		return ($this->authorAvatarUrl);
	}
		/**
		 * mutator method for Author Avatar Url
		 *
		 * @param  String $newAuthorAvatarUrl value of new Author Avatar Url
		 * @throws \RangeException if $newProfileId is not less than or equal to 255
		 **/


	public function setAuthorAvatarUrl(string $newAuthorAvatarUrl): void {
		//enforce that the Avatar Url is less than or equal to 255 characters.
		if(strlen($newAuthorAvatarUrl) > 255) {
			throw(new \RangeException("profile Avatar Url must be less than or equal to 255 characters"));
		}
		// convert and store the profile id
		$this->authorAvatarUrl = $newAuthorAvatarUrl;
	}
	/**
	 *accessor method for authorEmail
	 *
	 * @return string for authorEmail
	 */
	public function getAuthorEmail(): string {
		return ($this->authorEmail);
	}
	/**
	 * mutator method for authorEmail
	 *
	 * @param  string $newAuthorEmail value Author Email
	 * @throws \InvalidArgumentException if $newAuthorEmail is empty or insecure
	 * @throws \RangeException if the author email is too large
	 **/
	public function setAuthorEmail(string $newAuthorEmail): void {
		// verify the email is secure
		$newAuthorEmail = trim($newAuthorEmail);
		$newAuthorEmail = filter_var($newAuthorEmail, FILTER_VALIDATE_EMAIL);
		if(empty($newAuthorEmail) === true) {
			throw(new \InvalidArgumentException("author email is empty or insecure"));
		}
		// verify the email will fit in the database
		if(strlen($newAuthorEmail) > 128) {
			throw(new \RangeException("author email is too large"));
		}
		// store the email
		$this->authorEmail = $newAuthorEmail;
	}

	/**
	 *accessor method for authorHash
	 *
	 * @return string for authorHash hashed password
	 */
	public function getAuthorHash(): string {
		return ($this->authorHash);
	}
	/**
	 * mutator method for author hash
	 *
	 * @param  string $newAuthorHash value of new author hashed password
	 * @throws \InvalidArgumentException if the hash is not secure
	 * @throws \RangeException if the hash is not 128 characters
	 * @throws \TypeError if author hash is not a string
	 **/


	public function setAuthorHash(string $newAuthorHash): void {
		//enforce that the hash is properly formatted
		$newAuthorHash = trim($newAuthorHash);
		$newAuthorHash = strtolower($newAuthorHash);
		if(empty($newAuthorHash) === true) {
			throw(new \InvalidArgumentException("author password hash empty or insecure"));
		}
		//enforce that the hash is a string representation of a hexadecimal
		/*if(!ctype_xdigit($newAuthorHash)) {
			throw(new \InvalidArgumentException("author password hash is empty or insecure"));
		}*/
		//enforce that the hash is exactly 128 characters.
		if(strlen($newAuthorHash) !== 128) {
			throw(new \RangeException("author hash must be 128 characters"));
		}
		//store the hash
		$this->authorHash = $newAuthorHash;
	}

	/**
	 *accessor method for authorUsername
	 *
	 * @return string for authorUsername
	 */
	public function getAuthorUsername(): string {
		return ($this->authorUsername);
	}
	/**
	 * mutator method for author username
	 *
	 * @param string $newAuthorUsername new value of at handle
	 * @throws \InvalidArgumentException if $newAuthorUsername is not a string or insecure
	 * @throws \RangeException if $newAuthorUsername is > 32 characters
	 * @throws \TypeError if $newAuthorUsername is not a string
	 **/


	public function setAuthorUsername(string $newAuthorUsername): void {
		// verify the username is secure
		$newAuthorUsername = trim($newAuthorUsername);
		$newAuthorUsername = filter_var($newAuthorUsername, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newAuthorUsername) === true) {
			throw(new \InvalidArgumentException("author username is empty or insecure"));
		}
		// verify the username will fit in the database
		if(strlen($newAuthorUsername) > 32) {
			throw(new \RangeException("author username is too large"));
		}
		// store the username
		$this->authorUsername = $newAuthorUsername;
	}

	//Write and document constructor method

}
