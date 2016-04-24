<?php

namespace NoJDamage\Jankirby;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener {
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
     public function onDamage(EntityDamageEvent $event){  
        if ($event->getEntity() instanceof Player) {
            if ($event->getCause() === EntityDamageEvent::CAUSE_FALL) {
      $p = $event->getEntity();
      $x = false;
      if(!$this->canGetHurt($p)) {
        $event->setCancelled();
                 $event->getPlayer()->sendMessage("You fell very high, but the damage was cured from your feet.");
            }
        }
     }
}

