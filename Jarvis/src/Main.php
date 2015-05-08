<?php
namespace Jarvis\Main;

//Player
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
//Other Stuff
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
//Text 
use pocketmine\utils\TextFormat;
//Commands
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase implements Listener {
	
	public function onEnable (){
		$this->getLogger()->info(TextFormat::RED . "<Jarvis> I Have Indeed Been Loaded");
	}
	
	public function onPlayerJoin (PlayerJoinEvent $event){
		$p = $event->getPlayer();
		$p->sendMessage(TextFormat::DARK_GREEN . "<Jarvis> Hello! I Am Jarvis I Will Be Helping You Whenever You Need Help!");
		
	}
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args)
	{
		if($command->getName() == "Jarvis"){
			$this->getLogger()->info(TextFormat::RED . "<Jarvis> What Can I Do For You Sir?");
		}
		else 
		{
			$this->getLogger()->info(TextFormat::RED . "<Jarvis> Sir That Is A Wrong Command!");
		}
	}
}
