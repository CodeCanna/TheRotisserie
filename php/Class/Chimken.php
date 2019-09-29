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
     * @var $chimkinPhoto
     */
    public $chimkinPhoto;

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
        if(get_class($chimkinName) !== 'string') {
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

    public function setChimkinSex($chimkinSex): void {
        // Check if $chimkinSex is a string
        if(get_class($chimkinSex) !== 'string') {
            throw(new \TypeError("chimkinSex must be a string."));
        }

        // Check if $chimkinSex is empty
        if(empty($chimkinSex)) {
            throw(new \InvalidArgumentException("Chimkin sex must not be empty."));
        }

        $this->chimkinSex = $chimkinSex;
    }

    public function getChimkinPhoto(): string {
        return $this->chimkinPhoto;
    }

    /**
     * 
     */
    public function __construct($chimkinId, $chimkinName, $chimkinSex, $chimkinPhoto) {
        // Set variables
        try {
            $this->chimkinId = $chimkinPhoto;
        } catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
            $exceptionType = $exception->get_class($exception);
        }
    }
}

