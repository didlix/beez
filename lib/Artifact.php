<?php


/**
 * An Artifact is an item in out game. This is an abstract class that can be extended
 * to make real game artifacts, like bees.
 *
 * All game artifacts have hit points and
 *
 * @package default
 * @author Rachel Graves
 **/
abstract class Artifact {

    /**
     * This Artifact's hit points
     *
     * @var int
     **/
    private var $_hitPoints = 0;
    
    /**
     * Value to be deducted from $_hitPoints when
     * ->hit() is called.
     *
     * @var int
     **/
    private var $_damageFromHit = 0;

    /**
     * Unique ID of the object
     *
     * @var string
     **/
    private var $_id;


    /**
     * Add a unique id to this artifact
     *
     * @return void
     */
    public function __construct()
    {
        $this->_id = uniqid('artifact');
    }

    /**
     * Returns this Artifact's hit points
     *
     * @return int
     * @author Rachel Graves
     **/
    public function getHitPoints()
    {
        return $this->_hitPoints;
    }

    /**
     * Reduce the number of hit points of this artifact,
     * using the $_damageFromHit value.
     *
     * @return int Remaining hit points
     * @author Rachel Graves
     **/
    public function hit()
    {

        $this->_hitPoints = $this->_hitPoints - $this->_damageFromHit;

        // If this Artifact has no hit points left, destroy the object
        if ($this->_hitPoints <= 0) {
            unset($this);
        }

        return $this->getHitPoints(); 

    }
        
}