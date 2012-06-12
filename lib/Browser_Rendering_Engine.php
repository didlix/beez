<?php

require_once('Rendering_Engine.php');

/**
 * undocumented class
 *
 * @package default
 * @author Rachel Graves
 **/
class Browser_Rendering_Engine extends Rendering_Engine 
{

	/**
	 * Return HTML output, takes World object
	 *
	 * @return string
	 * @author Rachel Graves
	 * @param World $world
	 **/
	public function render(World $world, $data = null)
	{

		if(null !== $data) {
			$serialized_game = $data;
		}

		$output[] = '<html>';
		$output[] = '<head><title>Beez Game</title></head>';
		$output[] = '<body>';

		// Only output if the game is still going	
		if(false === $world->isGameOver()) {

			$artifacts = $world->getArtifacts();

			foreach ($artifacts AS $artifact) {
				$id = $artifact->getId();

				$output[$id] = '<div class="artifact">';
				$output[$id].= '<span class="name">' . $artifact->getWorldName() . '</span>';
				$output[$id].= '<span class="hit-points">' . $artifact->getHitPoints() . '</span>';

				if($artifact->isDead()) { 

					$output[$id].= '<span class="dead">Dead</span>';

				}

				$output[$id].= '</div>';
			}
		} else {

			$output[] = '<div>' . $world->getGameOverMessage() . '</div>';
		}

		// @todo form

		$output[] = '<form method="POST" action="index.php">';

		$output[] = '<input type="submit" name="Hit" id="turn" value="Hit" />';
		$output[] = '<input type="submit" name="start" id="start" value="Start A New Game" />';
		
		if(isset($serialized_game)) {
			$output[] = '<input type="hidden" value="' . $serialized_game . '" />';
		}

		$output[] = '</form>';

		$output[] = '</body>';
		$output[] = '</html>';

		$html = '';

		foreach ($output AS $html_line) {
			$html .= $html_line . PHP_EOL;
		}

		return $html;

	}

} // END class Browser_Renderer 