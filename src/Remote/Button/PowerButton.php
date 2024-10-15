<?php

namespace App\Remote\Button;

use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;
use Symfony\Component\DependencyInjection\Attribute\Lazy;

#[AsTaggedItem('power', priority: 50)]
#[Lazy]
final class PowerButton implements ButtonInterface
{
    public function press(): void
    {
        dump('Power on/off the TV');
    }
}
