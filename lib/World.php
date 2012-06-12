<?php

/**
 * The world object, knows the rules and acts as a factory for artifacts
 *
 * @package default
 * @author Rachel Graves
 **/
abstract class World {
    
    /**
     * Unique ID
     *
     * @var string
     **/
    var $_id;


    /**
     * Artifacts stored in this world
     *
     * @var array
     **/
    var $_artifacts = array();

    /**
     * Rules stored in this world
     *
     * @var array
     **/
    var $_rules;

    /**
     * store an artifact in the world
     *
     * @return void
     * @author Rachel Graves
     **/
    public function storeArtifact(Artifact $artifact)
    {
        $this->_artifacts[] = $artifact;
    }


    /**
     * store a rule in the world
     *
     * @return void
     * @author Rachel Graves
     **/
    public function storeRule(Rule $rule)
    {
        $this->_rules[] = $rule;
    }


}