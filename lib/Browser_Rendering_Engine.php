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
	public function render(World $world)
	{

		$output[] = '<html>';
		$output[] = '<head><title>Beez Game</title></head>';
		$output[] = '<body>';
		
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

		$output[] = '</body>';
		$output[] = '</html>';

		return $output;

	}

} // END class Browser_Renderer 