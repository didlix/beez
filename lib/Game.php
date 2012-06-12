<?php

/**
 * The game engine which includes the world and its artifacts
 *
 * @package default
 * @author Rachel Graves 
 **/
class Game
{

	/**
	 * A world object
	 *
	 * @var World object
	 **/
	private $_world;

	/**
	 * Unique ID
	 *
	 * @var string
	 **/
	private $_id;

	/**
	 * Rendering Object
	 *
	 * @var Renderer object
	 **/
	private $_renderingEngine;

	/**
	 * Store a unique id, world object and rendering engine
	 *
	 * @return void
	 * @author Rachel Graves
	 **/
	function __construct(World $world, Rendering_Engine $renderingEngine)
	{
		$this->_world = $world;
		$this->_renderingEngine = $renderingEngine;
        $this->_id = uniqid('game');
	}

	/**
	 * Start the game
	 *
	 * @return void
	 * @author Rachel Graves
	 **/
	public function start()
	{

	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function render()
	{
		$this->_renderingEngine->render();
	}

} // END class Game 