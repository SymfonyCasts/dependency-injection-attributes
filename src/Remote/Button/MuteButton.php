<?php

namespace App\Remote\Button;

use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;
use Symfony\Component\DependencyInjection\Attribute\Exclude;

#[AsTaggedItem('mute')]
#[Exclude]
final class MuteButton implements ButtonInterface
{
    public function press(): void
    {
        dump('Mute button pressed');
    }
}
