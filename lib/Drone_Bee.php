<?php

class Drone_Bee extends Artifact {
	

    /**
     * This Artifact's hit points
     *
     * @var int
     **/
    private var $_hitPoints = 50;
    
    /**
     * Value to be deducted from $_hitPoints when
     * ->hit() is called.
     *
     * @var int
     **/
    private var $_damageFromHit = 18;

}