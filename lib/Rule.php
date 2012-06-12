<?php


/**
 * Add rules to your game 
 *
 * @package default
 * @author Rachel Graves
 **/
abstract class rule {
	
	/**
	 * Abstract class for adding your own rules
	 *
	 * @return World
	 * @author 
	 **/
	abstract public function action(World $world);

}