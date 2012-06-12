<?php


set_include_path(get_include_path() . PATH_SEPARATOR . '../lib');

require_once('Game.php');
require_once('Browser_Renderer.php');

// Start a new game when the start button is pressed
if(isset($_POST['start']) || empty($_POST)) {

	$game = new Game(new World);
	$game->start();

} elseif (isset($_POST['serialized_game'])) {

	// Resume the game, will get serialized game data from $_POST
	$game = unserialize($_POST['serialized_game']);
}

// If the turn button is pressed, start a new turn
if(isset($_POST['turn'])) {

	$game->turn();
}

// Render the game using a Browser_Render class
$game->render(new Browser_Renderer);