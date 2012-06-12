<?php

abstract class Rendering_Engine
{

	abstract function render(World $world, $data = null);

}