<?php

namespace CodeCanna\TheRotisserie;

require_once(dirname(__DIR__, 1) . "/vendor/autoload.php");

/**
 * This class defines a Chimkin object, and creates a PHP object out of that.
 * @author CodeCanna
 */
class Chimkin {

	/**
	 * @var $chimkinId defines the id of a chimken
	 */
	public $chimkinId;

	/**
	 * @var $chimkinName
	 */
	public $chimkinName;

	/**
	 * @var $chimkinSex
	 */
	public $chimkinSex;

	/**
	 * @var $chimkinBreed
	 */
	public $chimkinBreed;

	/**
	 * @var $chimkinPhoto
	 */
	public $chimkinPhoto;

	/**
	 * @var $chimkinStory
	 */
	public $chimkinStory;

	/**
	 * @param $chimkinId
	 * @param $chimkinName
	 * @param $chimkinSex
	 * @param $chimkinPhoto
	 * @throws \InvalidArgumentException
	 * @throws \RangeException
	 * @throws \Exception
	 * @throws \TypeError
	 *
	 */
	public function __construct($chimkinId, $chimkinName, $chimkinSex, $chimkinBreed, $chimkinPhoto, $chimkinStory) {
		// Set variables
		try {
			// Run all the setters
			$this->setChimkinId($chimkinId);
			$this->setChimkinName($chimkinName);
			$this->setChimkinSex($chimkinSex);
			$this->setChimkinBreed($chimkinBreed);
			$this->setChimkinPhoto($chimkinPhoto);
			$this->setChimkinStory($chimkinStory);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

	// GETTERS AND SETTERS //

	/**
	 * Get the chimkin ID
	 */
	public function getChimkinId(): string {
		return $this->chimkinId;
	}

	/**
	 * Set the chimkin ID
	 */
	public function setChimkinId($chimkinId) {
		$this->chimkinId = $chimkinId;
	}

	/**
	 *
	 */
	public function getChimkinName(): string {
		return $this->chimkinName;
	}

	public function setChimkinName($chimkinName): void {
		// Check if $chimkinName is a string
		if(gettype($chimkinName) !== 'string') {
			throw(new \Exception("Chimkin name must be a string."));
		}

		// Check if $chimkinName is empty
		if(empty($chimkinName)) {
			throw(new \InvalidArgumentException("Chimkin name must not be empty"));
		}

		//Set value if all tests pass
		$this->chimkinName = $chimkinName;
	}

	/**
	 *
	 */
	public function getChimkinSex(): string {
		return $this->chimkinSex;
	}

	/**
	 * @param $chimkinSex
	 */
	public function setChimkinSex($chimkinSex): void {
		// Check if $chimkinSex is a string
		if(gettype($chimkinSex) !== 'string') {
			throw(new \TypeError("chimkinSex must be a string."));
		}

		// Check if $chimkinSex is empty
		if(empty($chimkinSex)) {
			throw(new \InvalidArgumentException("Chimkin sex must not be empty."));
		}

		$this->chimkinSex = $chimkinSex;
	}

	/**
	 * @return string
	 */
	public function getChimkinBreed(): string {
		return $this->chimkinBreed;
	}

	public function setChimkinBreed($chimkinBreed):void {
		// Check if breed is empty
		if(empty($chimkinBreed)) {
			throw(new \InvalidArgumentException("Breed must not be empty."));
		}

		// Check if breed is a string
		if(gettype($chimkinBreed) !== 'string') {
			throw(new \TypeError("Breed must be a string."));
		}

		// Set breed
		$this->chimkinBreed = $chimkinBreed;
	}

	/**
	 * @return string
	 */
	public function getChimkinPhoto(): string {
		return $this->chimkinPhoto;
	}

	/**
	 * @param $chimkinPhoto
	 */
	public function setChimkinPhoto($chimkinPhoto):void {
		try {
			filter_var($chimkinPhoto, FILTER_SANITIZE_URL, FILTER_SANITIZE_STRING);
		} catch(\InvalidArgumentException | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		$this->chimkinPhoto = $chimkinPhoto;
	}

	public function getChimkinStory(): string {
		return $this->chimkinStory;
	}

	public function setChimkinStory($chimkinStory):void {
		// Check if story is a string
		if(gettype($chimkinStory) !== 'string') {
			throw(new \TypeError("Story must be a string."));
		}

		// Set value
		$this->chimkinStory = $chimkinStory;
	}

	// Get Foo by Bars //

	/**
	 * @param $chimkinId
	 * @return Chimkin
	 */
	public function getChimkinById($chimkinId): Chimkin {

	}

	/**
	 * @return \SplFixedArray
	 */
	public function getAllChimkinsByBreed(): \SplFixedArray {

	}
}

$thing = new Chimkin("abc123", "Juli", "Female", "Sphinx", "www.mypic.com", "story.txt");

var_dump($thing);

