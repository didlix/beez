<?php


set_include_path(get_include_path() . PATH_SEPARATOR . '../lib');

// Start a new game when the start button is pressed
if($_POST['start']) {

	$game = new Game(new World);
	$game->start();

} else {
	// Resume the game, will get serialized game data from $_POST
	$game->resume($_POST);
}

// If the turn button is pressed, start a new turn
if($_POST['turn']) {
	$game->turn();
}

// Render the game using a Browser_Render class
$game->render(new Browser_Renderer);