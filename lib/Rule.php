<?php

/**
 * Add rules to your game 
 *
 * @package default
 * @author Rachel Graves
 **/
abstract class Rule {
	
	/**
	 * Abstract class for adding your own rules
	 *
	 * @return World
	 * @author 
	 **/
	abstract public function rule(World $world);

}