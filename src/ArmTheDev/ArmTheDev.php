<?php

namespace ArmTheDev;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\permission\Permission;
use pocketmine\item\item;
use pocketmine\inventory\BaseInventory;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\math\Vector3;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\level\sound\{
 TNTPrimeSound
};

class ArmTheDev extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("UtimateKit by ArmTheDev");
  }
  
  public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    $player->sendPopup('kit du demon');
    $player->getInventory()->addItem(Item::get(388, 0, 1));
  }

  public function onTouch(PlayerInteractEvent $event){
   $name = $player->getName();
    $player = $event->getPlayer();
    if($player->getInventory()->getItemInHand()->getId() == 388) {
        $set1 = Item::get(310, 0, 1);
        $set2 = Item::get(311, 0, 1);
        $set3 = Item::get(312, 0, 1);
        $set4 = Item::get(313, 0, 1);
        $set5 = Item::get(276, 0, 1);
        $set6 = Item::get(466, 0, 16);
        $set1->addEnchantment(Enchantment::getEnchantment(0)->setLevel(6));
        $set1->addEnchantment(Enchantment::getEnchantment(1)->setLevel(6));
        $set1->addEnchantment(Enchantment::getEnchantment(2)->setLevel(6));
        $set1->addEnchantment(Enchantment::getEnchantment(3)->setLevel(6));
        $set1->addEnchantment(Enchantment::getEnchantment(4)->setLevel(6));
        $set1->addEnchantment(Enchantment::getEnchantment(5)->setLevel(6));
        $set2->addEnchantment(Enchantment::getEnchantment(0)->setLevel(6));
        $set2->addEnchantment(Enchantment::getEnchantment(1)->setLevel(6));
        $set2->addEnchantment(Enchantment::getEnchantment(2)->setLevel(6));
        $set2->addEnchantment(Enchantment::getEnchantment(3)->setLevel(6));
        $set2->addEnchantment(Enchantment::getEnchantment(4)->setLevel(6));
        $set2->addEnchantment(Enchantment::getEnchantment(5)->setLevel(6));
        $set3->addEnchantment(Enchantment::getEnchantment(0)->setLevel(6));
        $set3->addEnchantment(Enchantment::getEnchantment(1)->setLevel(6));
        $set3->addEnchantment(Enchantment::getEnchantment(2)->setLevel(6));
        $set3->addEnchantment(Enchantment::getEnchantment(3)->setLevel(6));
        $set3->addEnchantment(Enchantment::getEnchantment(4)->setLevel(6));
        $set3->addEnchantment(Enchantment::getEnchantment(5)->setLevel(6));
        $set4->addEnchantment(Enchantment::getEnchantment(0)->setLevel(6));
        $set4->addEnchantment(Enchantment::getEnchantment(1)->setLevel(6));
        $set4->addEnchantment(Enchantment::getEnchantment(2)->setLevel(6));
        $set4->addEnchantment(Enchantment::getEnchantment(3)->setLevel(6));
        $set4->addEnchantment(Enchantment::getEnchantment(4)->setLevel(6));
        $set4->addEnchantment(Enchantment::getEnchantment(5)->setLevel(6));
        $set5->addEnchantment(Enchantment::getEnchantment(9)->setLevel(6));
        $set5->addEnchantment(Enchantment::getEnchantment(10)->setLevel(6));
        $set5->addEnchantment(Enchantment::getEnchantment(11)->setLevel(6));
        $set5->addEnchantment(Enchantment::getEnchantment(12)->setLevel(6));
        $set5->addEnchantment(Enchantment::getEnchantment(13)->setLevel(6));
        $set5->addEnchantment(Enchantment::getEnchantment(17)->setLevel(6));
        $player->getInventory()->addItem($set1);
        $player->getInventory()->addItem($set2);
        $player->getInventory()->addItem($set3);
        $player->getInventory()->addItem($set4);
        $player->getInventory()->addItem($set5);
        $player->getInventory()->addItem($set6);
        $player->sendMessage('§7You are a GOD now!');
        $player->getInventory()->removeItem(Item::get(288,0,1));
        $player->getLevel()->addSound(new TNTPrimeSound(new Vector3($player->x,$player->y,$player->z)));
    }
  }
}
