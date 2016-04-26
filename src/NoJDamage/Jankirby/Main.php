<?php

namespace NoJDamage\Jankirby;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
/*
 * Copyright (c) 2016 Jankirby
 */
class Main extends PluginBase implements Listener {

    private $cause;

    public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
     public function onDamage(EntityDamageEvent $event){  
         $entity = $event->getEntity();
        /* @var $cause type */
         $cause = $event->getCause();
        if ($event->getEntity() instanceof Player) {
            if($this->hasFall($entity)){
                $this->disableFall();
            if ($event->getCause() === EntityDamageEvent::CAUSE_FALL) {
                $sendMessage = $event->getPlayer()->getServer->sendMessage(TextFormat::RED ."You fell very high, but the damage was cured from your feet.");
                $setCancelled = $event->setCancelled(true);
                return $this->cause;
            }
            }
        }
     }
}
