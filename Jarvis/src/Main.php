<?php
namespace Jarvis\Main.php

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat; 

class Main extends PluginBase implements Listener {
	public function onEnable (){
		$this->getLogger()->info(TextFormat::RED .  "<Jarvis>" . "I Have Indeed Loaded");
	}
	
	
}
