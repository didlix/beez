<?php

require_once('Rule.php');

/**
 * If all Queen bees die then the game should end
 */
class Rule_All_Queen_Bees_Die extends Rule {

	/**
	 * Cound the number of Queen Bee Artifacts in the world
	 *
	 * @return void
	 */
	public function rule(World $world)
	{


		$queen_bees = 0;

		foreach ($world->getArtifacts() AS $artifact) {

			if('Queen_Bee' === get_class($artifact)) {
				if(false === $artifact->isDead()) {
					$queen_bees++;
				}
			}

		}

		if($queen_bees <= 0) {
			$world->gameOver('All Queen Bees Are Dead');
		}

	}

}