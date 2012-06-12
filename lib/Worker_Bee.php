<?php

class Worker_Bee extends Artifact {
	
    /**
     * This Artifact's hit points
     *
     * @var int
     **/
    private $_hitPoints = 75;
    
    /**
     * Value to be deducted from $_hitPoints when
     * ->hit() is called.
     *
     * @var int
     **/
    private $_damageFromHit = 12;

}