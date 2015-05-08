<?php
namespace Jarvis\Main;

//Player
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
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
			switch($command->getName()){
			case "Jarvis":
				$sender->sendMessage("<Jarvis> Hello ".$sender->getName()." How May I Help Today?");
				return true;
			default:
				return false;
		}
	}
	
	public function onSpawn(PlayerRespawnEvent $event, CommandSender $sender){
		$sender->sendMessage->("<Jarvis> Hello " .$sender->getName() . " Welcome To Quantum Works MCPE!")
	}
}
