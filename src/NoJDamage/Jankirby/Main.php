<?php

namespace NoJDamage\Jankirby;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("[CyroPE NoJDamage] enabled!");
  }
public function onFall(EntityDamageEvent $event){
		$entity = $event->getEntity();
		$cause = $event->getCause();
		if($this->hasFall($entity)){
                    $event->setCancelled(true);
                      $player->setHealth(20);
			if($cause == EntityDamageEvent::CAUSE_FALL){
				$event->setCancelled(true);
                                 $player->setHealth(20);
                                $event->getPlayer()->sendTip("You fell very high, but the damage was cured from your feet.");
                        }
                }
}
}
