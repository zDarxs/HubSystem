<?php

namespace hub;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase as P;
use pocketmine\event\Listener as L;
use pocketmine\utils\TextFormat as TE;
use pocketmine\math\Vector3;

class hubsystem extends P implements L {
	
	public function onEnable() : void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("hubsystem ha sido activado exitosamente");
	}
	
	public function onCommand(CommandSender $player, Command $cmd, string $label, array $args) : bool {
		switch($cmd->getName()){
			case "hub":
			$player->sendMessage("§l§bLOBBY » §r§7Usted ha regresado al lobby");
			$player->addTitle("§l§f»§bLobby§f«","§e§lBienvenido al lobby");
			$player->teleport(Server::getInstance()->getDefaultLevel()->getSafeSpawn(), 0, 0.5, 0);
			break;
		}
		return true;
	}
	
	public function onDisable() : void {
		$this->getLogger()->info("hubsystem by Darxs se ha desactivado");
	}
}