<?php

namespace NoJDamage\Jankirby;

use pocketmine\PluginBase
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase{

 public function onDamage(EntityDamageEvent $event)
    {
        if ($event->getEntity() instanceof Player) {
            if ($event->getCause() === EntityDamageEvent::CAUSE_FALL) {
                 $event->setCancelled();
            }
        }
    } 

