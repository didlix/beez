<?php

/**
 * The world object, knows the rules and acts as a factory for artifacts
 *
 * @package default
 * @author Rachel Graves
 **/
class World {
    
    /**
     * Unique ID
     *
     * @var string
     **/
    private $_id;

    /**
     * Artifacts stored in this world
     *
     * @var array
     **/
    private $_artifacts = array();

    /**
     * Rules stored in this world
     *
     * @var array
     **/
    private $_rules;

    /**
     * Store an artifact in the world
     *
     * @return void
     * @author Rachel Graves
     **/
    public function storeArtifact(Artifact $artifact)
    {
        $this->_artifacts[] = $artifact;
    }

    /**
     * Store a rule in the world
     *
     * @return void
     * @author Rachel Graves
     **/
    public function storeRule(Rule $rule)
    {
        $this->_rules[] = $rule;
    }

    /**
     * Run all rules in the world
     *
     * @return void
     * @author Rachel Graves
     **/
    public function runRules()
    {
        foreach ($this->_rules AS $rule) {
            $rule->rule($this);
        }
    }

    /**
     * Return an array of Artifact objects
     *
     * @return array of Artifact objects
     * @author Rachel Graves
     **/
    public function getArtifacts()
    {
        return $this->_artifacts;
    }

    /**
     * Constructor in world 
     *
     * @author Rachel Graves
     */
    public function __construct()
    {
        
    }

}