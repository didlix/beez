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


}