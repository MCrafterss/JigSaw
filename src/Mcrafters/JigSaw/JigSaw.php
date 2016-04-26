<?php

namespace Mcrafters\JigSaw;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\entity\Entity;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TM;

/*
   More comes soon :D - Survingo
   Started coding the plugin
*/

class JigSaw extends PluginBase implements Listener{
	public function onEnable() {
       $this->getServer()->getPluginManager()->registerEvents($this,$this);
       $this->getLogger()->info(TM::GREEN . "Enabling JigSaw Plugin v" . $this->getDescription()->getVersion() . "!");
	}
	
public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
        switch (strtolower($command->getName())) {
            case "jigsaw":
                if ($sender instanceof Player) {
                    if (!(isset($args[0]))) {
                        if ($sender->hasPermission("jigsaw.command")) {
                            $sender->sendMessage("[§4JigSaw§f] Use /jigsaw help");
                            return true;
                        } else {
                            $sender->sendMessage("You don't have the permission to do that!");
                            return true;
                        }
                    }
$arg = array_shift($args);
                    switch ($arg) {
                        
case "version":
                            if ($sender->hasPermission("jigsaw.command.version")) {
			$sender->sendMessage("[§4JigSaw§f] " .  $this->getDescription()->getFullName() . " by the Mcrafters Team");
                                return true;
                            } else {
                                $sender->sendMessage("You don't have the permission to do that!");
                            }
                            return true;
                            break;
case "help":
                            if ($sender->hasPermission("jigsaw.command.help")) {
			$sender->sendMessage("[§4JigSaw§f] Sub-Commands:");
      $sender->sendMessage("§2/jigsaw help §fShows the help");
      $sender->sendMessage("§6/jigsaw version §fShows the current version");
                                return true;
                            } else {
                                $sender->sendMessage("You don't have the permission to do that!");
                            }
                            return true;
                            break;
        }
      }
    }
  }
}
