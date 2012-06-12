<?php

/**
 * The world object, knows the rules and acts as a factory for artifacts
 *
 * @package default
 * @author Rachel Graves
 **/
abstract class World {
    
    /**
     * undocumented class variable
     *
     * @var string
     **/
    var $_id;


    /**
     * Artifacts stored in this world
     *
     * @var string
     **/
    var $_artifacts = array();

    /**
     * store an artifact in the world
     *
     * @return void
     * @author Rachel Graves
     **/
    public function store(Artifact $artifact)
    {
        $this->_artifacts[] = $artifact;
    }




}