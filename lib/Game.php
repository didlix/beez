<?php

require_once('Worker_Bee.php');
require_once('Queen_Bee.php');
require_once('Drone_Bee.php');
require_once('Rule_All_Bees_Die.php');
require_once('Rule_All_Queen_Bees_Die.php');

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
		$this->_world->storeArtifact(new Worker_Bee);
		$this->_world->storeArtifact(new Worker_Bee);
		$this->_world->storeArtifact(new Worker_Bee);
		$this->_world->storeArtifact(new Worker_Bee);
		$this->_world->storeArtifact(new Worker_Bee);
		$this->_world->storeArtifact(new Worker_Bee);
		$this->_world->storeArtifact(new Worker_Bee);
		$this->_world->storeArtifact(new Queen_Bee);
		$this->_world->storeArtifact(new Queen_Bee);
		$this->_world->storeArtifact(new Queen_Bee);
		$this->_world->storeArtifact(new Drone_Bee);
		$this->_world->storeArtifact(new Drone_Bee);
		$this->_world->storeArtifact(new Drone_Bee);
		$this->_world->storeArtifact(new Drone_Bee);
		$this->_world->storeArtifact(new Drone_Bee);
		$this->_world->storeRule(new Rule_All_Queen_Bees_Die);
		$this->_world->storeRule(new Rule_All_Bees_Die);
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function render()
	{
		return $this->_renderingEngine->render($this->_world);
	}

} // END class Game 