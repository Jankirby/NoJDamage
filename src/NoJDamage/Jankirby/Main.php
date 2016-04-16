<?php

namespace NoJDamage\Jankirby;

use pocketmine\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class ExamplePlugin extends PluginBase implements Listener {
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
 public function onDamage(EntityDamageEvent $event)
    {
        if ($event->getEntity() instanceof Player) {
            if ($event->getCause() === EntityDamageEvent::CAUSE_FALL) {
                 $event->setCancelled();
            }
        }
    } 

