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
	
	public function onPlayerJoin (PlayerJoinEvent $event){
		$p = $event->getPlayer();
		$p->sendMessage("<Jarvis>" . "Hello! I And Jarvis I Will Be Helping You Whenever You Need Help!");
		
	}
	
}
