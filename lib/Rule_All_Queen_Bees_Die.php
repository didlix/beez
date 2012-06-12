<?php


/**
 * If all Queen bees die then the game should end
 */
class rule_all_queen_bees_die extends rule {


	/**
	 * Cound the number of Queen Bee Artifacts in the world
	 */
	public function rule(World $world)
	{

		$queen_bees = 0;

		foreach ($world->getArtifacts() AS $artifact) {

			if('Queen_Bee' === get_class($artifact)) {
				$queen_bees++;
			}

		}

		if(0 <= $queen_bees) {
			$world->gameOver('All Queen Bees Are Dead');
		}

	}

}