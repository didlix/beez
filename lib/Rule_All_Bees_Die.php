<?php

require_once('Rule.php');


/**
 * If all Queen bees die then the game should end
 */
class Rule_All_Bees_Die extends Rule {

	/**
	 * Cound the number of Queen Bee Artifacts in the world
	 */
	public function rule(World $world)
	{

		$bees = 0;

		foreach ($world->getArtifacts() AS $artifact) {

			switch (get_class($artifact)) {
				case 'Queen_Bee':
				case 'Drone_Bee':
				case 'Worker_Bee':
					if(false === $artifact->isDead()) {
						$bees++;
						break;
					}
					
			}

		}

		if($bees <= 0) {
			$world->gameOver('All Bees Are Dead');
		}


	}

}