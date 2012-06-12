<?php

class Queen_Bee extends Artifact {

	/**
     * This Artifact's hit points
     *
     * @var int
     **/
    private $_hitPoints = 100;
    
    /**
     * Value to be deducted from $_hitPoints when
     * ->hit() is called.
     *
     * @var int
     **/
    private $_damageFromHit = 7;
	
}