<?php

namespace AzOxStOz\NoFarmlandTrample;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\EntityTrampleFarmlandEvent;

class Main extends PluginBase implements Listener {

    public function onEnable(): void
    {
        $this->getLogger()->info("NoFarmlandTrample by AzOxStOz is enabled !");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    //VERY DIFFICULT PLUGIN HUH (someone say me to do it) ?
    public function onEntityTrampleFarmland(EntityTrampleFarmlandEvent $event): void
    {
        $event->cancel();
    }
}
